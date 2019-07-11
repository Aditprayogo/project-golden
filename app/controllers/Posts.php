<?php 


    class Posts extends Controller {

        public function index()
        {
            # code...
            $data['title'] = 'Home';
            $data['posts'] = $this->model('Post_model')->getAllPost();
            $data['categories'] = $this->model('Category_model')->getAllCategory();
            $this->view('templates/header', $data);
            $this->view('posts/index', $data);
            $this->view('templates/sidebar', $data);
            $this->view('templates/footer');
        }

        public function create()
        {
            # code...
            $data['title'] = 'Create post';

            if(isset($_POST['file'])){

                $fileupload = new Upload();
                
                if($fileupload -> uploadfile()){
                    
                    echo 'Fisierul a fost uploadat';
                }
            }
            

            

            if ( $this->model('Post_model')->insert_data($_POST) > 0 ) {

                # code...
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header('Location: ' . BASEURL . ' /posts');
                exit;
            }
            else {
                
                 # code...
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                header('Location: ' . BASEURL . '/posts');
                exit;
            }
        }

        public function detail($id)
        {
            # code...
            $data['title'] = 'Post';
            $data['posts'] = $this->model('Post_model')->getPostByID($id);
            $data['categories'] = $this->model('Category_model')->getAllCategory();
            $this->view('templates/header', $data);
            $this->view('posts/detail', $data);
            $this->view('templates/sidebar', $data);
            $this->view('templates/footer');
        }

        public function delete($id)
        {
            if ( $this->model('Post_model')->DeletePost($id) > 0 ) {
                 # code...
                 Flasher::setFlash('berhasil', 'dihapus', 'success');
                 header('Location: ' . BASEURL . '/posts');
                 exit;
             }
             else {
                  # code...
                 Flasher::setFlash('gagal', 'dihapus', 'danger');
                 header('Location: ' . BASEURL . '/posts');
                 exit;
             }
        }

       public function cari()
       {
           # code...
           $data['title'] = 'Home';
           $data['posts'] = $this->model('Post_model')->cariPost();
           $data['categories'] = $this->model('Category_model')->getAllCategory();
           $this->view('templates/header', $data);
           $this->view('posts/index', $data);
           $this->view('templates/sidebar', $data);
           $this->view('templates/footer');
       }

       public function edit()
       {
           # code...
           if ( $this->model('Post_model')->ubahPost($_POST) > 0 ) {
            # code...
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/posts');
            exit;
        }
        else {
             # code...
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/posts');
            exit;
        }
       }

       public function getUbah()
       {
            # code...
            echo json_encode($this->model('Post_model')->getPostByID($_POST['id']));
       }

       

    
    }












?>