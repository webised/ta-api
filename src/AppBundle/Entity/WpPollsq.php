<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpPollsq
 *
 * @ORM\Table(name="wp_pollsq")
 * @ORM\Entity
 */
class WpPollsq
{
    /**
     * @var string
     *
     * @ORM\Column(name="pollq_question", type="string", length=200, nullable=false)
     */
    private $pollqQuestion = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pollq_timestamp", type="string", length=20, nullable=false)
     */
    private $pollqTimestamp = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="pollq_totalvotes", type="integer", nullable=false)
     */
    private $pollqTotalvotes = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="pollq_active", type="boolean", nullable=false)
     */
    private $pollqActive = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="pollq_expiry", type="string", length=20, nullable=false)
     */
    private $pollqExpiry = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="pollq_multiple", type="boolean", nullable=false)
     */
    private $pollqMultiple = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="pollq_totalvoters", type="integer", nullable=false)
     */
    private $pollqTotalvoters = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="pollq_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pollqId;


}

