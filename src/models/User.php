<?php
/*
    Project: Powder (https://github.com/battleoverflow/powder)
    License: BSD 2-Clause

    Author: battleoverflow (https://github.com/battleoverflow)
*/

namespace powder\models;

use Jinx\UserModel;

class User extends UserModel {
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_DELETED = 2;

    // Registration form inputs
    public int $status = self::STATUS_INACTIVE;
    public string $profile_img = '';
    public string $first_name = '';
    public string $last_name = '';
    public string $username = '';
    public string $email = '';
    public string $password = '';
    public string $confirmPassword = '';
    public string $github_username = '';


    public static function tableName(): string {
        // Name of the table in the database
        return 'users';
    }

    public static function primaryKey(): string {
        return 'id';
    }

    public function save() {
        $this->status = self::STATUS_INACTIVE;

        // Default password hash for user's password
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        return parent::save();
    }

    public function rules(): array {
        // Assigns the required constants for inputs
        return [
            'profile_img' => [self::RULE_REQUIRED],
            'github_username' => [self::RULE_REQUIRED],
            'first_name' => [self::RULE_REQUIRED],
            'last_name' => [self::RULE_REQUIRED],
            'username' => [self::RULE_REQUIRED, [self::RULE_UNIQUE, 'class' => self::class]],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL, [self::RULE_UNIQUE, 'class' => self::class]],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 32]],
            'confirmPassword' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']],
        ];
    }

    public function attributes(): array {
        return [
            'status',
            'profile_img',
            'github_username',
            'first_name',
            'last_name',
            'username',
            'email',
            'password',
        ];
    }

    public function labels(): array {
        return [
            'profile_img' => 'Profile Image',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'username' => 'Username',
            'email' => 'Email',
            'github_username' => "GitHub Username",
            'password' => 'Password',
            'confirmPassword' => 'Confirm Password',
        ];
    }

    public function getProfileImg(): string {
        // Collects the user's profile image
        return $this->profile_img;
    }

    public function getName(): string {
        // Collects the user's first and last name
        return $this->first_name." ".$this->last_name;
    }

    public function getUsername(): string {
        // Collects the user's username
        return $this->username;
    }

    public function getEmail(): string {
        // Collects the user's email
        return $this->email;
    }

    public function getGithubUrl(): string {
        // Collects the user's GitHub url
        return 'https://github.com/'.$this->github_username;
    }

    public function getGithubUsername(): string {
        // Collects the user's GitHub username
        return $this->github_username;
    }
}
