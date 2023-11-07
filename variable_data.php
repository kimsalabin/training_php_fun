<?php 
//------------------------------------------------------------------------
	echo "<b>VARIABLE</b><br>";
	$name = "Imam";
	echo $name;

	echo "<br><br>--------------------------------------------------------------------<br><br>";

//------------------------------------------------------------------------
	echo "<b>DATA TYPE</b><br>";
	echo "<br><br><b>BOOLEAN</b><br>";
	$bool = true; //TRUE OR FALSE
	echo $bool;

//------------------------------------------------------------------------
	echo "<br><br><b>INTEGER</b><br>";
	$int = 987;
	echo $int;

//------------------------------------------------------------------------
	echo "<br><br><b>FLOAT</b><br>";
	$float = 10.789;
	echo $float;

//------------------------------------------------------------------------
	echo "<br><br><b>STRING</b><br>";
	$string = "Text";
	echo $string;


//------------------------------------------------------------------------
	echo "<br><br><b>ARRAY I</b><br>"; //CARA PEMBUATAN ARRAY
	$angka = [1,2,3,4,5]; //GUNAKAN SALAH SATU CARA PEMBUATAN ARRAY
	$angka = array(1,2,3,4,5); //GUNAKAN SALAH SATU CARA PEMBUATAN ARRAY
	echo $angka[0];

	echo "<br><br><b>ARRAY II</b><br>";
	$siswa = [
			'id'=>1,
			'nama'=>"Nama Siswa 1",
			'kelas'=>"XII A",
		];
	//CEK ISI DATA DALAM ARRAY
	echo "<pre>";
	print_r ($siswa);
	echo "</pre>";
	//END KODE CEK ISI DATA DALAM ARRAY

	//MEMANGGIL/MENDAPATKAN DATA NAMA DALAM $siswa
	echo $siswa['nama'];


	echo "<br><br><b>MULTI DIMENTIONAL ARRAY</b><br>"; //STRUKTUR ARRAY MULTIDIMENSI
	$data_siswa = [
		0 =>[
			'id'=>1,
			'nama'=>"Nama Siswa 1",
			'kelas'=>"XII A",
		],
		1 =>[
			'id'=>2,
			'nama'=>"Nama Siswa 2",
			'kelas'=>"XII B",
		],
	];
	//CEK ISI DATA DALAM ARRAY $data_siswa
	echo "<pre>";
	print_r ($data_siswa);
	echo "</pre>";
	//END KODE CEK ISI DATA DALAM ARRAY $data_siswa

	//MEMANGGIL/MENDAPATKAN DATA NAMA DALAM $data_siswa PADA SISWA DENGAN INDEX KE 0
	echo $data_siswa[0]['nama'];


//------------------------------------------------------------------------
	echo "<br><br><b>OBJECT I</b><br>";
	$obj1 = (object)$angka;
	//CEK ISI DATA DALAM OBJECT $obj1
	echo "<pre>";
	print_r($obj1);
	echo "</pre>";
	//END KODE CEK ISI DATA DALAM OBJECT $obj1

	//MEMANGGIL/MENDAPATKAN DATA INDEX KE 0 DALAM OBJECT $obj1
	echo $obj1->{'0'};


	echo "<br><br><b>OBJECT II</b><br>";
	$obj2 = (object)$siswa;
	//CEK ISI DATA DALAM OBJECT $obj2
	echo "<pre>";
	print_r($obj2);
	echo "</pre>";
	//END KODE CEK ISI DATA DALAM OBJECT $obj2

	//MEMANGGIL/MENDAPATKAN DATA NAMA DALAM OBJECT $obj2
	echo $obj2->nama;


	echo "<br><br><b>MULTI DIMENTIONAL OBJECT</b><br>"; //STRUKTUR OBJECT MULTIDIMENSI
	$obj3 = (object)$data_siswa; //TIDAK BISA MENGGUNAKAN CARA INI UNTUK MULTIDIMENSI OBJECT
	$obj3 = (object)json_decode(json_encode($data_siswa)); //GUNAKAN CARA INI
	//CEK ISI DATA DALAM OBJECT $obj3
	echo "<pre>";
	print_r ($obj3);
	echo "</pre>";
	//END KODE CEK ISI DATA DALAM OBJECT $obj3

	//MEMANGGIL/MENDAPATKAN DATA NAMA DALAM $obj3 PADA SISWA DENGAN INDEX KE 0
	echo $obj3->{'0'}->nama;

//------------------------------------------------------------------------
	echo "<br><br><b>RESOURCE</b><br>";
	$file = fopen("text.txt", "r");
	$text = fgets($file);
	fclose($file);

	echo $text;

//------------------------------------------------------------------------
	echo "<br><br><b>NULL</b><br>";
	$null = null;

	echo $null;
?>