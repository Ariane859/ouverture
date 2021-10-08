<?php

namespace PhysiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator;
 
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

    /**
     * @var int
     *
     * @ORM\Column(name="typePiece", type="integer")
     */
    private $typePiece;

     /**
     * @var string
     *
     * @ORM\Column(name="refPiece", type="string", length=50, nullable=true)
     */
    private $refPiece;

     /**
     * @var string
     *
     * @ORM\Column(name="paysEmission", type="string", length=50, nullable=true)
     */
    private $paysEmission;

     /**
     * @var string
     *
     * @ORM\Column(name="emetteur", type="string", length=50, nullable=true)
     */
    private $emetteur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datexpiration", type="date")
     */
    private $datexpiration;

    private $mineur;


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

    public function setmineur($mineur)
    {
        $this->mineur=$mineur;
        
        return $this;
    }
    
    public function getmineur()
    {
       return $this->mineur;
    }

    /**
     * Set typePiece
     *
     * @param integer $typePiece
     *
     * @return Physique
     */
    public function setTypePiece($typePiece)
    {
        $this->typePiece = $typePiece;

        return $this;
    }

    /**
     * Get typePiece
     *
     * @return integer
     */
    public function getTypePiece()
    {
        return $this->typePiece;
    }

    /**
     * Set refPiece
     *
     * @param string $refPiece
     *
     * @return Physique
     */
    public function setRefPiece($refPiece)
    {
        $this->refPiece = $refPiece;

        return $this;
    }

    /**
     * Get refPiece
     *
     * @return string
     */
    public function getRefPiece()
    {
        return $this->refPiece;
    }

    /**
     * Set paysEmission
     *
     * @param string $paysEmission
     *
     * @return Physique
     */
    public function setPaysEmission($paysEmission)
    {
        $this->paysEmission = $paysEmission;

        return $this;
    }

    /**
     * Get paysEmission
     *
     * @return string
     */
    public function getPaysEmission()
    {
        return $this->paysEmission;
    }

    /**
     * Set emetteur
     *
     * @param string $emetteur
     *
     * @return Physique
     */
    public function setEmetteur($emetteur)
    {
        $this->emetteur = $emetteur;

        return $this;
    }

    /**
     * Get emetteur
     *
     * @return string
     */
    public function getEmetteur()
    {
        return $this->emetteur;
    }

    /**
     * Set datexpiration
     *
     * @param \DateTime $datexpiration
     *
     * @return Physique
     */
    public function setDatexpiration($datexpiration)
    {
        $this->datexpiration = $datexpiration;

        return $this;
    }

    /**
     * Get datexpiration
     *
     * @return \DateTime
     */
    public function getDatexpiration()
    {
        return $this->datexpiration;
    }
}
