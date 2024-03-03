<?php
namespace App\Controller;

use App\Entity\Planning;
use Symfony\Component\Notifier\NotifierInterface;
use Symfony\Component\Notifier\Recipient\Recipient;
use Symfony\Component\Notifier\Message\SmsMessage;

class NorificationController
{
    private $notifier;

    public function __construct(NotifierInterface $notifier)
    {
        $this->notifier = $notifier;
    }

    public function notifyUsersForUpcomingEvents()
    {
        $now = new \DateTime();
        $endTime = (clone $now)->modify('+30 minutes');

        $upcomingEvents = $this->getUpcomingEvents($now, $endTime);

        foreach ($upcomingEvents as $event) {
            $this->notifyUsers($event);
        }
    }

    private function getUpcomingEvents(\DateTime $start, \DateTime $end): array
    {
// Query to fetch events within the next 30 minutes
// Example:
        return $this->entityManager->getRepository(Planning::class)->createQueryBuilder('e')
            ->where('e.startTime BETWEEN :start AND :end')
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->getQuery()
            ->getResult();
    }

    private function notifyUsers(Planning $event)
    {
// Here you would implement your notification logic.
// For example, you can send an SMS notification.
        $notificationMessage = sprintf('You have an event "%s" starting at %s.', $event->getTitre(), $event->getStartTime()->format('Y-m-d H:i'));
        $message = new SmsMessage(
// the phone number to send the SMS message to
            '+1411111111',
            // the message
            'A new login was detected!',
            // optionally, you can override default "from" defined in transports
            '+1422222222',
        );
        $recipient = new Recipient(); // Assuming users have phone numbers
        $this->notifier->send($message, $recipient);
    }

}