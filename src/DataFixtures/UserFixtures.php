<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    private UserPasswordHasherInterface $passwordHasher;
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $hashedPassword = $this->passwordHasher->hashPassword($user, 'password');

        $user->setEmail('test@email.com');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword($hashedPassword);

        $manager->persist($user);

        $manager->flush();
    }
}
