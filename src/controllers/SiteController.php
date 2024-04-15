<?php
/*
    Project: Powder (https://github.com/battleoverflow/powder)
    License: BSD 2-Clause

    Author: battleoverflow (https://github.com/battleoverflow)
*/

namespace powder\controllers;

use Jinx\Controller;

class SiteController extends Controller {
    /*
        Basic controller for rendering static pages
    */

    // GET home page
    public function home() {
        $params = [
            'name' => "Powder"
        ];

        return $this->render('home', $params);
    }
}
