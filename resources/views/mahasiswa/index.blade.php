<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>List Mahasiswa Kelas {{$kelas}}</h2>
    <ol>
        @foreach ($data as $nama)
            <li>{{$nama}}</li>
        @endforeach
    </ol>


    {{-- <h2>List Mahasiswa Kelas {{<?php echo $kelas ?>}}</h2>
    <ol>
        <?php
            foreach ($data as $nama) {
                echo "<li>$nama</li>";
            }
        ?>
    </ol> --}}

    {{-- <ol>
        <li>hanif</li>
        <li>herdio</li>
        <li>erik</li>
        <li>rahmad</li>
        <li>yasser</li>
    </ol> --}}
</body>
</html>