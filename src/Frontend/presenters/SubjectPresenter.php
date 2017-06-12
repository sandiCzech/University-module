<?php

/**
 * This file is part of the University module for webcms2.
 * Copyright (c) @see LICENSE
 */

namespace FrontendModule\UniversityModule;

use WebCMS\UniversityModule\Entity\Subject;


/**
 *
 * @author Jakub Sanda <jakub.sanda@webcook.cz>
 */
class SubjectPresenter extends BasePresenter
{
	private $id;

	private $repository;

	private $subject;

	private $subjects;
	
	protected function startup() 
    {
		parent::startup();

		$this->repository = $this->em->getRepository('\WebCMS\UniversityModule\Entity\Subject');
	}

	protected function beforeRender()
    {
		parent::beforeRender();	
	}

	public function actionDefault($id)
    {	
		$this->subjects = $this->repository->findAll();
	}

	public function renderDefault($id)
	{

		$detail = $this->getParameter('parameters');

		if (count($detail) > 0) {
		    $this->subject = $this->repository->findOneBySlug($detail[0]);

		    if (!is_object($this->subject)) {
				$this->redirect('default', array(
				    'path' => $this->actualPage->getPath(),
				    'abbr' => $this->abbr
				));
		    } else {
		    	$this->template->subject = $this->subject;
		    }
		}

		$this->template->subjects = $this->subjects;
		$this->template->id = $id;
	}

}
