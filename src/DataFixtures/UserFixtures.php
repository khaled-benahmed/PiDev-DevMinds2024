<?php

namespace App\DataFixtures;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\String\Slugger\SluggerInterface;

class UserFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $passwordEncoder, private SluggerInterface $slugger)
    {
      
    }
    public function load(ObjectManager $manager): void
    {
        $admin = new User();
        $admin->setEmail('admin@admin.admin');
        $admin->setFirstname('Aymen');
        $admin->setLastname('BG');
        $admin->setUsername('Admin');
        $admin->setCin('14509900');
        $admin->setCity('Ariana');
        $admin->setBirthday(null);
        $admin->setPassword(
            $this->passwordEncoder->hashPassword($admin,'admin')
        );
        $admin->setRoles(['ROLE_ADMIN']);


        $manager->persist($admin);
        
        $manager->flush();

        $coach = new User();
        $coach->setEmail('coach@coach.coach');
        $coach->setFirstname('Aymen');
        $coach->setLastname('Boughzala');
        $coach->setUsername('coach');
        $coach->setCin('14509901');
        $coach->setCity('Ariana');
        $coach->setBirthday(null);
        $coach->setPassword(
            $this->passwordEncoder->hashPassword($coach,'coach')
        );
        $coach->setRoles(['ROLE_COACH']);


        $manager->persist($coach);
        
        $manager->flush();
        
        $nutritionist = new User();
        $nutritionist->setEmail('nutritionist@nutritionist.nutritionist');
        $nutritionist->setFirstname('Hamouda');
        $nutritionist->setLastname('Bourguiba');
        $nutritionist->setUsername('Dr.Hamouda');
        $nutritionist->setCin('14059902');
        $nutritionist->setCity('Ariana');
        $nutritionist->setBirthday(null);
        $nutritionist->setPassword(
            $this->passwordEncoder->hashPassword($nutritionist,'nutritionist')
        );
        $nutritionist->setRoles(['ROLE_NUTRITIONIST']);


        $manager->persist($nutritionist);
        
        $manager->flush();
    }
}