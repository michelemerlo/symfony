<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsersRepository")
 */
class Users
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
     * @ORM\Column(name="vorname", type="string", length=10)
     */
    private $vorname;

    /**
     * @var string
     *
     * @ORM\Column(name="nachname", type="string", length=10)
     */
    private $nachname;

    /**
     * @var string
     *
     * @ORM\Column(name="strasse", type="string", length=15)
     */
    private $strasse;

    /**
     * @var string
     *
     * @ORM\Column(name="ort", type="string", length=10)
     */
    private $ort;

    /**
     * @var int
     *
     * @ORM\Column(name="plz", type="integer")
     */
    private $plz;
    
    /**
     * @var string
     *
     * @ORM\Column(name="beschreibung", type="string", length=255)
     */
    private $beschreibung;
    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank()
     * @Assert\File(mimeTypes={"image/jpeg"}) 
     */
    private $bild;

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
     * Set vorname
     *
     * @param string $vorname
     *
     * @return Users
     */
    public function setVorname($vorname)
    {
        $this->vorname = $vorname;

        return $this;
    }

    /**
     * Get vorname
     *
     * @return string
     */
    public function getVorname()
    {
        return $this->vorname;
    }

    /**
     * Set nachname
     *
     * @param string $nachname
     *
     * @return Users
     */
    public function setNachname($nachname)
    {
        $this->nachname = $nachname;

        return $this;
    }

    /**
     * Get nachname
     *
     * @return string
     */
    public function getNachname()
    {
        return $this->nachname;
    }

    /**
     * Set strasse
     *
     * @param string $strasse
     *
     * @return Users
     */
    public function setStrasse($strasse)
    {
        $this->strasse = $strasse;

        return $this;
    }

    /**
     * Get strasse
     *
     * @return string
     */
    public function getStrasse()
    {
        return $this->strasse;
    }

    /**
     * Set ort
     *
     * @param string $ort
     *
     * @return Users
     */
    public function setOrt($ort)
    {
        $this->ort = $ort;

        return $this;
    }

    /**
     * Get ort
     *
     * @return string
     */
    public function getOrt()
    {
        return $this->ort;
    }

    /**
     * Set plz
     *
     * @param integer $plz
     *
     * @return Users
     */
    public function setPlz($plz)
    {
        $this->plz = $plz;

        return $this;
    }

    /**
     * Get plz
     *
     * @return int
     */
    public function getPlz()
    {
        return $this->plz;
    }
    
    /**
     * Get beschreibung
     *
     * @return string
     */
    public function getBeschreibung()
    {
        return $this->beschreibung;
    }
    
    /**
     * Set beschreibung
     *
     * @param string $beschreibung
     *
     * @return Users
     */
    public function setBeschreibung($beschreibung)
    {
        $this->beschreibung = $beschreibung;

        return $this;
    }
    /**
     * Get bild
     * @return string
     */
    public function getBild()
    {
        return $this->bild;
    }
    /**
     * Set bild
     * @param string $bild
     * @return Users
     */
    public function setBild($bild)
    {
        $this->bild = $bild;
        return $this;
    }
}

