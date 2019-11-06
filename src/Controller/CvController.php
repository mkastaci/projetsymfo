<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CvController extends AbstractController
{
    /**
     * @Route("/cv", name="cv")
     */
    public function index()
    {

        $competencelist = [
            1 =>'Anglais',
            2 =>'Espagnol',
            3 =>'Turc',
            4 =>'Français',
            5 =>'Microsoft Office',
            6 =>'Langage c',
            7 =>'HTML/CSS - bootstrap',
            8 =>'JavaScript – Jquery',
            9 =>'PHP/MYSQL',
            10 =>'Wordpress',
            11 =>'Excel',
        ];
        
        return $this->render('cv/index.html.twig', [
        ]);
    }
}
