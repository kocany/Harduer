<?php


class MDBController extends BaseController {

//----------------------------------------------------------------------------//
    private $MDBModel;

    function __construct() {
        $this->MDBModel = new MDBModel();
    }
//----------------------------------------------------------------------------//

    public function listAll() {
        if(!empty($_POST) && !empty($_POST["search"])){
            $searchResults=$this->MDBModel->search($_POST["topic"]);
            if (sizeof($searchResults ) > 0){
                return $searchResults;
            }
            else {
                return true;
            }
        }
        else{
            return $this->MDBModel->listAll();
        }
    }
//----------------------------------------------------------------------------//
    public function create(){
        if(!empty($_POST) && !empty($_POST["create"])){
            $this->MDBModel->create($_POST);
            header("Location: index.php?controller=motherboards&action=listAll");
        }
        else{
            return true;
        }
    }
//----------------------------------------------------------------------------//
    public function view(){
        if(!empty($_POST) && !empty($_POST["md_id"])){
            return $this->MDBModel->view($_POST["md_id"]);
        }
        else{
            return false;
        }
    }
//----------------------------------------------------------------------------//

    public function update(){
        if(!empty($_POST) && !empty($_POST["update"])){
            $this->MDBModel->update($_POST);
    header("Location: index.php?controller=motherboards&action=listAll");
        }
        else if((!empty($_GET)) && !empty($_GET["md_id"]))
        {
            return $this->MDBModel->view($_GET["md_id"]);
        }
    }
//----------------------------------------------------------------------------//
    public function delete(){
        if(!empty($_POST) && !empty($_POST["md_id"])){
            $this->MDBModel->delete($_POST["md_id"]);
            header("Location: index.php?controller=motherboards&action=listAll");
        }
        else{
            return false;
        }
    }
}
//----------------------------------------------------------------------------//
