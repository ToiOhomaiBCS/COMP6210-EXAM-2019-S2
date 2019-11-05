<?php

require_once dirname(__DIR__).'/vendor/autoload.php';
use PHPUnit\Framework\TestCase;

class ExamTest extends TestCase
{
  public function testYourName()
  {
    $name = "YOUR_NAME";
    $idnumber = "000000000";

    $exercise = new \YOUR_WORK\Exercise();

    $expected = "Student name: $name & Number: $idnumber";

    $this->assertNotEquals($expected, $exercise->YourName());
  }

  public function testReturnHelloWorld() {
    $exercise = new \YOUR_WORK\Exercise();

    $expected = "Hello World";

    $this->assertEquals($expected, $exercise->printHelloWorld());
    $this->assertEquals(substr($expected, 0, 1) === "H", substr($exercise->printHelloWorld(), 0, 1) === "H");
  }

  public function testListPeopleStartingWithM()
  {
    $data = file_get_contents(dirname(__DIR__).'/YOUR_WORK/data.json');
    $array = json_decode($data, true);

    $exercise = new \YOUR_WORK\Exercise();

    $expected = [];

    foreach($array as $person)
    {
      ($person["first_name"][0] === "M") ? array_push($expected, $person) : null;
    }

    $this->assertEquals($expected, $exercise->listPeopleStartingWithM());
  }

  


}