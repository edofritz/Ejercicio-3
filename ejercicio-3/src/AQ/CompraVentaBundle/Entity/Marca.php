<?php

namespace AQ\CompraVentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marca
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Marca
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="Vehiculo", mappedBy="marca")
     */
    private $vehiculos;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->vehiculos = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     * @return Marca
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Add vehiculos
     *
     * @param \AQ\CompraVentaBundle\Entity\Vehiculo $vehiculos
     * @return Marca
     */
    public function addVehiculo(\AQ\CompraVentaBundle\Entity\Vehiculo $vehiculos)
    {
        $this->vehiculos[] = $vehiculos;

        return $this;
    }

    /**
     * Remove vehiculos
     *
     * @param \AQ\CompraVentaBundle\Entity\Vehiculo $vehiculos
     */
    public function removeVehiculo(\AQ\CompraVentaBundle\Entity\Vehiculo $vehiculos)
    {
        $this->vehiculos->removeElement($vehiculos);
    }

    /**
     * Get vehiculos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVehiculos()
    {
        return $this->vehiculos;
    }
}
