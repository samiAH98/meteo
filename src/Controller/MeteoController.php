<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\service\Meteo;

class MeteoController extends AbstractController
{
    #[Route('/meteo', name: 'meteo_index')]
    public function index(Meteo $Meteo): Response
    {
        return $this->render('base.html.twig');
    }
}