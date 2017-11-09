<?php
/**
 * Created by PhpStorm.
 * User: AKRITI
 * Date: 26-10-2017
 * Time: 22:36
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ExtraController extends Controller
{
    /**
     * @Route("/about", name="about")
     */
    public function aboutAction(){

        return $this->render('/About/about.html.twig');
    }

    /**
     *@Route("/contact", name="contact")
     */
    public function contactAction(){

        return $this->render('/Contact/contact.html.twig');
    }

    /**
     *@Route("/index", name="index")
     */
    public function indexAction(){

        return $this->render('/Home/home.html.twig');
    }
}