<?php
namespace App\Form;


use App\Entity\Product;
use Doctrine\DBAL\Types\IntegerType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nom', TextType::class)
        ->add('prix', TextType::class)
        ->add('ancienprix', TextType::class)
        ->add('taille', TextType::class)
        ->add('couleur', TextType::class)
        ->add('collection', TextType::class)
        ->add('description', TextType::class)
        ->add('disponibilite', TextType::class)
        ->add('marque', TextType::class)
        ->add('detail', TextType::class)
        ->add('categorie', TextType::class)
        ->add('sexe', TextType::class)
        ->add('reduction', TextType::class)
        ->add('new', TextType::class)
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