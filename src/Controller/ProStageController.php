<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProStageController extends AbstractController
{
    /**
     * @Route("/", name="pro_stage")
     */
    public function index()
    {
        return $this->render('pro_stage/index.html.twig');
    }

    /**
     * @Route("/stages/221", name="pro_stage_stage_221")
     */
    public function afficherDetailsStage221()
    {
        return $this->render('pro_stage/affichageStage.html.twig');
    }

}
