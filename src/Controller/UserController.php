<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class UserController extends AbstractController
{
    
    
    /**
     * 
     *
     * @param Request $request requête http
     * @param EntityManagerInterface $manager gestionnaire des entités
     * @param UserPasswordHasherInterface $encoder encodeue des mots de passe
     * @return Response
     * 
     */
  /*  public function register(Request $request, EntityManagerInterface $manager, UserPasswordHasherInterface $encoder){
        $user = new User();
        $registrationForm = $this->createForm(RegisterFormType::class, $user);
        $registrationForm->handleRequest($request);
        if($registrationForm->isSubmitted() and $registrationForm->isValid()){
            $password = $encoder->hashPassword($user, $user->getPassword());
            $user->setPassword($password);
            $manager->persist($user);
            $manager->flush();
        }
       
    }*/

    /**
     * Undocumented function
     *
     * @return void
     * @Route("/login", name="login")
     */
    public function login(Request $request, AuthenticationUtils $authenticationUtils){
        $error = $authenticationUtils->getLastAuthenticationError();
        $username = $authenticationUtils->getLastUsername();
        return $this->render("user/login.html.twig", [
            "error"=> $error,
            "username"=> $username
        ]);
    }

    /**
     * Undocumented function
     *
     * @return void
     * @Route("/logout", name="logout")
     */
    public function logout(){}
}
