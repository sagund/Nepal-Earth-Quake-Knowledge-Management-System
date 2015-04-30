<?php

include_once 'application/models/container/info.php';


class DonationInfo extends Info
{
    public $id;
    public $user_id;
    public $item;
    public $item_desc;
    public $item_type;
    public $num_items;
    public $where_to_collect;
    public $media_upload_type;
    public $media_upload_path;
    public $status;
    public $date_added;

    function __construct()
    {

    }


    function __destruct()
    {
    }

}
