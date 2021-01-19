<?php
//. Write a PHP script to see if the specified year is a leap year or not
 function yearCheck($year)
 {
    if ($year % 400 == 0)
       echo("$year is a leap year");
    if ($year % 4 == 0)
       echo("$year is a leap year");
    else if ($year % 100 == 0)
       echo("$year is not a leap year");
    else
       echo("$year is not a leap year");
 }
 echo "1. Write a PHP script to see if the specified year is a leap year or not";
 echo "<br>";
 yearCheck(2021);
 echo "<br>";
 echo "<hr>";
 //2. Write a PHP script to check the season depending on set temperature if the
    // temperature is below 20 we are in winter otherwise the season is summer
 function checkSeason($temperature)
 {
     if($temperature<20){
         echo("$temperature Hello Winter");
     }else {
         echo "$temperature Hello Summer";
     }
 }
 echo "2. Write a PHP script to see if it's winter or summer";
 echo "<br>";
 checkSeason(18);
 echo "<br>";
 echo "<hr>";
 //3. Write a PHP script to calculate the sum of the two mapped integers. If the two
     // values are the same, then three times their sum is returned.

 function mappedIntegers($x, $y) 
 {
     if($x == $y){
        echo "Integers Are $x , $y ";
        echo "<br>";
        return ($x+$y)*3;
     }else {
        echo "Integers Are $x , $y ";
        echo "<br>";
        return $x + $y;
     }
    
 }
 echo "3. Write a PHP script to calculate the sum of the two mapped integers";
 echo "<br>";
 echo mappedIntegers(2, 2);
 echo "<br>";
 echo "<hr>";

 //4. Write a PHP script to get the absolute difference between n and 100. If n is
    // greater than 100, return triple the absolute difference.

 function absoluteDiff($n) 
 {
      if ($n > 100)
      {
        echo "Number is $n ";
        echo "<br>";
        return abs($n - 100)*3;
      }
      echo "Number is $n ";
      echo "<br>";
    return abs(100 - $n);
 }
 echo "4. Write a PHP script to get the absolute difference between n and 100.";
 echo "<br>";
 echo absoluteDiff(250);
 echo "<br>";
 echo "<hr>";

 //5. Write PHP script to check two integers, and return true if one is 30 or if their sum
    // is 30.

    function checkIntegers($integer1,$integer2)
    {
        $sum = $integer1+$integer2;
        if ($integer1==30 || $integer2==30 || $sum==30) {
            echo "One of The Integers is 30 or their sum is 30";
            echo "<br>";
            return true;
        }
        echo "not 30";
        echo "<br>";
        return false;
    }
    echo "5. Write a PHP script to check two integers";
    echo "<br>";
    echo checkIntegers(10,20);
    echo "<br>";
    echo "<hr>";

    //6. Write a PHP script to check an integer and return an integer if it is within 10 of
        // 100 or 200.

    function digitChecker($i)
    {
     
      if(abs($i - 100) <= 10 || abs($i - 200) <= 10){
        echo "Number $i is in range";
        echo "<br>";
        return true;
      }
        echo "Number $i is not in range";
        echo "<br>";     
        return false;

    }
    echo "6. Write a PHP script check an integer and return an integer if it is within 10 of 100 or 200.";
    echo "<br>";
    echo digitChecker(110);
    echo "<br>";
    echo "<hr>";

    //7. Write in PHP script to check if the given positive number is a multiple of 3 or a
        // multiple of 7
    function checkPositiveNum($a)
    {
        if($a>0){
            echo "Number $a multiple by 3 or 7";
            echo "<br>";
            return $a % 3 == 0 || $a % 7 == 0;
        }else {
            echo "not positive number";
        }
    }
    echo "7. Write a PHP script to check if the given positive number is a multiple of 3 or 7";
    echo "<br>";
    echo checkPositiveNum(18);
    echo "<br>";
    echo "<hr>";

    //8. Write a PHP script to create a new string where "if" is added to the front of a
        // particular string. If the series really begins with "if," then return the string
        // unchanged.
    function checkStringAddIf($str)
    {
        if (strlen($str) > 2 && substr($str,0, 2) == "if")
            {
                echo "String is $str";
                echo "<br>";
                return $str;
            }
      echo "String is $str";
      echo "<br>";
      return "if".$str;
    }
    echo "8. Write a PHP script to create a new string where 'if' is added to the front of a string";
    echo "<br>";
    echo checkStringAddIf("star");
    echo "<br>";
    echo "<hr>";

    //9. Write a PHP script to remove the character in a specific position from a specific
        //string. The position selected in range 0..1 string length inclusive
    function addCharToString($str1,$position)
    {
        echo "String is $str1 Position is $position";
        echo "<br>";
        return substr($str1,0,$position).substr($str1,$position+1,strlen($str1)-$position);
    }
    echo "9. Write a PHP script to remove the character in a specific position";
    echo "<br>";
    echo addCharToString("Star",1);
    echo "<br>";
    echo "<hr>";

    //10. Write PHP script to check two integers if either is in the range 100..200 inclusive.
    function checkRange($integer3,$integer4)
    {
        echo "Int1 is $integer3 Int2 is $integer4";
        echo "<br>";
        return ($integer3>=100 && $integer4<=200) || ($integer4>=100 && $integer3<=200);
    }
    echo "10. Write PHP script to check two integers if either is in the range 100..200 inclusive.";
    echo "<br>";
    echo checkRange(90,200);
    echo "<br>";
    echo "<hr>";

    //11. Write a PHP script to check if two valid values are in the range of 20.50
        //inclusive. Returns true if 1 or another in the listed range is false.
    function checkRange2($a,$b)
    {
        echo "Int1 is $a Int2 is $b";
        echo "<br>";
        return ($a <= 20 || $b >= 50) || ($b <= 20 || $a >= 50);
    }
    echo "11. Write PHP script to check if two valid values are in the range of 20.50 inclusive.";
    echo "<br>";
    echo checkRange2(10,20);
    echo "<br>";
    echo "<hr>";

    //12. Write PHP script to check for the largest number among three integers
    function maxNum($a,$b,$c)
    {
        echo "Int1 is $a Int2 is $b Int3 is $c";
        echo "<br>";
        $max = max($a, max($b, $c));
        return $max;
    }
    echo "12. Write PHP script to check for the largest number among three integers";
    echo "<br>";
    echo maxNum(2,90,5);
    echo "<br>";
    echo "<hr>";

    //13. Write in PHP script to check the number closest to 100 between two integers.
         // Return 0 if the two numbers are equal

    function closestNum($a,$b)
    {
        $constVal=100;
        $absDiff1=abs($constVal-$a);
        $absDiff2=abs($constVal-$b);
        if($absDiff1<$absDiff2){
            echo "Int1 is $a Int2 is $b";
            echo "<br>";
            echo "closest integer to 100 is $a ";
          
        }elseif($absDiff1>$absDiff2){
            echo "Int1 is $a Int2 is $b";
            echo "<br>";
            echo "closest integer to 100 is $b ";
          
        }else {
            echo "Int1 is $a Int2 is $b";
            echo "<br>";
            echo "Tow integers are equal 0 ";
          
        }

    }
    echo "13. Write PHP script to check  the number closest to 100 between two integers.";
    echo "<br>";
    echo closestNum(2,90);
    echo "<br>";
    echo "<hr>";

    //14. Write a PHP script that accepts two integers and returns an integer if one of them
// is 5, their sum, or difference between them is 5.
    
    function checkIntegers2($a, $d)
    {
        echo "Int1 is $a Int2 is $d";
        echo "<br>";
       return $a == 5 || $d == 5 || $a + $d == 5 || abs($a - $d) == 5;
    }
    echo "13. Write PHP script that accepts two integers and returns an integer";
    echo "<br>";
    echo checkIntegers2(2,3);
    echo "<br>";
    echo "<hr>";
    
?>