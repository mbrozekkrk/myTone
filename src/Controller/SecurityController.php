<?php


namespace App\Controller;


use App\Entity\User;
use http\Client\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
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

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // perform some action...
            dd($form->getData());
            return $this->redirectToRoute('home');
        }
            //$this->formSubmit($request,$form);

    }
    public function formSubmit(Request $request, $form): Response{
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $task = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($task);
            // $entityManager->flush();

            return $this->redirectToRoute('home');
        }
}
    public function loginForm(){
        //TODO
    }

}