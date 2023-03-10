<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index()
    {
        $this->data['error'] = null;//$this->session->flashdata('error');
        $meta = array('page_title' => lang('dashboard'));
        $this->page_construct('dashboard', $meta, $this->data);
    }
}
