<?php

namespace MarchePrive\MaillogSerializer\Serializer;

use MarchePrive\MaillogSerializer\Message\MailloggableInterface;

/**
 * Class MaillogSerializer.
 */
class MaillogSerializer
{
    /**
     * serialize an array in maillog format : key=value[,key=value].
     *
     * @param array $entry
     *
     * @return string
     */
    public static function fromArray(array $entry)
    {
        $lines = [];
        foreach ($entry as $name => $value) {
            $lines[] = "{$name}={$value}";
        }

        return implode(', ', $lines);
    }

    /**
     * Serialize an object.
     *
     * @param MailloggableInterface $object
     *
     * @return string
     */
    public function serialize(MailloggableInterface $object)
    {
        return self::fromArray($object->toLog);
    }
}
