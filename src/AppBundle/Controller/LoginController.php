<?php

/**
 * Created by PhpStorm.
 * User: AKRITI
 * Date: 13-10-2017
 * Time: 12:08
 */
namespace AppBundle\Controller;

use AppBundle\Entity\customer;
use AppBundle\Entity\customerDetail;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class LoginController extends Controller
{
    /**
     * @Route("/checkLogin" , name="checkLogin")
     */
    public function checkLoginAction()
    {
       //$session = new Session();
       //$session->start();
        $request = Request::createFromGlobals();
        $session = $request->getSession();
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $customer_info = $this->getDoctrine()->getManager()->getRepository('AppBundle:customer')->findOneBy(array("email" => $email));
            if ($customer_info != "") {
                if ($customer_info->getPassword() == $password) {
                    $customer_id=$customer_info->getCustomerId();
                    $this->get('session')->set('customer_id',$customer_id);
                    $this->get('session')->set('email',$customer_info->getEmail());
                    return $this->render('Home/home.html.twig');
//                    return $this->redirectToRoute('viewProfile',
//                        array('customer_id' => $customer_id)
//                    );
                } else {

                    return $this->render('/Home/index.html.twig',
                        array('loginDetails' => 'wrongpassword')
                    );
                }

            } else {

                return $this->render('/Home/index.html.twig',
                    array('loginDetails' => 'wrongemail')
                );
            }


        } else {


            return $this->render('/Home/index.html.twig');
        }


    }

    /**
     * @Route("/register" , name="register")
     */
    public function registerAction()
    {

        if (isset($_POST['submit'])) {

            $email = $_POST['email'];
            $password = $_POST['password'];

            if ($email != "" && $password!="") {

                $customer_info = new Customer();
                $customer_info->setEmail($email);
                $customer_info->setPassword($password);
                $em = $this->getDoctrine()->getManager();
                $em->persist($customer_info);
                $em->flush();

            }


        }
        return $this->redirectToRoute('checkLogin');
    }

    /**
     * @Route("/logout", name="logout")
     */

    public function logoutAction()
    {
        if (isset($_POST['submit'])){
            $session = $this->get('session');
            $ses_vars = $session->all();
            foreach ($ses_vars as $key => $value) {
                $session->remove($key);
            }
            return $this->redirectToRoute('checkLogin');
        }
        return $this->redirectToRoute('checkLogin');
    }
}
