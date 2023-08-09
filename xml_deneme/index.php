<?php
header("Content-type: text/xml; charset=UTF-8");

    $Degerler   =   array(
        "FIRMA" => "Extra Eğitim",
        "YONETICI" => "Volkan Alakent",
        "EGITIMLER" => array(
            "PHP 7",
            "JS",
            "CSS3",
            "HTML5"
            );
            "EGITMENLER" => array(
                "EGITMEN" => array(
                    array(
                        "ADI" => "Volkan Alakent",
                        "KURSADI" => "PHP 7"
                    ),
                    array(
                        "ADI" => "Hakan Alakent",
                        "KURSADI" => "HTML5"
                    ),
                    array(
                        "ADI" => "Onur Tatlı",
                        "KURSADI" => "CSS3"
                    ),
                    array(
                        "ADI" => "Ümit Okudan",
                        "KURSADI" => "JS"
                    )
                )
            )  
                    );

                    function Islem($Icerik, $Olustur){






                    }

                    Islem($Degerler, new SimpleXMLElement("<EXTRAEGITIM/>"));






?>
