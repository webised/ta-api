<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpActus
 *
 * @ORM\Table(name="wp_actus")
 * @ORM\Entity
 */
class WpActus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_auteur", type="integer", nullable=false)
     */
    private $idAuteur = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_sport", type="integer", nullable=false)
     */
    private $idSport = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_dept", type="integer", nullable=false)
     */
    private $idDept = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="illustration", type="string", length=255, nullable=false)
     */
    private $illustration;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=100, nullable=false)
     */
    private $libelle = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=100, nullable=false)
     */
    private $ville = '';

    /**
     * @var string
     *
     * @ORM\Column(name="accroche", type="text", length=65535, nullable=false)
     */
    private $accroche;

    /**
     * @var string
     *
     * @ORM\Column(name="txt", type="text", length=65535, nullable=false)
     */
    private $txt;

    /**
     * @var string
     *
     * @ORM\Column(name="txt2", type="text", length=65535, nullable=true)
     */
    private $txt2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date = '0000-00-00';

    /**
     * @var string
     *
     * @ORM\Column(name="event", type="string", length=5, nullable=true)
     */
    private $event;

    /**
     * @var integer
     *
     * @ORM\Column(name="visible", type="integer", nullable=true)
     */
    private $visible = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

