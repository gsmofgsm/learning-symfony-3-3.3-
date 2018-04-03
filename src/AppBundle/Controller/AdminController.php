<?php
// src/AppBundle/Controller/AdminController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{

    /**
     * @Route("/")
     */
    public function showIndex()
    {
        return $this->render('admin/index.html.twig');
    }
}