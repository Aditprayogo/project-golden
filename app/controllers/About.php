<?php

    class About extends Controller {

        public function index()
        {
            # code...
            $data['title'] = 'About';
            $data['categories'] = $this->model('Category_model')->getAllCategory();
            $this->view('templates/header', $data);
            $this->view('about/index', $data);
            $this->view('templates/sidebar', $data);
            $this->view('templates/footer');
        }
    }

?>