<?php

namespace App\Controller;

use App\Entity\Family;
use App\Form\FamiliaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FamilyController extends AbstractController
{
    /**
     * @Route("/", name="familia_index")
     */
    public function index(Request $request)
    {
        $familias = $this->getDoctrine()
            ->getRepository(Family::class)
            ->findAll();
        return $this->render('familia/index.html.twig', [
            'familias' => $familias
        ]);
    }
    /**
     * @Route("/create", name="familia_create")
     */
    public function create(Request $request)
    {
        $familia = new Family();

        $form = $this->createForm(FamiliaType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $familia = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($familia);
            $entityManager->flush();

            $this->addFlash('success', 'Familia salva com sucesso!');
            return $this->redirectToRoute('familia_index');
        }
        return $this->render('familia/create.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/update/{id}", name="familia_update")
     */
    public function update(Request $request, Family $id)
    {
        $form = $this->createForm(FamiliaType::class, $id);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $familia = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->merge($familia);
            $entityManager->flush();
            $this->addFlash('success', 'Familia atualizada com sucesso!');
            return $this->redirectToRoute('familia_index');
        }
        return $this->render('familia/update.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/delete/{id}", name="familia_delete")
     */
    public function delete(Family $familia)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($familia);
        $entityManager->flush();
        $this->addFlash('success', 'Familia removida com sucesso!');
        return $this->redirectToRoute('familia_index');
    }
}
