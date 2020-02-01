<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PessoaController extends AbstractController
{
    /**
     * @Route("/pessoa", name="pessoa")
     */
    public function index()
    {
        return $this->render('pessoa/index.html.twig', [
            'controller_name' => 'PessoaController',
        ]);
    }
}
