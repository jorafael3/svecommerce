<?php
/**
 * 2021 M-Code Artisan
 *
 * NOTICE OF LICENSE
 *
 * This file is licenced under the Software License Agreement.
 * With the purchase or the installation of the software in your application
 * you accept the licence agreement.
 *
 * You must not modify, adapt or create derivative works of this source code
 *
 *
 * @author    M-Code Artisan <manfredi.petruso@gmail.com>
 * @copyright  2021 M-Code Artisan
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

require_once(__DIR__.'/../FFPUtils.php');
require_once('FFPUserData.php');

class FFPConversionAPIUtils
{
    /**
     * @param string $data hash input data using SHA256 algorithm.
     * @return string
     */
    public static function hash($data)
    {
        if ($data == null || FFPConversionAPIUtils::isHashed($data)) {
            return $data;
        }
        return hash('sha256', $data, false);
    }

    /**
     * @param string $pii PII data to check if its hashed.
     * @return bool
     */
    public static function isHashed($pii)
    {
        // it could be sha256 or md5
        return preg_match('/^[A-Fa-f0-9]{64}$/', $pii) ||
            preg_match('/^[a-f0-9]{32}$/', $pii);
    }

    /**
     * Extracts the IP Address from the PHP Request Context.
     * @return string
     */
    public static function getIpAddress()
    {
        $ip_address = null;

        if (isset($_SERVER['HTTP_CLIENT_IP']) && array_key_exists('HTTP_CLIENT_IP', $_SERVER)) {
            $ip_address = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
            $ips = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            $ips = array_map('trim', $ips);
            $ip_address = $ips[0];
        } elseif (!empty($_SERVER['REMOTE_ADDR'])) {
            $ip_address = $_SERVER['REMOTE_ADDR'];
        }

        return $ip_address;
    }

    /**
     * Extracts the HTTP User Agent from the PHP Request Context.
     * @return string
     */
    public static function getHttpUserAgent()
    {
        $user_agent = null;

        if (!empty($_SERVER['HTTP_USER_AGENT'])) {
            $user_agent = $_SERVER['HTTP_USER_AGENT'];
        }

        return $user_agent;
    }

    /**
     * Extracts the URI from the PHP Request Context.
     * @return string
     */
    public static function getRequestUri()
    {
        $url = "http://";
        if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
            $url = "https://";
        }

        if (!empty($_SERVER['HTTP_HOST'])) {
            $url .= $_SERVER['HTTP_HOST'];
        }

        if (!empty($_SERVER['REQUEST_URI'])) {
            $url .= $_SERVER['REQUEST_URI'];
        }

        return $url;
    }

    /**
     * Extracts the FBP cookie from the PHP Request Context.
     * @return string
     */
    public static function getFbp()
    {
        $fbp = null;

        if (!empty($_COOKIE['_fbp'])) {
            $fbp = $_COOKIE['_fbp'];
        }

        return $fbp;
    }

    /**
     * Extracts the FBC cookie from the PHP Request Context.
     * @return string
     */
    public static function getFbc()
    {
        $fbc = null;

        if (!empty($_COOKIE['_fbc'])) {
            $fbc = $_COOKIE['_fbc'];
        }

        return $fbc;
    }

    public static function getCaBundlePath()
    {
        return __DIR__.DIRECTORY_SEPARATOR
            .str_repeat('..'.DIRECTORY_SEPARATOR, 2)
            .'fb_ca_chain_bundle.crt';
    }

    public static function getAppsecretProof($access_token, $appsecret)
    {
        return hash_hmac(
            'sha256',
            $access_token,
            $appsecret
        );
    }

    public static function generateEventId() {
        $timestamp = time();
        return uniqid($timestamp, true);
    }

    public static function formatUserDate($date)
    {
        return str_replace('-',"", $date);
    }

    public static function getUserData($customer)
    {
        $userData = array();
        $userData['email'] = $customer->email;
        $userData['gender'] = FFPUtils::resolveGender($customer->id_gender);
        $userData['date_of_birth'] = self::formatUserDate($customer->birthday);
        $userData['last_name'] = $customer->lastname;
        $userData['first_name'] = $customer->firstname;
        $userData['external_id'] = null;
        $userData['client_ip_address'] = self::getIpAddress();
        $userData['client_user_agent'] = self::getHttpUserAgent();
        $userData['fbc'] = self::getFbc();
        $userData['fbp'] = self::getFbp();

        return new FFPUserData($userData);
    }
}