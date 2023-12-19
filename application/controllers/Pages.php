<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function login(){

        $page = 'login';

        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
        }

        $data['title'] = "Taters Website";

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page);
        $this->load->view('templates/footer');

    }

    public function register(){

        $page = 'register';

        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
        }

        $this->load->database();
        $this->load->model('Municipality_model');

        $municipal = new Municipality_model;
        // print_r(json_encode($municipal->get_all_municipalities()));
        // print_r(json_encode($municipal->get_all_barangay()));
        
        $data['title'] = "Taters Website";
        $data['municipalities'] = $municipal->get_all_municipalities();
        $data['barangays'] = $municipal->get_all_barangay();

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');

    }

    public function view(){

        $page = 'home';

        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
        }

        $data['title'] = "Taters Website";
        // $data['userdata'] = $this->TatersTechnicalExam_model->get_userdata();

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');

    }

}

?>