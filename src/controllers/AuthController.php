<?php
/*
    Project: Powder (https://github.com/azazelm3dj3d/powder)
    License: BSD 2-Clause

    Author: azazelm3dj3d (https://github.com/azazelm3dj3d)
*/

namespace powder\controllers;

use Jinx\Controller;
use Jinx\Request;
use Jinx\Jinx;
use Jinx\Response;
use Jinx\Middleware\AuthMiddleware;

use powder\models\User;
use powder\models\Login;

class AuthController extends Controller
{
    public function __construct()
    {
        // Restrict pages to only be available if logged in
        $this->registerMiddleware(new AuthMiddleware([
            'profile',
        ]));
    }

    public function login(Request $request, Response $response)
    {
        /*
            Configures the login page
        */

        $login_form = new Login();

        if ($request->postMethod()) {
            $login_form->loadData($request->getBody());

            // Validates the user is actually allowed to access the resources being requested
            if ($login_form->validate() && $login_form->login()) {
                // Redirects user to the profile page after being authenticated
                $response->redirect('/profile');
                return;
            }
        }

        // Set the layout to 'layouts/auth.php'
        $this->setLayout('main');

        // Renders login page (view) and sets Login model
        return $this->render('login', [
            'model' => $login_form
        ]);
    }

    public function register(Request $request)
    {
        /*
            Configures the registration page
        */

        $user_model = new User();

        if ($request->postMethod()) {
            $user_model->loadData($request->getBody());

            // Only register if all parameters are met and valid
            if ($user_model->validate() && $user_model->save()) {
                // Redirects to path if registation was successful
                Jinx::$jinx->response->redirect('/login');
                exit;
            }

            // Renders register page (view) and sets User model
            return $this->render('register', [
                'model' => $user_model
            ]);
        }

        // Set the layout to 'layouts/auth.php'
        $this->setLayout('main');

        // Renders register page (view) and sets User model
        return $this->render('register', [
            'model' => $user_model
        ]);
    }

    public function logout(Request $request, Response $response)
    {
        /*
            Handles logout. When the user logs out, they'll be redirected to the homepage
        */
        
        Jinx::$jinx->logout();
        $response->redirect('/');
    }

    public function profile()
    {
        /*
            Renders the profile page
        */
        
        return $this->render('profile');
    }
}