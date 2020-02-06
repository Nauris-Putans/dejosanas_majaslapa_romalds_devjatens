<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render('sections/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/vesture")
     */
    public function vesture()
    {
        return $this->render('sections/dance_history.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/deju_veidi/tradicionalas_dejas")
     */
    public function tradicionalas_dejas()
    {
        return $this->render('sections/traditional_dances.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/deju_veidi/briva_stila_dejas")
     */
    public function briva_stila_dejas()
    {
        return $this->render('sections/freestyle_dances.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/deju_veidi/ielu_dejas")
     */
    public function ielu_dejas()
    {
        return $this->render('sections/street_dances.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/deju_veidi/elektroniskas_muzikas_dejas")
     */
    public function elektroniskas_muzikas_dejas()
    {
        return $this->render('sections/electro_music_dances.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/deju_veidi/vesturiskas_dejas")
     */
    public function vesturiskas_dejas()
    {
        return $this->render('sections/historic_dances.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/deju_veidi/latinamerikas_dejas")
     */
    public function latinamerikas_dejas()
    {
        return $this->render('sections/latin_american_dances.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

}
