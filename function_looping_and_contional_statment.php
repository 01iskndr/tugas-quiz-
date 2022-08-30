<?php
/*  No 1
    Terdapat sebuah variabel bertipe data array, Tuliskan syntax
    untuk menampilkan semua nilai menggunakan looping For, While dan For Each
*/
$pelangi = ['Merah', 'Jingga', 'Kuning', 'Hijau', 'Biru', 'Nila','Ungu'];
// +++++ Jawaban Soal +++++

for($i=0; $i <count($pelangi); $i++){
    print ($pelangi[$i]);
}
$x = 0;
while($x<count($pelangi)){
    print($pelangi[$x]);
    $x++;
}

foreach($pelangi as $hasil){
    print($hasil);
}
// +++++ End jawaban +++++

/** No 2
 * Tuliskan syntax untuk menampilkan banyaknya jumlah array dari
 * variabel $pelangi di atas menggunakan built in function yang sudah
 * ada di PHP
*/
// +++++ Jawaban Soal +++++
print (count($pelangi));
// +++++ End jawaban +++++

/** No 3
 *  Tuliskan syntax untuk menampilkan nilai terakhir dari variabel array
 *  $pelangi menggunakan built in function yang sudah ada di PHP
*/
// +++++ Jawaban Soal +++++
print(end($pelangi));
// +++++ End jawaban +++++

/** No 4
 *  Tuliskan syntax untuk mengurutkan secara Descending ( z-a ) variable $pelangi
 */
// +++++ Jawaban Soal +++++
 rsort($pelangi);
 foreach($pelangi as $a){
    print($a);
 }
// +++++ End jawaban +++++

/** No 5
 *  Buatlah sebuah function untuk mengecek suatu bilangan termasuk
 *  ke dalam bilangan prima atau bukan prima (bilangan prima merupakan bilangan yang
 *  tidak bisa di bagi dengan bilangan apapun kecuali bilangan itu sendiri dan bilangan 1)
 */
// +++++ Jawaban Soal +++++
function cekBilanganPrima($angka)
{
    # Tuliskan logic nya di sini
$a = 0;
for($i = 2; $i<$angka; $i++){
    if($angka % $i == 0){
        $a = 1;
    }
} 
if($a==0){
    return "ini merupakan bilangan prima";
}else {
    return "ini bukan bilangan prima";
}
}
print(cekBilanganPrima(7));
print(cekBilanganPrima(10));
print(cekBilanganPrima(13));
print(cekBilanganPrima(15));
// +++++ End jawaban +++++

/** No 6

 * Tuliskan syntax menggunakan looping sehingga bisa menampilkan output seperti berikut.
 *  Boleh menggunakan looping apapun.
 *
 *  || Output :     ||
 *  || *****        ||
 *  || ****         ||
 *  || ***          ||
 *  || **           ||
 *  || *            ||
 */
 // +++++ Jawaban Soal +++++
$angka = 5;

for($i=0; $i<$angka;$i++){
    for($c=0; $c<$i; $c++){
        print("");
    }
    for($m=$angka;$m>$i;$m--){
        print("*");
    }
        print("\n");
}
 
// +++++ End jawaban +++++

/** No 7

 * Tuliskan syntax menggunakan looping apapun sehingga bisa menampilkan output seperti berikut.
 *
 *  || Output :     ||
 *  || *****        ||
 *  ||  ****        ||
 *  ||   ***        ||
 *  ||    **        ||
 *  ||     *        ||
 */
 // +++++ Jawaban Soal +++++
 $angka2 = 6;
 for($i=1; $i<$angka2;$i++){
    for($c=0; $c<$i; $c++){
        print(" ");
    }
    for($m=$angka2;$m>$i;$m--){
        print("*");
    }
        print("\n");
}
 

 

// +++++ End jawaban +++++

 

/** No 8
 *  Tuliskan syntax untuk mengubah kata 'apel' menjadi 'jeruk' di dalam kalimat 'ibu saya menanam pohon apel, dan saya sangat menyukai buah apel'
 *  kalian bisa menggunakan built in function yang sudah di sediakan oleh PHP
 */
 $kalimat = 'ibu saya menanam pohon apel, dan saya sangat menyukai buah apel';
 $ganti = 'jeruk';

// +++++ Jawaban Soal +++++

 print(str_replace("apel","jeruk", $kalimat));
// +++++ End jawaban +++++

?>