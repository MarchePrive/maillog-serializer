<?php

namespace MarchePrive\MaillogSerializer\Message;

/**
 * Interface LoggableInterface.
 */
interface MailloggableInterface
{
    /**
     * @return array
     */
    public function toLog();
}
