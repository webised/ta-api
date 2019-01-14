<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpWfuDbxqueue
 *
 * @ORM\Table(name="wp_wfu_dbxqueue")
 * @ORM\Entity
 */
class WpWfuDbxqueue
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fileid", type="integer", nullable=false)
     */
    private $fileid;

    /**
     * @var integer
     *
     * @ORM\Column(name="priority", type="integer", nullable=false)
     */
    private $priority;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="jobid", type="string", length=10, nullable=false)
     */
    private $jobid;

    /**
     * @var integer
     *
     * @ORM\Column(name="start_time", type="bigint", nullable=true)
     */
    private $startTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="iddbxqueue", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddbxqueue;


}

