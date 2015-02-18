<?php

namespace Gsb\AppliFraisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gsb\AppliFraisBundle\Entity\HorsForfaitLigne;
use Gsb\AppliFraisBundle\Form\HorsForfaitLigneType;

/**
 * HorsForfaitLigne controller.
 *
 */
class HorsForfaitLigneController extends Controller
{

    /**
     * Lists all HorsForfaitLigne entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GsbAppliFraisBundle:HorsForfaitLigne')->findAll();

        return $this->render('GsbAppliFraisBundle:HorsForfaitLigne:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new HorsForfaitLigne entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new HorsForfaitLigne();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('gsb_horsforfaitligne_show', array('id' => $entity->getId())));
        }

        return $this->render('GsbAppliFraisBundle:HorsForfaitLigne:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a HorsForfaitLigne entity.
     *
     * @param HorsForfaitLigne $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(HorsForfaitLigne $entity)
    {
        $form = $this->createForm(new HorsForfaitLigneType(), $entity, array(
            'action' => $this->generateUrl('gsb_horsforfaitligne_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new HorsForfaitLigne entity.
     *
     */
    public function newAction()
    {
        $entity = new HorsForfaitLigne();
        $form   = $this->createCreateForm($entity);

        return $this->render('GsbAppliFraisBundle:HorsForfaitLigne:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a HorsForfaitLigne entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GsbAppliFraisBundle:HorsForfaitLigne')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find HorsForfaitLigne entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GsbAppliFraisBundle:HorsForfaitLigne:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing HorsForfaitLigne entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GsbAppliFraisBundle:HorsForfaitLigne')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find HorsForfaitLigne entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GsbAppliFraisBundle:HorsForfaitLigne:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a HorsForfaitLigne entity.
    *
    * @param HorsForfaitLigne $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(HorsForfaitLigne $entity)
    {
        $form = $this->createForm(new HorsForfaitLigneType(), $entity, array(
            'action' => $this->generateUrl('gsb_horsforfaitligne_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing HorsForfaitLigne entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GsbAppliFraisBundle:HorsForfaitLigne')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find HorsForfaitLigne entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('gsb_horsforfaitligne_edit', array('id' => $id)));
        }

        return $this->render('GsbAppliFraisBundle:HorsForfaitLigne:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a HorsForfaitLigne entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GsbAppliFraisBundle:HorsForfaitLigne')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find HorsForfaitLigne entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('gsb_horsforfaitligne'));
    }

    /**
     * Creates a form to delete a HorsForfaitLigne entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('gsb_horsforfaitligne_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
