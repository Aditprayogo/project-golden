
   


            <h1 class="my-4 text-center"><?= $data['title']; ?>
            </h1>

            <hr>

             

            <!-- Button trigger modal -->
            <button type="submit" class="btn btn-success row-mb-3 tombolTambahData" data-toggle="modal" data-target="#post-modal">
            <i class="fas fa-plus">Create Post</i></a>
            </button>   
          

            <hr>

         <?php foreach ($data['posts'] as $post) : ?>
            <!-- Blog Post -->
            <div class="card mb-4">
               
                <img class="card-img-top" src="<?= BASEURL; ?>/$post['gambar']" alt="Card image cap" style="width: 100%">
                    <div class="card-body">
                    
                        <h2 class="card-title"><?= $post['title']; ?></h2>

                        <p class="card-text">
                            <?= substr($post['body'],0,400); ?>
                        </p>

                        <a href="<?= BASEURL; ?>/posts/detail/<?= $post['id']; ?>" class="btn btn-primary">Read More &rarr;</a>
                        
                        <a href="<?= BASEURL; ?>/posts/delete/<?= $post['id']; ?>" class="btn btn-danger float-right ml-2"  data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash">Delete</i></a>

                        <a href="<?= BASEURL; ?>/posts/edit/<?= $post['id']; ?>" class="btn btn-success float-right ml-2 tampilModalUbah" data-toggle="modal" data-target="#post-modal" data-id="<?= $post['id']; ?>"><i class="fas fa-edit">Edit</i></a>
                        
                    </div>
                <div class="card-footer text-muted">
                    <?= $post['created_at']; ?>
                    <a href="<?= BASEURL; ?>">Vaganza.com</a>
                </div>
              
               
            </div>
            <?php endforeach; ?> 

            
    <!-- Modal post delete -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    Are you sure want to delete ? 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="<?= BASEURL; ?>/posts/delete/<?= $post['id']; ?>" class="btn btn-danger float-right ml-2"  >Delete</a>
            </div>
            </div>
        </div>
    </div>
                


       
            

                