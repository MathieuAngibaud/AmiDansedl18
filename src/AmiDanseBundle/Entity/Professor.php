<?php

namespace AmiDanseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Professor
 */
class Professor
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $email;

    /**
     * @var bool
     */
    private $status;

    /**
     * @var bool
     */
    private $sexe;

    /**
     * @var bool
     */
    private $state1;

    /**
     * @var bool
     */
    private $state2;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Professor
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return Professor
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Professor
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Professor
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set sexe
     *
     * @param boolean $sexe
     * @return Professor
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return boolean 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set state1
     *
     * @param boolean $state1
     * @return Professor
     */
    public function setState1($state1)
    {
        $this->state1 = $state1;

        return $this;
    }

    /**
     * Get state1
     *
     * @return boolean 
     */
    public function getState1()
    {
        return $this->state1;
    }

    /**
     * Set state2
     *
     * @param boolean $state2
     * @return Professor
     */
    public function setState2($state2)
    {
        $this->state2 = $state2;

        return $this;
    }

    /**
     * Get state2
     *
     * @return boolean 
     */
    public function getState2()
    {
        return $this->state2;
    }
}
