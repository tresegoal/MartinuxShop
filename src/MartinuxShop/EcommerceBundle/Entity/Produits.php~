<?php

namespace MartinuxShop\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produits
 *
 * @ORM\Table(name="produits")
 * @ORM\Entity(repositoryClass="MartinuxShop\EcommerceBundle\Repository\ProduitsRepository")
 */
class Produits
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
    * @ORM\ManyToOne(targetEntity="MartinuxShop\EcommerceBundle\Entity\Categorie", cascade={"persist", "remove"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $categorie;

    /**
     * @ORM\ManyToOne(targetEntity="Commande", inversedBy="produits")
     * @ORM\JoinColumn(nullable=true)
     */
    private $commande;

    /**
    * @ORM\OneToOne(targetEntity="MartinuxShop\EcommerceBundle\Entity\Image", cascade={"persist", "remove"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $image;

    /**
    * @ORM\ManyToOne(targetEntity="MartinuxShop\EcommerceBundle\Entity\Tva", cascade={"persist", "remove"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $tva;


    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var bool
     *
     * @ORM\Column(name="disponible", type="boolean")
     */
    private $disponible;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Produits
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
     * Set description
     *
     * @param string $description
     *
     * @return Produits
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Produits
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set disponible
     *
     * @param boolean $disponible
     *
     * @return Produits
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;

        return $this;
    }

    /**
     * Get disponible
     *
     * @return bool
     */
    public function getDisponible()
    {
        return $this->disponible;
    }

    /**
     * Set categorie
     *
     * @param \MartinuxShop\EcommerceBundle\Entity\Categorie $categorie
     *
     * @return Produits
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \MartinuxShop\EcommerceBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set image
     *
     * @param \MartinuxShop\EcommerceBundle\Entity\Image $image
     *
     * @return Produits
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \MartinuxShop\EcommerceBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set tva
     *
     * @param \MartinuxShop\EcommerceBundle\Entity\Tva $tva
     *
     * @return Produits
     */
    public function setTva($tva)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva
     *
     * @return \MartinuxShop\EcommerceBundle\Entity\Tva
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * Set commande
     *
     * @param \MartinuxShop\EcommerceBundle\Entity\Commande $commande
     *
     * @return Produits
     */
    public function setCommande($commande = null)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return \MartinuxShop\EcommerceBundle\Entity\Commande
     */
    public function getCommande()
    {
        return $this->commande;
    }
}
