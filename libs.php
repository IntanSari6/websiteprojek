<?php

if(isset($_GET['page'])){
    $page = $_GET['page'];
    switch ($page) {
        case 'input' :
            include 'views/Input_Data.php' ;
            break;

        case 'data' :
            include 'views/Tampil_data.php' ;
            break;
        
        case 'edit' :
            include 'views/formeditdata.php' ;
            break;
    }
}else{
    include 'views/Tampil_data.php' ;
}
?>