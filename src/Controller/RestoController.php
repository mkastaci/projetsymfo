<?php

namespace App\Controller;

use App\Repository\PlatsRepository;
use App\Repository\TypeRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class RestoController extends AbstractController
{
    /**
     * @Route("/MarasSofrasi", name="maras_home")
     */
    public function index(PlatsRepository $repoplat, TypeRepository $repotype)
    {


        $alltype = $repotype->findAll();


        if (isset($_GET['type'])) {
            $allplat = $repotype->find($_GET['type']);
        }

        if (!isset($_GET['type']) || empty($allplat)) {
            $allplat = $repoplat->findAll();
        } else {
            $allplat = $allplat->getPlats();
        }


        return $this->render('resto/index.html.twig', [
            'title' => 'acceuil',
            'plats' => $allplat,
            'types' => $alltype
        ]);
    }



    /**
     * @Route("/checktype", name="maras_type", methods={"POST"})
     */
    public function checktype(Request $request, TypeRepository $repotype, PlatsRepository $repoplat)
    {

        $typepost = $request->request->get('type');
        $allplat = $repotype->find($typepost);
        $messagejson = [];


        if (empty($allplat) || $typepost == '0') {
            $allplat = $repoplat->findAll();
        } else
            $allplat = $allplat->getPlats();


        foreach ($allplat as $plat) {
            $messagejson[] = [
                'id' => $plat->getId(),
                'name' => $plat->getName(),
                'description' => $plat->getDescription(),
                'img' => $plat->getImg()
            ];
        }


        return new JsonResponse($messagejson);
    }



    /**
     * @Route("/plat/{id}", name="maras_plat")
     */
    public function plats($id, PlatsRepository $repoplat)
    {
        $plat = $repoplat->find($id);
        if (empty($plat)) {
            $plat = $repoplat->findAll();
        }


        return $this->render('resto/plat.html.twig', [
            'title' => $plat->getName(),
            'plat' => $plat
        ]);
    }




    /**
     * @Route("/addpanier/{id}", name="maras_addpanier")
     */
    public function addpanier($id, SessionInterface $session)
    {
        $panier = $session->get('panier', []);
        if (!empty($panier[$id])) {
            $panier[$id] = $panier[$id] + $_POST['nbplat'];
        } elseif (isset($_POST['nbplat']))
            $panier[$id] = $_POST['nbplat'];
        else
            $panier[$id] = 1;

        $session->set('panier', $panier);

        return $this->redirectToRoute('maras_panier');
    }

    /**
     * @Route("/panier", name="maras_panier")
     */
    public function panier(SessionInterface $session, PlatsRepository $repoplat)
    {
      
        $panier = $session->get('panier', []);

        $panier_article = [];
        foreach ($panier as $article => $quantity) {
            $panier_article[] = [
                'article' => $repoplat->find($article),
                'quantity' => $quantity
            ];
        }

        $total = 0;
        foreach ($panier_article as $article) {
            $totall = $article['article']->getPrice() * $article['quantity'];
            $total = $total + $totall;
        }

        return $this->render('resto/panier.html.twig', [
            'title' => 'Panier',
            'panier' => $panier_article,
            'total' => $total
        ]);
    }


    /**
     * @Route("/removepanier/{id}", name="maras_removepanier")
     */
    public function removepanier($id, SessionInterface $session)
    {
        $panier = $session->get('panier', []);

        if (!empty($panier[$id])) {
            if ($panier[$id] == 1)
                unset($panier[$id]);
            else
                $panier[$id]--;
        }



        $session->set('panier', $panier);

        return $this->redirectToRoute('maras_panier');
    }
}
