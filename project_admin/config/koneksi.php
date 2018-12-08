<?php

$koneksi=mysqli_connect("localhost","root","") or exit("Gagal koneksi database!");
mysqli_select_db($koneksi,"db_pw2") or exit("Gagal mengaktifkan database!");

?>