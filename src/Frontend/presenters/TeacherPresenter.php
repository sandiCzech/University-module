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

	private $teacher;

	private $teachers;
	
	protected function startup() 
    {
		parent::startup();

		$this->repository = $this->em->getRepository('\WebCMS\UniversityModule\Entity\Teacher');
	}

	protected function beforeRender()
    {
		parent::beforeRender();	
	}

	public function actionDefault($id)
    {	
		$this->teachers = $this->repository->findAll();
	}

	public function renderDefault($id)
	{
		$this->template->teachers = $this->teachers;
		$this->template->id = $id;
	}

}
