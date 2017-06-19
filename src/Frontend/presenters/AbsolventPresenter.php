<?php

/**
 * This file is part of the University module for webcms2.
 * Copyright (c) @see LICENSE
 */

namespace FrontendModule\UniversityModule;

use WebCMS\UniversityModule\Entity\Absolvent;


/**
 *
 * @author Jakub Sanda <jakub.sanda@webcook.cz>
 */
class AbsolventPresenter extends BasePresenter
{
	private $id;

	private $repository;

	private $absolvents;

	private $absolvent;
	
	protected function startup() 
    {
		parent::startup();

		$this->repository = $this->em->getRepository('\WebCMS\UniversityModule\Entity\Absolvent');
	}

	protected function beforeRender()
    {
		parent::beforeRender();	
	}

	public function actionDefault($id)
    {	
		$this->absolvents = $this->repository->findBy(array(
			'page' => $id
		));
	}

	public function renderDefault($id)
	{

		$detail = $this->getParameter('parameters');

		if (count($detail) > 0) {
		    $this->absolvent = $this->repository->findOneBySlug($detail[0]);

		    if (!is_object($this->absolvent)) {
				$this->redirect('default', array(
				    'path' => $this->actualPage->getPath(),
				    'abbr' => $this->abbr
				));
		    } else {
		    	$this->template->absolvent = $this->absolvent;
		    }
		}
		
		$this->template->absolvents = $this->absolvents;
		$this->template->id = $id;
	}

}
