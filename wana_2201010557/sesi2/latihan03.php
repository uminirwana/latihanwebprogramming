
<?php
    $pr = "p1";
    if(isset( $_GET["pg"])){
    $pr = $_GET["pg"];
    }
    $konten = "";
    $judulpage = "";

    switch($pr){
        case "p1":
            $judulpage = "halaman 1";
            $konten = "<h3>Halaman P1</h3>";
            $konten .= "<p> Menampilkan halaman P1</p>";
            break;
       case "p2":
            $judulpage = "halaman 2";
            $konten = "<h3>Halaman P2</h3>";
            $konten .= "<p> Menampilkan halaman P2</p>";
            break;
        case "p3":
            $judulpage = "halaman 3";
            $konten = "<h3>Halaman P3</h3>";
            $konten .="<p> Menampilkan halaman P3</p>";
            break;
            
        default:
            $judulpage = "halaman 1";
            $konten = "<h3>Halaman P1</h3>";
            $konten .="<p> Menampilkan halaman P1</p>";

            break;
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> <?=$judulpage;?></title>
    </head>
    <body>
        <a href= "latihan03.php?pg=p1">halaman1</a> <a href="latihan03.php?pg=p2">halaman2</a> <a href="latihan03.php?pg=p3">halaman3</a> 
        <?php 
        echo $konten; 
        ?>
        
    </body>
    </html>