<?php
/**
 * Created by PhpStorm.
 * User: AKRITI
 * Date: 23-10-2017
 * Time: 14:32
 */

namespace AppBundle\Controller;

use AppBundle\Entity\customer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class RegistrationController extends Controller
{
    /**
     * @Route("/register")
     */
    public function RegisterAction()
    {
        $user = new customer();
        $form = $this->createFormBuilder($user)
            ->add('email', TextType::class)
            ->add('password', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Add item'))
            ->getForm();
        $form->handleRequest($_POST);
        //checking for if the user has submitted the form or not
        if($form->isSubmitted() && $form->isValid())
        {
            $user=$form->getData();
            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->render('Profile/myProfile.html.twig');
        }
        return $this->render('Home/index.html.twig');

    }

}