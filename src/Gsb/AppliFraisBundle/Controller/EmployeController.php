<?php

namespace Gsb\AppliFraisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gsb\AppliFraisBundle\Entity\Employe;
use Gsb\AppliFraisBundle\Form\EmployeType;

/**
 * Employe controller.
 *
 */
class EmployeController extends Controller
{

    /**
     * Lists all Employe entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GsbAppliFraisBundle:Employe')->findAll();

        return $this->render('GsbAppliFraisBundle:Employe:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Employe entity.
     *
     * @param Request $request
     */
    public function createAction(Request $request)
    {
        $entity = new Employe();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $factory = $this->get('security.encoder_factory');
            $em = $this->getDoctrine()->getManager();
            $encoder = $factory->getEncoder($entity);
            $password = $encoder->encodePassword($entity->getMotDePasse(), $entity->getSalt());
            $entity->setMotDePasse($password);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_employe_show', array('id' => $entity->getId())));
        }

        return $this->render('GsbAppliFraisBundle:Employe:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Employe entity.
     *
     * @param Employe $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Employe $entity)
    {
        $form = $this->createForm(new EmployeType(), $entity, array(
            'action' => $this->generateUrl('admin_employe_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Employe entity.
     *
     */
    public function newAction()
    {
        $entity = new Employe();
        $form   = $this->createCreateForm($entity);

        return $this->render('GsbAppliFraisBundle:Employe:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Employe entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GsbAppliFraisBundle:Employe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Employe entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GsbAppliFraisBundle:Employe:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Employe entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GsbAppliFraisBundle:Employe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Employe entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GsbAppliFraisBundle:Employe:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Employe entity.
    *
    * @param Employe $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Employe $entity)
    {
        $form = $this->createForm(new EmployeType(), $entity, array(
            'action' => $this->generateUrl('admin_employe_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Employe entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GsbAppliFraisBundle:Employe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Employe entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_employe_edit', array('id' => $id)));
        }

        return $this->render('GsbAppliFraisBundle:Employe:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Employe entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GsbAppliFraisBundle:Employe')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Employe entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_employe'));
    }

    /**
     * Creates a form to delete a Employe entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_employe_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
