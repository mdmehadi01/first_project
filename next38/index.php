<?php
//if (isset($_REQUEST['page']))

    //ai khane problem 2nd line a
   /* if($page =='homepage')
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

        include('header.php');
if(isset($_REQUEST['page']))

{
    $page = $_REQUEST['page'];
    switch($page)
    {
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
}
include('footer.php');


  

?>