<?php
$score = 39; //いくつかのケースで動作確認を行ってください。
if($score >= 80){
    echo $score,'点は「優」です。';
}elseif($score >= 60){
    echo $score,'点は「良」です。';
}elseif($score >= 40){
    echo $score,'点は「可」です。';
}else{
    echo $score,'点は「不可」です。';
}