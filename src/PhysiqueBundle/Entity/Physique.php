<?php

namespace PhysiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator;
use Doctrine\Common\Collections\ArrayCollection;
use PhysiqueBundle\Entity\Piece;
use PieceBundle\Form\PieceType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Physique
 *
 * @ORM\Table(name="physique")
 * @ORM\Entity(repositoryClass="PhysiqueBundle\Repository\PhysiqueRepository")
 * @UniqueEntity(fields={"nom"}, message="Ce nom est déjà utilisé !")
 * @UniqueEntity(fields={"prenom"}, message="Ce prénom est déjà utilisé !")
 * @UniqueEntity(fields={"sigle"}, message="Ce sigle est déjà utilisé !")
 * @UniqueEntity(fields={"raisonSociale"}, message="elle est déjà utilisé !")
 */
class Physique extends PieceType
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
     * @ORM\OneToMany(targetEntity="\PieceBundle\Entity\Piece", mappedBy="physique",orphanRemoval=true)
     */
    private $pieces;

    public function __construct()
    {
        $this->pieces = new ArrayCollection();
    } 

    /**
     * @var string
     * 
     * @ORM\Column(name="typeCompte", type="string", length=100)
     */
    private $typeCompte;

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
     * @var string
     * 
     * @ORM\Column(name="sigle", type="string", length=100)
     */
    private $sigle;

    /**
     * @var string
     * 
     * @ORM\Column(name="raisonSociale", type="string", length=255)
     */
    private $raisonSociale;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datnais", type="date")
     */
    private $datnais;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=100)
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

    private $mineur;


    public function __toString()
    {
        //return (string)$this->nom ;
        return sprintf('%s %s', $this->sigle,$this->nom);
    }

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
     * Set typeCompte
     *
     * @param string $typeCompte
     *
     * @return Physique
     */
    public function setTypeCompte($typeCompte)
    {
        $this->typeCompte = $typeCompte;

        return $this;
    }

    /**
     * Get typeCompte
     *
     * @return string
     */
    public function getTypeCompte()
    {
        return $this->typeCompte;
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
     * Set sigle
     *
     * @param string $sigle
     *
     * @return Physique
     */
    public function setSigle($sigle)
    {
        $this->sigle = $sigle;

        return $this;
    }

    /**
     * Get sigle
     *
     * @return string
     */
    public function getSigle()
    {
        return $this->sigle;
    }

    /**
     * Set raisonSociale
     *
     * @param string $raisonSociale
     *
     * @return Physique
     */
    public function setRaisonSociale($raisonSociale)
    {
        $this->raisonSociale = $raisonSociale;

        return $this;
    }

    /**
     * Get raisonSociale
     *
     * @return string
     */
    public function getRaisonSociale()
    {
        return $this->raisonSociale;
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
     * @param string $telephone
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
     * @return string
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

     /**
     * Set mineur
     *
     * @param string $mineur
     *
     * @return Physique
     */
    public function setMineur($mineur)
    {
        $this->mineur = $mineur;

        return $this;
    }

    /**
     * Get mineur
     *
     * @return string
     */
    public function mineur()
    {
        return $this->mineur;
    }

    /**
     * Add piece
     *
     * @param \PieceBundle\Entity\Piece $piece
     *
     * @return Physique
     */
    public function addPiece(\PieceBundle\Entity\Piece $piece)
    {
        $this->pieces[] = $piece;

        return $this;
    }

    /**
     * Remove piece
     *
     * @param \PieceBundle\Entity\Piece $piece
     */
    public function removePiece(\PieceBundle\Entity\Piece $piece)
    {
        $this->pieces->removeElement($piece);
    }

    /**
     * Get pieces
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPieces()
    {
        return $this->pieces;
    }

    
}
