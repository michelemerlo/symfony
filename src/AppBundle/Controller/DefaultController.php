<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Users;
use AppBundle\Service\FileUploader;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class DefaultController extends Controller
{  
    /**
     * @Route("/homepage", name="homepage")
     */
    public function listAction(Request $request)
    {
        $users = new Users();
        $userssrc = null;
        $name = null;
        $session = $request->getSession();
        $defaultData = array('message' => 'wut');
        $formsearch = $this->createFormBuilder($defaultData)
                 ->add('search', TextType::class, array('label'=>'Suche', 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:0.5cm; width:50%;'))) 
                 ->add('submit', SubmitType::class, array('label'=>'suchen','attr'=>array('class'=>'btn btn-primary')))
                 ->add('reset', SubmitType::class, array('label'=>'zurücksetzten', 'attr'=>  array('class'=>'btn btn-default')))
                 ->getForm();
         $formsearch->handleRequest($request);
         if($formsearch->isSubmitted() && $formsearch->isValid()){
            $name = $formsearch['search']->getData();
            $em=$this->getDoctrine()->getManager();
            $query = $em->createQuery(
                'SELECT u 
                 FROM AppBundle:Users u
                 WHERE u.vorname = :name
                 OR u.nachname = :name')->setParameter('name', $name);
            $userssrc = $query->getResult();
            
            if ($formsearch->get('reset')->isClicked()){
                return $this->redirectToRoute('homepage');
            }
                  
         }
        else{
            $vae = 'no form submission';
            dump($vae);
        }
        //gets the table entries
        $list = $this->getDoctrine()
                ->getRepository('AppBundle:Users')
                ->findAll();
        // Returns to index.html.twig with the variable liste, in which the db entries are
        return $this->render('main/index.html.twig', array('list'=>$list, 'form'=>$formsearch->createView(), 'userssrc'=>$userssrc)); 
        //return $this->render('base.html.twig', array('session'=>$session));
    }
    
    /**
     * @Route("/", name="anmelden") 
     */
    public function indexAction(Request $request, AuthenticationUtils $authUtils) {
        $session = $request->getSession();
        $error = $authUtils->getLastAuthenticationError();
        $lastUsername = $authUtils->getLastUsername();
        return $this->render('main/anmelden.html.twig', array(
            'last_username' => $lastUsername,
            'error' => $error,
        ));
       //return $this->render('base.html.twig', array('session'=>$session));
    } 
    /**
     * @Route("/mailrd/{id}", name="mailrd")
     */
     public function mailredirectAction(Request $request, $id, \Swift_Mailer $mailer){
         //start Doctrine
             $em=$this->getDoctrine()->getManager();
             $user = $em->getRepository('AppBundle:Users')->find($id);
             $firstname = $user->getVorname();
             $lastname = $user->getNachname();
             $defaultData = array('message' => 'wut');
        $formmail = $this->createFormBuilder($defaultData)
                 ->add('addition', TextType::class, array('label'=>'Anmerkung hinzufügen:', 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:0.5cm; width:50%;'))) 
                 ->add('submit', SubmitType::class, array('label'=>'senden','attr'=>array('class'=>'btn btn-primary')))
                 ->add('return', SubmitType::class, array('label'=>'zurück', 'attr'=>  array('class'=>'btn btn-default')))
                 ->getForm();
         $formmail->handleRequest($request);
         if($formmail->isSubmitted() && $formmail->isValid() && $formmail->get('submit')->isClicked()){            
             dump('success');
             $addition = $formmail['addition']->getData();
             dump($addition);
             $message = (new \Swift_Message('Benutzer '.$firstname.' '.$lastname))
                     ->setFrom('michele.merlo@bl.ch')
                     ->setTo('michele.merlo@bl.ch')
                     ->setBody(
                     $this->renderView(
                             // app/Resources/views/Emails/messageinfo.html.twig
                             'Emails/messageinfo.html.twig',
                             array('firstname'=>$firstname, 'lastname'=>$lastname, 'id'=>$id, 'addition'=>$addition)
                             ),
                     'text/html'
                     );
            $mailer->send($message);
            return $this->redirectToRoute('homepage');
         }
             return $this->render('main/message.html.twig', array('firstname'=>$firstname, 'lastname'=>$lastname, 'id'=>$id, 'form'=>$formmail->createView(), 'user'=>$user)); 
                  
     } 
     /**
     * @Route("/details/{id}", name="details")
     */
     public function detailAction($id)
    {
        $list = $this->getDoctrine()
                ->getRepository('AppBundle:Users')
                ->find($id);
        $img = $list->getBild();
        
        return $this->render('main/details.html.twig', array('list'=>$list, 'img'=>$img)); 
    }
    /**
     * @Route("/bearbeiten/{id}", name="edit")
     */
     public function editAction($id, Request $request, FileUploader $fileUploader){
         //row out of the db with the id $id
          $list = $this->getDoctrine()
                ->getRepository('AppBundle:Users')
                ->find($id);
          $img = $list->getBild();
        
        //create form
        $form = $this->createFormBuilder($list)
                ->add('vorname', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:0.5cm; width:50%;')))
                ->add('nachname', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:0.5cm; width:50%;')))
                ->add('strasse', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:0.5cm; width:50%;')))
                ->add('ort', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:0.5cm; width:50%;')))
                ->add('plz', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:0.5cm; width:50%;')))
                ->add('beschreibung', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:0.5cm; width:50%;')))
                ->add('bild', FileType::class, array('required'=>false, 'label'=>'Bild (JPEG-Datei)', 'data_class'=>null))
                ->add('imgremove', SubmitType::class, array('label'=>'Bild entfernen', 'attr'=>array('class'=>'btn btn-danger')))
                ->add('save', SubmitType::class, array('label'=>'Speichern', 'attr'=>array('class'=>'btn btn-primary')))
                ->add('home', SubmitType::class, array('label'=>'Zurück', 'attr'=>array('class'=>'btn btn-default')))
                ->getForm();
        
        $form->handleRequest($request);
        //If form is valid
        if($form->isSubmitted() && $form->get('save')->isClicked()){
            //start Doctrine
             $em=$this->getDoctrine()->getManager(); 
             $user = $em->getRepository(Users::class)->find($id);
             $file = $form['bild']->getData();
             if(!empty($file)){
             $filename = $fileUploader->upload($file);
             $user->setBild($filename);
             }
             $em->flush();
             return $this->redirectToRoute('homepage');
         }
         if ($form->get('home')->isClicked()){
                return $this->redirectToRoute('homepage');
            }  
         if ($form->get('imgremove')->isClicked()){
                $rm = '/var/www/html/test/web/images/'.$img ;
                dump($img.' removed');
                unlink($rm);
                $em=$this->getDoctrine()->getManager(); 
                $user = $em->getRepository(Users::class)->find($id);
                $user->setBild(NULL);
                $em->flush();
                return $this->redirectToRoute('homepage');
            }
             
        return $this->render('main/edit.html.twig', array('list'=>$list, 'form'=>$form->createView(), 'img'=>$img)); 
     }
     /**
     * @Route("/loeschen/{id}", name="delete")
     */
     public function deleteAction($id){
        //start Doctrine
             $em=$this->getDoctrine()->getManager();
             $list = $em->getRepository('AppBundle:Users')->find($id);
             $em->remove($list);
             $em->flush();
             return $this->redirectToRoute('homepage');                      
     } 
     /**  
     * @Route("/newentry", name="new_entry")
     */
     public function newAction(Request $request, FileUploader $fileUploader){
         
         $form = $this->createFormBuilder()
                ->add('vorname', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:0.5cm; width:50%;')))
                ->add('nachname', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:0.5cm; width:50%;')))
                ->add('strasse', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:0.5cm; width:50%;')))
                ->add('ort', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:0.5cm; width:50%;')))
                ->add('plz', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:0.5cm; width:50%;')))
                ->add('beschreibung', TextType::class, array('required'=>false, 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:0.5cm; width:50%;')))
                ->add('bild', FileType::class, array('required'=>false,'required'=>false, 'label'=>'Bild (JPEG-Datei)', 'data_class'=>null))
                ->add('submit', SubmitType::class, array('label'=>'Speichern', 'attr'=>array('class'=>'btn btn-primary')))
                ->add('home', SubmitType::class, array('label'=>'Zurück', 'attr'=>array('class'=>'btn btn-default')))
                ->getForm();
          $form->handleRequest($request);
        //If form is valid
        if($form->isSubmitted()){
            //start Doctrine
            $em=$this->getDoctrine()->getManager();
            //create new Object user
            $user = new Users();
            //stores form values into variables
            $firstname = $form['vorname']->getData();
            $lastname = $form['nachname']->getData(); 
            $street = $form['strasse']->getData();
            $place = $form['ort']->getData();
            $plz = $form['plz']->getData();
            $description = $form['beschreibung']->getData();
            $image = $form['bild']->getData();
            //stores var values into db
            $user->setVorname($firstname);
            $user->setNachname($lastname);
            $user->setStrasse($street);
            $user->setOrt($place);
            $user->setPlz($plz);
            $user->setBeschreibung($description);
            if($request->query->has('bild')){
            $filename = $fileUploader->upload($image);
            $user->setBild($filename);
            }
            //execute query
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('homepage');     
        }
             return $this->render('main/new.html.twig', array('form'=>$form->createView()));          
     } 
}
