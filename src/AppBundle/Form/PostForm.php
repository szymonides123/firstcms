<?php

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use AppBundle\Entity\Posts;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class PostForm extends AbstractType 
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('posttitle', TextType::class, array('label'=> 'Tytuł wpisu'))
            ->add('postcontent', CKEditorType::class, array('label'=> 'Treść wpisu'))    
            ->add('postimage', FileType::class, array('label'=> 'Obrazek 900x300'))
                ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Posts::class,
        ));
    }

}