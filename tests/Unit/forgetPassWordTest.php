<?php

use PHPUnit\Framework\TestCase;
class UserTest extends \PHPUnit_Framework_TestCase
{

    public function testUserCanSendForgottenPasswordLink()
    {
        $email = 'some-email';
        $this->call('POST', 'auth/register/', [
            'username' => 'name',
            'email' => $email,
            'password' => 'test1234',
            'password_confirmation' => 'test1234',
        ]);
        $r = $this->call('POST', 'password/email', ['email' => $email]);
        $this->assertSessionHas('status');
    }
}