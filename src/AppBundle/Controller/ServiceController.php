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

        return $this->render('/Services/track.html.twig');
    }

    /**
     * @Route("/bestSource", name="bestSource")
     */
    public function bestSourceAction(){

        return $this->render('/Services/bestSource.html.twig');
    }

    /**
     * @Route("/bill", name="bill")
     */
    public function billAction(){


        if (!empty($_REQUEST['meterId'])){
            $meterId = $_POST['meterId'];
            var_dump($meterId);exit;
//            $bill_list = $this->getDoctrine()
//                ->getManager()
//                ->getRepository('AppBundle:source')
//                ->findBy(array("meterId" => $meterId));

//            if (isset($bill_list) && !empty($bill_list)) {
//                ?>
<!--                <table id="table1" class="table table-responsive">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th>Source</th>-->
<!--                        <th>Rate</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    --><?php
//                    foreach($sourcelist as $value) {
//                        ?>
<!--                        <tr>-->
<!--                            <td>--><?php //echo $value->getElecSource();?><!--</td>-->
<!--                            <td>--><?php //echo $value->getRate();?><!--</td>-->
<!--                        </tr>-->
<!--                        --><?php
//                    }
//                    ?>
<!--                    </tbody>-->
<!--                </table>-->
<!--                --><?php
//            }
//            else {
//                ?>
<!--                <div class="container table-responsive" id="report_tbl">-->
<!--                    <h4 class="alert-info" style="padding: 15px;">No Records Found !</h4>-->
<!--                </div>-->
<!--                --><?php
//
//            }
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

        return $this->render('/Services/live.html.twig');
    }

    /**
     * @Route("/wastage", name="wastage")
     */
    public function wastageAction(){

        return $this->render('/Services/wastage.html.twig');
    }

}