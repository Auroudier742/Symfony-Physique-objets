<?php

namespace Sitephys\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
     /*   $builder->add('username')->add('email')->add('password')->add('interest')->add('roles')->add('salt')        ; */
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
    /*    $resolver->setDefaults(array(
            'data_class' => 'Sitephys\UserBundle\Entity\User'
        ));
        */
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'sitephys_userbundle_user';
    }


}
