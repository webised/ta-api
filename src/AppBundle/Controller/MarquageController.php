<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Marquage;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MarquageController extends Controller
{
    /**
     * @Rest\Post("/marquages")
     * @Rest\View(StatusCode = 201)
     * @ParamConverter("marquage", converter="fos_rest.request_body")
     */
    public function addMarquageAction(Marquage $marquage)
    {
       $em = $this->getDoctrine()->getManager();
       $em->persist($marquage);
       $em->flush();


        return new Response(1);



    }
}