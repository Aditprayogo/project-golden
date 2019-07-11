




    <!-- Title -->
    <h1 class="mt-4"><?=  $data['posts']['title']; ?></h1>

    <!-- Author -->
    <p class="lead">
        by
        <a href="index.html">Vaganza.com</a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p>Created at <?=  $data['posts']['created_at']; ?></p>

    

    <!-- Preview Image -->
    <!-- <img class="img-fluid rounded" src="assets/img/laravel56_1.jpg" alt=""> -->

    <hr>

    <!-- Post Content -->
    <p class="lead"><?=  $data['posts']['body']; ?></p>

    <hr>
    
    <a href="<?= BASEURL; ?>/posts" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>

   
    