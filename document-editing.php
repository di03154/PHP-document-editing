<?php
/**
 * Created by PhpStorm.
 * User: wdj
 * Date: 2017-07-14
 * Time: 오후 3:35
 */


// 시간 문자 파일처리 다 해보기
// text 긴창

$textFile   = $_GET['text'];
$target     = $_GET['button'];


switch ($target){
    // 찾아 바꾸기
    case "button1":
        // 타깃 값
        $suffle1 = $_GET['hidden1'];

        // 변경할 값
        $suffle2 = $_GET['hidden2'];
        // 변경
        echo str_replace($suffle1, $suffle2, $textFile);
        break;
    // 소문자 -> 대문자
    case "button2":

        echo mb_strtoupper($textFile, 'UTF-8');

        break;
    // 대문자 -> 소문자
    case "button3":
        echo mb_strtolower($textFile, 'UTF-8');
        break;
    // 파일로 저장
    case "button4":
        // 파일 이름 명
        $fName = $_GET['fname'];
        echo $fName;
        // 파일 생성
        $fmode = fopen($fName.".txt", "w");
        fwrite($fmode,$textFile);
        fclose($fmode);
}

?>