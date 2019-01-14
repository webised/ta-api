<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpWfuUserdata
 *
 * @ORM\Table(name="wp_wfu_userdata")
 * @ORM\Entity
 */
class WpWfuUserdata
{
    /**
     * @var string
     *
     * @ORM\Column(name="uploadid", type="string", length=20, nullable=false)
     */
    private $uploadid;

    /**
     * @var string
     *
     * @ORM\Column(name="property", type="string", length=100, nullable=false)
     */
    private $property;

    /**
     * @var integer
     *
     * @ORM\Column(name="propkey", type="integer", nullable=false)
     */
    private $propkey;

    /**
     * @var string
     *
     * @ORM\Column(name="propvalue", type="text", length=65535, nullable=true)
     */
    private $propvalue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_from", type="datetime", nullable=true)
     */
    private $dateFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_to", type="datetime", nullable=true)
     */
    private $dateTo;

    /**
     * @var integer
     *
     * @ORM\Column(name="iduserdata", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduserdata;


}

