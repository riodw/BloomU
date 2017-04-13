<?php

$majorsFile = file_get_contents('majors.json');
$arr = json_decode($majorsFile);

// $jsonIterator = new RecursiveIteratorIterator( new RecursiveArrayIterator(json_decode($majorsFile, TRUE)), RecursiveIteratorIterator::SELF_FIRST );
// foreach ($jsonIterator as $key => $val) {
//     if(is_array($val)) {
//         echo "$key:\n";
//     } else {
//         echo "$key => $val\n";
//     }
// }

$majors = array();

foreach($arr as $row) {
    foreach($row as $key => $val) {
        $class = $key.' - '.$val->majorInfo->majorSemester.' '.$val->majorInfo->majorYear;
        array_push($majors, $class);
    }
}

echo json_encode($majors);

?>