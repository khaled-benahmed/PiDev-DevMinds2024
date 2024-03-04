<?php

namespace App\Controller;

use App\Entity\Abonnement;
use App\Form\AbonnementType;
use Stripe\Checkout\Session;

use App\Repository\AbonnementRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Persistence\ManagerRegistry;

use Stripe\Stripe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class AbonnementController extends AbstractController
{
    #[Route('/Abonnement/Read_Back', name: 'Read_Back_Abonnement')]///back
    public function ReadBackAbonnement(AbonnementRepository $abonnementRepository): Response
    {
        $Abonnements = $abonnementRepository->findAll();

        return $this->render('Abonnement/ReadAbonnementBack.html.twig', ["Abonnements"=>$Abonnements]);
    }



    #[Route('/Abonnement/Create', name: 'Create_Abonnement')]/// ajouter
    public function CreateAbonnement(ManagerRegistry $doctrine, Request $req,MailerInterface $mailer): Response
    {
        $em = $doctrine->getManager();
        $Abonnement = new Abonnement();
        $form = $this->createForm(AbonnementType::class,$Abonnement);
        $form->handleRequest($req);
        $nom=$Abonnement->getNomA();

        if($form->isSubmitted() && $form->isValid())
        {


            $this->sendmail($mailer,$nom);
            $em->persist($Abonnement);
            $em->flush();

            $this->addFlash('notice','Ajout avec success!');

            return $this->redirectToRoute('Read_Back_Abonnement');
        }

        return $this->renderForm('Abonnement/CreateAbonnement.html.twig',['form'=>$form]);

    }

    #[Route('/Abonnement/Delete/{id}', name: 'Delete_Abonnement')]// delete
    public function DeleteAbonnement(ManagerRegistry $managerRegistry,AbonnementRepository $abonnementRepository , $id): Response
    {
        $em= $managerRegistry->getManager();
        $Abonnement= $abonnementRepository->find($id);
        $em->remove($Abonnement);
        $em->flush();

        $this->addFlash('notice','Suppression avec success!');

        return $this->redirectToRoute('Read_Back_Abonnement');
    }

    #[Route('/Abonnement/Update/{id}', name: 'Update_Abonnement')]/// update
    public function UpdateAbonnement(ManagerRegistry $managerRegistry, $id, Request $req,AbonnementRepository $abonnementRepository): Response
    {

        $Abonnement = $abonnementRepository->find($id);
        $form = $this->createForm(AbonnementType::class,$Abonnement);
        $form->handleRequest($req);

        if($form->isSubmitted() && $form->isValid())
        {$em = $managerRegistry->getManager();
            $em->persist($Abonnement);
            $em->flush();

            $this->addFlash('notice','Modification avec success!');

            return $this->redirectToRoute('Read_Back_Abonnement');
        }

        return $this->renderForm('Abonnement/UpdateAbonnement.html.twig',['form'=>$form]);

    }
    private function sendmail(MailerInterface $mailer,$nom): void
    {
        $email = (new Email())
        ->from(new Address('user@gmail.com','DevMind'))
            ->to('dhiadriss@gmail.com')
            ->subject('abonnement')
            ->html("<p>nom : $nom</p>");
        $mailer->send($email);
    }

    #[Route('/Abonnement/Read_front', name: 'Read_FRONT_Abonnement')]///back
    public function ReadFRONTAbonnement(AbonnementRepository $abonnementRepository): Response
    {
        $Abonnements = $abonnementRepository->findAll();

        return $this->render('Abonnement/ReadAbonnement.html.twig', ["Abonnements"=>$Abonnements]);
    }
    #[Route('/Abonnement/pay/{id}', name: 'pay_Abonnement')]/// update

    public function pay($id, Request $request, ManagerRegistry $managerRegistry, AbonnementRepository $abonnementRepository): Response
    {
        $abonnemnt = $abonnementRepository->find($id);

        // Create form for editing current value

            $amounttopay = $abonnemnt->getPrixA();


                $entityManager = $managerRegistry->getManager();
                $entityManager->remove($abonnemnt);
                $entityManager->flush();
        return $this->redirectToRoute('stripe_payment', ['amount' => $amounttopay]);

    }


    #[Route('/stripe/payment', name: 'stripe_payment')]

    public function stripePayment(Request $request)
    {
        // Get amount from request
        $amount = $request->query->get('amount');

        // Create payment session with Stripe
        Stripe::setApiKey('sk_test_51Oo6gMEbvcankNU3vagYs8vZKYbEoKrIqEtFVRT5hZYX2V6SYw9IZlpNj7uw3YbspPp8jR9gesDnXFwi7KUexaAJ00kBgKyXTx');
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'unit_amount' => $amount * 100, // Amount in cents
                        'product_data' => [
                            'name' => 'Progress Bar Payment',
                        ],
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('stripe_payment_success', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('stripe_payment_cancel', [], UrlGeneratorInterface::ABSOLUTE_URL),
        ]);

        return $this->redirect($session->url);
    }

#[Route('/stripe/payment/success', name: 'stripe_payment_success')]
    public function stripePaymentSuccess(Request $request, ManagerRegistry $managerRegistry, AbonnementRepository $abonnementRepository)
{
    // Handle payment success
    // Update progress bar based on the payment amount


    return $this->redirectToRoute('Read_FRONT_Abonnement');
}

    #[Route('/stripe/payment/cancel', name: 'stripe_payment_cancel')]


    public function stripePaymentCancel()
{
    // Handle payment cancellation
    $this->addFlash('error', 'Payment was cancelled.');
    return $this->redirectToRoute('Read_FRONT_Abonnement');
}


}
