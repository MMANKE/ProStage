<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProStageController extends AbstractController
{
    /**
     * @Route("/", name="pro_stage_acceuil")
     */
    public function index()
    {
        return $this->render('pro_stage/index.html.twig');
    }

    /**
     * @Route("/stages/{id}", name="pro_stage_details_stage")
     */
    public function afficherDetailsStage($id)
    {
        return $this->render('pro_stage/affichageStage.html.twig',
        [ 'idStage' => $id]);
    }

}
