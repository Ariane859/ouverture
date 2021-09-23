<?php

namespace PhysiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Physique
 *
 * @ORM\Table(name="physique")
 * @ORM\Entity(repositoryClass="PhysiqueBundle\Repository\PhysiqueRepository")
 */
class Physique
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
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=100)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datnais", type="date")
     */
    private $datnais;

    /**
     * @var int
     *
     * @ORM\Column(name="telephone", type="integer")
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=50)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=50)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="tuteur", type="string", length=100, nullable=true)
     */
    private $tuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_tuteur", type="string", length=100, nullable=true)
     */
    private $prenomTuteur;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Physique
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Physique
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set datnais
     *
     * @param \DateTime $datnais
     *
     * @return Physique
     */
    public function setDatnais($datnais)
    {
        $this->datnais = $datnais;
    
        return $this;
    }

    /**
     * Get datnais
     *
     * @return \DateTime
     */
    public function getDatnais()
    {
        return $this->datnais;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return Physique
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    
        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Physique
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
     * Set pays
     *
     * @param string $pays
     *
     * @return Physique
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    
        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Physique
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    
        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set tuteur
     *
     * @param string $tuteur
     *
     * @return Physique
     */
    public function setTuteur($tuteur)
    {
        $this->tuteur = $tuteur;
    
        return $this;
    }

    /**
     * Get tuteur
     *
     * @return string
     */
    public function getTuteur()
    {
        return $this->tuteur;
    }

    /**
     * Set prenomTuteur
     *
     * @param string $prenomTuteur
     *
     * @return Physique
     */
    public function setPrenomTuteur($prenomTuteur)
    {
        $this->prenomTuteur = $prenomTuteur;
    
        return $this;
    }

    /**
     * Get prenomTuteur
     *
     * @return string
     */
    public function getPrenomTuteur()
    {
        return $this->prenomTuteur;
    }
}

