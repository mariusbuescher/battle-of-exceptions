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
     * @var string
     *
     * @ORM\Column(name="project", type="string", length=255)
     */
    private $project;

    /**
     * @var int
     *
     * @ORM\Column(name="projectId", type="integer", unique=true)
     */
    private $projectId;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text")
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="stacktrace", type="text")
     */
    private $stacktrace;

    /**
     * @var string
     *
     * @ORM\Column(name="severity", type="string", length=255)
     */
    private $severity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime")
     */
    private $timestamp;

    /**
     * @var int
     *
     * @ORM\Column(name="occurence", type="integer", nullable=true)
     */
    private $occurence;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=255)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="vhost", type="string", length=255)
     */
    private $vhost;


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

    /**
     * Set projectId
     *
     * @param integer $projectId
     *
     * @return Exception
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * Get projectId
     *
     * @return int
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return Exception
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Exception
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set stacktrace
     *
     * @param string $stacktrace
     *
     * @return Exception
     */
    public function setStacktrace($stacktrace)
    {
        $this->stacktrace = $stacktrace;

        return $this;
    }

    /**
     * Get stacktrace
     *
     * @return string
     */
    public function getStacktrace()
    {
        return $this->stacktrace;
    }

    /**
     * Set severity
     *
     * @param string $severity
     *
     * @return Exception
     */
    public function setSeverity($severity)
    {
        $this->severity = $severity;

        return $this;
    }

    /**
     * Get severity
     *
     * @return string
     */
    public function getSeverity()
    {
        return $this->severity;
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
     * Set occurence
     *
     * @param integer $occurence
     *
     * @return Exception
     */
    public function setOccurence($occurence)
    {
        $this->occurence = $occurence;

        return $this;
    }

    /**
     * Get occurence
     *
     * @return int
     */
    public function getOccurence()
    {
        return $this->occurence;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Exception
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return Exception
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set vhost
     *
     * @param string $vhost
     *
     * @return Exception
     */
    public function setVhost($vhost)
    {
        $this->vhost = $vhost;

        return $this;
    }

    /**
     * Get vhost
     *
     * @return string
     */
    public function getVhost()
    {
        return $this->vhost;
    }
}

