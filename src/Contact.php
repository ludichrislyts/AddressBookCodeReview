<?php
class Contact
{
	public $name;
	public $phone_number;
	public $address;
}

    function __construct($name, $phone_number, $address)
    {
        $this->name = $name;
        $this->phone_number = $phone_number;
        $this->address = $address;
    }

    function setName($new_name)
    {
        $this->name = $new_name;
    }

    function getname()
    {
        return $this->name;
    }

    function setPhoneNumber($new_number)
    {
        $this->phone_number = $new_number;
    }

    function getPhoneNumber()
    {
        return $this->phone_number;
    }
    
    function setAddress($new_address)
    {
        $this->address = $new_address;
    }

    function getAddress()
    {
        return $this->address;
    }

    function save()
    {
        array_push($_SESSION['list_of_contacts'], $this);
    }

    static function getAll()
    {
        return $_SESSION['list_of_contacts'];
    }

    static function deleteAll()
    {
        $_SESSION['list_of_contacts'] = array();
    }
