<?php

if (!defined("COOKIE_REGULAR_DOMAIN"))
{
  define("COOKIE_REGULAR_DOMAIN","");
}

class CookieMonster
{
    public static $salt = "5sgh%!&2)))#@!!D";
    public static $key_value_separator = "}}";
    public static $pair_separator = "||";

    static function destroyAllCookies()
    {
        foreach ($_COOKIE as $key => $value) {
            if ($key !== 'C') {
                self::removeCookie($key);
            }
        }
    }

    static function removeCookie($key = '', $path = '/')
    {
        if (!empty($key) && isset($_COOKIE[$key])) {
            setcookie($key, '', time() - 3600, '/');
        }
    }

    static function joinArrayToCookieStr($key_value_data_array)
    {
        $cookie_str = "";

        // remove time and salt before setting new values in cookie
        if (isset($key_value_data_array['time'])) {
            unset($key_value_data_array['time']);
        }
        if (isset($key_value_data_array['salt'])) {
            unset($key_value_data_array['salt']);
        }

        $keys = array_keys($key_value_data_array);
        $num_keys = count($keys);
        for ($a = 0; $a < $num_keys; $a++) {
            $thisKey = $keys[$a];
            $cookie_str .= $thisKey . self::$key_value_separator . $key_value_data_array[$thisKey] . self::$pair_separator;
        }

        $cookie_str .= 'time' . self::$key_value_separator . time() . self::$pair_separator;
        $cookie_str .= 'salt' . self::$key_value_separator . self::$salt;

        return $cookie_str;
    }

    static function decodeCookieStrToArray($cookie_str)
    {
        $cookie_array = array();
        if ($cookie_str !== false) {
            $key_value_pairs = explode(self::$pair_separator, $cookie_str);
            foreach ($key_value_pairs as $value) {
                list($key, $data_value) = @explode(self::$key_value_separator, $value);
                $cookie_array[$key] = $data_value;
            }
        }

        return $cookie_array;
    }

    static function buildCookieStrForDataValue($name, $value, $cookie_name)
    {
        $cookie_str = self::get($cookie_name);
        $cookie_array = self::decodeCookieStrToArray($cookie_str);
        $cookie_array[$name] = $value;

        return self::joinArrayToCookieStr($cookie_array);
    }

    static function buildCookieStrForDataValues($key_value_data_array, $cookie_name)
    {
        $cookie_str = self::get($cookie_name);
        $cookie_array = self::decodeCookieStrToArray($cookie_str);
        $new_cookie_array = array_merge($cookie_array, $key_value_data_array);

        return self::joinArrayToCookieStr($new_cookie_array);
    }

    static public function getIndexedDataValueFromArray($index_label, $cookie_name)
    {
        $cookie_str = self::get($cookie_name);
        $cookie_array = self::decodeCookieStrToArray($cookie_str);

        if (array_key_exists($index_label, $cookie_array)) {
            return $cookie_array[$index_label];
        } else {
            // TODO... to remove... as mdp is a new cookie constant.. we want to update it for users whose cookies don't have it
            if ($index_label == "mdp") {
                if (Util::isLoggedIn()) {
                    $logged_in_username = Util::getLoggedInUsername();
                    $login_manager = ObjectFactory::getLogin();
                    $login_manager->populateUserDataInCookie($logged_in_username);
                }
            }

            return "";

        }
    }

    // default time to live is 1 hr
    static function set($name, $value, $time_seconds = "3600", $path = "/", $global = true, $encrypt = true)
    {
        if ($path == "") {
            $path = "/";
        }

        if ($global) {
            $cookie_domain = COOKIE_REGULAR_DOMAIN;
        } else {
            $cookie_domain = "";
        }


        if ($encrypt !== false) {
            $encrypter = new CookieEncrypter();
            return setcookie($name, $encrypter->encrypt($value), time() + $time_seconds, $path, $cookie_domain);

            //setcookie($name,$encrypter->encrypt($value),time() + $time_seconds,$path,COOKIE_SECURE_DOMAIN);
            //return true;
        } else {
            return setcookie($name, $value, time() + $time_seconds, $path, $cookie_domain);

            //setcookie($name,$value,time() + $time_seconds,$path,COOKIE_SECURE_DOMAIN);
            // return true;
        }
    }

    static function get($name)
    {
        if (array_key_exists($name, $_COOKIE)) {
            $encrypter = new CookieEncrypter();

            return $encrypter->decrypt($_COOKIE[$name]);

        } else {
            return false;
        }
    }
}

class CookieEncrypter
{
    function __construct()
    {

    }

    function __destruct()
    {

    }

    // on demand encrypter... lazy initilization
    function __get($varname)
    {
        if ($varname == "_encrypter") {
            if (!isset($this->_encrypter)) {
                $this->_encrypter = new Encrypter();
            }

            return $this->_encrypter;
        }
    }

    function encrypt($text)
    {
        return $this->_encrypter->encrypt($text);
    }

    function decrypt($text)
    {
        return $this->_encrypter->decrypt($text);
    }
}