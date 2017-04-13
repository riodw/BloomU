<?php 
if($_POST['majorInfo'] && $_POST['majorCourses']) {
    $majorInfo = explode(',', $_POST['majorInfo']);
    $majorInfo[0] = str_replace('"', "", $majorInfo[0]);
    $majorInfo[0] = ucwords($majorInfo[0]);
    
    $data = array(
        $majorInfo[0] => array(
            'majorInfo' => array(
                'majorSemester' => $majorInfo[1],
                'majorYear' => $majorInfo[2]
            ),
            'majorCourses' => $_POST['majorCourses']
        )
    );
    
    
    $majorsFile = file_get_contents('majors.json');
    $tempArray = json_decode($majorsFile);
    array_push($tempArray, $data);
    $jsonData = json_encode($tempArray);
    file_put_contents('majors.json', $jsonData);
    
    echo 'Success';
}
else {
    echo 'Fail';
}



// $jsonIterator = new RecursiveIteratorIterator(
//     new RecursiveArrayIterator(json_decode($majorsFile, TRUE)),
//     RecursiveIteratorIterator::SELF_FIRST);

// foreach ($jsonIterator as $key => $val) {
//     if(is_array($val)) {
//         echo "$key:\n";
//     } else {
//         echo "$key => $val\n";
//     }
// }

?>