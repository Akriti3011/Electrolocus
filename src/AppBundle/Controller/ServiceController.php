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
use AppBundle\Entity\meter;
use AppBundle\Entity\source;
use AppBundle\Entity\production;
use AppBundle\Entity\Bill;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class ServiceController extends Controller
{
    /**
     * @Route("/service", name="service")
     */
    public function serviceAction()
    {

        return $this->render('/Services/services.html.twig');
    }

    /**
     * @Route("/compare", name="compare")
     */
    public function compareAction()
    {
        if (!empty($_REQUEST['areaCode'])) {
            $areaCode = $_POST['areaCode'];
            $sourcelist = $this->getDoctrine()
                ->getManager()
                ->getRepository('AppBundle:source')
                ->findBy(array("areaCode" => $areaCode));

            if (isset($sourcelist) && !empty($sourcelist)) {
                ?>
                <table id="table1" class="table table-responsive">
                    <thead>
                    <tr>
                        <th>Source</th>
                        <th>Rate</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($sourcelist as $value) {
                        ?>
                       <tr>
                             <td><?php echo $value->getElecSource();?></td>
                             <td><?php echo $value->getRate();?></td>
                       </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
                <?php
            }
            else {
                ?>
                <div class="container table-responsive" id="report_tbl">
                    <h4 class="alert-info" style="padding: 15px;">No Records Found !</h4>
                </div>
                <?php

            }
            return new Response();
        }
        else {
            return $this->render('/Services/compare.html.twig');
        }
}

    /**
     * @Route("/track", name="track")
     */
    public function trackAction(){

        if (!empty($_REQUEST['areaCode'])) {
            $areaCode = $_POST['areaCode'];
            $productionlist = $this->getDoctrine()
                ->getManager()
                ->getRepository('AppBundle:production')
                ->findBy(array("areaCode" => $areaCode));

            if (isset($productionlist) && !empty($productionlist)) {
                ?>
                <table id="table1" class="table table-responsive">
                    <thead>
                    <tr>
                        <th>Source</th>
                        <th>Electricity Produced</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($productionlist as $value) {
                        ?>
                        <tr>
                            <td><?php echo $value->getElecSource();?></td>
                            <td><?php echo $value->getElecProduced();?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
                <?php
            }
            else {
                ?>
                <div class="container table-responsive" id="report_tbl">
                    <h4 class="alert-info" style="padding: 15px;">No Records Found !</h4>
                </div>
                <?php

            }
            return new Response();
        }
        else {
            return $this->render('/Services/track.html.twig');
        }
    }

    /**
     * @Route("/bestSource", name="bestSource")
     */
    public function bestSourceAction(){

        if (!empty($_REQUEST['areaCode'])) {
            $areaCode = $_POST['areaCode'];
            $weatherlist = $this->getDoctrine()
                ->getManager()
                ->getRepository('AppBundle:weather')
                ->findBy(array("areaCode" => $areaCode));
            if (isset($weatherlist) && !empty($weatherlist)) {
                ?>
                <table id="table1" class="table table-responsive">
                    <thead>
                    <tr>
                        <th>Weather</th>
                        <th>Suitable Source</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($weatherlist as $value) {
                        ?>
                        <tr>
                            <td><?php echo $value->getType();?></td>
                            <td><?php echo $value->getBestSource();?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
                <?php
            }
            else {
                ?>
                <div class="container table-responsive" id="report_tbl">
                    <h4 class="alert-info" style="padding: 15px;">No Records Found !</h4>
                </div>
                <?php

            }
            return new Response();
        }
        else {
            return $this->render('/Services/bestSource.html.twig');
        }
    }

    /**
     * @Route("/bill", name="bill")
     */
    public function billAction(){

        if (!empty($_REQUEST['meterId'])){
            $meterId = $_POST['meterId'];
            $month = $_POST['month'];
            $year = $_POST['year'];

            $bill_list = $this->getDoctrine()
                ->getManager()
                ->getRepository('AppBundle:Bill')
                ->findBy(array("meterId" => $meterId,"billMonth" => $month,"billYear"=> $year));
            if (isset($bill_list) && !empty($bill_list)) {
                ?>
                <table id="table1" class="table table-responsive">
                    <thead>
                    <tr>
                        <th>Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($bill_list as $value) {
                        ?>
                        <tr>
                            <td><?php echo $value->getBillAmount();?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
                <?php
            }
            else {
                ?>
                <div class="container table-responsive" id="report_tbl">
                    <h4 class="alert-info" style="padding: 15px;">No Records Found !</h4>
                </div>
                <?php


            }
            return new Response();
        }
        else{
            return $this->render('/Services/bill.html.twig');
        }


    }

    /**
     * @Route("/live", name="live")
     */
    public function liveAction(){

        $customer_id=($this->get('session')->get('customer_id'));
        //var_dump($customer_id);exit;
        if($customer_id!=null)
        {
            $customerDetail = $this->getDoctrine()->getManager()->getRepository('AppBundle:customerDetail')->findOneBy(array("customer_id" =>  $customer_id));
            $meterId = $customerDetail->getMeterId();
            $meterDetail = $this->getDoctrine()->getManager()->getRepository('AppBundle:Meter')->findOneBy(array("meterId" =>  $meterId));
            return $this->render('/Services/live.html.twig',array('meterDetail'=>$meterDetail));

        }
        else{
            return $this->render('/Services/live.html.twig');
        }
    }

    /**
     * @Route("/wastage", name="wastage")
     */
    public function wastageAction(){

        if (!empty($_REQUEST['areaCode'])) {
            $areaCode = $_POST['areaCode'];
            $productionlist = $this->getDoctrine()
                ->getManager()
                ->getRepository('AppBundle:production')
                ->findBy(array("areaCode" => $areaCode));

            if (isset($productionlist) && !empty($productionlist)) {
                ?>
                <table id="table1" class="table table-responsive">
                    <thead>
                    <tr>
                        <th>Source</th>
                        <th>Electricity Wasted</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($productionlist as $value) {
                        ?>
                        <tr>
                            <td><?php echo $value->getElecSource();?></td>
                            <td><?php echo $value->getElecWastage();?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
                <?php
            }
            else {
                ?>
                <div class="container table-responsive" id="report_tbl">
                    <h4 class="alert-info" style="padding: 15px;">No Records Found !</h4>
                </div>
                <?php

            }
            return new Response();
        }
        else {
            return $this->render('/Services/wastage.html.twig');
        }
    }

}