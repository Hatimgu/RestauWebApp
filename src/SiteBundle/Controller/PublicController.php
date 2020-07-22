<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use SiteBundle\Entity\Plats;

class PublicController extends Controller
{
	/**
     * Lists all plats entities.
     *
     */
    
      public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $Plats = $em->getRepository('SiteBundle:Plats')->findAll();

        return $this->render('Plats/index.html.twig', array(
            'Plats' => $Plats,
        ));
    }




/**
     * Creates a new plat entity.
     *
     */

    
    public function newAction(Request $request)
    {
        $plats = new Plats();
        $form = $this->createForm('SiteBundle\Form\Platstype', $plats);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($plats);
            $em->flush();

            return $this->redirectToRoute('plats_show', array('id' => $plats->getId()));
        }

        return $this->render('Plats/new.html.twig', array(
            'plats' => $plats,
            'form' => $form->createView(),
        ));
    }




 private function createDeleteForm(Plats $plats)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('plats_delete', array('id' => $plats->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }


      /**
     * Finds and displays a plat entity.
     *
     */
    public function showAction(Plats $plats)
    {
        $deleteForm = $this->createDeleteForm($plats);

        return $this->render('Plats/show.html.twig', array(
            'plats' => $plats,
            'delete_form' => $deleteForm->createView(),
        ));
    }


 /**
     * Displays a form to edit an existing plat entity.
     *
     */
    public function editAction(Request $request, Plats $plats)
    {
        $deleteForm = $this->createDeleteForm($plats);
        $editForm = $this->createForm('SiteBundle\Form\Platstype', $plats);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('site_homepage', array('id' => $plats->getId()));
        }

        return $this->render('Plats/edit.html.twig', array(
            'plats' => $plats,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }





    /**
     * Deletes a PLAT entity.
     *
     */
    public function deleteAction($id)
    {
      $em=$this->getDoctrine()->getManager();
      $plats=$em->getRepository('SiteBundle:Plats')->find($id);
      $em->remove($plats);
      $em->flush();
      $this->addFlash('message', 'suucevii');
      return $this->redirectToRoute('site_homepage');
    }



    


}
