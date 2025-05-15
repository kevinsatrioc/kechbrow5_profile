<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = 'Welcome to MyWebsite';
        
        $this->load->view('templates/header', $data);
        $this->load->view('home');
        $this->load->view('templates/footer');
    }

    public function about() {
        $data['title'] = 'About Us';
        
        $this->load->view('templates/header', $data);
        $this->load->view('about');
        $this->load->view('templates/footer');
    }

    public function contact() {
        $data['title'] = 'Contact Us';
        
        $this->load->view('templates/header', $data);
        $this->load->view('contact');
        $this->load->view('templates/footer');
    }

    public function submit() {
        // Check if this is an AJAX request
        if (!$this->input->is_ajax_request()) {
            show_404();
        }

        // Get form data
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        // Validate input
        if (empty($name) || empty($email) || empty($subject) || empty($message)) {
            $response = array(
                'success' => false,
                'message' => 'All fields are required'
            );
            echo json_encode($response);
            return;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $response = array(
                'success' => false,
                'message' => 'Invalid email format'
            );
            echo json_encode($response);
            return;
        }

        // Here you would typically:
        // 1. Save to database
        // 2. Send email notification
        // 3. Perform any other necessary actions

        // For now, we'll just return a success response
        $response = array(
            'success' => true,
            'message' => 'Message sent successfully'
        );
        
        echo json_encode($response);
    }
} 