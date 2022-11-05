<?php
function view($file,$data){
    extract($data);
    return require "app/views/about.view.php";

}