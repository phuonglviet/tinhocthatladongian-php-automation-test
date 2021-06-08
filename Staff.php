<?php

class Staff
{
    public $first_name;
    public $last_name;
    public $full_name;

    public function getFullName()
    {
        return trim("$this->first_name $this->last_name");
    }
}
