<?php 
    // Membuat dan Memanggil Function
    function salam() {
        echo "<p>Selamat Pagi</p>";
    }
    salam();
    salam();
    salam();

    // Argumen Function
    function salam2($nama){
        echo "<p>Selamat Pagi, $nama<p>";
    }
    salam2("Jordan");    
    salam2("Wijayanto");    
    salam2("ANJYA");
    salam2("Dunia..."); 

    // Multiple Argumen
    function salam3($waktu, $nama){
    echo "<p>Selamat $waktu, $nama </p>";
    }
    salam3("Malam","Jordan");       
    salam3("Siang","Wijayanto");       
    salam3("Pagi","Anjya");

    // Pemanggilan Argumen
    function salam4($waktu,$nama){
        echo "<p>Selamat $waktu, $nama!</p>";
      }
    $event = "Belajar PHP";
    $user = "Jordan";
    salam4($event, $user);

    // Return Value
    function tambah($satu,$dua){
        $hasil = $satu + $dua;
        return $hasil;
    }
    $a = tambah(6,10);
    echo $a;

    // Default Argumen
    function salam5($waktu="Malam", $nama="Anton"){
        echo "<p>Selamat $waktu, $nama </p>";
    }
    salam5();                         
    salam5("Pagi");                   
    salam5("Datang", "Pak Presiden!");

    // Anonymous Function
    $salam = function () {
        return "Selamat Siang";
    };
    echo $salam();

    echo "<br/><br/>";

    // Arrow Function
    $salam = fn () => "Selamat Siang";
    echo $salam();

