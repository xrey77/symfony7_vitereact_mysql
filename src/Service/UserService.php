<?php

namespace App\Service;

use App\Entity\User;
use App\Repository\UserRepository;
use Psr\Log\LoggerInterface; // You can inject other services too
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserService 
{
    private LoggerInterface $logger;
    private UserRepository $userRepository;
    private UserPasswordHasherInterface $passwordHasher;
    private JWTTokenManagerInterface $JWTManager;

    public function __construct(
        UserRepository $userRepository,
        LoggerInterface $logger)
    {
        $this->userRepository = $userRepository;
        $this->logger = $logger;
    }

    public function validateuser(string $usrname, string $password): ?User 
    {
        $user = $this->userRepository->findOneBy(['username' => $usrname]);
        if ($user) {

            if (password_verify($password,$user->getPassword())) {
                $this->logger->info('PASSWORD IS VALID.....');            
                return $user;
                
            } else {
                $this->logger->info('INVALID PASSWORD.....');            
                return null;
            }

        } else {

            $this->logger->info('USERNAME NOT FOUND.....');            
            return null;
            
        }
    }

    public function finduserid(int $id): ?User {
        $user = $this->userRepository->find($id);
        if ($user) {
            return $user;
        } else {
            return null;
        }
    }
}

