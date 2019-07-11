<?php

    class Post_model {

        private $table = 'posts';
        private $db; 
        private $uploader;

        public function __construct()
        {
            # code...
            $this->db = new Database;
            
        }

        public function getAllPost()
        {
            # code...
            $this->db->query('SELECT * FROM ' . $this->table);
            return $this->db->resultset();
        }

        public function insert_data($data)
        {
            # code...

            $query = "INSERT INTO posts
            VALUES
            ('', :title, :body, :created_at)";
            $this->db->query($query);
            $this->db->bind(':title', $data['title']);
            $this->db->bind(':body', $data['body']);
            $this->db->bind(':created_at', $data['created_at']);
           

            $this->db->execute();
            return $this->db->rowCount();
        }

        public function getPostByID($id)
        {
            # code...
            $this->db->query('SELECT * FROM posts WHERE id = :id');
            $this->db->bind('id', $id);
            return $this->db->single();
        }

        public function DeletePost($id)
        {
            # code...
            $query = "DELETE FROM posts WHERE id = :id";
            $this->db->query($query);
            $this->db->bind('id', $id);

            $this->db->execute();

            return $this->db->rowCount();
        }

        public function cariPost()
        {
            # code...
            $keyword = $_POST['keyword'];
            $query = "SELECT * FROM posts WHERE title LIKE :keyword";
            $this->db->query($query);
            $this->db->bind('keyword', "%$keyword%");
            return $this->db->resultset();

        }


        public function ubahPost($data)
        {
            # code...

                $query = "UPDATE posts SET 
                title = :title,
                body  = :body,
                created_at = :created_at
                WHERE id =:id";

                $this->db->query($query);
                $this->db->bind('id', $data['id']);
                $this->db->bind('title', $data['title']);
                $this->db->bind('body', $data['body']);
                $this->db->bind(':created_at', $data['created_at']);
            
          

                $this->db->execute();
                return $this->db->rowCount();
        }

        
    } 
    
        
    


?>