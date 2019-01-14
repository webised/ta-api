<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpWfuLog
 *
 * @ORM\Table(name="wp_wfu_log")
 * @ORM\Entity
 */
class WpWfuLog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="integer", nullable=false)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="uploaduserid", type="integer", nullable=false)
     */
    private $uploaduserid;

    /**
     * @var integer
     *
     * @ORM\Column(name="uploadtime", type="bigint", nullable=true)
     */
    private $uploadtime;

    /**
     * @var string
     *
     * @ORM\Column(name="sessionid", type="string", length=40, nullable=true)
     */
    private $sessionid;

    /**
     * @var string
     *
     * @ORM\Column(name="filepath", type="text", length=65535, nullable=false)
     */
    private $filepath;

    /**
     * @var string
     *
     * @ORM\Column(name="filehash", type="string", length=100, nullable=false)
     */
    private $filehash;

    /**
     * @var integer
     *
     * @ORM\Column(name="filesize", type="bigint", nullable=false)
     */
    private $filesize;

    /**
     * @var string
     *
     * @ORM\Column(name="uploadid", type="string", length=20, nullable=false)
     */
    private $uploadid;

    /**
     * @var integer
     *
     * @ORM\Column(name="pageid", type="integer", nullable=true)
     */
    private $pageid;

    /**
     * @var integer
     *
     * @ORM\Column(name="blogid", type="integer", nullable=true)
     */
    private $blogid;

    /**
     * @var string
     *
     * @ORM\Column(name="sid", type="string", length=10, nullable=true)
     */
    private $sid;

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
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=20, nullable=false)
     */
    private $action;

    /**
     * @var integer
     *
     * @ORM\Column(name="linkedto", type="integer", nullable=true)
     */
    private $linkedto;

    /**
     * @var string
     *
     * @ORM\Column(name="filedata", type="text", length=65535, nullable=true)
     */
    private $filedata;

    /**
     * @var integer
     *
     * @ORM\Column(name="idlog", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlog;


}

