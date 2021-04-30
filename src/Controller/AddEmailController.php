<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class AddEmailController extends AbstractController
{
    public function GetEmail(Request $request)
    {
        $form = $this->createFormBuilder()
        ->add('input_email', TextType::class, [
            'attr' => [
                'placeholder' => 'email'
            ]
        ])
        ->add('send_email', SubmitType::class, ['label' => 'send'])
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