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
        $this->load->view('new_about');
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
    public function register()
    {
        $this->load->view('register');
    }
    public function mini_mba()
    {
        $this->load->view('miniMBA_page');
    }
    public function facilitator_mini_mba()
    {
        $this->load->view('facilitator_minimba_page');
    }
    public function program_mini_mba()
    {
        $this->load->view('program_minimba_page');
    }
    public function program_detail_mini_mba()
    {
        $this->load->view('program_detail_minimba_page');
    }
    public function rumah_amal()
    {
        $this->load->view('rumah_amal_page');
    }
    public function program_rumah_amal()
    {
        $this->load->view('program_rumah_amal_page');
    }
    public function program_detail_rumah_amal()
    {
        $this->load->view('program_detail_rumah_amal_page');
    }
    public function program_initiative()
    {
        $this->load->view('program_initiative');
    }
    public function program_initiative_details()
    {
        $this->load->view('program_detail_initiative');
    }
    public function program_initiative_details_video()
    {
        $this->load->view('program_detail_rumah_amal_page');
    }
}
