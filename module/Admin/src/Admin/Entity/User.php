<?php

namespace Admin\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    protected $username;

    /**
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    protected $password;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    protected $role;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $added;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $updated;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $active;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $deleted;

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function getAdded()
    {
        return $this->added;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function getDeleted()
    {
        return $this->deleted;
    }

    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    public function setAdded()
    {
        $this->added = new \DateTime("now");
        return $this;
    }

    public function setUpdated()
    {
        $this->updated = new \DateTime("now");
        return $this;
    }

    public function setActive($active)
    {
        $this->active = (bool) $active;
        return $this;
    }

    public function setDeleted($deleted)
    {
        $this->deleted = (bool) $deleted;
        return $this;
    }
}