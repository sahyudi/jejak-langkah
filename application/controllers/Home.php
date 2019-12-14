<?php
if (!defined('BASEPATH')) {
    exit('No Direct Script Allowed');
}
class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        // $this->load->view('home/index');
        $this->load->view('home/home');
    }
    function index2()
    {
        $this->load->view('home/index');
        // $this->load->view('home/home');
    }

    function about()
    {
        $this->load->view('home/about');
    }
    function notFound()
    {
        $this->load->view('home/404');
    }
}
