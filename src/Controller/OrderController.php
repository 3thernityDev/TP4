<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/order', name: 'order_')]
class OrderController extends AbstractController
{
    public function __construct(
        private LoggerInterface $logger
    ) {}

    #[Route('/summary', name: 'summary')]
    public function summary(): Response
    {
        $this->logger->info('Consultation récapitulatif commande');
        return $this->render('order/index.html.twig', [
            'controller_name' => 'OrderController',
            'action_name' => 'summary',
        ]);
    }
}
