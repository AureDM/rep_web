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
        $login = $request->request->get("login");
        $mdp = $request->request->get("mdp");
        if ($login=="root" && $mdp=="toor"){
            $message="ok ❕ ";
        }else {
            $message="pas ok ❗️ ";
        }
        return $this->render('serv_dms/accueil.html.twig', [
            'controller_name' => 'ServDmsController',
            'login' => $login,
            'mdp' => $mdp,
            'message' => $message,
        ]);
    }
}