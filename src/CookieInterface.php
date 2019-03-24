<?php
namespace Fig\Http\Message;

/**
 * Cookie Implementation Interface
 */
interface CookieInterface
{
    /**
     * Creates an instance of a class with the given parameters.
     * @link  http://php.net/manual/en/function.setcookie.php
     * @param string $name
     * @param string $value
     * @param string $expire
     * @param string $path
     * @param string $domain
     */
    public function __construct(
        string $name,
        string $value = null,
        string $expire = 0,
        string $path = '/', 
        string $domain = null
    );
    /**
     * Returns a cookie string for headers
     * @return string
     */
    public function __toString();
}
