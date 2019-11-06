<?php

namespace App\Controller;


use App\Entity\Projet;
use App\Entity\Message;
use App\Form\MessageType;
use App\Entity\Commentaire;

use App\Form\CommentaireType;
use App\Repository\ProjetRepository;
use App\Repository\MessageRepository;
use App\Repository\CommentaireRepository;
use Symfony\Contracts\Cache\ItemInterface;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(ProjetRepository $repoprojet, Request $request, ObjectManager $manager, CacheInterface $cach, SessionInterface $session)
    {
        
       
//test du cache 
        /*$cach->get('resultat-trreslong', function(ItemInterface $item){
            $item->expiresAfter(100);
            sleep(2);
        });*/
        //RECUP DES PROJET
        $allprojet = $repoprojet->findAll();


        //RECUPERATION DU USER 
        $login = $this->getUser();
        

        //FORMULAIRE CHAT
        $message = new Message();
        $formmessage = $this->createForm(MessageType::class, $message);
        $formmessage->handleRequest($request);
        if($formmessage->isSubmitted() && $formmessage->isValid()){
            
            $message->setUsername($login->getUsername());
            $message->setInsertAt(new \DateTime('now'));
            

            $manager->persist($message);
            $manager->flush();

            return $this->redirectToRoute('main');
        }
        return $this->render('main/index.html.twig', [
            'title' => 'Acceuil',
            'projets' => $allprojet,
            'formmessage' => $formmessage->createView(),
        ]);
    }


    /**
     * @Route("/projet/{id<[0-9]>}", name="projet")
     */
    public function projet($id, ProjetRepository $repoprojet, Request $request, ObjectManager $manager, CommentaireRepository $repocommentaire)
    {
        //SELECTION DU PROJET
        $projet = $repoprojet->find($id);
        if(empty($projet)){
            return $this->redirectToRoute('main');
        }

        //RECUPERATION DU USER 
        $login = $this->getUser();
        
        //FORMULAIRE COMMENTAIRE
        $commentaire = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            if(!empty($login)){
                $commentaire->setEmail($login->getEmail());
                $commentaire->setPseudo($login->getUsername());
                $commentaire->setProjet($projet);
                $commentaire->setPhoto($login->getPhoto());

                $manager->persist($commentaire);
                $manager->flush();
                return $this->redirectToRoute('projet', ['id' => $id]);
            }
            
        }




        return $this->render('main/projet.html.twig', [
            'title' => 'Acceuil',
            'projet' => $projet,
            'form' => $form->createView(),
        ]);
    }





    //*********************A PARTIR DE LA CE SONT QUE DES ROUTE POUR API OU AUTRES*****************







    /**
     * @Route("/deletecom/{id}", name="deletecommentaire",methods={"POST"})
     * @IsGranted("ROLE_ADMIN")
     */
    public function delete(Commentaire $commentaire, ObjectManager $manager)
    {
        
        $login = $this->getUser();
        dump($login);
        if(!empty($login)){
            $manager->remove($commentaire);
            $manager->flush();
        }
        

        return new JsonResponse('supprimé!!');
    }

    /**
     * @Route("/loadmessage", name="loadmessage",methods={"POST"})
     * 
     */
    public function loadmessage(MessageRepository $repomessage, Request $request)
    {
        
        $postdate = $request->request->get('date');
        $allmessage = $repomessage->getmessagebydate($postdate);
        $messagejson = []; 
        if(is_array($allmessage)){
            $result = array_reverse($allmessage);
        
            foreach($result as $message){
                
              
    
                $messagejson[] = [
                    'id' => $message->getId(),
                    'Username' => $message->getUsername(),
                    'message' => $message->getMessage(),
                    'insert_at' => $message->getInsertAt()->format('Y-m-d H:i:s')
                ];
            }
        }

        else{
            $messagejson[] = [
                'id' => $allmessage->getId(),
                'Username' => $allmessage->getUsername(),
                'message' => $allmessage->getMessage(),
                'insert_at' => $allmessage->getInsertAt()->format('Y-m-d H:i:s')
            ];
        }
        return new JsonResponse($messagejson);
    }


    /**
     * @Route("/deletemessage/{id}", name="deletemessage",methods={"POST"})
     * @IsGranted("ROLE_ADMIN")
     */
    public function deletemessage(Message $message, ObjectManager $manager)
    {
        
        $login = $this->getUser();
        
        if(!empty($login)){
            $manager->remove($message);
            $manager->flush();
        }
        
        return new JsonResponse('supprimé!!');
    }


    /**
     * @Route("/addmessage", name="addmessage",methods={"POST"})
     * 
     */
    public function addmessage(ObjectManager $manager, Request $request)
    {
        
        $login = $this->getUser();
       
        if(!empty($login)){
            $postmessage = $request->request->get('message');
            $message = new Message();
            $message->setUsername($login->getUsername());
            $message->setMessage($postmessage);
            $message->setInsertAt(new \DateTime('now'));
            
            $manager->persist($message);
            $manager->flush();
        }
        
        return new JsonResponse('ajouté');
    }
}