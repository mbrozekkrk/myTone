<?php


namespace App\Controller;


use App\Form\OffertFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OffertsController extends  AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage(){
        return $this->render('homepage/home.html.twig');
    }
    /**
     * @Route("/add-offert-artist-{id}")
     */
    public function addOffertArtist(int $id){
        $form = $this->createForm(OffertFormType::class);
        return $this->render('offerts_forms/artist_form.html.twig',[
            'offertForm' => $form->createView(),

        ]);
    }

    /**
     * @Route("/add-offert-firm-{id}")
     */
    public function addOffertFirm(int $id){
        $form = $this->createForm(OffertFormType::class);
        return $this->render('offerts_forms/firm_form.html.twig',[
            'offertForm' => $form->createView(),

        ]);
    }
}