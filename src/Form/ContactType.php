<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array('label' => false, 'attr' => array('placeholder' => 'Votre nom'), 'constraints' => array(new NotBlank(array("message" => "Merci de renseigner votre nom.")))))
            ->add('email', EmailType::class, array('label' => false, 'attr' => array('placeholder' => 'Votre email')))
            ->add('message', TextareaType::class, array('label' => false, 'attr' => array('placeholder' => 'Votre message')))
            ->add('fichier', FileType::class, ['label' => 'Joindre@ (optionnel)', 'required' => false,]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
