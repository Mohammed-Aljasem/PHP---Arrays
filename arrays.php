<?php
// ================Q1===================
// $colors = array('white', 'green', 'red', 'blue', 'black');
// 
?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
  <div>
    <p>The memory of that scene for me is like a frame of film forever frozen at that
      moment: the <?php echo $colors[2] ?> carpet, the <?php echo $colors[1] ?> lawn, the <?php echo $colors[0] ?> house, the leaden sky. The
      new president and his first lady. - Richard M. Nixon</p>
    </ul>
  </div>
</body>

</html> -->
<?php
//================Q2===================
// $colors = array('white', 'green', 'red');
// asort($colors);
?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
  <div>
    <ul>
      <?php foreach ($colors as $color) { ?>
        <li class="nav-item">
          <?php echo $color ?>
        </li>
      <?php }  ?>
    </ul>
  </div>
</body>

</html> -->

<?php
//===============Q3===================
// $cities = array(
//   "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" =>
//   "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" =>
//   "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin",
//   "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
//   "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United
// Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech
// Republic" => "Prague", "Estonia" => "Tallinn", "Hungary" => "Budapest"
// );
// 
?>
<!-- <!DOCTYPE html>
<html lang="en">
  
  <head>
    </head>
    
    <body>
      <div>
        <?php foreach ($cities as $key => $value) { ?>
          <p>
            The capital of <?php echo $key . " is " . $value . "<br>" ?>
          </p>
          <?php }  ?>
        </div>
      </body>
      
      </html> -->

<?php
//===============Q4===================
// $numbers = [1, 2, 3, 4, 5];
// echo '<pre>';
// print_r($numbers);
// array_splice($numbers, 3, 1);
// print_r($numbers);


//===============Q5===================
// $colors = array(4 => 'white', 6 => 'green', 11 => 'red');
// print_r(array_slice($colors, 0, 1));


//===============Q7===================
// $numbers = [1, 2, 3, 4, 5];
// echo '<pre>';
// print_r($numbers);
// array_splice($numbers, 3, 0, '$');
// print_r($numbers);


//===============Q8===================

// $grades = [
//   78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
//   73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
// ];


// // $a = array_sum($grades);
// // $x = count($grades);

// // echo $a / $x;
// echo "<pre>";

// arsort($grades);
// $a = array_unique($grades);
// print_r(array_slice($a, 0, 5));
// echo "<hr>";
// print_r(array_slice($a, -5, 5));


//===============Q9===================
// $array1 = array(array(70, 40), array(25, 45));
// $array2 = array("example", "com");

// echo "<pre>";
// print_r(array_merge($array1[0], $array2[0]));



//===============Q12===================
// $array1 = array(array(77, 87), array(23, 45));
// $array2 = array("example", "com");

// function merge_arrays($x, $y)
// {
//   $new = array();

//   $new[] = $x;

//   if (is_scalar($y)) {
//     $new[] = $y;
//   } else {

//     foreach ($y as $k => $v) {
//       $new[] = $v;
//     }
//   }
//   return $new;
// }
// echo '<pre>';
// print_r(array_map('merge_arrays', $array2, $array1));
//===============Q12===================
// $Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
// function lower_to_upper($x, $upper)
// {
//   $case = $upper;
//   $isArray = array();
//   if (!is_array($x)) {
//     return $isArray;
//   }
//   foreach ($x as $key => $value) {
//     if (is_array($value)) {
//       $isArray[$key] = lower_to_upper($value, $case);
//       continue;
//     }
//     $isArray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
//   }
//   return $isArray;
// }

// print_r($Color);
// echo '<br>';
// $myColor = lower_to_upper($Color, CASE_LOWER);
// print_r($myColor);
// echo '<br>';
// $myColor = lower_to_upper($Color, CASE_UPPER);
// print_r($myColor);


//===============Q13===================
// for ($i = 200; $i < 250; $i++) {
//   if ($i % 4 == 0) {
//     $a = [];
//     array_push($a, $i);
//     print_r($a);
//   } else {
//     echo '<hr>';
//   }
// }


//===============Q15===================

// $number = range(11, 20, 1);
// echo "<pre>";
// print_r($number);
// $a = array_rand($number, 9);


// echo $number[$a[0]] . "<br>";
// echo $number[$a[1]] . "<br>";
// echo $number[$a[2]] . "<br>";
// echo $number[$a[3]] . "<br>";
// echo $number[$a[4]] . "<br>";
// echo $number[$a[5]] . "<br>";
// echo $number[$a[6]] . "<br>";
// echo $number[$a[7]] . "<br>";
// echo $number[$a[8]] . "<br>";

//===============Q14===================
// $str = array("abcd","abc","de","hjjj","g","wer");
// $new_str = array_map('strlen', $str);


// echo "The shortest array length is " . min($new_str) .
// ". The longest array length is " . max($new_str).'.';

//===============Q15===================
// $grades = [
//   78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
//   73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
// ];
// echo '<pre>';
// echo '<hr>';
// print_r($grades);
// echo '<hr>';
// $a = uksort($grades, 1);
// echo '<hr>';
// print_r($a);
// echo '<hr>';
// // print_r(array_slice($grades, 0, 1));
//===============Q16===================
// $grades = [
//   78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
//   73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
// ];
// krsort($grades);

// echo "<br>" . key($grades);


//===============Q16===================
// $grades = [
//   78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
//   73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
// ];
// function lowestNumber($x)
// {
//   echo '<pre>';
//   echo '<hr>';
//   arsort($x);
//   print_r(array_slice($x, -1, 1));
// }

// lowestNumber($grades);

//===============Q18===================

// function floorDec($number, $precision, $separator)
// {


//   $number_part = explode($separator, $number);
//   $number_part[1] = substr_replace($number_part[1], $separator, $precision, 0);



//   if ($number_part[0] >= 0) {
//     $number_part[1] = floor($number_part[1]);
//   } else {
//     $number_part[1] = ceil($number_part[1]);
//   }

//   $ceil_number = array($number_part[0], $number_part[1]);
//   return implode($separator, $ceil_number);
// }
// print_r(floorDec(1.155, 2, ".") . "\n");
// print_r(floorDec(100.25781, 4, ".") . "\n");
// print_r(floorDec(-2.9636, 3, ".") . "\n");

//===============Q19===================
// $color = array(
//   "color" => array("a" => "Red", "b" => "Green", "c" => "White"),
//   "numbers" => array(1, 2, 3, 4, 5, 6),
//   "holes" => array("First", 5 => "Second", "Third")
// );
// echo $color["holes"][5] . "\n";
// echo $color["color"]["a"] . "\n";

//===============Q20===================
// $colors = array('green1', 'white1', 'red1');
// $colorss = array('white', 'red', 'green');
// array_multisort($colorss, $colors);
// print_r($colors);
// print_r($colorss);
//===============Q24===================
// function list_array($a, $b)
// {
//   global $order;

//   foreach ($order as $key => $value) {
//     if ($a == $value) {
//       return 0;
//       break;
//     }

//     if ($b == $value) {
//       return 1;
//       break;
//     }
//   }
// }
// usort($array, "list_array");


?>