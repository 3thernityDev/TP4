<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/cart', name: 'cart_')]
class CartController extends AbstractController
{
    public function __construct(
        private LoggerInterface $logger
    ) {}

    #[Route('/', name: 'show')]
    public function show(): Response
    {
        $this->logger->info('Consultation du panier');
        return $this->render('cart/index.html.twig', [
            'controller_name' => 'CartController',
            'action_name' => 'show',
        ]);
    }
}
