<?php
namespace App\Form;


use App\Entity\Product;
use App\Form\ImageType;
use Doctrine\DBAL\Types\IntegerType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;



class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nom', TextType::class)
        ->add('prix',MoneyType::class, array(
            'currency' => ''))
            ->add('ancienprix',MoneyType::class, array(
                'currency' => '�'))
        ->add('taille', TextType::class)
        ->add('couleur', TextType::class)
        ->add('collection', TextType::class)
        ->add('description', TextType::class)
        ->add('disponibilite', ChoiceType::class, array(
            'choices' => array(
                'Disponible' => 'Disponible',
                'Indisponible' => 'Indisponible',
           
            )
        ))
        ->add('marque', TextType::class)
        ->add('detail', TextType::class)
        ->add('categorie', ChoiceType::class, array(
            'choices' => array(
                'Women\'s clothing' => 'clothing',
                'Men\'s clothing' => 'clothing',
                'Bags & shoes' => 'bags_and_shoes',
                'Jewelry & watches' => 'jewelry_and_watches',
                'Phone\'s & accessories' => 'phones_and_accessories',
                'Computer & office' => 'computer_and_office',
                'Consumer electronics' => 'consumer_electronics'
            )
        ))
        ->add('sexe', ChoiceType::class, array(
            'choices' => array(
                'Women' => 'women',
                'Men' => 'men',
                'Mixte' => 'mixte'
            )
        ))
        ->add('reduction', TextType::class)
        ->add('new',  ChoiceType::class, array(
            'choices' => array(
                'None' => null,
                'New' => 'new'
            )
            ))
        ->add('display', TextType::class)
        ->add('image', ImageType::class);
    
    }

    
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Product::class,
        ));
    }
}
?>