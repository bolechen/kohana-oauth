<?php defined('SYSPATH') or die('No direct script access.');
/*
 * @package		OAuth2 Module
 * @author      Pap Tamas
 * @copyright   (c) 2011-2013 Pap Tamas
 * @website		https://github.com/app-skeleton/oauth2
 * @license		http://opensource.org/licenses/MIT
 *
 */

class Kohana_OAuth2_Exception extends Kohana_Exception {

    /**
     * Error codes
     */
    const E_NO_CURL_INSTALLED           = 1;
    const E_CURL_ERROR                  = 2;
    const E_CERTIFICATE_FILE_INVALID    = 3;
    const E_NO_GRANT_TYPE_SPECIFIED     = 4;
    const E_MISSING_PARAMETER           = 5;
    const E_INCORRECT_PARAMETER         = 6;
    const E_UNKNOWN_AUTH_TYPE           = 7;
    const E_UNKNOWN_ACCESS_TOKEN_TYPE   = 8;
    const E_CANT_GET_ACCESS_TOKEN       = 9;
    const E_FETCH_UNSUCCESSFUL          = 10;
}

// END Kohana_OAuth2_Exception
