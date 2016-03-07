<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     * @Template("default/index.html.twig")
     */

    public function indextestAction(Request $request)
    {
        return $this->render('AppBundle:Front:homepage.html.twig');
    }

    /**
     * @Route("/order", name="order")
     */
    public function orderAction(Request $request)
    {
        return $this->render('AppBundle:Front:order.html.twig');
    }

    /**
     * @Route("/profile", name="userProfile")
     */
    public function profileAction(Request $request)
    {
        return $this->render('AppBundle:Front:userProfile.html.twig');
    }
}
