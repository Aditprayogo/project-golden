    
    
    
    
    <h1><?= $data['title']; ?></h1>

     <!-- Button trigger modal -->
     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#category-modal">
         <i class="fas fa-plus">Create Category</i></a>
    </button>   
    <hr>

    <?php foreach ($data['categories'] as $category) : ?>
    <ul class="list-group">
        <li class="list-group-item">
            <a href="">
                <?= $category['title']; ?>
            </a>
            <a href="<?= BASEURL; ?>/categories/delete/<?= $category['id']; ?>" class="btn btn-danger float-right ml-2" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash" >Delete</i></a>
        </li>
    </ul>
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
                <a href="<?= BASEURL; ?>/categories/delete/<?= $category['id']; ?>" class="btn btn-danger float-right ml-2"><i class="fas fa-trash" >Delete</i></a></a>
            </div>
            </div>
        </div>
    </div>

    

     