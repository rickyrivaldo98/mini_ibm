<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{

    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function news()
    {
        $this->load->view('news_page');
    }

    public function about()
    {
        $this->load->view('about_page');
    }

    public function events()
    {
        $this->load->view('event_page');
    }

    public function contact()
    {
        $this->load->view('contact_page');
    }

    public function program()
    {
        $this->load->view('program');
    }

    public function journal()
    {
        $this->load->view('journal');
    }

    public function journal_detail()
    {
        $this->load->view('journal_detail');
    }
    public function news_detail()
    {
        $this->load->view('news_detail');
    }
    public function events_detail()
    {
        $this->load->view('events_detail');
    }
}
