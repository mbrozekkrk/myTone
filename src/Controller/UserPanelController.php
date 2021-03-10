<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserPanelController extends AbstractController
{
    /**
     * @Route("/myjobs")
     */
    public function myJobs(){
        return $this->render('user-panel/jobs.html.twig');

    }
}