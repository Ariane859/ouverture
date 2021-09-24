<?php

namespace PhysiqueBundle\Form;

//use AppBundle\Entity\Physique;

use PhysiqueBundle\Entity\Physique;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\DateType;
//use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
//use Symfony\Component\Form\Extension\Core\Type\HiddenType;
//use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class PhysiqueType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('typeCompte', ChoiceType::class, [ 
            'choices' => [
                'personne_physique' => true,
                'personne_morale' => false,
            ]
        ])
        ->add('datnais', DateType::class, ['label' => 'Date de naissance'])
        ->add('telephone')
        ->add('email', EmailType::class)
        ->add('pays', TextType::class)
        ->add('ville', TextType::class);
        $formEditModel = function ($mark = null) {
            dump("ready");die();
           /* if (null === $mark) {
                $form->add('model', 'choice', array(
                    'disabled' => 'disabled'
                ));
            } else {
                $form->add('model', 'entity', array(
                    'class' => 'XXXBundle:Model',
                    'placeholder' => 'Modèle',
                    'property' => 'value',
                    'required' => true
                ));
            }*/
        };
       // dump($builder->get("typeCompte"));die();->get("typeCompte")
        $builder->get("typeCompte")->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) use($formEditModel){
            dump($event->getForm());//die();
            //->get('typeCompte')->getConfig()->getAttributes()['choice_list']
            $physique = $event->getData();
            $form = $event->getForm();
           /* if ($physique->getTypeCompte()) {
               $form
               ->add('nom',null,array('label' => 'Nom : '))
               ->add('prenom', null,array('label' => 'Prénom : '))
               ->add('tuteur', null,array('label' => 'Tuteur : '))
                ->add('prenomTuteur', null,array('label' => 'Prénom du tuteur : '));
            }
            else {
                $form
                ->add('sigle', null,array('label' => 'Sigle : ') )
                ->add('raisonSociale',null,array('label' => 'Raison sociale : '));
            }*/
        });
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PhysiqueBundle\Entity\Physique'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'physiquebundle_physique';
    }


}
