<?php

namespace PieceBundle\Controller;

use PhysiqueBundle\Entity\Physique;
use PieceBundle\Entity\Piece;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Piece controller.
 *
 * @Route("piece")
 */
class PieceController extends Controller
{
    /**
     * Lists all piece entities.
     *
     * @Route("/index_piece", name="piece_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pieces = $em->getRepository('PieceBundle:Piece')->findAll();

        return $this->render('piece/index.html.twig', array(
            'pieces' => $pieces,
        ));
    }

    /**
     * Creates a new piece entity.
     *
     * @Route("/new/piece", name="piece_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        //$physique=new Physique();
        $piece = new Piece();
        $physique=new Physique();
        $form = $this->createForm('PieceBundle\Form\PieceType', $piece);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $idPersonnePhysique = $piece->getPhysique()->getId();
            $nomPersonnePhysique = $piece->getPhysique()->getNom();
            $siglePersonnePhysique = $piece->getPhysique()->getSigle();
            $fichier = $form->get('fichier')->getData();
            if ($fichier) {
                $originalFilename = pathinfo($fichier->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$fichier->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $fichier->move(
                        $this->getParameter('brochures_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $piece->setFichier($newFilename);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($piece);
            $em->flush();

            if(!is_null($nomPersonnePhysique))
            {
                return $this->redirectToRoute('physique_edit',array('id'=>$idPersonnePhysique,'slug'=>1));
            }
            else {
                return $this->redirectToRoute('physique_edit',array('id'=>$idPersonnePhysique,'slug'=>2));
            }
        //return $this->redirectToRoute('physique_show');
        }

        return $this->render('piece/new.html.twig', array(
            'piece' => $piece,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a piece entity.
     *
     * @Route("/viewPiece", name="piece_show", options={"expose" = true})
     * @Method("GET")
     */
    public function showAction(Request $request)
    {
        // ,Piece $piece
        // $deleteForm = $this->createDeleteForm($piece);
        //dump($request->get('id'));die();
        $id=$request->get('id');
        $em = $this->getDoctrine()->getManager();
        $pieces = $em->getRepository('PieceBundle:Piece')->findBy(array('id' =>$id));

        //dump($pieces[0]);die();
        //return new JsonResponse($pieces);
        return $this->render('piece/show.html.twig', array(
            // 'pieces'=>$piece,
            'piece'=>$pieces[0],
            // 'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing piece entity.
     *
     * @Route("/{id}/edit", name="piece_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Piece $piece)
    {
        $deleteForm = $this->createDeleteForm($piece);
        $editForm = $this->createForm('PieceBundle\Form\PieceType', $piece);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
             //dump($piece);die();
            $idPersonnePhysique = $piece->getPhysique()->getId();
            $nomPersonnePhysique = $piece->getPhysique()->getNom();
            $datexpiration=$piece->getDatexpiration();
            $siglePersonnePhysique = $piece->getPhysique()->getSigle();
            $fichier = $editForm->get('fichier')->getData();
            if ($fichier) {
                $originalFilename = pathinfo($fichier->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$fichier->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $fichier->move(
                        $this->getParameter('brochures_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $piece->setFichier($newFilename);
            }
            $em= $this->getDoctrine()->getManager();
            $date = $em->getRepository('PieceBundle:Piece')->findOneBy(array('datexpiration'=>$datexpiration));
            $em->flush();
            if(!is_null($nomPersonnePhysique))
            {
                return $this->redirectToRoute('physique_edit',array('id'=>$idPersonnePhysique,'slug'=>1));
            }
            else {
                return $this->redirectToRoute('physique_edit',array('id'=>$idPersonnePhysique,'slug'=>2));
            }
            
        }

        return $this->render('piece/edit.html.twig', array(
            'piece' => $piece,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a piece entity.
     *
     * @Route("/{id}", name="piece_delete")
     * @Method({"GET", "POST","DELETE"})
     */
    public function deleteAction(Request $request, Piece $piece)
    {
      
        $form = $this->createDeleteForm($piece);
        $form->handleRequest($request);
        //dump($piece);die();
       // if ($form->isSubmitted() && $form->isValid()) { }
       $idPersonnePhysique = $piece->getPhysique()->getId();
       $nomPersonnePhysique = $piece->getPhysique()->getNom();
       $siglePersonnePhysique = $piece->getPhysique()->getSigle();
            $em = $this->getDoctrine()->getManager();
            $em->remove($piece);
           // dump($piece);die();
            $em->flush();
            
            if(!is_null($nomPersonnePhysique))
            {
                return $this->redirectToRoute('physique_edit',array('id'=>$idPersonnePhysique,'slug'=>1));
            }
            else {
                return $this->redirectToRoute('physique_edit',array('id'=>$idPersonnePhysique,'slug'=>2));
            }
    }

    /**
     * Creates a form to delete a piece entity.
     *
     * @param Piece $piece The piece entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Piece $piece)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('piece_delete', array('id' => $piece->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    
}
