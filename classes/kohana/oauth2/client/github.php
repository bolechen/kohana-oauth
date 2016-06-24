<?php defined('SYSPATH') or die('No direct script access.');
/*
 * @package		OAuth2 Module
 * @author      Pap Tamas
 * @copyright   (c) 2011-2013 Pap Tamas
 * @website		https://github.com/app-skeleton/oauth2
 * @license		http://opensource.org/licenses/MIT
 *
 */

class Kohana_OAuth2_Client_Github extends OAuth2_Client {

    /**
     * Return the authorization endpoint
     *
     * @return  string
     */
    public function get_authorization_endpoint()
    {
        return 'https://github.com/login/oauth/authorize';
    }

    /**
     * Return the access token endpoint
     *
     * @return  string
     */
    public function get_access_token_endpoint()
    {
        return 'https://github.com/login/oauth/access_token';
    }

    /**
     * Return the user profile service url
     *
     * @return  string
     */
    public function get_user_profile_service_url()
    {
        return 'https://api.github.com/user';
    }

    /**
     * Get user data
     *
     * @return  array
     */
    public function get_user_data()
    {
        $url = $this->get_user_profile_service_url();
        $response = $this->fetch($url);

        return $response['result'];
    }

    /**
     * Get user emails
     *
     * @return  array
     */
    public function get_user_emails()
    {
        $url = $this->get_user_profile_service_url().'/emails';
        $response = $this->fetch($url);

        return $response['result'];
    }

    public function fetch($protected_resource_url, $parameters = array(), $http_method = self::HTTP_METHOD_GET, array $http_headers = array(), $form_content_type = self::HTTP_FORM_CONTENT_TYPE_MULTIPART, $check_http_status = TRUE, $expected_http_status = 200) {
        $http_headers['User-Agent'] = 'nanrenwa.com web app.';
        return parent::fetch($protected_resource_url, $parameters, $http_method, $http_headers, $form_content_type, $check_http_status, $expected_http_status);
    }

}

// END Kohana_OAuth2_Client_Github
