<?php
require_once "navigation.php";
if(!empty($data)){
    if(!empty($_GET["action"])){
        switch ($_GET["action"]){
            case "listAll":
                require_once "html/processors/PRCList.php";
                break;
            case "create":
                require_once "html/processors/PRCCreate.php";
                break;
            case "view":
                require_once "html/processors/PRCView.php";
                break;
                case "update":
                    require_once "html/processors/PRCUpdate.php";
                    break;
            default:
                require_once "html/processors/PRCList.php";
                break;
        }
    }
}
require_once "footer.php";
?>
