<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OffertsController extends  AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage(){
        return $this->render('offerts/base.html.twig');
    }

}