<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpGalerie
 *
 * @ORM\Table(name="wp_galerie")
 * @ORM\Entity
 */
class WpGalerie
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=30, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=40, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="tel2", type="string", length=14, nullable=false)
     */
    private $tel2;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=14, nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=2, nullable=false)
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=10, nullable=false)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="sport", type="string", length=20, nullable=false)
     */
    private $sport;

    /**
     * @var string
     *
     * @ORM\Column(name="nomclub", type="string", length=40, nullable=false)
     */
    private $nomclub;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=40, nullable=false)
     */
    private $adresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="departement", type="integer", nullable=false)
     */
    private $departement;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=30, nullable=false)
     */
    private $ville;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=false)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="nomclub2", type="string", length=40, nullable=false)
     */
    private $nomclub2;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse2", type="string", length=40, nullable=false)
     */
    private $adresse2;

    /**
     * @var string
     *
     * @ORM\Column(name="cp2", type="string", length=10, nullable=false)
     */
    private $cp2;

    /**
     * @var string
     *
     * @ORM\Column(name="ville2", type="string", length=30, nullable=false)
     */
    private $ville2;

    /**
     * @var integer
     *
     * @ORM\Column(name="departement2", type="integer", nullable=false)
     */
    private $departement2;

    /**
     * @var string
     *
     * @ORM\Column(name="email2", type="string", length=40, nullable=false)
     */
    private $email2;

    /**
     * @var string
     *
     * @ORM\Column(name="nom2", type="string", length=30, nullable=false)
     */
    private $nom2;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom2", type="string", length=30, nullable=false)
     */
    private $prenom2;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero2", type="integer", nullable=false)
     */
    private $numero2;

    /**
     * @var integer
     *
     * @ORM\Column(name="vote", type="integer", nullable=true)
     */
    private $vote;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

