<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdjiController extends AbstractController
{
    /**
     * @Route("/adji", name="adji")
     */
    public function index()
    {
        return $this->render('adji/index.html.twig', [
            'controller_name' => 'AdjiController',
        ]);
    }
}
