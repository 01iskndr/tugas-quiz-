<?php

/*  Soal 1
    Terdapat sebuah variabel bertipe data array di bawah ini, Tuliskan
    syntax untuk menampilkan kota 'Bandung'
*/
$array = ['Jakarta', 'Surabaya', 'Bandung', 'Malang', 'Jogjakarta'];

// +++++ Jawaban Soal +++++
print($array[2]);

// +++++ End jawaban +++++

/*  Soal 2
    Tuliskan sebuah syntax untuk mengecek Suatu bilangan merupakan sebuah bilang Genap atau ganjil
    menggunakan operator perbandingan dan Operator Conditional Assignment, hasil dari
    perbandingan di masukkan ke variabel $hasil
*/
$angka = rand(1, 50);
// +++++ Jawaban soal (Lengkapi syntax di bawah ini) +++++
if ($angka %1 ==0){
    print ("bilangan ganjil");
}elseif($angka %2 ==0){
    print("bilangan genap");
}

$hasil =$angka;
print($hasil."\n");

// ++++ End jawaban ++++

/*  Soal 3
    Terdapat 2 buah variabel ber tipe data string di bawah ini, Gabungkan 2 variabel
    string tersebut sehingga menjadi 1

*/
$string1 = "From zero ";
$string2 = "to Hero";

// +++++ Jawaban (Lengjapi syntax di bawah ini) +++++
$hasil_gabungan = $string1.$string2;

print($hasil_gabungan);

// +++++ End Jawaban +++++

 

?>