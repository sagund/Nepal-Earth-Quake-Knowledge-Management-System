<?php

include_once 'application/models/container/info.php';


class UserInfo extends Info
{
    public $id;
    public $user_type;
    public $username;
    public $email;
    public $first_name;
    public $second_name;
    public $last_name;
    public $phone;
    public $city;
    public $state;
    public $country;
    public $date_added;

    function __construct()
    {
    }


    function __destruct()
    {
    }

}
