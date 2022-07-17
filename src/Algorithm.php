<?php
/*1. Write a PHP program to compute the sum of the two given integer values. If the two values are the same, then returns triple their sum.
Sample Input
1, 2
3, 2
2, 2
Sample Output:
3
5
12*/
echo "------Exercise 1-----<br>";
echo exercise_1(2,2)."\n";
echo exercise_1(2,1)."\n";

function exercise_1 ($num1,$num2)
{
    $sum = $num1 + $num2;
    if ($num1 === $num2){
      $sum = $sum * 3;
    }
    return $sum;
}
/* 2. Write a PHP program to get the absolute difference between n and 51. If n is greater than 51 return triple the absolute difference.
Sample Input:
53
30
51
Sample Output:
6
21
0*/
echo "<br><br>------Exercise 2-----<br>";
echo exercise_2(53)."\n";

function exercise_2 ($num1)
{
    $diff = $num1 - 51;

    if ($num1 > 51){
      $diff = $diff * 3;
    }
    return $diff;
}

/* 3.Write a PHP program to check two given integers, and return true if one of them is 30 or if their sum is 30. Go to the editor
Sample Input:
30, 0
25, 5
20, 30
20, 25
Sample Output:
bool(true)
bool(true)
bool(true)
bool(false)
*/
echo "<br><br>------Exercise 3-----<br>";
echo exercise_3(30,54)."\n";

function exercise_3 ($num1,$num2)
{
    if( $num1 === 30 || $num2 === 30 )
    {
        return "true";
    }
    else
    {
        if ( ($num1 + $num2) === 30 )
        {
            return "true";
        }
        else return "false";
    }
}
/* 6. Write a PHP program to remove the character in a given position of a given string.
The given position will be in the range 0..string length -1 inclusive.
Sample Input:
"Python", 1
"Python", o
"Python", 4
Sample Output:
Pthon
ython
Pythn
*/
echo "<br><br>------Exercise 6-----<br>";
echo exercise_6("python",-5)."<br>";
echo exercise_6("python",5)."<br>";

function exercise_6 ($word,$pos)
{
    $array= str_split($word);

    if($pos >= 0)
    {
        for ($x = 0; $x <= count($array) ; $x++) {
            if ($x != $pos)
            {
                $res .= $array[$x];
            }

        }
    }else{
        $array = str_split( strrev($word) );
        for ($x = 0; $x <= count($array) ; $x++) {
            if ($x != ( -1 * $pos ))
            {
                $res .= $array[$x];
            }

        }
        $res = strrev($res) ;
    }


    //$res = substr($word,$pos);
    return $res;
}


/* 7. Write a PHP program to exchange the first and last characters in a given string and return the new string.
Sample Input:
"abcd"
"a"
"xy"
Sample output:
dbca
a
yx
*/

echo "<br><br>------Exercise 7-----<br>";
echo exercise_7("python")."<br>";
echo exercise_7("pepe")."<br>";

function exercise_7 ($word)
{
    $array= str_split($word);
    $first_character = $array[0];
    $last_position =  count($array) - 1 ;
    $last_character = $array[$last_position];

    $res = substr_replace($word,$last_character,0,1);
    $res = substr_replace($res,$first_character,$last_position,1);
    return $res;
}


