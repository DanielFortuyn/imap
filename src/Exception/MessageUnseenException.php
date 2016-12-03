<?php

namespace Ddeboer\Imap\Exception;

class MessageUnseenException extends Exception
{
    public function __construct($messageNumber, $mailbox)
    {
        parent::__construct(
            sprintf(
                'Message %s cannot be flagged unseen',
                $messageNumber,
                $mailbox
            )
        );
    }
}
