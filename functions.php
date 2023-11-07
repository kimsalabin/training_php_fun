<?php 
  // declare(strict_types=1); // DEKRARASIKAN STRICT TYPE


//FUNCTION
  function pesan() {
    echo "Hello world!";
  }

  pesan();

  echo "<br>";

//FUNCTION DENGAN ARGUMENT
  function pesanUntuk($nama) {
    echo "Hello $nama!<br>";
  }

  pesanUntuk("Imam");
  pesanUntuk("KIM");
  pesanUntuk("John");

//FUNCTION DENGAN DEFAULT ARGUMENT
  function pesanDefault($nama="Imam") {
    echo "Hello $nama!<br>";
  }

  pesanDefault(); 



//AKTIFKAN STRICT_TYPE UNTUK MEMASTIKAN TIPE DATA YANG MASUK SESUAI DENGAN YANG DIDEKLARASIKAN
  function jumlahkan(int $a, int $b) {
    return $a + $b;
  }

  echo jumlahkan(5, "5");
?>