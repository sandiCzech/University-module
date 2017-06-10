<?php

/**
 * This file is part of the University module for webcms2.
 * Copyright (c) @see LICENSE
 */

namespace AdminModule\UniversityModule;

use Nette\Forms\Form;
use WebCMS\Entity\Teacher;

/**
 *
 * @author Jakub Sanda <jakub.sanda@webcook.cz>
 */
class TeacherPresenter extends BasePresenter
{
    
    private $teacher;

    private $department;

    protected function startup()
    {
    	parent::startup();
    }

    protected function beforeRender()
    {
	   parent::beforeRender();
    }

    public function actionDefault($idPage)
    {
        $this->user = $this->getUser();
    }

    public function renderDefault($idPage){
        $this->reloadContent();
        
        $this->template->idPage = $idPage;
    }

    protected function createComponentTeacherGrid($name)
    {
        $grid = $this->createGrid($this, $name, "\WebCMS\UniversityModule\Entity\Teacher", null, array());

        $grid->setFilterRenderType(\Grido\Components\Filters\Filter::RENDER_INNER);

        $grid->addColumnText('name', 'Name')->setSortable()->setFilterText();
        $grid->addColumnDate('department', 'Department')->setSortable();

        $grid->addActionHref("deactivate", 'Deactivate', 'deactivate', array('idPage' => $this->actualPage->getId()))->getElementPrototype()->addAttributes(array('class' => array('btn', 'btn-primary', 'ajax', 'grey')));
        $grid->addActionHref("detail", 'Businessman detail', 'detail', array('idPage' => $this->actualPage->getId()))->getElementPrototype()->addAttributes(array('class' => array('btn', 'btn-primary', 'green')));

        $grid->addActionHref("update", 'Edit', 'updateTeacher', array('idPage' => $this->actualPage->getId()))->getElementPrototype()->addAttributes(array('class' => array('btn' , 'btn-primary', 'ajax')));
        $grid->addActionHref("deleteTeacher", 'Delete', 'deleteTeacher', array('idPage' => $this->actualPage->getId()))->getElementPrototype()->addAttributes(array('class' => array('btn', 'btn-danger'), 'data-confirm' => 'Are you sure you want to delete this item?'));

        return $grid;
    }


    public function actionUpdate($id, $idPage)
    {
        if ($id) {
            $this->teacher = $this->em->getRepository('\WebCMS\UniversityModule\Entity\Teacher')->find($id);
        }
    }

    public function renderUpdate($idPage)
    {
        $this->reloadContent();

        $this->template->idPage = $idPage;
    }
    
    public function actionDelete($id){

        $teacher = $this->em->getRepository('\WebCMS\UniversityModule\Entity\Teacher')->find($id);

        $this->em->remove($teacher);
        $this->em->flush();
        
        $this->flashMessage('Teacher has been removed.', 'success');
        
        if(!$this->isAjax()){
            $this->forward('default', array(
                'idPage' => $this->actualPage->getId()
            ));
        }
    }

    public function createComponentForm($name)
    {
        $form = $this->createForm('form-submit', 'default', null);

        $form->addText('name', 'Name')
            ->setRequired('Email is mandatory.');
        $form->addText('department', 'Department');

        $form->addSubmit('save', 'Save new teacher');

        $form->onSuccess[] = callback($this, 'formSubmitted');

        return $form;
    }

    public function formSubmitted($form)
    {
        
    }

    
}
