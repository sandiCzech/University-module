<?php

/**
 * This file is part of the University module for webcms2.
 * Copyright (c) @see LICENSE
 */

namespace WebCMS\UniversityModule\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as gedmo;

/**
 * @ORM\Entity()
 * @ORM\Table(name="university_Field")
 */
class Field extends \WebCMS\Entity\Entity
{

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isTeacher;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isMaterial;


    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getIsTeacher()
    {
        return $this->isTeacher;
    }
    
    public function setIsTeacher($isTeacher)
    {
        $this->isTeacher = $isTeacher;
        return $this;
    }

    public function getIsMaterial()
    {
        return $this->isMaterial;
    }
    
    public function setIsMaterial($isMaterial)
    {
        $this->isMaterial = $isMaterial;
        return $this;
    }

}
