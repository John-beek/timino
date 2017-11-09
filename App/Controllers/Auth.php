<?php

/**
 * Timino - PHP MVC framework
 *
 * @package     Timino
 * @author      Lotfio Lakehal <contact@lotfio-lakehal.com>
 * @copyright   2017 Lotfio Lakehal
 * @license     MIT
 * @link        https://github.com/lotfio-lakehal/timino
 *
 * Copyright (C) 2018
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * INFO :
 * Auth controller class
 *
 * Generated by timinocli at 2017-11-07 14:14:38
 */

namespace App\Controllers;

use App\Core\Controller;

class Auth extends Controller
{
    /**
     * default method always redirect to login page
     */
    public function manage()
    {
        $this->redirect->to('/auth/login');
    }

    /**
     * login method
     */
    public function login()
    {
        // if logged in no need to show login again
        if($this->session->get('Email')) $this->redirect->to('/welcome');

        $data['login'] = $this->load->model('auth')->logUser();
        $data['CSRF']  = $this->token->setCsrfToken();
        $this->load->view("Auth", "manage", "LOGIN", $data);
    }

    /**
     * register method
     */
    public function register()
    {
        // if logged in no need to register
        if($this->session->get('Email')) $this->redirect->to('/welcome');

        $data['register'] = $this->load->model('auth')->registerUser();
        $data['CSRF']  = $this->token->setCsrfToken();
        $this->load->view("Auth", "manage", "LOGIN", $data);

    }

    /**
     * log out user
     */
    public function logOut()
    {
        $this->session->destroy();
        $this->redirect->to('/auth/login');
    }
}