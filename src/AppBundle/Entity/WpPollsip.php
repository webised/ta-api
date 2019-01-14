<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpPollsip
 *
 * @ORM\Table(name="wp_pollsip", indexes={@ORM\Index(name="pollip_ip", columns={"pollip_id"}), @ORM\Index(name="pollip_qid", columns={"pollip_qid"})})
 * @ORM\Entity
 */
class WpPollsip
{
    /**
     * @var string
     *
     * @ORM\Column(name="pollip_qid", type="string", length=10, nullable=false)
     */
    private $pollipQid = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pollip_aid", type="string", length=10, nullable=false)
     */
    private $pollipAid = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pollip_ip", type="string", length=100, nullable=false)
     */
    private $pollipIp = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pollip_host", type="string", length=200, nullable=false)
     */
    private $pollipHost = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pollip_timestamp", type="string", length=20, nullable=false)
     */
    private $pollipTimestamp = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="pollip_user", type="text", length=255, nullable=false)
     */
    private $pollipUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="pollip_userid", type="integer", nullable=false)
     */
    private $pollipUserid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="pollip_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pollipId;


}

