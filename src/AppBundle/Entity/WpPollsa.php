<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpPollsa
 *
 * @ORM\Table(name="wp_pollsa")
 * @ORM\Entity
 */
class WpPollsa
{
    /**
     * @var integer
     *
     * @ORM\Column(name="polla_qid", type="integer", nullable=false)
     */
    private $pollaQid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="polla_answers", type="string", length=200, nullable=false)
     */
    private $pollaAnswers = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="polla_votes", type="integer", nullable=false)
     */
    private $pollaVotes = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="polla_aid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pollaAid;


}

