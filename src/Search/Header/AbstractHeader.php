<?php

namespace Ddeboer\Imap\Search\Header;

use Ddeboer\Imap\Search\AbstractCondition;

/**
 * Represents an email condition.
 */
abstract class AbstractHeader extends AbstractCondition
{
    /**
     * Email address for the condition.
     *
     * @var string
     */
    protected $header;

    /**
     * Constructor
     *
     * @param string $header header address for the condition.
     */
    public function __construct($header = null)
    {
        if ($header) {
            $this->setHeader($header);
        }
    }

    /**
     * Sets the email address for the condition.
     *
     * @param string $header
     */
    public function setHeader($header)
    {
        $this->header = $header;
    }

    /**
     * Converts the condition to a string that can be sent to the IMAP server.
     *
     * @return string
     */
    public function __toString()
    {
        return 'HEADER ' . $this->getKeyword() . ' "' . $this->header . '"';
    }
}
