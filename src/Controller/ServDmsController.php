<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ServDmsController extends AbstractController
{
    /**
     * @Route("/serv", name="serv")
     */
    public function index(): Response
    {
        return $this->render('serv_dms/index.html.twig', [
            'controller_name' => 'ServDmsController',
        ]);
    }
    /**
     * @Route("/accueil", name="accueil")
     */
    public function accueil(Request $request): Response
    {
        //récupération des info du formulaire :
        $email = $request->request->get("email");
        $mdp = $request->request->get("mdp");
        return $this->render('serv_dms/accueil.html.twig', [
            'controller_name' => 'ServDmsController',
            'email' => $email,
            'mdp' => $mdp,
        ]);
    }
}