<?php
/**
 * Created by PhpStorm.
 * User: AKRITI
 * Date: 01-11-2017
 * Time: 23:35
 */

namespace AppBundle\Controller;

use AppBundle\Entity\customerDetail;
use AppBundle\Entity\customer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ServiceController extends Controller
{
    /**
     * @Route("/service", name="service")
     */
    public function serviceAction(){

        return $this->render('/Services/services.html.twig');
    }

}