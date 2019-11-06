<?php

namespace App\Controller;

use App\Form\RegistrationType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


use App\Entity\User;

class SecurityController extends AbstractController
{
    /**
     * @route("/inscription", name="inscription")
     */
    public function registration(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder){
        
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);
       
        if($form->isSubmitted() && $form->isValid()){
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);

            if(!empty($user->getPhoto())){
                //on recup la photo
            $file = $user->getPhoto();
            
            //on donne un nom aleatoire avec lextension
            $filename = md5(uniqid()). '.' .$file->guessExtension();
            //on deplace l'image dans un dossier (service.yml) en 2eme son nouveau nom
            $file->move($this->getParameter('upload_directory'), $filename);
            //on definie le nom de la photo dans la bdd
            $user->setPhoto($filename);
            }

            $manager->persist($user);
            $manager->flush();
            return $this->redirectToRoute('security_login');

        }


        return $this->render('security/index.html.twig', [
            'title' => 'inscription',
            'form' => $form->createView()
        ]);
    }

    /**
     * @route("/login", name="security_login")
     */
    public function login(){
        return $this->render('security/login.html.twig', ['title' => 'connexion']);
    }

    /**
     * @route("/logout", name="security_logout")
     */
    public function logout(){

    }
}
