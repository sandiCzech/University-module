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
	
	protected function startup() 
    {
		parent::startup();
	}

	protected function beforeRender()
    {
		parent::beforeRender();	
	}

	public function actionDefault($id)
    {	
		
	}

}
