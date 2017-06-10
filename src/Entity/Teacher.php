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
 * @ORM\Table(name="university_Teacher")
 */
class Teacher extends \WebCMS\Entity\Entity
{

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;

    /**
     * @var datetime $created
     * 
     * @gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $department;

    /**
     * @ORM\ManyToMany(targetEntity="Field") 
     * @ORM\JoinTable(name="university_teacherfields", joinColumns={@ORM\JoinColumn(name="teacher_id", referencedColumnName="id")}, inverseJoinColumns={@ORM\JoinColumn(name="field_id",referencedColumnName="id", unique=true)})
     */
    private $fields;


    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getActive()
    {
        return $this->active;
    }
    
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    public function getCreated()
    {
        return $this->created;
    }
    
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    public function getDepartment()
    {
        return $this->department;
    }
    
    public function setDepartment($department)
    {
        $this->department = $department;
        return $this;
    }

    public function getFields() {
        return $this->fields;
    }

    public function setFields($fields) {
        $this->fields = $fields;
        return $this;
    }



}
