<?php

namespace PhysiqueBundle\Controller;

use PhysiqueBundle\Entity\Physique;
use PieceBundle\Entity\Piece;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
/**
 * Physique controller.
 *
 * @Route("physique")
 */
class PhysiqueController extends Controller
{
    /**
     * Lists all physique entities.
     *
     * @Route("/index", name="physique_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $physiques = $em->getRepository('PhysiqueBundle:Physique')->findAll();

        $comptes = $em->getRepository('PieceBundle:Piece')->totalNotification();
       // dump($comptes);die();
        return $this->render('physique/index.html.twig', array(
            'physiques' => $physiques,
            'comptes'=> $comptes[0]['nombre']
        ));
    }
    /**
     * Lists all physique entities.
     *
     * @Route("/recuperation", name="physique_recuperation")
     * @Method("GET")
     */
    public function Recuperation()
    {
        $em = $this->getDoctrine()->getManager();
        
        $dates = $em->getRepository('PieceBundle:Piece')->findExample1();

        return $this->render('physique/recuperer.html.twig', array(
            'dates' => $dates,
        ));
    }



    /**
     * Creates a new physique entity.
     *
     * @Route("/new/{slug}", name="physique_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, $slug)
    {
        $physique = new Physique();
        $form = $this->createForm('PhysiqueBundle\Form\PhysiqueType', $physique, array('slug' => $slug));
        $form->handleRequest($request);

        // if ($form->isSubmitted() && $form->isValid()) {
         if ($request->isXmlHttpRequest()) {
            
            $physiquebundle_physique_mineur = $request->get("physiquebundle_physique_mineur");
            $physiquebundle_physique_nom = $request->get("physiquebundle_physique_nom");
            $physiquebundle_physique_prenom = $request->get("physiquebundle_physique_prenom");
            $physiquebundle_physique_sigle=$request->get("physiquebundle_physique_sigle");
            $physiquebundle_physique_raisonSociale=$request->get("physiquebundle_physique_raisonSociale");
            $physiquebundle_physique_datnais = $request->get("physiquebundle_physique_datnais");
            $physiquebundle_physique_telephone = $request->get("physiquebundle_physique_telephone");
            $physiquebundle_physique_email = $request->get("physiquebundle_physique_email");
            $physiquebundle_physique_pays = $request->get("physiquebundle_physique_pays");
            $physiquebundle_physique_ville = $request->get("physiquebundle_physique_ville");
            $physiquebundle_physique_tuteur = $request->get("physiquebundle_physique_tuteur");
            $physiquebundle_physique_prenomTuteur = $request->get("physiquebundle_physique_prenomTuteur");

           
            $em = $this->getDoctrine()->getManager();
            $physiques = "";
            if($physiquebundle_physique_nom != null && $physiquebundle_physique_prenom != null)
            {
                $physiques = $em->getRepository('PhysiqueBundle:Physique')->findOneBy(array('nom'=>$physiquebundle_physique_nom,'prenom'=>$physiquebundle_physique_prenom ));
            }
            else 
            {
                $physiques = $em->getRepository('PhysiqueBundle:Physique')->findOneBy(array('sigle'=>$physiquebundle_physique_sigle,'raisonSociale'=>$physiquebundle_physique_raisonSociale));
            }
            $email=$em->getRepository('PhysiqueBundle:Physique')->findOneBy(array('email'=>$physiquebundle_physique_email));;
            $telephone=$em->getRepository('PhysiqueBundle:Physique')->findOneBy(array('telephone'=>$physiquebundle_physique_telephone));;
            //dump($physiquebundle_physique_nom, $physiquebundle_physique_prenom);die();
            //dump($email, $telephone,$physiquebundle_physique_mineur);die();
            if($physiquebundle_physique_mineur == "false")
            {
                //dump($email, $telephone,$physiquebundle_physique_mineur);die();
                if(!is_null($email) || !is_null($telephone))
                {
                    $response=array("message" =>"Erreur !! Cet email et ce num??ro de t??l??phone est d??j?? utilis??." ,"code"=>600 );
                }
                else {
                    if($physiques)
                        {
                            $response=array("message" =>"cet utilisateur existe d??j??" ,"code"=>400 );
                        }
                    else {
                        //dump($physiquebundle_physique_mineur);die();
                        $physique = new Physique();
                        $physique->setMineur($physiquebundle_physique_mineur);
                        $physique->setNom($physiquebundle_physique_nom);
                        $physique->setPrenom($physiquebundle_physique_prenom);
                        $physique->setSigle($physiquebundle_physique_sigle);
                        $physique->setRaisonSociale($physiquebundle_physique_raisonSociale);
                        $physique->setDatnais(new \DateTime($physiquebundle_physique_datnais));
                        $physique->setTelephone($physiquebundle_physique_telephone);
                        $physique->setEmail($physiquebundle_physique_email);
                        $physique->setPays($physiquebundle_physique_pays);
                        $physique->setVille($physiquebundle_physique_ville);
                        $physique->setTuteur($physiquebundle_physique_tuteur);
                        $physique->setPrenomTuteur($physiquebundle_physique_prenomTuteur);
                        $em->persist($physique);
                        $em->flush();
                        $notifications= $physique->getId();
                        $response= array("message" =>"enregistr??" ,"notificationId"=>$notifications,"code"=>100 );
                    }
                }
            }
            else {
                //dump((bool)$physiquebundle_physique_mineur);die();
                if($physiques)
                    {
                        $response=array("message" =>"cet utilisateur existe d??j??" ,"code"=>400 );
                    }
                else {
      //dump($physiquebundle_physique_mineur);die();
                    $physique = new Physique();
                    $physique->setMineur($physiquebundle_physique_mineur);
                    $physique->setNom($physiquebundle_physique_nom);
                    $physique->setPrenom($physiquebundle_physique_prenom);
                    $physique->setSigle($physiquebundle_physique_sigle);
                    $physique->setRaisonSociale($physiquebundle_physique_raisonSociale);
                    $physique->setDatnais(new \DateTime($physiquebundle_physique_datnais));
                    $physique->setTelephone($physiquebundle_physique_telephone);
                    $physique->setEmail($physiquebundle_physique_email);
                    $physique->setPays($physiquebundle_physique_pays);
                    $physique->setVille($physiquebundle_physique_ville);
                    $physique->setTuteur($physiquebundle_physique_tuteur);
                    $physique->setPrenomTuteur($physiquebundle_physique_prenomTuteur);
                    $em->persist($physique);
                    $em->flush();
                    $notifications= $physique->getId();
                    $response= array("message" =>"enregistr??" ,"notificationId"=>$notifications,"code"=>100 );
                }
            }
            // if($physiques)
            // {
            //     $response=array("message" =>"cet utilisateur existe d??j??" ,"code"=>400 );
            // }
            // else {
            //     dump($physiquebundle_physique_mineur);die();
            //     $physique = new Physique();
            //     $physique->setMineur($physiquebundle_physique_mineur);
            //     $physique->setNom($physiquebundle_physique_nom);
            //     $physique->setPrenom($physiquebundle_physique_prenom);
            //     $physique->setSigle($physiquebundle_physique_sigle);
            //     $physique->setRaisonSociale($physiquebundle_physique_raisonSociale);
            //     $physique->setDatnais(new \DateTime($physiquebundle_physique_datnais));
            //     $physique->setTelephone($physiquebundle_physique_telephone);
            //     $physique->setEmail($physiquebundle_physique_email);
            //     $physique->setPays($physiquebundle_physique_pays);
            //     $physique->setVille($physiquebundle_physique_ville);
            //     $physique->setTuteur($physiquebundle_physique_tuteur);
            //     $physique->setPrenomTuteur($physiquebundle_physique_prenomTuteur);
            //     $em->persist($physique);
            //     $em->flush();
            //     $response= array("message" =>"enregistr??" ,"code"=>100 );
            // }
            return new Response(json_encode($response),200,array('Content-Type'=> 'application/json'));
            //  return new Response();
            //return $this->redirectToRoute('physique_new',array('slug'=>$slug));
        }
        return $this->render('physique/new.html.twig', array(
            'physique' => $physique,
            'form' => $form->createView(),

        ));
    }

    /**
     * Finds and displays a physique entity.
     *
     * @Route("/{id}", name="physique_show")
     * @Method("GET")
     */
    public function showAction(Physique $physique)
    {
        $deleteForm = $this->createDeleteForm($physique);
        $em = $this->getDoctrine()->getManager();
        $idperson=$physique->getId();
        $pieces = $em->getRepository('PieceBundle:Piece')->findBy(array('physique' => $physique->getId()));
        $comptesNotifs = $em->getRepository('PieceBundle:Piece')->totalNotificationper($idperson);
        return $this->render('physique/show.html.twig', array(
            // 'piece' => $piece,
            'pieces' => $pieces,
            'physique' => $physique,
            'comptesNotifs'=>$comptesNotifs[0]['nombre'],
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Finds and displays a physique entity.
     *
     * @Route("notifications/{id}", name="physique_showMessage")
     * @Method("GET")
     */
    public function showMessage(Physique $physique)
    {
        $em = $this->getDoctrine()->getManager();

        $idperson=$physique->getId();

        $notifs=$em->getRepository('PieceBundle:Piece')->NotificationPersonelle($idperson);

        return $this->render('physique/shownotification.html.twig', array(
            // 'piece' => $piece,
            'notifs' => $notifs,
            'physique' => $physique,

        ));
    }
    /**
     * Displays a form to edit an existing physique entity.
     *
     * @Route("/{slug}/{id}/edit/", name="physique_edit")
     * @Method({"GET", "POST","DELETE"})
     */
    public function editAction(Request $request, Physique $physique, $slug)
    {
        $piece = new Piece();
        $deleteForm = $this->createDeleteForm($physique,array('slug' => $slug));
        $em = $this->getDoctrine()->getManager();
        $pieces = $em->getRepository('PieceBundle:Piece')->findBy(array('physique' => $physique->getId()));
        $idperson=$physique->getId();
        $comptesNotifs = $em->getRepository('PieceBundle:Piece')->totalNotificationper($idperson);
        $form = $this->createForm('PieceBundle\Form\PieceType', $piece,[
        'action' => $this->generateUrl('piece_new'),
        'method' => 'POST',]);
        $form->handleRequest($request);
        $editForm = $this->createForm('PhysiqueBundle\Form\PhysiqueType', $physique, array('slug' => $slug));
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            //dump(1);die();
            $this->getDoctrine()->getManager()->flush();
            $idperson=$physique->getId();
            //return $this->redirectToRoute('physique_edit', array('id' => $physique->getId(),'type'=>$type));
            return $this->redirectToRoute('physique_index');
        }

        return $this->render('physique/edit.html.twig', array(
            'pieces'=>$pieces,
            'physique' => $physique,
            'comptesNotifs'=>$comptesNotifs[0]['nombre'],
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'form' => $form->createView(),
        ));
    }

    /**
     * Deletes a physique entity.
     *
     * @Route("/{id}", name="physique_delete")
     * @Method({"GET", "POST","DELETE"})
     */
    public function deleteAction(Request $request, Physique $physique)
    {
        $form = $this->createDeleteForm($physique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($physique);
            $em->flush();
            // $this->addFlash('notice',"Supprim?? avec succ??s!");
            return $this->redirectToRoute('physique_index');  
        }

        // return $this->redirectToRoute('physique_index');

    }

    /**
     * Creates a form to delete a physique entity.
     *
     * @param Physique $physique The physique entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Physique $physique)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('physique_delete', array('id' => $physique->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * Search entities.
     *
     * @Route("/search", name="physique_search_form")
     * @Method("GET")
     */
   /*public function RechercherAction(Request $request)
    {
        dump(1);die();
        $physique = new Physique();
        $form = $this->createFormBuilder($physique)
        ->add('id', IntegerType::class)
        ->add('Rechercher', SubmitType::class)
        ->getForm();
        
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $data = $form->getData();
        $em = $this->getDoctrine()->getManager()->getRepository('PhysiqueBundle:Physique');
        $physiques = $em->find($data);
        return $this->render('physique/recherche.html.twig', array(
        'physiques' => $physiques
     ) );
    }

    return $this->render('physique/formsearch.html.twig', array(
        'physique' => $physique,
        'form' => $form->createView(),
    ));

    }*/

    /**
     * Displays a form to edit an existing physique entity.
     *
     * @Route("/physique/search/", name="physique_search",options= {"expose" = true})
     * @Method({"GET","POST"})
     */
        public function physiquesearchAction(Request $request){ 
        $text=json_decode($request->getContent());
        $seach =$text->search;
        $em = $this->getDoctrine()->getManager();
        //dump($seach);die();
        // $em = $this->getDoctrine()->getManager()->getRepository('PhysiqueBundle:Physique');
        $physiques = $em->getRepository('PhysiqueBundle:Physique')->findByExampleField($seach);
    
//         /*$em = $this->getDoctrine()->getManager()->getRepository('PhysiqueBundle:Physique');
//         $physiques = $em->find($data);*/
        return $this->render('physique/result.html.twig',[ 
//         //'search' => $search,
       'physiques' => $physiques
         ] );
        //dump($text);die();
        //$search=NULL;
        //$physique = new Physique();
        // $form = $this->createFormBuilder()
        // ->add('search', SearchType::class, array('attr' => array('placeholder' => 'Rechercher') ))
        // ->add('send', SubmitType::class, array('label' => 'Envoyer'))
        // ->getForm();
        
        // $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $search = $form['search']->getData();
    //         $form = $request->query->get('form');
    //         $em = $this->getDoctrine()->getManager();
    //         $physiques = $em->getRepository('PhysiqueBundle:Physique')->findByExampleField($search);
        
    // //         /*$em = $this->getDoctrine()->getManager()->getRepository('PhysiqueBundle:Physique');
    // //         $physiques = $em->find($data);*/
    //         return $this->render('physique/recherche.html.twig',[ 
    // //         //'search' => $search,
    //        'physiques' => $physiques
    //          ] );
    //      }

    //    // return $this->render('physique/formsearch.html.twig', array(
    //         //'physique' => $physique,
    //         //'form' => $form->createView(),
    //    // ));
        //     return $this->render('physique/formsearch.html.twig',[ 
        // //         'physique' => $physique,
        //     'form' => $form->createView()
        // ]);
       
    }
}
