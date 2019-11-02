<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* untuk menampilkan angka genap yang berwarna orange */
        .genap{
            color: orange;
        }

        /* untuk menampilkan angka ganjil yang berwarna biru*/
        .ganjil{
            color: blue;
        }
    </style>
</head>
<body>
        <?php

        /* untuk menampilkan tulisan tekotek-kotek-kotek anak ayam turun 8 */
        echo 'Tekotek-kotek-kotek anak ayam turun '.$anak_Ayam=8;

        /* untuk menampilkan urutan angka yang decrement yang dimulai dari angka 8 sampai 0 */
        for ($anak_Ayam=8; $anak_Ayam>=0; $anak_Ayam--){
        
        /* apabila angka ganjil , maka akan memanggil class "ganjil" yang akan menampilkan output biru */
        if($anak_Ayam%2==1){
            echo '<p class="ganjil"> Mati satu tinggal lah.. '.$anak_Ayam.'</p>';
        }

        /* apabila angka 0, maka akan menampilkan "Anak ayamnya habis hehehe" */
        elseif ($anak_Ayam==0){
            echo '<p class="genap"> Anak ayamnya habis hehehe </p>';
        }

        /* apabila angka genap maka akan memanggil class "genap" yang akan menampilkan output berwarna biru */
        else{
            echo '<p class="genap"> Anak ayam sisa '.$anak_Ayam.'</p>';
        }
    }
    ?>
    
</body>
</html>