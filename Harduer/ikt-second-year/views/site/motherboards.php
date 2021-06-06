<?php
require_once "navigation.php";
if(!empty($data)){
    if(!empty($_GET["action"])){
        switch ($_GET["action"]){
            case "listAll":
                require_once "html/motherboards/MDBList.php";
                break;
            case "create":
                require_once "html/motherboards/MDBCreate.php";
                break;
            case "view":
                require_once "html/motherboards/MDBView.php";
                break;
                case "update":
                    require_once "html/motherboards/MDBUpdate.php";
                    break;
            default:
                require_once "html/motherboards/MDBList.php";
                break;
        }
    }
}
require_once "footer.php";
?>
