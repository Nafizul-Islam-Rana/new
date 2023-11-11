<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login($email, $password)
    {
        // Replace this with your actual logic for checking credentials
        $validCredentials = $this->validateCredentials($email, $password);

        if ($validCredentials) {
            return 'Login successful';
        } else {
            return 'Invalid credentials';
        }
    }

    // Simulate a function to check if credentials are valid
    private function validateCredentials($email, $password)
    {
        // Replace this with your actual logic for validating credentials
        $validEmail = 'test@example.com';
        $validPassword = 'secret';

        return $email === $validEmail && $password === $validPassword;
    }
}
