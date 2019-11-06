<?php

namespace YOUR_WORK;

class Exam2019
{

}

////// DO NOT EDIT THE CODE BELOW - CHECK IT IN THE BROWSER ////////

$exam2019 = new Exam2019();

echo "QUESTION 01"."<br>";
echo $exam2019->YourName("Jeff", 9980349).' [ Student name: YOUR NAME & Number: YOUR ID NUMBER ]';
echo "<hr>";

echo "QUESTION 02"."<br>";
echo $exam2019->HelloWorld().' [ Hello World ]';
echo "<br>";
echo $exam2019->HelloWorld()[0].' [ H ]';
echo "<br>";
echo $exam2019->HelloWorld()[6].' [ W ]';
echo "<hr>";

echo "QUESTION 03"."<br>";
echo $exam2019->CarsFromAParticularYear(1993).' [9]';
echo "<br>";
echo $exam2019->CarsFromAParticularYear(1998).' [4]';
echo "<br>";
echo $exam2019->CarsFromAParticularYear(2001).' [4]';
echo "<hr>";

echo "QUESTION 04"."<br>";
echo $exam2019->NumberOfFords().' [8]';
echo "<hr>";

echo "QUESTION 05"."<br>";
echo join(", ", $exam2019->WhoHasSelectedCar('ford')).' [ ]';
echo "<br>";
echo join(", ", $exam2019->WhoHasSelectedCar('Toyota')).' [ Teri ]';
echo "<br>";
echo join(", ", $exam2019->WhoHasSelectedCar('Subaru')).' [ Madelyn, Athene, Jackie, Netta, Saleem ]' ;
echo "<hr>";

echo "QUESTION 06"."<br>";
echo $exam2019->CountAndListMales().' [ Number of Males - 49 ]';
echo "<hr>";

echo "QUESTION 07"."<br>";
echo $exam2019->ListFirstAndLastName()." <br> [ 
Ad Senchenko <br> Eolanda Waszczyk <br> Diego Knell <br> Madelyn Housbey <br> Petr Burnel <br> Leandra Szapiro <br> Buffy Blessed <br> Malia Holdin <br> Cletus Trank <br> Hurleigh Pinnere <br> Arabela Richford <br> Vail Cosby <br> Rickey Lott <br> Athene Darnbrook <br> Carree Hollyman <br> Lu Davie <br> Had Gawler <br> Ericha Timoney <br> Ashlan Jaegar <br> Jorgan Traise <br> Novelia Scalia <br> Jackie Demkowicz <br> Lynde Mantz <br> Ricard Stainton - Skinn <br> Waverly Adamkiewicz <br> Kinnie Tames <br> Robbin Caush <br> Willem Sidsaff <br> Gates Searson <br> Barrett MacGregor <br> Nicolai Skedgell <br> Junina Elner <br> Cyndia Mowsdale <br> Mayne Gyse <br> Odelle McHugh <br> Tomi Andriveaux <br> Alva Rioch <br> Essy Vasyushkhin <br> Jdavie Barnshaw <br> Brigham Bradwell <br> Rustie Jaycox <br> Stu Gallandre <br> Byrann O'Sesnane <br> Jeffy Kures <br> Netta McClancy <br> Franny Cardenoso <br> Horacio Cominotti <br> Hadlee Berendsen <br> Neal Trebbett <br> Kermit Dudill <br> Aleksandr Jozaitis <br> Patsy Billing <br> Shanda Warters <br> Currey Eastman <br> Aretha Andreou <br> Nicolina Redhouse <br> Dominica Greenhalf <br> Clevie Ransome <br> Perrine Bownde <br> Stephannie Lyver <br> Hedda Worling <br> Wallie Iacabucci <br> Kerby Groucock <br> Saleem Beine <br> Inessa Shewsmith <br> Dacie O'Crevan <br> Roobbie Perrat <br> Annemarie Corner <br> Blythe Beert <br> Lilias Le Merchant <br> Arabella Rickets <br> Xena Shire <br> King Steanyng <br> Lynnelle Blonden <br> Gavan Headey <br> Kerri Faulkes <br> Hastie Junes <br> Philis Eicheler <br> Ardys Iremonger <br> Melanie Lapwood <br> Oberon Mordaunt <br> Riccardo Renad <br> Ignace Muslim <br> Bengt Boner <br> Dina Shrimptone <br> Penelopa Dilon <br> Nicolas Sharpley <br> Royall Dupoy <br> Walt Penk <br> Teri Yuill <br> Padriac Hirtzmann <br> Paloma Echalie <br> Ingamar Labuschagne <br> Armin Lias <br> Remus Kennham <br> Trevar Matonin <br> Jaquenetta Rotlauf <br> Holly Romans <br> Walliw D'Oyley <br> Leila Leathers ]";
echo "<hr>";

echo "QUESTION 08"."<br>";
echo $exam2019->SumOfTwoNumbers(2, 4).' [ 6 ] <br>';
echo $exam2019->SumOfTwoNumbers(6, 40).' [ 46 ] <br>';
echo $exam2019->SumOfTwoNumbers(12, 14).' [ 30 ] <br>';
echo "<hr>";

echo "QUESTION 09"."<br>";
echo $exam2019->ProductOfThreeNumbers(2, 4, 3).' [ 24 ] <br>';
echo $exam2019->ProductOfThreeNumbers(6, 4, 2).' [ 48 ] <br>';
echo $exam2019->ProductOfThreeNumbers(1, 1, 1).' [ 1 ] <br>';
echo "<hr>";

echo "QUESTION 10"."<br>";
echo $exam2019->CountAllRecords().' [ 100 ]';
echo "<hr>";

echo "QUESTION 11"."<br>";
echo $exam2019->CheckEqualValues(5, "5").' [ 1 ] <br>';
echo $exam2019->CheckEqualValues(6, "5").' [ 0 ] <br>';
echo $exam2019->CheckEqualValues(7, "5").' [ 0 ] <br>';
echo "<hr>";

echo "QUESTION 12"."<br>";
echo $exam2019->CheckEqualValueAndTypes(5, 5).' [ 1 ] <br>';
echo $exam2019->CheckEqualValueAndTypes(5, '5').' [ 0 ] <br>';
echo $exam2019->CheckEqualValueAndTypes(6, 6).' [ 1 ] <br>';
echo "<hr>";

echo "QUESTION 13"."<br>";
echo $exam2019->ListAllNamesStartingWith("F").' [ Franny ] <br>';
echo $exam2019->ListAllNamesStartingWith("G").' [ Gates Gavan ] <br>';
echo "<hr>";

echo "QUESTION 14"."<br>";
echo join(", ", $exam2019->FourDayIncludedMonday()).' [ Monday, Tuesday, Wednesday, Thursday ]';
echo "<hr>";

echo "QUESTION 15"."<br>";
echo join(", ", $exam2019->FourDayNotIncludedMonday()).' [ Tuesday, Wednesday, Thursday, Friday ]';
echo "<hr>";