<?php


namespace App\Form;




use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;


class OffertFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',TextType::class,[
                'attr'=>[
                    'placeholder'=>'name',
                ],
            ])
            ->add('presentation', TextareaType::class, [
                'attr' => ['placeholder' => 'Describe yourself shortly'],
            ])
            ->add('isAttending', ChoiceType::class, [
                'choices'  => [
                    'Maybe' => null,
                    'Yes' => true,
                    'No' => false,
                ],
            ])
            ->add('skills',TextType::class,[
                'attr'=>[
                    'v-model' => "skills",
                    '@keyup' => "addSkill",
                    'placeholder'=>'Type skill and press Comma',
                ],
            ])
            ->add('submit', SubmitType::class)

            ;
    }



}