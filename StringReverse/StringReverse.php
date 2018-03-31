<?php

namespace Algorithms\StringReverse;

/**
 * Class StringReverse for reverse string
 *
 * Cyrillic does not work! Use only latin string, because in php there is an omission
 * with multibyte encodings (different lengths)
 *
 * Example:
 *
 *
 * @package Algorithms\StringReverse
 */
class StringReverse
{
    /**
     * @var int Length string
     */
    private $length;

    /**
     * @var string Get string for reverse
     */
    private $str;

    public function __construct(string $str)
    {
        $this->str = $str;
        $this->length = \strlen($str); // Multibyte? (Make your own algorithm, instead of the built-in php)
    }

    public function __toString()
    {
        return sprintf("String: %s\nLength: %d", $this->str, $this->length);
    }

    public function reverse(): string
    {

    }

    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * @param int $length
     *
     * @return StringReverse
     */
    public function setLength(int $length): StringReverse
    {
        $this->length = $length;

        return $this;
    }

    /**
     * @return string
     */
    public function getStr(): string
    {
        return $this->str;
    }

    /**
     * @param string $str
     *
     * @return StringReverse
     */
    public function setStr(string $str): StringReverse
    {
        $this->str = $str;

        return $this;
    }
}
