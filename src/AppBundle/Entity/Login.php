<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Login
 *
 * @ORM\Table(name="login")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LoginRepository")
 */
class Login
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=10)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="passwort", type="string", length=20)
     */
    private $passwort;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Login
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
     * Set passwort
     *
     * @param string $passwort
     *
     * @return Login
     */
    public function setPasswort($passwort)
    {
        $this->passwort = $passwort;

        return $this;
    }

    /**
     * Get passwort
     *
     * @return string
     */
    public function getPasswort()
    {
        return $this->passwort;
    }
}

