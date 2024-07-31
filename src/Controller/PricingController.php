<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PricingController extends AbstractController
{
    #[Route('/profile', name: 'app_profile')]
    public function pricing(): Response
    {
        return $this->render('profile/index.html.twig', [
            'controller_name' => 'PricingController',
        ]);
    }
}
