<?php
header("Content-type: text/xml; charset=UTF-8"); //Dökümanı xml yapmayı sağlayan üst bilgi fonksiyonu

$Olustur    =   new SimpleXMLElement("<EXTRAEGITIM/>");
$Olustur->addChild("FIRMA", "Extra Eğitim");
$Olustur->addChild("YONETICI", "Volkan Alakent");

$Egitimler  =   $Olustur->addChild("EGITIMLER");
    $Kurs   =   $Egitimler->addChild("KURS","PHP 7");
        $Kurs->addAttribute("id", "Bir");
    $Kurs   =   $Egitimler->addChild("KURS","JS");
        $Kurs->addAttribute("id", "Iki");
    $Kurs   =   $Egitimler->addChild("KURS","CSS3");
        $Kurs->addAttribute("id", "Uc");
    $Kurs   =   $Egitimler->addChild("KURS","HTML5");
        $Kurs->addAttribute("id", "Dort");

$Egitmenler =   $Olustur->addChild("EGITMENLER");
    $Egitmen    =   $Egitmenler->addChild("EGITMEN");
        $Egitmen->addChild("ADI","Volkan Alakent");
        $Egitmen->addChild("KURSADI","PHP7");
        $Egitmen->addAttribute("id","1");
        $Egitmen->addAttribute("Seviye","Orta");
    $Egitmen    =   $Egitmenler->addChild("EGITMEN");
        $Egitmen->addChild("ADI","Hakan Alakent");
        $Egitmen->addChild("KURSADI","HTML5");
        $Egitmen->addAttribute("id","2");
        $Egitmen->addAttribute("Seviye","İleri");
    $Egitmen    =   $Egitmenler->addChild("EGITMEN");
        $Egitmen->addChild("ADI","Onur Tatlı");
        $Egitmen->addChild("KURSADI","CSS3");
        $Egitmen->addAttribute("id","3");
        $Egitmen->addAttribute("Seviye","Uzman");
    $Egitmen    =   $Egitmenler->addChild("EGITMEN");
        $Egitmen->addChild("ADI","Ümit Okudan");
        $Egitmen->addChild("KURSADI","JS");
        $Egitmen->addAttribute("id","4");
        $Egitmen->addAttribute("Seviye","Başlangıç");

echo $Olustur->asXML();

?>