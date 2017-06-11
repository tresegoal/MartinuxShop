<?php
namespace Utilisateurs\UtilisateurBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateurs")
 */
class Utilisateurs extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        $this->commande = new ArrayCollection();
        $this->adresse = new ArrayCollection();
    }

    /**
   * @ORM\OneToMany(targetEntity="MartinuxShop\EcommerceBundle\Entity\Commande", mappedBy="utilisateur", cascade={"remove"})
   * @ORM\JoinColumn(nullable=true)
   */
    private $commande;

    /**
  * @ORM\OneToMany(targetEntity="MartinuxShop\EcommerceBundle\Entity\UtilisateurAdresse", mappedBy="utilisateur", cascade={"remove"})
  * @ORM\JoinColumn(nullable=true)
  */
    private $adresse;


    /**
     * Add commande
     *
     * @param \MartinuxShop\EcommerceBundle\Entity\Commande $commande
     *
     * @return Utilisateurs
     */
    public function addCommande($commande)
    {
        $this->commande[] = $commande;

        return $this;
    }

    /**
     * Remove commande
     *
     * @param \MartinuxShop\EcommerceBundle\Entity\Commande $commande
     */
    public function removeCommande($commande)
    {
        $this->commande->removeElement($commande);
    }

    /**
     * Get commande
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * Add adresse
     *
     * @param \MartinuxShop\EcommerceBundle\Entity\UtilisateurAdresse $adresse
     *
     * @return Utilisateurs
     */
    public function addAdresse($adresse)
    {
        $this->adresse[] = $adresse;

        return $this;
    }

    /**
     * Remove adresse
     *
     * @param \MartinuxShop\EcommerceBundle\Entity\UtilisateurAdresse $adresse
     */
    public function removeAdresse($adresse)
    {
        $this->adresse->removeElement($adresse);
    }

    /**
     * Get adresse
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
}
