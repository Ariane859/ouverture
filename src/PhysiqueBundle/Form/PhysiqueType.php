<?php

namespace PhysiqueBundle\Form;

use PhysiqueBundle\Entity\Physique;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
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
        ->add('datnais', DateType::class, ['label' => 'Date de naissance',
        'attr' => [
            'class' => 'form-control'],
            'widget' => 'single_text',
        
        ])
        ->add('telephone', TextType::class,array('attr' => [
            'class' => 'form-control'
        ]
        ))
        ->add('email', EmailType::class,['attr' => [
            'class' => 'form-control'
        ]
        ] )
        ->add('pays', TextType::class,['attr' => [
            'class' => 'form-control'
        ]
        ])
        ->add('ville', TextType::class,['attr' => [
            'class' => 'form-control'
        ]
        ]);
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) use($options){

            $physique = $event->getData();

            $form = $event->getForm();

         if ($options['type']==1) {
            $form
               ->add('typeCompte', HiddenType::class, [
                'data' => 'abcdef',
               'disabled'=> true,
               ])
               ->add('nom',null,array('label' => 'Nom : ','attr' => [
                'class' => 'form-control'
            ]
            ))
               ->add('prenom', null,array('label' => 'Prénom : ','attr' => [
                'class' => 'form-control'
            ]))
               ->add('tuteur', null,array('label' => 'Tuteur : ','attr' => [
                'class' => 'form-control'
            ]))
                ->add('prenomTuteur', null,array('label' => 'Prénom du tuteur : ','attr' => [
                    'class' => 'form-control'
                ]));
            }
            else {
                $form
                ->add('typeCompte', HiddenType::class, [
                    'data' => 'abcdef',
                   'disabled'=> true,
                ])
                ->add('sigle', null,array('label' => 'Sigle : ','attr' => [
                    'class' => 'form-control'
                ]) )
                ->add('raisonSociale',null,array('label' => 'Raison sociale : ','attr' => [
                'class' => 'form-control'
            ]));
            }
        });
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PhysiqueBundle\Entity\Physique',
            'type' => null
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
