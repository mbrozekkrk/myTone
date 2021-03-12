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
     * @Route("/add-offert-artist")
     */
    public function addOffertArtist(){
        $form = $this->createForm(OffertFormType::class);
        return $this->render('offerts_forms/artist_form.html.twig',[
            'offertForm' => $form->createView(),

        ]);
    }
}