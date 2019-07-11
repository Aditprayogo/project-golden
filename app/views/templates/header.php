<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $data['title']; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?= BASEURL; ?>/css/bootstrap.css" rel="stylesheet">

    <!-- Font awesom  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="<?= BASEURL; ?>/css/main.css" rel="stylesheet">
   <!-- Bootstrap core JavaScript -->
    <script src="<?= BASEURL; ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?= BASEURL; ?>/js/bootstrap.js"></script>
    <script src="<?= BASEURL; ?>/js/script.js"></script>

</head>

<body>

  
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
               
                <a class="navbar-brand" href="<?= BASEURL; ?>"> <i class="fab fa-vuejs">aganza.com</i></a>
                <button class="
                    navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= BASEURL; ?>">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASEURL; ?>/services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASEURL; ?>/contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASEURL; ?>/categories">Categories</a>
                        </li>
                        
                    </ul>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                      <ul class="navbar-nav ml-auto"> 
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/posts/create" data-toggle="modal" data-target="#post-modal"><i class="fas fa-plus">Create Post</i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/createCategories" data-toggle="modal" data-target="#category-modal"><i class="fas fa-plus">Create Category</i></a>
                            </li>
                        </ul>
                   
                </div>
            </div>
        </nav>
   

         <div class="container mt-3">

            <div class="row">
                <div class="col-lg-8">
                    <?php Flasher::flash(); ?>
                   
     
            <!-- Modal post-->
            <div class="modal fade" id="post-modal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel"  aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="formModalLabel">Create Post</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= BASEURL; ?>/posts/create" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="id">
                            <div class="form-group">
                                <label for="title-post">Title</label>
                                <input type="title-post" class="form-control" id="title" placeholder="post title..." name="title">
                            </div>
                            
                            <div class="form-group">
                                <label for="desc">Body</label>
                                <textarea class="form-control" id="body" rows="8" name="body"></textarea>
                            </div>
                            <input type="hidden" name="created_at" value="<?= date("Y-m-d H:i:s"); ?>" readonly="readonly" id="created_at">

                            <div class="form-group">
                                <label for="foto">Images</label>
                                <input type="file" class="form-control-file" id="postImage" name="gambar">
                            </div>

               
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End modal -->

        <!-- Category modal post-->
     <div class="modal fade" id="category-modal" tabindex="-1" role="dialog" aria-labelledby="category-modal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="post-modal">Create Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= BASEURL; ?>/categories/create" method="post">
                        <input type="hidden" name="id" id="id">
                                <div class="form-group">
                                    <label for="title-post">Category name</label>
                                    <input type="title-post" class="form-control" id="title" placeholder="Category name..." name="title">
                                </div>

                                <input type="hidden" name="created_at" value="<?= date("Y-m-d H:i:s"); ?>" readonly="readonly" id="created_at">
                            

                        
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
        <!-- End modal -->

       




            
