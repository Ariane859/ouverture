<?php

namespace PhysiqueBundle\Form;

use PhysiqueBundle\Entity\Physique;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
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
        ->add('pays', CountryType::class,['attr' => [
            'class' => 'form-control',
        ],
        ])
        ->add('ville', TextType::class,['attr' => [
            'class' => 'form-control',
        ],
        ])
        // ->add('typePiece', ChoiceType::class,['attr' => ['class' => 'form-control',] ,'choices'=>array(
        //     'Pièce d\'identité'=>'Pièce d\'identité',
        //     'Relevé d\'identité'=>'Relevé d\'identité',
        //     'Attestation de résidence'=>'Attestation de résidence',
        //     'Photo d\'identité'=>'Photo d\'identité',

        // ),'label'=>'Type de pièce'
        // ])
        // ->add('refPiece', TextType::class,['attr' => [
        //     'class' => 'form-control',
        // ],'label'=>'Référence Pièce'
        // ])
        // ->add('datexpiration', DateType::class,['attr' => ['class' => 'form-control'] , 'widget' => 'single_text','label'=>'Date d\'expiration']     
        // )
        // ->add('paysEmission', CountryType::class,['attr' => [
        //     'class' => 'form-control',
        // ],'label'=>'Pays d\'émission'])
        // ->add('emetteur', TextType::class,['attr' => [
        //     'class' => 'form-control',
        // ],'label'=>'Lieu de délivrance'])
        ;

        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) use($options){

            $physique = $event->getData();

            $form = $event->getForm();

         if ($options['slug']==1) {
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
                ]))
                ->add('mineur', CheckboxType::class);
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
            'slug' => null
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
