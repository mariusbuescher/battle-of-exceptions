<?php

namespace AppBundle\Service;

use AppBundle\Dto\ExceptionMail;

class ExceptionFunnel
{

    /**
     * @var array $exceptionFilterWords
     */
    protected $exceptionFilterWords;
    /**
     * ExceptionFunnel constructor.
     */
    public function __construct(array $exceptionFilterWords)
    {
        $this->exceptionFilterWords = $exceptionFilterWords;
    }

    /**
     * @param ExceptionMail $exceptionMail
     * @return string
     */
    public function determineProjectForExceptionMail(ExceptionMail $exceptionMail){

        foreach ($this->exceptionFilterWords as $projectIdentifier => $words){
                foreach ($words as $filterWord){
                    if(strpos(strtolower($exceptionMail->getBody()), $filterWord) !== false){
                        return $projectIdentifier;
                    }
                }
        }

        return null;
    }
}