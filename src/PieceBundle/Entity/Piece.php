<?php

namespace PieceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PhysiqueBundle\Entity\Physique;
use PhysiqueBundle\Form\PhysiqueType;

/**
 * Piece
 *
 * @ORM\Table(name="piece")
 * @ORM\Entity(repositoryClass="PieceBundle\Repository\PieceRepository")
 */
class Piece
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
     * @ORM\ManyToOne(targetEntity="\PhysiqueBundle\Entity\Physique", inversedBy="pieces")
     * @ORM\JoinColumn(nullable=false)
     */
    private $physique;

    /**
     * @var string
     *
     * @ORM\Column(name="typePiece", type="string", length=100, nullable=true, unique=true)
     */
    private $typePiece;

    /**
     * @var string
     *
     * @ORM\Column(name="refPiece", type="string", length=100, nullable=true)
     */
    private $refPiece;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datexpiration", type="datetime", nullable=true)
     */
    private $datexpiration;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datdeclaration", type="datetime", nullable=true)
     */
    private $datdeclaration;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedelivrance", type="datetime", nullable=true)
     */
    private $datedelivrance;

    /**
     * @var string
     *
     * @ORM\Column(name="emetteur", type="string", length=100, nullable=true)
     */
    private $emetteur;

    /**
     * @var string
     *
     * @ORM\Column(name="paysEmission", type="string", length=255, nullable=true)
     */
    private $paysEmission;

    /**
     * @var string
     *
     * @ORM\Column(name="fichier", type="string", length=255, nullable=true)
     */
    private $fichier;


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
     * Set typePiece
     *
     * @param string $typePiece
     *
     * @return Piece
     */
    public function setTypePiece($typePiece)
    {
        $this->typePiece = $typePiece;

        return $this;
    }

    /**
     * Get typePiece
     *
     * @return string
     */
    public function getTypePiece()
    {
        return $this->typePiece;
    }

    /**
     * Set refPiece
     *
     * @param integer $refPiece
     *
     * @return Piece
     */
    public function setRefPiece($refPiece)
    {
        $this->refPiece = $refPiece;

        return $this;
    }

    /**
     * Get refPiece
     *
     * @return integer
     */
    public function getRefPiece()
    {
        return $this->refPiece;
    }

    /**
     * Set datexpiration
     *
     * @param \DateTime $datexpiration
     *
     * @return Piece
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

    /**
     * Set datdeclaration
     *
     * @param \DateTime $datdeclaration
     *
     * @return Piece
     */
    public function setDatdeclaration($datdeclaration)
    {
        $this->datdeclaration = $datdeclaration;

        return $this;
    }

    /**
     * Get datdeclaration
     *
     * @return \DateTime
     */
    public function getDatdeclaration()
    {
        return $this->datdeclaration;
    }

    /**
     * Set datedelivrance
     *
     * @param \DateTime $datedelivrance
     *
     * @return Piece
     */
    public function setDatedelivrance($datedelivrance)
    {
        $this->datedelivrance = $datedelivrance;

        return $this;
    }

    /**
     * Get datedelivrance
     *
     * @return \DateTime
     */
    public function getDatedelivrance()
    {
        return $this->datedelivrance;
    }

    /**
     * Set emetteur
     *
     * @param string $emetteur
     *
     * @return Piece
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
     * Set paysEmission
     *
     * @param string $paysEmission
     *
     * @return Piece
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
     * Set physique
     *
     * @param \PhysiqueBundle\Entity\Physique $physique
     *
     * @return Piece
     */
    public function setPhysique(\PhysiqueBundle\Entity\Physique $physique = null)
    {
        $this->physique = $physique;

        return $this;
    }

    /**
     * Get physique
     *
     * @return \PhysiqueBundle\Entity\Physique
     */
    public function getPhysique()
    {
        return $this->physique;
    }

    /**
     * Set fichier
     *
     * @param string $fichier
     *
     * @return Piece
     */
    public function setFichier($fichier)
    {
        $this->fichier = $fichier;

        return $this;
    }

    /**
     * Get fichier
     *
     * @return string
     */
    public function getFichier()
    {
        return $this->fichier;
    }
}
