<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Workshop extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = 'Workshop Kreatif - ArtCraft Studio';
        
        $this->load->view('templates/header', $data);
        $this->load->view('workshop');
        $this->load->view('templates/footer');
    }
} 