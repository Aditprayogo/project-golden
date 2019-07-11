</div>
<!-- end of col md - 8 -->

<!-- Sidebar Widgets Column -->

<div class="col-md-4">

    <!-- Search Widget -->
    <div class="card my-4">
        <h5 class="card-header">Search</h5>
        <div class="card-body">
            <form action="<?= BASEURL; ?>/posts/cari" method="post">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Cari Post..." name="keyword" id="keyword" autocomplete="off">
                         <div class="input-group-append">
                             <button class="btn btn-primary" type="submit" id="tombol-cari"><i class="fas fa-search"></i>
                              </button>
                         </div>
                    </div>
               </form>
        </div>
    </div>

    

    <!-- Side Widget -->
   
    <div class="card my-4">
        <h5 class="card-header text-center">Categories</h5>
        <?php foreach ($data['categories'] as $category) :  ?>
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="">
                        <?= $category['title']; ?>
                    </a>
                </li>
            </ul>
        <?php endforeach;?>
    </div>
       
</div>
<!-- end of col md-4 -->
</div>

 