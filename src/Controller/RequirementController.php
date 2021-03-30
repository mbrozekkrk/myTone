<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RequirementController extends AbstractController
{
    /**
     * @Route("/requirement", name="requirement")
     */
    public function index(): Response
    {
        return $this->render('requirement/index.html.twig', [
            'controller_name' => 'RequirementController',
        ]);
    }
}
