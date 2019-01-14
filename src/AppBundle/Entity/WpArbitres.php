<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpArbitres
 *
 * @ORM\Table(name="wp_arbitres")
 * @ORM\Entity
 */
class WpArbitres
{
    /**
     * @var string
     *
     * @ORM\Column(name="fname", type="string", length=100, nullable=false)
     */
    private $fname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lname", type="string", length=100, nullable=false)
     */
    private $lname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text", length=65535, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=20, nullable=false)
     */
    private $tel = '';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_sport", type="integer", nullable=false)
     */
    private $idSport = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

