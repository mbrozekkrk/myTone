<?php


namespace App\Controller;


use App\Entity\NewUser;
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
        $user = new NewUser();

        return $form = $this->createFormBuilder($user)
            ->add('login', TextType::class)
            ->add('password',PasswordType::class)
            ->add('choice', ChoiceType::class,[
                'choices'=>[
                    'None' => true,
                    'Event firm' => true,
                    'Artist' => 'true'
                ]
            ])
            ->add('skills', TextType::class, [
                'label' => "Skills",
                'attr' => [
                    'v-model' => "skills"
                ]
            ])
            ->add('addedSkills', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Create'])
            ->getForm();

    }

}