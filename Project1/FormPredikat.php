<form action="" method="POST">
    PROGRAM CEK KELULUSAN<br>
    Nilai Ujian : <input type="text" name="nilai">
    <input type="submit" value="hasil">
  </form>
  <?php
    if ($_POST)
    {
      $nilai = $_POST['nilai'];
      if ($nilai >= 90)
      {
        $grade = "A+";
        $keterangan = "LULUS";
      }
      elseif ($nilai >= 80)
      {
        $grade = "A";
        $keterangan = "LULUS";
      }
      if ($nilai >= 70)
      {
        $grade = "B";
        $keterangan = "LULUS";
      }
      if ($nilai >= 60)
      {
        $grade = "C";
        $keterangan = "LULUS";
      }
      else 
      {
        $grade = "D";
        $keterangan = "TIDAK LULUS";
      }
      echo "Hasil Kelulusan";
      echo "<br>";
      echo "Nilai : " . $nilai;
      echo "<br>";
      echo "Keterangan : " . $keterangan;
      echo "<br>";
      echo "Indeks Prestasi :" . $grade;
      
    }
  ?>
