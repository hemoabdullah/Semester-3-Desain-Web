<?php
/* number  9
    function tampilkanHaloDunia(){
        echo "Hallo dunia! <br>";

        tampilkanHaloDunia();
    }

    tampilkanHaloDunia();
// number 10
 Langkah 3 menampilkan angka 1-25
    for ($i = 1; $i <= 25; $i++){
        echo "Perulangan ke-{$i} <br>";
    }
*/
    function tampilkanAngka (int $jumlah, int $indeks = 1){
        echo "Perulangan ke-{$indeks} <br>";
        
        if  ($indeks < $jumlah){
            tampilkanAngka($jumlah, $indeks + 1);
        }
    }
    tampilkanAngka(20);
?>