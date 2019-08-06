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
        $UserQuery = parent::getGuids();
        foreach($UserQuery as $user)
            {
              echo $user, "<br>";
            }
    }

    
}