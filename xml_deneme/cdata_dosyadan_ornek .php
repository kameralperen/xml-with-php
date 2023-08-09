<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>Başlık</title>
</head>
<body>
    <?php

        $Dosya       =   "basit_xml.xml";

        $Donustur       =   simplexml_load_file($Dosya , "SimpleXMLElement", LIBXML_NOCDATA);

        echo "<pre>";
        print_r($Donustur);
        echo "</pre>";

        echo $Donustur->FIRMA . "<br/>";
        echo $Donustur->YONETICI . "<br/>";
        echo $Donustur->ACIKLAMA;

    ?>
</body>
</html>