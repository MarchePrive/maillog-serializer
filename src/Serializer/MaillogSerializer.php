<?php

namespace MarchePrive\MaillogSerializer\Serializer;

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
    public static function serialize(array $entry)
    {
        $lines = [];
        foreach ($entry as $name => $value) {
            $lines[] = "{$name}={$value}";
        }

        return implode(', ', $lines);
    }
}
