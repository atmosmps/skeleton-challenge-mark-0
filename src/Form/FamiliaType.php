<?php

namespace App\Form;

use App\Entity\Family;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FamiliaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('estado')
            ->add('cidade')
            ->add('bairro')
            ->add('cep')
            ->add('logradouro')
            ->add('num_logradouro')
          //  ->add('programa_social_id')
            ->add('programaSocial')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Family::class,
        ]);
    }
}
