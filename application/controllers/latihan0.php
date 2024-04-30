<?php

class Latihan1 extends CI_Controller 
{ 
    public function index() 
    { 
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Selamat Datang!</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f4f4f4;
                    text-align: center;
                }
                .container {
                    margin-top: 100px;
                }
                h1 {
                    color: #333;
                }
                img {
                    width: 200px;
                    border-radius: 50%;
                    margin-bottom: 20px;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <img src="gambar.jpg" alt="Selamat Datang">
                <h1>Saya THEO.. selamat belajar Web Programming</h1>
            </div>
        </body>
        </html>
        <?php
    } 
}
?>
