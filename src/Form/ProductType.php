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
                'Bags & shoes' => 'BagsShoes',
                'Jewelry & watches' => 'JewelryWatches',
                'Phone\'s & accessories' => 'PhonesandAccessories',
                'Computer & office' => 'COMPUTERANDOFFICE',
                'Consumer electronics' => 'CONSUMERELECTRONICS'
            )
        ))
        ->add('sexe', ChoiceType::class, array(
            'choices' => array(
                'Women' => 'women',
                'Men' => 'men',
                'Mixte' => 'mixte'
            )
        ))
        ->add('reduction', ChoiceType::class, array(
            'choices' => array(
                'aucune'=>'',
                'Reduction : 5%' => '5%',
                '10%' => '10%',
                '15%' => '15%',
                '20%' => '20%',
                '50%' => '50%',
                '80%' => '80%',
                
            )
        ))
        ->add('new',  ChoiceType::class, array(
            'choices' => array(
                'None' => null,
                'New' => 'new'
            )
            ))
            ->add('display', ChoiceType::class, array(
                'choices' => array(
                    'Afficher sur le site ' => 'oui',
                    'Ne pas afficher sur le site' => 'non'
                ))
               )
        ->add('image', ImageType::class)
        ->add('Stock', StockType::class)
        ;
    
    }

    
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Product::class,
        ));
    }
}
?>