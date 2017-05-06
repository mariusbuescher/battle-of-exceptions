<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exception
 *
 * @ORM\Table(name="exception")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ExceptionRepository")
 */
class Exception
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime")
     */
    private $timestamp;

    /**
     * @var string
     *
     * @ORM\Column(name="messageId", type="string", length=255, unique=true)
     */
    private $messageId;

    /**
     * @var string
     *
     * @ORM\Column(name="project", type="string", length=255)
     */
    private $project;

    /**
     * Exception constructor.
     * @param \DateTime $timestamp
     * @param string $messageId
     * @param string $project
     */
    public function __construct(\DateTime $timestamp, $messageId, $project)
    {
        $this->timestamp = $timestamp;
        $this->messageId = $messageId;
        $this->project = $project;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     *
     * @return Exception
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set messageId
     *
     * @param string $messageId
     *
     * @return Exception
     */
    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get messageId
     *
     * @return string
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * Set project
     *
     * @param string $project
     *
     * @return Exception
     */
    public function setProject($project)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }
}

