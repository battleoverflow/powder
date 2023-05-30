<?php
/*
    Project: Powder (https://github.com/azazelm3dj3d/powder)
    License: BSD 2-Clause

    Author: azazelm3dj3d (https://github.com/azazelm3dj3d)
*/

namespace powder\models;

use Jinx\Model;
use Jinx\Jinx;

class Login extends Model
{
    public string $username = '';
    public string $password = '';

    public function rules(): array
    {
        return [
            'username' => [self::RULE_REQUIRED],
            'password' => [self::RULE_REQUIRED],
        ];
    }

    public function labels(): array
    {
        return [
            'username' => 'Username',
            'password' => 'Password',
        ];
    }

    public function login()
    {
        $find_username = User::findUser(['username' => $this->username]);

        // User username does not exist in the db
        if (!$find_username) {
            $this->addError('username', 'User does not exist with this username');
            return false;
        }

        // Password did not pass verification
        if (!password_verify($this->password, $find_username->password)) {
            $this->addError('password', 'Password is incorrect');
            return false;
        }

        return Jinx::$jinx->login($find_username);
    }
}

?>