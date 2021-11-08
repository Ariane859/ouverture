<?php

namespace PieceBundle\Form;

use Doctrine\DBAL\Types\DateType as TypesDateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;

// use Symfony\Component\Form\FormEvent;
// use Symfony\Component\Form\FormEvents;


class PieceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        // ->add('typePiece')
        ->add('typePiece',ChoiceType::class,[
            'choices'=>[
                ''=>'',
                'Carte d\'identité'=>'Carte d\'identité',
                'Passeport'=>'Passeport',
                'Attestation de résidence'=>'Attestation de résidence',
                'Acte de naissance'=>'Acte de naissance',
                'Photo'=>'Photo'
            ],'attr'=>['class'=>'form-control'],
        ])
        ->add('refPiece',TextType::class,['attr'=>['class'=>'form-control'],'required'=> false])
        ->add('datexpiration',DateType::class,['widget' => 'single_text','attr'=>['class'=>'form-control'],'required'=> false])
        ->add('datdeclaration',DateType::class,['widget' => 'single_text','attr'=>['class'=>'form-control'],'required'=> false])
        ->add('datedelivrance',DateType::class,['widget' => 'single_text','attr'=>['class'=>'form-control'],'required'=> false])
        ->add('emetteur',TextType::class,['attr'=>['class'=>'form-control'],'required'=> false])
        ->add('paysEmission',CountryType::class,['attr'=>['class'=>'form-control'],'required'=> false])
        ->add('physique')
        ->add('fichier',FileType::class,['attr'=>['label'=>''],'mapped'=> false,'required'=> false,
            'constraints' => [
            new File([
            'maxSize' => '2048k',
            'mimeTypes' => [
                    'application/pdf',
                    'application/x-pdf',
                    'application/png'
                ],
                'mimeTypesMessage' => 'S\'il vous plait,téléchargez un document PDF valide',
            ])
            ],
        ]
    );
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PieceBundle\Entity\Piece'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'piecebundle_piece';
    }


}
