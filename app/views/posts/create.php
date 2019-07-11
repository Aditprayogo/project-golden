    
    
    <h2 class="my-4"> <?= $data['judul']; ?>  </h2>

    <form action="<?= BASEURL; ?>posts/create" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title-post">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Judul" name="title">
        </div>

        <div class="form-group">
            <label for="desc">Body</label>
            <textarea class="form-control" id="body" rows="10" name="body"></textarea>
        </div>

        <div class="form-group">
            <label for="foto">Image</label>
            <input type="file" class="form-control-file" id="image" name="post_image">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br>