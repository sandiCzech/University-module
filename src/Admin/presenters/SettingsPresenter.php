<?php

/**
 * This file is part of the University module for webcms2.
 * Copyright (c) @see LICENSE
 */

namespace AdminModule\UniversityModule;

/**
 * @author Jakub Sanda <jakub.sanda@webcook.cz>
 */
class SettingsPresenter extends BasePresenter
{	
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
    }
	
    public function createComponentSettingsForm()
    {
		$settings = array();

        $settings[] = $this->settings->get('Teachers count', 'newsModule' . $this->actualPage->getId(), 'text', array());

		return $this->createSettingsForm($settings);
    }
	
    public function renderDefault($idPage)
    {
		$this->reloadContent();

		$this->template->idPage = $idPage;
    }
}