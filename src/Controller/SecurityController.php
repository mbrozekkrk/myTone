<?php


namespace App\Controller;


use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login")
     */
    public function login(){
        return $this->render('login.html.twig');
    }
    /**
     * @Route("/register")
     */
    public function register(){
        $form = $this->registerForm();
        return $this->render('register.html.twig',[
            'registerForm' => $form->createView(),
        ]);
    }

    public function registerForm(){
        $user = new User();

        return $form = $this->createFormBuilder($user)
            ->add('login', TextType::class,[
                'attr'=>[
                    "placeholder" => 'Login'
                ]
            ])
            ->add('password',PasswordType::class,[
                'attr'=>[
                    "placeholder" => 'Password'
                ]
            ])
            ->add('confirmPassword',PasswordType::class,[
                'attr'=>[
                    "placeholder" => 'Confirm password'
                ]
            ])
            ->add('choice', ChoiceType::class,[
                'label' => "Account type",
                'choices'=>[
                    'None' => true,
                    'Event firm' => true,
                    'Artist' => 'true'
                ],
                'attr'=>[
                    "class"=>'choice'
                ]

            ])
            ->add('skills', TextType::class, [
                'label' => "Skills",
                'attr' => [
                    'v-model' => "skills",
                    '@keyup' => "addSkill",
                    "placeholder" => 'Add skill'

                ]
            ])
            ->add('save', SubmitType::class,
                [
                    'label' => 'Create',
                'attr' => [
                    'class' =>'create-btn'
                ]
                ])
            ->getForm();

    }

}