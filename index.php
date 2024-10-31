<?php



function diskonBelanja($totalBelanja){

    if ($totalBelanja > 100){
       $hargaAkhir =  $totalBelanja - ($totalBelanja * 1/10);
        echo "total belanja anda adalah " . $totalBelanja . " dan anda mendapatkan diskon sebesar 10% sehingga <br>
         uang yang harus anda bayarkan = ". $totalBelanja . " - " . ($totalBelanja * 1/10) . " = " . $hargaAkhir;
    }else if ($totalBelanja <= 100){
        echo "total belanja anda adalah " . $totalBelanja;
    }else{
        echo "masukan total uang belanja dengan benar";
    }
}

diskonBelanja(120);
echo "<br>";
echo "<br>";
diskonBelanja(50);

