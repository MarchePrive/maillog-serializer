<?php

namespace MarchePrive\MaillogSerializer\Message;

use MarchePrive\MaillogSerializer\Message\LoggableInterface;
use MarchePrive\MaillogSerializer\Serializer\MaillogSerializer;

/**
 * Class AbstractEntry.
 * Base Abstract Class for Log entry objects.
 */
abstract class AbstractMessage implements LoggableInterface
{
    /**
     * Generates a maillog formatted view of the object.
     *
     * @return string
     */
    public function log()
    {
        return MaillogSerializer::serialize($this->toLog());
    }
}
