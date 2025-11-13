<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ApitimeController extends AbstractController
{
    #[Route('/api/time', name: 'api_time', methods: ['GET'])]
    public function index(): JsonResponse
    {
        return $this->json([
            'time' => (new \DateTime())->format('H:i:s'),
            'date' => (new \DateTime())->format('Y-m-d'),
            'datetime' => (new \DateTime())->format('Y-m-d H:i:s'),
        ]);
    }
}
