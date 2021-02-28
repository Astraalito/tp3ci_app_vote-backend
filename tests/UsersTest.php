<?php
// Tests/Entity/UsersTest.php
namespace App\Tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UsersTest extends TestCase
{
    public function testUsername()
    {
        $user = new User();
        $user->setUsername("userTest");
        $this->assertEquals("userTest", $user->getUsername());
    }
    public function testPassword()
    {
        $user = new User();
        $user->setPassword("passwordTest");
        $this->assertEquals("passwordTest", $user->getPassword());
    }
    public function testAdmin()
    {
        $user = new User();
        $user->setAdmin(true);
        $this->assertTrue($user->getAdmin());
    }
}