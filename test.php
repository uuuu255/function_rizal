<?php
/*
    Methode terbagi 2
  - 1, methode yang tdk mengembalikan nilai (void)
  - 2, methode yang mengembalikan nilai (return & memiliki parameter)

  */

  //function yang tdk mengembalikan nilai
  function menampilkan(){
    echo "ini adalah function pertama";
  }

  menampilkan();

  //function yang mengembalikan nilai
  function penjumlahan($nilai1,$nilai2){
    $hasil = $nilai1 + $nilai2;
    return $hasil;
  }

  echo(penjumlahan(5123,567));
