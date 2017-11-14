<?php

namespace Ddeboer\Imap\Search\Header;

class MessageID extends AbstractHeader
{
    /**
     * Returns the keyword that the condition represents.
     *
     * @return string
     */
    public function getKeyword()
    {
        return 'MESSAGE-ID';
    }
}
