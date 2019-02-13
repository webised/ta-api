<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;

/**
 * PostMeta
 *
 * @ORM\Table(name="wp_postmeta", indexes={@ORM\Index(name="post_id", columns={"post_id"}), @ORM\Index(name="meta_key", columns={"meta_key"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PostMetaRepository")
 */
class PostMeta
{
    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Post", inversedBy="postMetas", cascade={"persist"})
     * @ORM\JoinColumn(name="post_id", referencedColumnName="ID")
     */
    private $postId ;

    /**
     * @var integer
     *
     * @ORM\Column(name="meta_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $metaId;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_key", type="string", length=255, nullable=true)
     */
    private $metaKey;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_value", type="text", nullable=true)
     * @Serializer\Groups({"list"})
     */
    private $metaValue;

    /**
     * @return int
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * @param int $postId
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;
    }

    /**
     * @return string
     */
    public function getMetaKey()
    {
        return $this->metaKey;
    }

    /**
     * @param string $metaKey
     */
    public function setMetaKey($metaKey)
    {
        $this->metaKey = $metaKey;
    }

    /**
     * @return string
     */
    public function getMetaValue()
    {
        return $this->metaValue;
    }

    /**
     * @param string $metaValue
     */
    public function setMetaValue($metaValue)
    {
        $this->metaValue = $metaValue;
    }

    /**
     * @return int
     */
    public function getMetaId()
    {
        return $this->metaId;
    }

    /**
     * @param int $metaId
     */
    public function setMetaId($metaId)
    {
        $this->metaId = $metaId;
    }




}

