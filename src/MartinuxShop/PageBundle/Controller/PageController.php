<?php

namespace MartinuxShop\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function pageAction($id)
    {
        return $this->render('PageBundle:Default/page/layout:page.html.twig', array('id'=>$id));
    }
}
