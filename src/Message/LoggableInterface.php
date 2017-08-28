<?php

namespace MarchePrive\MaillogSerializer\Message;

/**
 * Interface LoggableInterface.
 */
interface LoggableInterface
{
    /**
     * @return array
     */
    public function toLog();
}
