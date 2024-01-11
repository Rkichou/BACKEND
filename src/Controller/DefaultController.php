<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Repository\AgentRepository;
use App\Repository\ClubRepository;
use App\Repository\JoueurRepository;
use App\Repository\OffreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_acceuil')]
    public function acceuil(): Response
    {

        return $this->render('default_l/index.html.twig', [

        ]);
    }
    #[Route('/Joueurs', name: 'app_Joueurs')]
    public function Joueurs(JoueurRepository $Jr): Response
    {
        $Joueurs=$Jr->findAll();
        return $this->render('default_l/Joueurs.html.twig', ['Joueurs'=>$Joueurs

        ]);
    }
    #[Route('/un_joueur/{id}', name: 'app_un_Joueur')]
    public function un_joueur(JoueurRepository $repository,$id=''): Response
    {
        $Joueur =$repository->findOneBy(['id'=>$id]);
        return $this->render('default_l/un_Joueur.html.twig', [
            'un_joueur'=>$Joueur,

        ]);
    }
    #[Route('/contact_nous', name: 'app_contact_nous')]
    public function contact_nous(Request $request): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) :
            $this->addFlash('success', 'form cree !');
            return $this->redirect('/Joueurs');
        endif;

        return $this->render('default_l/contact_nous.html.twig', ['form' => $form->createView()]);



    }
   
   
    #[Route('/Clubs', name: 'app_Clubs')]
    public function Club(ClubRepository $cb): Response
    {
        $clubs=$cb->findAll();
        return $this->render('default_l/clubs.html.twig', ['clubs'=>$clubs

        ]);
    }
    #[Route('/Agents', name: 'app_Agents')]
    public function Agents(AgentRepository $AG): Response
    {
        $Agents=$AG->findAll();
        return $this->render('default_l/Agents.html.twig', ['Agents'=>$Agents

        ]);
    }
    #[Route('/un_Agent/{id}', name: 'app_un_Agent')]
    public function un_Agent(AgentRepository $repository,$id=''): Response
    {
        $un_Agent =$repository->findOneBy(['id'=>$id]);
        return $this->render('default_l/un_Agent.html.twig', [
            'un_Agent'=>$un_Agent,

        ]);
    }
    #[Route('/Offres', name: 'app_Offres')]
    public function Offres(OffreRepository $repository): Response
    {
        $Offres=$repository->findAll();
        return $this->render('default_l/Offres.html.twig', ['Offres'=>$Offres

        ]);
    }

}



