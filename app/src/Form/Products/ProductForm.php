<?php

namespace App\Form\Products;

use App\Entity\Product;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('product',
                EntityType::class,
                [
                    'label' => 'Product',
                    'class' => Product::class,
                    'choice_label' => 'name',
                    'attr' =>
                        [
                            'class' => 'selectpicker',
                            'data-style' => "btn btn-link"
                        ],
                ]
            )
            ->add('quantity',
                TextType::class,
                [
                    'label' => 'Quantity',
                    'attr' =>
                        [

                        ]
                ]
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
