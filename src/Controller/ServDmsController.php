<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Utilisateurs;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

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
    public function accueil(Request $request,EntityManagerInterface $manager,SessionInterface $session): Response
    {
        //récupération des info du formulaire :
        $login = $request->request->get("login");
        $mdp = $request->request->get("mdp");
        $reponse = $manager -> getRepository(Utilisateurs :: class) -> findOneBy([ 'login' => $login]);
        if ($reponse==NULL){
            $message="utilisateurs inconnu ";
            $session -> clear();
        }else {
            $code = $reponse -> getpassword();
            if (password_verify($mdp,$code)){
                $message="acces autorise";
                $session -> set('identifiant',$reponse -> getId());
            }else {
                $message="mot de passe incorrect ❕  ";
                $session -> clear();
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
    public function listeUsers(Request $request,EntityManagerInterface $manager, SessionInterface $session): Response
    {
        $vs = $session -> get('identifiant');
        if ($vs == NULL)
            return $this-> redirectToRoute('serv');
        else{
            $mesUtilisateurs=$manager->getRepository(Utilisateurs::class)->findAll();
            return $this->render('serv_dms/listeUsers.html.twig',['lst_utilisateurs' => $mesUtilisateurs]);
        }
    }

    
    /**
    * @Route("/supprimerUtilisateur/{id}",name="supprimer_Utilisateur")
    */
    public function supprimerUtilisateur(EntityManagerInterface $manager,Utilisateurs $editutil): Response {
        $manager->remove($editutil);
        $manager->flush();
        // Affiche de nouveau la liste des utilisateurs
        return $this->redirectToRoute ('listeUsers');
    }
 
    /**
    * @Route("/decoUtilisateur",name="deco_Utilisateur")
    */
    public function decoUtilisateur(EntityManagerInterface $manager, SessionInterface $session): Response {
        $session->clear();
        // Affiche de nouveau la liste des utilisateurs
        return $this->redirectToRoute ('serv');
    }
}