<?php

class User extends DataRecordModel
{

    public $name;
    public $email;
    public $password;
    public $rate;

    public function __construct($name, $email, $password, $rate)
    {
        parent::__construct();
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->rate = $rate;
    }
    
    public function addUserFromForm()
    {
        parent::commit();
    }

    
}