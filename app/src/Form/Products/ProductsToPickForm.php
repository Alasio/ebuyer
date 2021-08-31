<?php

namespace App\Form\Products;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductsToPickForm extends AbstractType
{

    public function __construct()
    {

    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('productToPick',
                CollectionType::class,
                [
                    'entry_type' => ProductForm::class,
                    'entry_options' =>
                        [
                            'label' => false,
                        ],
                    'allow_add' => true,
                    'allow_delete' => true,
                    'by_reference' => false,
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
