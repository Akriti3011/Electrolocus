<?php
/**
 * Created by PhpStorm.
 * User: AKRITI
 * Date: 25-10-2017
 * Time: 15:17
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
class UserController extends Controller
{
    /**
     *@Route("/viewProfile/{customer_id}",name="viewProfile")
     */

    public function viewProfileAction($customer_id)
    {
        $customerDetail = $this->getDoctrine()->getManager()->getRepository('AppBundle:customerDetail')->findOneBy(array("customer_id" =>  $customer_id));
        //var_dump($customerDetail);exit;
        return $this->render('/Profile/myProfile.html.twig',
            array('customerDetail' => $customerDetail,'customer_id'=>$customer_id));
    }

    /**
     * @Route("/editProfile/{customer_id}" , name="editProfile")
     */

    public function editProfileAction($customer_id)
    {

        if (isset($_POST['submit'])) {

            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $gender = $_POST['gender'];
            $contactNo = $_POST['contactNo'];
            $address = $_POST['address'];
            // $email = $_POST['email'];
            $source = $_POST['source'];
            $purpose = $_POST['purpose'];
            $electricityLoad = $_POST['electricityLoad'];
            $areaCode = $_POST['areaCode'];
            $meterID = $_POST['meterID'];
            $connectionType = $_POST['connectionType'];
            $customerDetails_info = new customerDetail();
            $customerDetails_info->setCustomerId($customer_id);
            $customerDetails_info->setFirstName($firstName);
            $customerDetails_info->setLastName($lastName);
            $customerDetails_info->setGender($gender);
            $customerDetails_info->setContactNo($contactNo);
            $customerDetails_info->setAddress($address);
            $customerDetails_info->setSource($source);
            $customerDetails_info->setPurpose($purpose);
            $customerDetails_info->setElectricityLoad($electricityLoad);
            $customerDetails_info->setAreaCode($areaCode);
            $customerDetails_info->setMeterID($meterID);
            $customerDetails_info->setConnectionType($connectionType);
            var_dump($customerDetails_info);exit;
            $em = $this->getDoctrine()->getManager();
            $em->persist($customerDetails_info);
            $em->flush();
            return $this->redirectToRoute('viewProfile',array('customer_id'=>$customer_id));
        }
        return $this->render('/Profile/myProfileEdit.html.twig',array('customer_id'=>$customer_id));
    }

}
