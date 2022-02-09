<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Utilisateurs;

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
    public function accueil(Request $request,EntityManagerInterface $manager): Response
    {
        //récupération des info du formulaire :
        $login = $request->request->get("login");
        $mdp = $request->request->get("mdp");
        $reponse = $manager -> getRepository(Utilisateurs :: class) -> findOneBy([ 'login' => $login]);
        if ($reponse==NULL){
            $message="utilisateurs inconnu ";
        }else {
            $code = $reponse -> getpassword();
            if (password_verify($mdp,$code)){
                $message="acces autorise";
            }else {
                $message="mot de passe incorrect ❕  ";
            }
        }
        return $this->render('serv_dms/accueil.html.twig', [
            'controller_name' => 'ServDmsController',
            'login' => $login,
            'mdp' => $mdp,
            'message' => $message,
        ]);
    }
        /**
     * @Route("/newUsers", name="newUsers")
     */
    public function newUsers(): Response
    {
        return $this->render('serv_dms/newUsers.html.twig', [
            'controller_name' => 'ServDmsController',
        ]);
    }
            /**
     * @Route("/insertUser", name="insertUser")
     */
    public function insertUser(Request $request,EntityManagerInterface $manager): Response
    {
        $login = $request->request->get("login");
        $mdp = $request->request->get("mdp");
        $mdp = password_hash($mdp, PASSWORD_DEFAULT);
        $monUtilisateur = new Utilisateurs ();
        $monUtilisateur -> setLogin($login);
        $monUtilisateur -> setPassword($mdp);
        $manager -> persist($monUtilisateur);
        $manager -> flush ();
        return $this->redirectToRoute ('listeUsers');
    }
     /**
     * @Route("/listeUsers", name="listeUsers")
     */
    public function listeUsers(Request $request,EntityManagerInterface $manager): Response
    {
        $mesUtilisateurs=$manager->getRepository(Utilisateurs::class)->findAll();
        return $this->render('serv_dms/listeUsers.html.twig',['lst_utilisateurs' => $mesUtilisateurs]);
    }
}