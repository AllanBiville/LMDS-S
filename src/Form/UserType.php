<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username');
        //     $builder->add('roles', ChoiceType::class, [
        //         'choices'  => [
        //             'Admin' => 'ROLE_ADMIN',
        //             'SuperAdmin' => 'ROLE_SUPER_ADMIN',
        //         ],
        //     ]) ;
        //     $builder->get('roles')
        //     ->addModelTransformer(new CallbackTransformer(
        //         function ($rolesAsArray) {
        //              return count($rolesAsArray) ? $rolesAsArray[0]: null;
        //         },
        //         function ($rolesAsString) {
        //              return [$rolesAsString];
        //         }
        // ));

        $builder->add('password', PasswordType::class, [
            'attr' => ['value' => ''],
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
