<?php

class Users extends JsonDataArray
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function displaySortedList()
    {
        parent::load();
        $query = parent::getGuids();
        foreach($this->query as $user)
            {
              echo $user, “<br>”;
            }
    }

    
}