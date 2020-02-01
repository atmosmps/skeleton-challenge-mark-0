<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FamiliaController extends AbstractController
{
    /**
     * @Route("/familia", name="familia")
     */
    public function index()
    {
        return $this->render('familia/index.html.twig', [
            'controller_name' => 'FamiliaController',
        ]);
    }
}
