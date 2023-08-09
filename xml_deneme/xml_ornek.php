<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>Başlık</title>
</head>
<body>
    <?php

    $Degerler       =   '
    <EXTRAEGITIM>
        <FIRMA>Extra eğitim</FIRMA>
        <YONETICI>Volkan Alakent</YONETICI>
    </EXTRAEGITIM>';

    $Donustur       =   simplexml_load_string($Degerler);

    echo "<pre>";
    print_r($Degerler);
    echo "</pre>";
    
    echo $Donustur->FIRMA . "<br/>";
    echo $Donustur->YONETICI;

        
                             


    ?>
</body>
</html>