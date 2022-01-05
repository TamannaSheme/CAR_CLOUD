<?php
class UserTest extends \PHPUnit_Framework_TestCase{

    public function testThatWeCanGetTheFirstName(){

        $user = new App\models\User;
        $user->setFirstName(' Syeda Tamanna');
        $this->assertEquals($user->getFirstName(), ' Syeda Tamanna');
}

    public function testThatWeCanGetTheLastName(){

        $user = new App\models\User;
        $user->setLastName('Sheme');
        $this->assertEquals($user->getLastName(), 'Sheme');
    }

public function testFullNameIsReturned(){
       $user = new \App\models\User;
       $user->setFirstName('Syeda Tamanna');
       $user->setLastName( 'Sheme');
       $this->assertEquals($user->getFullName(), 'Syeda Tamanna Sheme');
}

public function testEmailAddressCanBeSet()
{
    $email = 'shemesyedatamanna@gmail.com';
    $user = new \App\models\User;
    $user->setEmail('shemesyedatamanna@gmail.com');
    $this->assertEquals($user->getEmail(), 'shemesyedatamanna@gmail.com');
}

//mobileNumber, Password
    public function testFuncExists() {
        $this->assertTrue(function_exists('password_verify'));
    }

    public function testFailedType() {
        $this->assertFalse(password_verify(774534, 774534));
    }

    public function testSaltOnly() {
        $this->assertFalse(password_verify('foo', '$2a$07$usesomesillystringforsalt$'));
    }

    public function testInvalidPassword() {
        $this->assertFalse(password_verify('rasmusler', '$2a$07$usesomesillystringfore2uDLvp1Ii2e./U9C8sBjqp8I90dH6hi'));
    }

    public function testValidPassword() {
        $this->assertTrue(password_verify('rasmuslerdorf', '$2a$07$usesomesillystringfore2uDLvp1Ii2e./U9C8sBjqp8I90dH6hi'));
    }

    public function testInValidHash() {
        $this->assertFalse(password_verify('rasmuslerdorf', '$2a$07$usesomesillystringfore2uDLvp1Ii2e./U9C8sBjqp8I90dH6hj'));
    }
}