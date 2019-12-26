<?php
<<<<<<< HEAD
if (!defined('BASEPATH')) {
    exit('No Direct Script Allowed');
}
class Home extends CI_Controller
{
    function __construct()
=======
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
>>>>>>> a149a147e449357c696bae2cef499c0daa21ebe3
    {
        parent::__construct();
    }

    function index()
    {
<<<<<<< HEAD
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
=======
        $this->load->view('home/index');
>>>>>>> a149a147e449357c696bae2cef499c0daa21ebe3
    }
}
