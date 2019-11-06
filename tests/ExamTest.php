<?php

require_once dirname(__DIR__).'/vendor/autoload.php';
use PHPUnit\Framework\TestCase;

class ExamTest extends TestCase
{
  public function test_Q01_YourName() {
    $name = "";
    $idnumber = 0;

    $exam = new \YOUR_WORK\Exam2019();
    $expected = "Student name: $name & Number: $idnumber";

    $this->assertNotEquals($expected, $exam->YourName("YOUR_NAME", 00000000));
    $this->assertEquals($expected, $exam->YourName($name, $idnumber));
    $this->assertNotEquals($name, "YOUR_NAME");
    $this->assertGreaterThan($idnumber, 1000000);
  }

  public function test_Q02_HelloWorld() {
    
    $exam = new \YOUR_WORK\Exam2019();
    $expected = "Hello World";

    $this->assertEquals($expected, $exam->HelloWorld());
    $this->assertEquals("H", $exam->HelloWorld()[0]);
    $this->assertEquals("W", $exam->HelloWorld()[6]);
  }


  public function test_Q03_CheckIfMondayIsPartOfArray()
  {
    $exam = new \YOUR_WORK\Exam2019();

    $needle = "Monday";

    $this->assertContains($needle, $exam->FourDayIncludedMonday());
  }

  public function test_Q04_CheckIfMondayIsNotPartOfArray()
  {
    $exam = new \YOUR_WORK\Exam2019();

    $needle = "Monday";

    $this->assertNotContains($needle, $exam->FourDayNotIncludedMonday());
  }

  public function test_Q05_SumOfTwoNumbers()
  {
     $exam = new \YOUR_WORK\Exam2019();

     $num1 = NULL; 
     $num2 = NULL;

     $expected = $num1 + $num2;

     $this->assertEquals($expected, $exam->SumOfTwoNumbers($num1, $num2));
  }

  public function test_Q06_ProductOfThreeNumbers()
  {
    $exam = new \YOUR_WORK\Exam2019();

    $num1 = NULL; 
    $num2 = NULL;
    $num3 = NULL;

    $expected = $num1 * $num2 * $num3;

    $this->assertEquals($expected, $exam->ProductOfThreeNumbers($num1, $num2, $num3));
  }

  public function test_Q07_CheckEqualValues()
  {
    $exam = new \YOUR_WORK\Exam2019();

    $a = 5;
    $b = "5";

    $expected = ($a == $b);
  
    $this->assertTrue($expected);
    $this->assertEquals($expected, $exam->CheckEqualValues($a, $b));
  }

  public function test_Q08_CheckEqualValueAndTypes()
  {
    $exam = new \YOUR_WORK\Exam2019();

    $a = 5;
    $b = 5;

    $expected = ($a === $b);
  
    $this->assertTrue($expected);
    $this->assertEquals($expected, $exam->CheckEqualValueAndTypes($a, $b));
  }

  public function test_Q09_ShowNumberOfCarsFromASelectedYear()
  {
      $data = file_get_contents(dirname(__DIR__).'/YOUR_WORK/data.json');
      $array = json_decode($data, true);

      $year = NULL;
      $total = 0;

      foreach($array as $item)
      {
        $total = ($item["car_year"] === $year) ? $total + 1 : $total + 0;
      }

      $exam = new \YOUR_WORK\Exam2019();
      $expected = $total;

      $this->assertEquals($total, $exam->CarsFromAParticularYear($year));
  }

  public function test_Q10_ShowNumberOfFords()
  {
      $data = file_get_contents(dirname(__DIR__).'/YOUR_WORK/data.json');
      $array = json_decode($data, true);

      $exam = new \YOUR_WORK\Exam2019();
      $expected = 8;

      $this->assertEquals($expected, $exam->NumberOfFords());
  }

  public function test_Q11_WhichPeopleHaveTheFollowCar()
  {
      $data = file_get_contents(dirname(__DIR__).'/YOUR_WORK/data.json');
      $array = json_decode($data, true);

      $exam = new \YOUR_WORK\Exam2019();

      $make = NULL;

      $hasCar = [];

      foreach($array as $item)
      {
        if($item["car_make"] === $make)
        {
          array_push($hasCar, $item["first_name"]);
        }
      }

      $this->assertEquals($hasCar, $exam->WhoHasSelectedCar($make));
  }

  public function test_Q12_CountAndListNumberOfMales()
  {
    $data = file_get_contents(dirname(__DIR__).'/YOUR_WORK/data.json');
    $array = json_decode($data, true);

    $exam = new \YOUR_WORK\Exam2019();

    $people = [];

    foreach($array as $item)
    {
      if($item["gender"] === "Male")
      {
        array_push($people, $item);
      }
    }

    $output = "Number of Males - ".count($people);

    $this->assertEquals($output, $exam->CountAndListMales());
  }

  public function test_Q13_ListFirstAndLastName()
  {
    $data = file_get_contents(dirname(__DIR__).'/YOUR_WORK/data.json');
    $array = json_decode($data, true);

    $exam = new \YOUR_WORK\Exam2019();

    $output = "";

    foreach($array as $item)
    {
      $output .= "{$item["first_name"]} {$item["last_name"]}<br>";
    }

    $this->assertEquals($output, $exam->ListFirstAndLastName());
  }

  public function test_Q14_CountAllRecords()
  {
    $data = file_get_contents(dirname(__DIR__).'/YOUR_WORK/data.json');
    $array = json_decode($data, true);

    $exam = new \YOUR_WORK\Exam2019();

    $expected = 100;

    $this->assertTrue($expected === $exam->CountAllRecords());
  }

  public function test_Q15_ListAllNamesStartingWithLetter()
  {
    $data = file_get_contents(dirname(__DIR__).'/YOUR_WORK/data.json');
    $array = json_decode($data, true);

    $exam = new \YOUR_WORK\Exam2019();
    $expected = "Franny<br>";

    $checkedNames = [];

    $letter = "F";

    foreach($array as $item)
    {
      if($item["first_name"][0] === $letter) {
        array_push($checkedNames, $item);
      }
    }

    $output = "";

    foreach($checkedNames as $item)
    {
      $output .= $item["first_name"]."<br>";
    }

    $this->assertEquals($expected, $exam->ListAllNamesStartingWith("F"));
  }


}