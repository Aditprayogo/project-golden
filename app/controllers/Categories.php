<?php



    class Categories extends Controller 
    {
        public function index()
        {
            # code...
            $data['title'] = 'Categories';
            $data['categories'] = $this->model('Category_model')->getAllCategory();
            $this->view('templates/header', $data);
            $this->view('categories/index', $data);
            $this->view('templates/sidebar', $data);
            $this->view('templates/footer');
        }

        public function create()
        {
            # code...
            $data['title'] = 'Create category';

            

            if ( $this->model('Category_model')->insert_category($_POST) > 0 ) {
                # code...
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header('Location: ' . BASEURL . ' /categories');
                exit;
            }
            else {
                 # code...
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                header('Location: ' . BASEURL . '/categories');
                exit;
            }
        }

        public function delete($id)
        {
            if ( $this->model('Category_model')->deleteCategory($id) > 0 ) {
                # code...
                Flasher::setFlash('berhasil', 'dihapus', 'success');
                header('Location: ' . BASEURL . '/categories');
                exit;
            }
            else {
                 # code...
                Flasher::setFlash('gagal', 'dihapus', 'danger');
                header('Location: ' . BASEURL . '/categories');
                exit;
            }
        }
    }
    


?>