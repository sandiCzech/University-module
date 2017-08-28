<?php

/**
 * This file is part of the University module for webcms2.
 * Copyright (c) @see LICENSE
 */

namespace FrontendModule\UniversityModule;

use WebCMS\UniversityModule\Entity\Teacher;


/**
 *
 * @author Jakub Sanda <jakub.sanda@webcook.cz>
 */
class TeacherPresenter extends BasePresenter
{
	private $id;

	private $repository;

	private $fieldsRepository;

	private $teacher;

	private $teachers;

	private $fields;
	
	protected function startup() 
    {
		parent::startup();

		$this->repository = $this->em->getRepository('\WebCMS\UniversityModule\Entity\Teacher');
		$this->fieldsRepository = $this->em->getRepository('\WebCMS\UniversityModule\Entity\Field');
	}

	protected function beforeRender()
    {
		parent::beforeRender();	
	}

	public function actionDefault($id)
    {	
		$this->teachers = $this->repository->findBy(array(), array('lastname' => 'ASC'));
		$this->fields = $this->fieldsRepository->findBy(array('isTeacher' => true), array('name' => 'ASC'));
	}

	public function renderDefault($id)
	{

		$detail = $this->getParameter('parameters');

		if (count($detail) > 0) {
		    $this->teacher = $this->repository->findOneBySlug($detail[0]);

		    if (!is_object($this->teacher)) {
				$this->redirect('default', array(
				    'path' => $this->actualPage->getPath(),
				    'abbr' => $this->abbr
				));
		    } else {
		    	$this->template->teacher = $this->teacher;
		    }
		}

		$this->template->fields = $this->fields;
		$this->template->teachers = $this->teachers;
		$this->template->id = $id;
	}

}
