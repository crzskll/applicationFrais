<?php

namespace Gsb\AppliFraisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gsb\AppliFraisBundle\Entity\ForfaitLigne;
use Gsb\AppliFraisBundle\Form\ForfaitLigneType;

/**
 * ForfaitLigne controller.
 *
 */
class ForfaitLigneController extends Controller
{

    /**
     * Lists all ForfaitLigne entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GsbAppliFraisBundle:ForfaitLigne')->findAll();

        return $this->render('GsbAppliFraisBundle:ForfaitLigne:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new ForfaitLigne entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new ForfaitLigne();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_forfait_ligne_show', array('id' => $entity->getId())));
        }

        return $this->render('GsbAppliFraisBundle:ForfaitLigne:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a ForfaitLigne entity.
     *
     * @param ForfaitLigne $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ForfaitLigne $entity)
    {
        $form = $this->createForm(new ForfaitLigneType(), $entity, array(
            'action' => $this->generateUrl('admin_forfait_ligne_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ForfaitLigne entity.
     *
     */
    public function newAction()
    {
        $entity = new ForfaitLigne();
        $form   = $this->createCreateForm($entity);

        return $this->render('GsbAppliFraisBundle:ForfaitLigne:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ForfaitLigne entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GsbAppliFraisBundle:ForfaitLigne')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ForfaitLigne entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GsbAppliFraisBundle:ForfaitLigne:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ForfaitLigne entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GsbAppliFraisBundle:ForfaitLigne')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ForfaitLigne entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GsbAppliFraisBundle:ForfaitLigne:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a ForfaitLigne entity.
    *
    * @param ForfaitLigne $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ForfaitLigne $entity)
    {
        $form = $this->createForm(new ForfaitLigneType(), $entity, array(
            'action' => $this->generateUrl('admin_forfait_ligne_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ForfaitLigne entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GsbAppliFraisBundle:ForfaitLigne')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ForfaitLigne entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_forfait_ligne_edit', array('id' => $id)));
        }

        return $this->render('GsbAppliFraisBundle:ForfaitLigne:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ForfaitLigne entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GsbAppliFraisBundle:ForfaitLigne')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ForfaitLigne entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_forfait_ligne'));
    }

    /**
     * Creates a form to delete a ForfaitLigne entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_forfait_ligne_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
