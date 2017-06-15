<?php

/**
 * This file is part of the University module for webcms2.
 * Copyright (c) @see LICENSE
 */

namespace WebCMS\UniversityModule;

/**
 *
 * @author Jakub Sanda <sanda@webcook.cz>
 */
class University extends \WebCMS\Module
{
	/**
	 * [$name description]
	 * @var string
	 */
    protected $name = 'University';
    
    /**
     * [$author description]
     * @var string
     */
    protected $author = 'Jakub Sanda';
    
    /**
     * [$presenters description]
     * @var array
     */
    protected $presenters = array(
		array(
		    'name' => 'Teacher',
		    'frontend' => true,
		    'parameters' => true
		),
        array(
            'name' => 'Field',
            'frontend' => false,
            'parameters' => true
        ),
        array(
            'name' => 'Material',
            'frontend' => true,
            'parameters' => true
        ),
        array(
            'name' => 'Category',
            'frontend' => false,
            'parameters' => true
        ),
        array(
            'name' => 'Subject',
            'frontend' => true,
            'parameters' => true
        ),
		array(
		    'name' => 'Settings',
		    'frontend' => false
		)
    );

    public function __construct() 
    {
	
    }
}
