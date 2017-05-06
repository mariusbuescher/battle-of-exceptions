<?php

namespace AppBundle\Service;

use AppBundle\Dto\ExceptionMail;
use AppBundle\Entity\Exception;

class MailFetcher
{
    /**
     * @var ExceptionFunnel
     */
    protected $exceptionFunnel;

    private $user;

    private $password;

    private $mailbox;

    /**
     * MailFetcher constructor.
     */
    public function __construct(ExceptionFunnel $exceptionFunnel, string $user, string $password, string $mailbox)
    {
        $this->exceptionFunnel = $exceptionFunnel;
        $this->user = $user;
        $this->password = $password;
        $this->mailbox = $mailbox;
    }


    public function getNewMail(){

        $conn   = imap_open($this->mailbox, $this->user, $this->password, OP_READONLY);
        $today = (new \DateTime())->format('d M y');
        $exceptions   = imap_search($conn, 'BODY "exception" SINCE "'.$today.'"', SE_UID);
        $exceptions   = imap_search($conn, 'BODY "exception" SINCE "'.$today.'"', SE_UID);
        $errors   = imap_search($conn, 'BODY "error" SINCE "'.$today.'"', SE_UID);

        $mailIds = array_intersect($exceptions, $errors);
        $mailIds = $errors;
        $exceptions = [];

        foreach ($mailIds as $id){
            $body = imap_fetchbody($conn, $id, '0', FT_UID);
            $headers = imap_rfc822_parse_headers($body);
            $exceptionMail = new ExceptionMail($headers, $body);
            $project = $this->exceptionFunnel->determineProjectForExceptionMail($exceptionMail);
            $exceptions[] = new Exception($exceptionMail->getDateTime(), $exceptionMail->getMessageId() , $project);
        };
    }
}
