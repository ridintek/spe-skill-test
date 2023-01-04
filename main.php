<?php

/**
 * Author: Riyan Widiyanto
 * Date: 2023-01-04 11:03:52
 */

declare(strict_types=1);

class SpeSkillTest
{
  /**
   * Narcissistic
   * 
   * Angka diubah menjadi string dan dipecah menjadi array of char.
   * Lalu array of char ($n) di power oleh ukuran ($len) sesuai
   * panjang angka, lalu ditambahkan disetiap hasil.
   * 
   * Jika hasil penambahan ($sum) sama dengan angka awal ($num) maka,
   * return TRUE.
   */
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

  /**
   * parityOutlier
   * 
   * $data yang berupa array of int. Di loopkan dan dibuat sebuah
   * pengecekan modulus (item % 2), jika hasil modulus 0 berarti genap,
   * sebaliknya (hasil 1) ganjil. Yang ganjil di push ke array $ganjil,
   * yang genap di push ke array $genap.
   * 
   * Jika jumlah count($genap) sama dengan 1, maka ambil index pertama genap.
   * Jika ganjil, jika count($genap) == 0 maka FALSE, sebaliknya gambil $ganjil
   * pada index pertama $ganjil[0]
   */
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

  /**
   * findNeedle
   * 
   * Haystack berupa data array of int yang dibuat looping, di compare
   * dengan $needle / key jika sama maka break (selesai). $count sebagai
   * penghitung looping yang akan menjadi index.
   */
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

  /**
   * blueOcean
   * 
   * $remove sebagai array of int dibuat looping, sementara terdapat
   * forever looping sebagai pencarian value menggunakan array_search,
   * jika ada value nya, maka array nya di unset berdasarkan $key, jika
   * tidak ada break forever loop (while(1))
   */
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
