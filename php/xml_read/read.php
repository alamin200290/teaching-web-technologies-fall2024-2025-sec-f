<?php

    $xmlData = file_get_contents('students.xml');
    $students = new SimpleXMLElement($xmlData);
    echo $students->student[1]->name;
?>