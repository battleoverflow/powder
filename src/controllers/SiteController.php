<?php
/*
    Project: Powder (https://github.com/azazelm3dj3d/powder)
    Author: azazelm3dj3d (https://github.com/azazelm3dj3d)
    License: BSD 2-Clause
*/

namespace powder\controllers;

use Jinx\Controller;

class SiteController extends Controller
{
    /*
        Basic controller for rendering static pages
    */

    // GET home page
    public function home()
    {
        $params = [
            'name' => "Powder"
        ];

        return $this->render('home', $params);
    }
}
