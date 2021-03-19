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
                    'placeholder'=>'Name',
                ],
            ])
            ->add('presentation', TextareaType::class, [
                'attr' => ['placeholder' => 'Describe yourself shortly'],
            ])
            /*->add('isAttending', ChoiceType::class, [
                'choices'  => [
                    'Maybe' => null,
                    'Yes' => true,
                    'No' => false,
                ],
            ])*/
            ->add('skills',TextType::class,[
                'help' => 'What is your superpower? What will shock event manager? Type and press comma :)',
                'attr'=>[
                    'v-model' => "skills",
                    '@keyup' => "addSkill",
                    'placeholder'=>'Skills',
                    'data-toggle'=>"tooltip",
                    'data-placement'=>"left",
                    'title'=>"Type your skill and press comma"

                ],
            ])
            ->add('requirements',TextType::class,[
                'help' => 'What do you expect from event manager? You know already what to do!',
                'attr'=>[
                    'v-model' => "requirements",
                    '@keyup' => "addRequirement",
                    'placeholder'=>'Requirements',
                    'data-toggle'=>"tooltip",
                    'data-placement'=>"left",
                    'title'=>"Type your requirement according to event firm and press comma"
                ],
            ])
            ->add('submit', SubmitType::class)

            ;
    }



}