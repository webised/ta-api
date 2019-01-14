<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpArbitresDept
 *
 * @ORM\Table(name="wp_arbitres_dept")
 * @ORM\Entity
 */
class WpArbitresDept
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_dept", type="integer", nullable=false)
     */
    private $idDept = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_arbitre", type="integer", nullable=false)
     */
    private $idArbitre = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

