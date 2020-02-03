<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SocialProgramController extends AbstractController
{
    /**
     * @Route("/programa/social", name="programa_social")
     */
    public function index()
    {
        return $this->render('programa_social/index.html.twig', [
            'controller_name' => 'ProgramaSocialController',
        ]);
    }
}
