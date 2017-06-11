<?php

namespace MartinuxShop\EcommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
/**
 * Description of testType
 *
 * @author mtm
 */
class testType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('email', 'email')
                ->add('nom', 'text')
                ->add('prenom', 'text')
                ->add('sexe', 'choice', array('choices'=> array('0'=>'Masculin', '1'=>'Feminin'),
                                                 'preferred_choices'=>array(1), 'expanded'=> false))
                ->add('telephone')
                ->add('commentaire', 'textarea')
                ->add('date', 'datetime')
                ->add('pays', 'country', array('preferred_choices'=>array('CM','FR','NG')))
                ->add('mot-de-passe', 'password')
                ->add('utilisateurs', 'entity', array('class'=> 'Utilisateurs\UtilisateurBundle\Entity\Utilisateurs'));
    }
    
     public function getName()
    {
        return 'MartinuxShop_EcommerceBundle_test';
    }
}
