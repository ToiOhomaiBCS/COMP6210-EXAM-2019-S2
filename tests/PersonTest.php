<?php

require_once dirname(__DIR__).'/vendor/autoload.php';
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
  public function testPrintHelloWorldReturnsHelloWorld() {
    $person = new \mycode\Person("Jeff");

    $expected = "Hello World";

    $this->assertEquals($expected, $person->printHelloWorld());
  }

  public function testPrintHelloWithConstructorValueReturnsGreeting() {

    $name = "Jeff";

    $person = new \mycode\Person($name);

    $expected = "Hello Jeff";

    $this->assertEquals($expected, $person->printGreeting());
  }
}