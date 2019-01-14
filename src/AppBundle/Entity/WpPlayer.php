<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpPlayer
 *
 * @ORM\Table(name="wp_player")
 * @ORM\Entity
 */
class WpPlayer
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_video_1", type="string", length=40, nullable=false)
     */
    private $idVideo1;

    /**
     * @var string
     *
     * @ORM\Column(name="txt_video_1", type="string", length=100, nullable=false)
     */
    private $txtVideo1;

    /**
     * @var string
     *
     * @ORM\Column(name="id_video_2", type="string", length=40, nullable=false)
     */
    private $idVideo2;

    /**
     * @var string
     *
     * @ORM\Column(name="txt_video_2", type="string", length=100, nullable=false)
     */
    private $txtVideo2;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

