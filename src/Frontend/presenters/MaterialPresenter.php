<?php

/**
 * This file is part of the University module for webcms2.
 * Copyright (c) @see LICENSE
 */

namespace FrontendModule\UniversityModule;

use WebCMS\UniversityModule\Entity\Material;


/**
 *
 * @author Jakub Sanda <jakub.sanda@webcook.cz>
 */
class MaterialPresenter extends BasePresenter
{
	private $id;

	private $repository;

	private $categoriesRepository;

	private $materials;

	private $categories;
	
	protected function startup() 
    {
		parent::startup();

		$this->repository = $this->em->getRepository('\WebCMS\UniversityModule\Entity\Material');
		$this->categoriesRepository = $this->em->getRepository('\WebCMS\UniversityModule\Entity\Category');
	}

	protected function beforeRender()
    {
		parent::beforeRender();	
	}

	public function actionDefault($id)
    {	
		$this->materials = $this->repository->findBy(array(
			'page' => $id
		));

		$this->categories = $this->categoriesRepository->findAll();
	}

	public function renderDefault($id)
	{
		$this->template->categories = $this->categories;
		$this->template->materials = $this->materials;
		$this->template->id = $id;
	}

}
