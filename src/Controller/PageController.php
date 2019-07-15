<?php

namespace App\Controller;
use App\Entity\Employer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\SERVICERepository;
use App\Repository\EmployerRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\SERVICE;
use Doctrine\Common\Persistence\ObjectManager;

class PageController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home (){
        return $this->render('page/home.html.twig');
    }
     /**
     * @Route("/page", name="page")
     */
    public function index()
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
    /**
     * @Route("/page/add", name="em")
     * @Route("/page/{id}/edit", name="edit")
     */
    public function new( Employer $employer = null,Request $request,ObjectManager $manager)
    {
        // creates a task and gives it some dummy data for this example
        if(!$employer)
        $employer= new Employer();
       // $employer->setTask('Write a blog post');
        //$employer->setDueDate(new \DateTime('tomorrow'));
         
        $form = $this->createFormBuilder($employer)
            ->add('matricule', TextType::class)
            ->add('Nom_complet', TextType::class)
            ->add('Datenaissance', DateType::class,[
                'widget'=>'single_text','format'=>'yyyy-MM-dd'
            ])
            ->add('salaire', MoneyType::class)
            ->add('SERVICE', EntityType::class,['class'=>SERVICE::class,'choice_label'=>'libele'])
            ->add('save', SubmitType::class, ['label' => 'Create Employer'])
            ->getForm();
           $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
           $manager->persist($employer);
           $manager->flush();
           $this->addFlash('success', 'Employer enregistrer avec succée');
           return $this->redirectToRoute('liste',['id'=> $employer->getId()]);
        }
       return $this->render('page/add.html.twig', [
         'formEmp' => $form->createView(),
         'editMode' => $employer->getId() !== null
         
        
        ]);
    }
     /**
     * @Route("/page/add", name="ajouter")
     */
    public function add (){
        return $this->render('page/add.html.twig');
    }
     /**
     * @Route("/page/list", name="liste")
     */
    public function list (){
        $repo=$this->getDoctrine()->getRepository(Employer::class);
         $employers=$repo->findAll();
        return $this->render('page/list.html.twig',[
            
            'employers' => $employers
        ]);
    }
     /**
     * @Route("/page/{id}/delete", name="service")
     */
    public function Service (Employer $employers, ObjectManager $manager ){
        


        $manager->remove($employers);
        $manager->flush();
        return $this->redirectToRoute('liste',['id'=>$employers->getId()]);
    }
    
   
     
}
