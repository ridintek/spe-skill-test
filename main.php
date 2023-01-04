<?php

/**
 * Author: Riyan Widiyanto
 * Date: 2023-01-04 11:03:52
 */
declare(strict_types=1);

class SpeSkillTest
{
  public static function narcissistic(int $num)
  {
    $data = str_split(strval($num));
    $len = count($data);
    $sum = 0;

    foreach ($data as $n) {
      $sum += pow($n, $len);
    }

    return ($sum == $num);
  }

  public static function parityOutlier(array $data)
  {
    $ganjil = [];
    $genap = [];

    foreach ($data as $item) {
      if ($item % 2) {
        array_push($ganjil, $item);
      } else {
        array_push($genap, $item);
      }
    }

    return (count($genap) == 1 ? $genap[0] : (!count($genap) ? false : $ganjil[0]));
  }

  public static function findNeedle(array $haystack, string $needle)
  {
    $count = 0;

    if (count($haystack)) {
      foreach ($haystack as $hs) {
        if (strcmp($hs, $needle) === 0) {
          break;
        }
        $count++;
      }
    }

    return $count;
  }

  public static function blueOcean(array $data, array $remove)
  {
    if (count($data) && count($remove)) {
      foreach ($remove as $r) {
        while (1) {
          if (($key = array_search($r, $data)) !== false) {
            unset($data[$key]);
          } else {
            break;
          }
        }
      }
    }
    return $data;
  }
}

// echo var_dump(SpeSkillTest::narcissistic(153));
// echo var_dump(SpeSkillTest::parityOutlier([2, 4, 0, 100, 4, 11, 2602, 36]));
// echo var_dump(SpeSkillTest::parityOutlier([160, 3, 1719, 19, 11, 13, -21]));
// echo var_dump(SpeSkillTest::parityOutlier([11, 13, 15, 19, 9, 13, -21]));
// echo print_r(SpeSkillTest::findNeedle(['red', 'blue', 'yellow', 'black', 'gray'], 'blue'));
// echo print_r(SpeSkillTest::blueOcean([1, 2, 3, 4, 6, 10], [1]));
// echo print_r(SpeSkillTest::blueOcean([1, 5, 5, 5, 5, 3], [5]));
