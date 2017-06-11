<?php

namespace MartinuxShop\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitsController extends Controller
{
    public function produitListAction()
    {
        return $this->render('EcommerceBundle:Default:produit/layout/index.html.twig');
    }
    
    public function presentationAction()
    {
        return $this->render('EcommerceBundle:Default/produit/layout:presentation.html.twig');
    }
}
