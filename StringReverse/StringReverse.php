<?php declare(strict_types = 1);

namespace Algorithms\StringReverse;

use RuntimeException;

/**
 * Class StringReverse for reverse string
 *
 * Cyrillic does not work! Use only latin string, because in php there is an omission
 * with multibyte encodings (different lengths)
 *
 * Example:
 * use Algorithms\StringReverse\StringReverse
 *
 * $stringReverse = new StringReverse('Hello world!');
 * echo $stringReverse->reverse();
 * or
 * $stringReverse = new StringReverse();
 * echo $stringReverse('Hello world!');
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

    /**
     * StringReverse constructor.
     *
     * @param string $str reverse string
     */
    public function __construct(string $str = '')
    {
        $this->str = $str;
        $this->length = strlen($str); // Multibyte? (Make your own algorithm, instead of the built-in php)
    }

    /**
     * Get the string representation of this object.
     * @return string
     */
    public function __toString(): string
    {
        return sprintf("String: %s\nLength: %d", $this->str, $this->length);
    }

    /**
     * Ca
     * @param $str
     *
     * @return string
     * @throws RuntimeException
     */
    public function __invoke($str)
    {
        if (!is_string($str)) {
            throw new RuntimeException('Fatal Error application! Get params is not a string type!');
        }

        $this->setStr($str);
        $this->setLength(strlen($str));

        return $this->reverse();
    }

    /**
     * Inverting string method
     * @return string
     */
    public function reverse(): string
    {
        $str = $this->getStr();
        for ($i = 0, $j = $this->length - 1; $i < $this->length / 2; $i++, $j--) {
            $tmp = $str{$i};
            $str{$i} = $str{$j};
            $str{$j} = $tmp;
        }

        return $str;
    }

    /**
     * Getter value length to string reverse
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * Set value length to string reverse
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
     * Getter value string reverse
     * @return string
     */
    public function getStr(): string
    {
        return $this->str;
    }

    /**
     * Set value to string reverse
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
