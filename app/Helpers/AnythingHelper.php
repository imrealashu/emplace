<?php

function data_fill_dashboard(array $array, $value){

    switch (true) {
        case $value == $array[0]:
            return '5';
            break;

        case $value == $array[1]:
            return '4';
            break;

        case $value == $array[2]:
            return '3';
            break;

        case $value == $array[3]:
            return '2';
            break;
        default:
            return '1';
            break;
    }
}