<?php

namespace PhysiqueBundle\Controller;

use PhysiqueBundle\Entity\Physique;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
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

        return $this->render('physique/index.html.twig', array(
            'physiques' => $physiques,
        ));
    }

    /**
     * Creates a new physique entity.
     *
     * @Route("/new/{type}", name="physique_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, $type)
    {
        $physique = new Physique();
        $form = $this->createForm('PhysiqueBundle\Form\PhysiqueType', $physique, array('type' => $type));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($physique);
            $em->flush();

            return $this->redirectToRoute('physique_index');
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

        return $this->render('physique/show.html.twig', array(
            'physique' => $physique,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing physique entity.
     *
     * @Route("/{type}/{id}/edit/", name="physique_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Physique $physique, $type)
    {
        $deleteForm = $this->createDeleteForm($physique);
        $editForm = $this->createForm('PhysiqueBundle\Form\PhysiqueType', $physique, array('type' => $type));
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            //return $this->redirectToRoute('physique_edit', array('id' => $physique->getId()));
            return $this->redirectToRoute('physique_index');
        }

        return $this->render('physique/edit.html.twig', array(
            'physique' => $physique,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a physique entity.
     *
     * @Route("/{id}", name="physique_delete")
     * @Method({"GET", "POST"})
     */
    public function deleteAction(Request $request, Physique $physique)
    {
        $form = $this->createDeleteForm($physique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($physique);
            $em->flush();
            return $this->redirectToRoute('physique_index');
        }

        
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
