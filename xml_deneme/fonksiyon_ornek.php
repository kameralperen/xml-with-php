<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>Başlık</title>
</head>
<body>
    <?php
    $Degerler       =   '<EXTRAEGITIM>
    <FIRMA>Extra Eğitim</FIRMA>
    <YONETICI>Volkan Alakent</YONETICI>
    <EGITIMLER>
        <KURS id="bir">PHP7</KURS>
        <KURS id="iki">JS</KURS>
        <KURS id="uc">CSS3</KURS>
        <KURS id="dort">HTML5</KURS>
    </EGITIMLER>
    <EGITMENLER>
        <EGITMEN id="1">
            <ADI>Volkan Alakent</ADI>
            <KURSADI>PHP7</KURSADI>
        </EGITMEN>
                <EGITMEN id="2">
            <ADI>Hakan Alakent</ADI>
            <KURSADI>HTML5</KURSADI>
        </EGITMEN>
                <EGITMEN id="3">
            <ADI>Onur Tatlı</ADI>
            <KURSADI>CSS3</KURSADI>
        </EGITMEN>
                <EGITMEN id="4">
            <ADI>Ümit Okudan</ADI>
            <KURSADI>JS</KURSADI>
        </EGITMEN>
        </EGITMENLER>
    </EXTRAEGITIM>';

    $Donustur       =   simplexml_load_string($Degerler);

    echo "<pre>";
    print_r($Donustur);
    echo "</pre>";

    function Oku($Veri){
        foreach($Veri as $Anahtar => $Eleman){
            if(!is_array($Eleman))
            echo $Anahtar . ": " . $Eleman . "<br>";
            if(is_object($Eleman)){
                Oku($Eleman);
            }
        }
    }
    Oku($Donustur);

    ?>
</body>
</html>