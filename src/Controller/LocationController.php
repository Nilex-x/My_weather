<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class LocationController extends AbstractController
{
    /**
     * @Route("/location", name="location")
     */
    public function location(Request $request)
    {
        $form = $this->createFormBuilder()
        ->add('input', TextType::class, [
            'attr' => [
                'placeholder' => 'location'
            ]
        ])
        ->add('search', SubmitType::class, ['label' => 'Submit'])
        ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $location_string = $form["input"]->getData();
            return $this->redirect('goodlocation?location=' . $location_string,303);
        }
        return $this->render('location.html.twig', [
            'form' => $form->createView()
        ]);
    }
}