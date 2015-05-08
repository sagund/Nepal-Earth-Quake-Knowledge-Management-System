<?php
/**
 * This is a form validation configuration file written for Dignepal
 * 
 * 
 **/
 
$config = array(
            'admin/page'=>array(
                array(
                        'field' => 'page_title',
                        'label' => 'Page Title',
                        'rules' => 'trim|required|xss_clean'
                     ),               
                array(
                        'field' => 'editor1',
                        'label' => 'Description',
                        'rules' => 'trim|required|xss_clean'
                     ), 
                array(
                        'field' => 'status',
                        'label' => 'Status',
                        'rules' => 'trim|xss_clean'
                     ), 
                array(
                        'field' => 'page_url',
                        'label' => 'Page URL',
                        'rules' => 'trim|required|xss_clean'
                     ), 
                             
            )
        );
