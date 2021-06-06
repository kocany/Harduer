<?php

//----------------------------------------------------------------------------//
class MDBModel extends  BaseModel
{

    private  $MDRepo;

    public  function __construct() {
        $this->MDRepo = new MDBRepository();
    }
//----------------------------------------------------------------------------//

    public function create($data)
    {
        return $this->MDRepo->create($data);
    }
//----------------------------------------------------------------------------//

    public function view($md_id) {
        return $this->MDRepo->getById($md_id);
    }
//----------------------------------------------------------------------------//

    public function listAll()
    {
        return $this->MDRepo->getAll();
    }
//----------------------------------------------------------------------------//

    public function search($topic){
        return $this->MDRepo->getAllByTopic($topic);
    }
//----------------------------------------------------------------------------//

    public function update($data)
    {
        return $this->MDRepo->update($data);
    }
//----------------------------------------------------------------------------//

    public function delete($md_id)
    {
        return $this->MDRepo->delete($md_id);
    }
}
//----------------------------------------------------------------------------//
