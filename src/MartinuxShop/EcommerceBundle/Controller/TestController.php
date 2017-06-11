<?php

namespace MartinuxShop\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MartinuxShop\EcommerceBundle\Form\testType;
use Symfony\Component\HttpFoundation\Request;

class TestController extends Controller
{
    public function testAction(Request $request)
    {
        //$request = $this->get('request');
        $form = $this->createForm(new testType());
        //if($request->getMethod() == 'POST') {
         //   $form ->bind($request);
            //var_dump($form ->getData());
        if($request->isMethod('POST')) {
            $form->handleRequest($request);
            echo $form['email']->getData();
            echo $form['mot-de-passe']->getData();
            die('je traite mon formulaire ici');
            
        } 
            
            
        return $this->render('EcommerceBundle:Default:produit/layout/test.html.twig', array('form'=>$form->createView()));
    }
    
 
}
