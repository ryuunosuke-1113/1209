<?php
function sannkaku($base,$height){
    echo $base*$height;
}
function shikaku($base,$height){
    echo $base*$height;
}
function daikei($upper,$lower,$height){
    echo ($upper+$lower)*$height/2;
}
sannkaku(8,6);
shikaku(8,6);
daikei(8,6,4);