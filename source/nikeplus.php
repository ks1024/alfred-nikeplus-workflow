<?php

class NikePlus {
    
    /**
     * Base URL
     */
    const BASE_URL = 'https://api.nike.com/v1/me/sport';
    
    /**
     * Access token
     */
    private $_access_token;

    public function __construct() {
     
    }

    /**
     * Access token setter
     *
     * @param $access_token - access token to set
     * @return void
     */
    public function setAccessToken($access_token) {
        $this->_access_token = $access_token;    
    }

    /**
     * Access token getter
     *
     * @return access token
     */ 
    public function getAccessToken() {
        return $this->_access_token;
    }

    public function sport() {
        $url = BASE_URL.'?'.getAccessToken();

    }
    
}
