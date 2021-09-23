<?php

namespace MoraleBundle\Controller;

use MoraleBundle\Entity\Morale;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Morale controller.
 *
 * @Route("morale")
 */
class MoraleController extends Controller
{
    /**
     * Lists all morale entities.
     *
     * @Route("/", name="morale_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $morales = $em->getRepository('MoraleBundle:Morale')->findAll();

        return $this->render('morale/index.html.twig', array(
            'morales' => $morales,
        ));
    }

    /**
     * Creates a new morale entity.
     *
     * @Route("/new", name="morale_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $morale = new Morale();
        $form = $this->createForm('MoraleBundle\Form\MoraleType', $morale);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($morale);
            $em->flush();

            return $this->redirectToRoute('morale_show', array('id' => $morale->getId()));
        }

        return $this->render('morale/new.html.twig', array(
            'morale' => $morale,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a morale entity.
     *
     * @Route("/{id}", name="morale_show")
     * @Method("GET")
     */
    public function showAction(Morale $morale)
    {
        $deleteForm = $this->createDeleteForm($morale);

        return $this->render('morale/show.html.twig', array(
            'morale' => $morale,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing morale entity.
     *
     * @Route("/{id}/edit", name="morale_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Morale $morale)
    {
        $deleteForm = $this->createDeleteForm($morale);
        $editForm = $this->createForm('MoraleBundle\Form\MoraleType', $morale);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('morale_edit', array('id' => $morale->getId()));
        }

        return $this->render('morale/edit.html.twig', array(
            'morale' => $morale,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a morale entity.
     *
     * @Route("/{id}", name="morale_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Morale $morale)
    {
        $form = $this->createDeleteForm($morale);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($morale);
            $em->flush();
        }

        return $this->redirectToRoute('morale_index');
    }

    /**
     * Creates a form to delete a morale entity.
     *
     * @param Morale $morale The morale entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Morale $morale)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('morale_delete', array('id' => $morale->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
