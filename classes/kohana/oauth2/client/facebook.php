<?php defined('SYSPATH') or die('No direct script access.');
/*
 * @package		OAuth2 Module
 * @author      Pap Tamas
 * @copyright   (c) 2011-2013 Pap Tamas
 * @website		https://github.com/app-skeleton/oauth2
 * @license		http://opensource.org/licenses/MIT
 *
 */

class Kohana_OAuth2_Client_Facebook extends OAuth2_Client {

    /**
     * Return the authorization endpoint
     *
     * @return  string
     */
    public function get_authorization_endpoint()
    {
        return 'https://graph.facebook.com/oauth/authorize';
    }

    /**
     * Return the access token endpoint
     *
     * @return  string
     */
    public function get_access_token_endpoint()
    {
        return 'https://graph.facebook.com/oauth/access_token';
    }

    /**
     * Return the user profile service url
     *
     * @return  string
     */
    public function get_user_profile_service_url()
    {
        return 'https://graph.facebook.com/me';
    }

    /**
     * Get user data
     *
     * @return  array
     * @throws  OAuth2_Exception
     */
    public function get_user_data()
    {
        $url = $this->get_user_profile_service_url();
        $response = $this->fetch($url);

        return $response['result'];
    }
}

// END Kohana_OAuth2_Client_Facebook
