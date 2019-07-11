
<?php

    class Services extends Controller {

        public function index()
        {
            # code...
            $data['title'] = 'Services';
            $data['categories'] = $this->model('Category_model')->getAllCategory();
            $this->view('templates/header', $data);
            $this->view('services/index', $data);
            $this->view('templates/sidebar', $data);
            $this->view('templates/footer');
        }
    }
?>