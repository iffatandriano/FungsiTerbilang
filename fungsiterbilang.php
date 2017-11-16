<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Fungsi Terbilang</title>
  </head>
  <body>
    <?php
      function penyebut($nilai){
        $nilai = abs($nilai);
        $huruf = array ("", 'satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan', 'sepuluh', 'sebelas');
        $temp = " ";
        if ($nilai < 12) {
          $temp = " " . $huruf[$nilai];
        }elseif ($nilai < 20) {
          $temp = penyebut($nilai - 10) . " belas";
        }elseif ($nilai < 100) {
          $temp = penyebut ($nilai / 10) . " puluh" . penyebut($nilai % 10);
        }elseif ($nilai < 200) {
          $temp = "seratus" . penyebut($nilai-100);
        }elseif ($nilai < 1000) {
          $temp = penyebut ($nilai / 100) . " ratus" . penyebut ($nilai % 100);
        }elseif ($nilai < 2000) {
          $temp = "seribu" . penyebut($nilai-1000);
      }elseif ($nilai < 1000000) {
        $temp = penyebut ($nilai / 1000) . " ribu" . penyebut ($nilai % 1000);
      }elseif ($nilai < 100000000) {
        $temp = penyebut ($nilai / 1000000) . " juta" . penyebut ($nilai % 1000000);
      }elseif ($nilai < 1000000000000) {
        $temp = penyebut ($nilai / 100000000) . " milyar" . penyebut (fmod($nilai % 1000000000));
      }elseif ($nilai < 1000000000000000) {
        $temp = penyebut ($nilai / 1000000000000) . " triliun" . penyebut (fmod($nilai % 100000000000));
      }
      return $temp;
    }

      function terbilang($nilai) {
        if ($nilai < 0) {
          $hasil = "minus" . trim(penyebut($nilai));
        }else {
          $hasil = trim(penyebut($nilai));
        }
        return $hasil;
      }

      $angka = 1032568;
      echo terbilang($angka);
     ?>
  </body>
</html>
