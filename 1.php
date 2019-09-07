<?php
    function jsonBio(){

        $bio = [
            "name"      => "Sandy Rahmansyah",
            "age"       => 19,
            "address"   => "Jalan Jakarta Gang Perjuangan Blok 4 Nomor 1 RT72 Loa Bakung Samarinda",
            "hobbies"   => ["Nonton","Futsal","Begadang"],
            "is_married" => false,
            "school"    => array("year_in"=>"2016"),
                            array("year_out" =>"2019"),
                            array("major"=>NULL),
            "skills"    => 
                            array("html_css"=>"advanced"),
                            array("php"=>"beginner"),
                            array("bootstrap"=>"beginner"),
                            array("js"=>"beginner"),
                            array("ci"=>"beginner"),
                            array("laravel"=>"beginner"),
            "interest_in_coding" => true,
            ];
            return $bio;
    }
    echo json_encode(jsonBio());
?>