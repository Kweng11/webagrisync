<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * ------------------------------------------------------------------
 * LavaLust - an opensource lightweight PHP MVC Framework
 * ------------------------------------------------------------------
 *
 * MIT License
 * 
 * Copyright (c) 2020 Ronald M. Marasigan
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package LavaLust
 * @author Ronald M. Marasigan <ronald.marasigan@yahoo.com>
 * @copyright Copyright 2020 (https://ronmarasigan.github.io)
 * @since Version 1
 * @link https://lavalust.pinoywap.org
 * @license https://opensource.org/licenses/MIT MIT License
 */

/*
| -------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------
| Here is where you can register web routes for your application.
|
|
*/
/* HomeController*/
$router->get('/', 'Home::index');
$router->get('/Contact', 'Home::Contact');
$router->get('/About', 'Home::About');




$router->get('/LGULogin', 'Home::LGULogin');

$router->get('/AdminLogin', 'Home::AdminLogin');

/* AdminController*/
$router->get('/home', 'Admin::home');
$router->get('/Dashboard', 'Admin::Dashboard');
$router->get('/ChangePass', 'Admin::ChangePass');
$router->get('/OrminDash', 'Admin::OrminDash');
$router->get('/OrminTab', 'Admin::OrminTab');
$router->get('/OcciDash', 'Admin::OcciDash');
$router->get('/OcciTab', 'Admin::OcciTab');
$router->get('/PalDash', 'Admin::PalDash');
$router->get('/PalTab', 'Admin::PalTab');
$router->get('/RomDash', 'Admin::RomDash');
$router->get('/RomTab', 'Admin::RomTab');
$router->get('/MarDash', 'Admin::MarDash');
$router->get('/MarTab', 'Admin::MarTab');
$router->get('/Table', 'Admin::Table');
$router->get('/Report', 'Admin::Report');


/* UserController*/
$router->get('/Main', 'User::Main');
$router->get('/UserDashboard', 'User::UserDashboard');
$router->get('/UserTable', 'User::UserTable');
$router->get('/UserReport', 'User::UserReport');
$router->get('/ResetPass', 'User::ResetPass');