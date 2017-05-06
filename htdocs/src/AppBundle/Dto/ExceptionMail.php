<?php

namespace AppBundle\Dto;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use stdClass;

/**
 * ExceptionMail
*/
class ExceptionMail
{
    /**
     * @var stdClass
     **/
    private $headers;

    /**
     * @var string
     *
     */
    private $body;

    /**
     * ExceptionMail constructor.
     * @param stdClass $headers
     * @param string $body
     */
    public function __construct(stdClass $headers, $body)
    {
        $this->headers = $headers;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @return DateTime
     */
    public function getDateTime(){
        return (new DateTime())->setTimestamp(strtotime($this->headers->date));
    }

    /**
     * @return string
     */
    public function getMessageId(){
        return explode('@', str_replace(['<', '>'], '', $this->headers->message_id))[0];
    }
}

