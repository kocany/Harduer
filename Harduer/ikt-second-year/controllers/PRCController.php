<?php


class PRCController extends BaseController {

//----------------------------------------------------------------------------//
    private $PRCModel;

    function __construct() {
        $this->PRCModel = new PRCModel();
    }
//----------------------------------------------------------------------------//

    public function listAll() {
        if(!empty($_POST) && !empty($_POST["search"])){
            $searchResults=$this->PRCModel->search($_POST["topic"]);
            if (sizeof($searchResults ) > 0){
                return $searchResults;
            }
            else {
                return true;
            }
        }
        else{
            return $this->PRCModel->listAll();
        }
    }
//----------------------------------------------------------------------------//
    public function create(){
        if(!empty($_POST) && !empty($_POST["create"])){
            $this->PRCModel->create($_POST);
            header("Location: index.php?controller=processors&action=listAll");
        }
        else{
            return true;
        }
    }
//----------------------------------------------------------------------------//
    public function view(){
        if(!empty($_POST) && !empty($_POST["prc_id"])){
            return $this->PRCModel->view($_POST["prc_id"]);
        }
        else{
            return false;
        }
    }
//----------------------------------------------------------------------------//

    public function update(){
        if(!empty($_POST) && !empty($_POST["update"])){
            $this->PRCModel->update($_POST);
    header("Location: index.php?controller=processors&action=listAll");
        }
        else if((!empty($_GET)) && !empty($_GET["prc_id"]))
        {
            return $this->PRCModel->view($_GET["prc_id"]);
        }
    }
//----------------------------------------------------------------------------//
    public function delete(){
        if(!empty($_POST) && !empty($_POST["prc_id"])){
            $this->PRCModel->delete($_POST["prc_id"]);
            header("Location: index.php?controller=processors&action=listAll");
        }
        else{
            return false;
        }
    }
}
//----------------------------------------------------------------------------//
