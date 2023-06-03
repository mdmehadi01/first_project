<?php
   $page = $_REQUEST['page'];//ai khane problem 2
    /*if($page == 'homepage')
    {
        include('homepage.php');
    }
    elseif($page == 'Student_list')
    {
        include('list.php');
    }
    else
    {
        include('homepage.php');
    }*/

    switch($page){
        case 'homepage':
            include('homepage.php');
            break;
            case 'Student_list':
                include('list.php');
                break;
                  default:
                  include('homepage.php');
                  break;
    }
?>