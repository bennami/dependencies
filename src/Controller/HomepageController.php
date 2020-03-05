<?php

namespace App\Controller;

use App\Services\Master;
Use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     * @param Master $transform
     * @param LoggerInterface $logger
     * @return Response
     */
    public function index(Master $transform,LoggerInterface $logger)
    {
        //if user wants to capitalize
        $transform = $transform->transform;

        $logger->log(100,$transform);

        return $this->render('homepage/index.html.twig', [
            'transform' => $transform,
        ]);
    }
}
