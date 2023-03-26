<!DOCTYPE html>
<html lang="en">

<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
            crossorigin="anonymous"></script>
</head>
<style>
        a:link {
            text-decoration: none;
        }

        a:visited {
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
        }

        a:active {
            text-decoration: none;
        }

        .thun {
            max-height: 250px;
            max-width: 500px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .round {
            border-radius: 10px;
        }

        .author {
            font-size: 10px;
        }

        .fa-size {
            font-size: 20px;
        }

        .img-author {
            height: 45px;
        }

        .jam {
            font-size: 10px;

        }
    </style>

<div class="container py-3">


        <div class="row col-lg-10 mx-auto">
            
<?php

// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "db_devel_wisata");

// Query untuk mengambil data dari tabel tiket
$query = mysqli_query($koneksi, "SELECT * FROM tiket");

// Looping untuk menampilkan data dalam bentuk card
while ($tiket = mysqli_fetch_assoc($query)) {
    ?>
  <div class="col-md-4 py-3">
                <div class="card round h-100">
                    <img class="thun"
                        src="https://asset.kompas.com/crops/MBlPUK3HVWwlKUTcY8X_A1Qs6yI=/0x0:1000x667/750x500/data/photo/2018/04/04/99037634.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="" class="text-dark ">Tutorial Cara Membangun Karir Di Bidang
                                DevOps</a>
                        </h5>
                        <div class="row mt-3 mx-auto col-lg-12">
                            <div class="col-2">
                                <img class="rounded-circle img-author"
                                    src="https://i.pinimg.com/1200x/14/1c/c1/141cc11bd1781b0c0a1f8e7c8b44dad0.jpg"
                                    alt="">
                            </div>
                            <div class="col-8">
                                <small class="p-2 author">Rizky Tegar</small>
                                <br>
                                <small class="p-2 jam">Feb 29, 2021 </small> . <small class="p-2 jam">20 Min
                                    Read</small>
                            </div>
                            <div class="col-2">
                                <i class="mt-2 fa fa-bookmark-o fa-size"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            
    <?php
}

  ?>
          
            
         

        </div>