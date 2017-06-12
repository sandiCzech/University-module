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
 * @ORM\Table(name="university_Subject")
 */
class Subject extends \WebCMS\Entity\Entity
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
     * @ORM\Column(type="boolean")
     */
    private $highschool;

    /**
     * @var datetime $created
     * 
     * @gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @ORM\Column(type="text")
     */
    private $perex;

    /**
     * @ORM\Column(type="text")
     */
    private $text;

    /**
     * @ORM\Column(type="text")
     */
    private $textPlan;

    /**
     * @ORM\Column(type="text")
     */
    private $textSchedule;

    /**
     * @ORM\Column(type="text")
     */
    private $textExperience;

    /**
     * @ORM\Column(type="text")
     */
    private $textRequirements;

    /**
     * @ORM\Column(type="text")
     */
    private $textInternship;

    /**
     * @ORM\ManyToOne(targetEntity="Photo")
     * @ORM\JoinColumn(name="photo_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $photo;

    /**
     * @gedmo\Slug(fields={"name", "id"})
     * @ORM\Column(length=64)
     */
    private $slug;


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

    public function getHighschool()
    {
        return $this->highschool;
    }
    
    public function setHighschool($highschool)
    {
        $this->highschool = $highschool;
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

    public function getPerex() {
        return $this->perex;
    }

    public function setPerex($perex) {
        $this->perex = $perex;
        return $this;
    }

    public function getText() {
        return $this->text;
    }

    public function setText($text) {
        $this->text = $text;
        return $this;
    }

    public function getTextPlan() {
        return $this->textPlan;
    }

    public function setTextPlan($textPlan) {
        $this->textPlan = $textPlan;
        return $this;
    }

    public function getTextSchedule() {
        return $this->textSchedule;
    }

    public function setTextSchedule($textSchedule) {
        $this->textSchedule = $textSchedule;
        return $this;
    }
    public function getTextExperience() {
        return $this->textExperience;
    }

    public function setTextExperience($textExperience) {
        $this->textExperience = $textExperience;
        return $this;
    }
    public function getTextRequirements() {
        return $this->textRequirements;
    }

    public function setTextRequirements($textRequirements) {
        $this->text = $textRequirements;
        return $this;
    }
    public function getTextInternship() {
        return $this->textInternship;
    }

    public function setTextInternship($textInternship) {
        $this->textInternship = $textInternship;
        return $this;
    }

    public function getPhoto() {
        return $this->photo;
    }

    public function setPhoto($photo) {
        $this->photo = $photo;
        return $this;
    }

    public function getSlug() {
        return $this->slug;
    }

    public function setSlug($slug) {
        $this->slug = $slug;
        return $this;
    }

}
