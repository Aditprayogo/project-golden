<?php 



    class Contact extends Controller
    {
        public function index()
        {
            # code...
            $data['title'] = 'Contact us';
            $data['categories'] = $this->model('Category_model')->getAllCategory();
            $this->view('templates/header', $data);
            $this->view('contact/index', $data);
            $this->view('templates/sidebar', $data);
            $this->view('templates/footer');
        }
    }
    







?>