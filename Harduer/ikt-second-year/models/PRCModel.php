<?php

//----------------------------------------------------------------------------//
class PRCModel extends  BaseModel
{

    private  $PRCRepo;

    public  function __construct() {
        $this->PRCRepo = new PRCRepository();
    }
//----------------------------------------------------------------------------//

    public function create($data)
    {
        return $this->PRCRepo->create($data);
    }
//----------------------------------------------------------------------------//

    public function view($prc_id) {
        return $this->PRCRepo->getById($prc_id);
    }
//----------------------------------------------------------------------------//

    public function listAll()
    {
        return $this->PRCRepo->getAll();
    }
//----------------------------------------------------------------------------//

    public function search($topic){
        return $this->PRCRepo->getAllByTopic($topic);
    }
//----------------------------------------------------------------------------//

    public function update($data)
    {
        return $this->PRCRepo->update($data);
    }
//----------------------------------------------------------------------------//

    public function delete($prc_id)
    {
        return $this->PRCRepo->delete($prc_id);
    }
}
//----------------------------------------------------------------------------//
