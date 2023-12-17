<?php 
// src/Form/Type/TaskType.php
namespace App\Form\Type;

use App\Entity\Sexe;
use App\Repository\SexeRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;

class  PersonnelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',TextType::class,['label' => 'Create Task',
            'help' => 'Choose something catchy!']  )
            ->add('prenom')
            ->add('adresse')

            // ->add('sexeid',ChoiceType::class, ['choices' => [
            //     'Electronics' => 'Electronics',
            //     'Clothing' => 'Clothing',
            //     'Books' => 'Books',
            // ]])
            ->add('sexeid', EntityType::class, [
                'class' => Sexe::class,
                'placeholder'=>'Hold',
                'choice_label' => function(Sexe $sexe) {
                    return $sexe->getNom().';;;'.$sexe->getId();
                },
                'query_builder' => function (SexeRepository $er) {
                    return $er->createQueryBuilder('c')
                    // ->where("")
                    ->orderBy('c.nom', 'DESC');
                },
                'label'         => 'product category',
                'choice_value'  => 'nom',
                // 'autocomplete'=>true,
                'multiple'      => false,
                'expanded'      => false,
                'required'      => true
            ])
//             ->add('sexeid', ChoiceType::class, [
//                 // 'choices' => [
//                 //   1,2,3,4,5,6,7,8,9
//                 // ],
// +                'autocomplete' => true,
//             ])
            ;
        ;
    }
}