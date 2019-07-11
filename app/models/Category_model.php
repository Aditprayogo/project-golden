

<?php

class Category_model {

    private $table = 'categories';
    private $db; 

    public function __construct()
    {
        # code...
        $this->db = new Database;
    }

    public function getAllCategory()
    {
        # code...
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultset();
    }

    public function insert_category($data)
    {
        # code...
        # code...
        $query = "INSERT INTO categories
        VALUES
        ('', :title, :created_at)";
        $this->db->query($query);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':created_at', $data['created_at']);
       

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteCategory($id)
    {
        $query = "DELETE FROM categories WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

   
} 







?>