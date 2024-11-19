<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/catalog', name: 'catalog_')]
class CatalogController extends AbstractController
{
    public function __construct(
        private LoggerInterface $logger
    ) {}
    #[Route('/', name: 'list')]
    public function list(): Response
    {
        $this->logger->info('Visite du catalogue');
        return $this->render('catalog/index.html.twig', [
            'controller_name' => 'CatalogController',
            'action_name' => 'list',
        ]);
    }

    #[Route('/product/{id}', name: 'product_show')]
    public function show(int $id): Response
    {
        $this->logger->info('Consultation produit', ['id' => $id]);
        return $this->render('catalog/index.html.twig', [
            'controller_name' => 'CatalogController',
            'action_name' => 'show',
            'product_id' => $id,
        ]);
    }
}
