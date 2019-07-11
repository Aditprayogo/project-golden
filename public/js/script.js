$(function () {

    $(".tombolTambahData").on('click', function () {

        $("#formModalLabel").html('Tambah Post')
        $('.modal-footer button[type=submit]').html('Tambah Post')
    })

    $('.tampilModalUbah').on('click', function () {

        $("#formModalLabel").html('Ubah Post')
        $('.modal-footer button[type=submit]').html('Ubah post')
        $('.modal-body form').attr('action', 'http://localhost/project-golden/public/posts/edit');


        const id = $(this).data('id');

        $.ajax({

            url: 'http://localhost/project-golden/public/posts/getUbah',

            //id yang sebelah kiri itu id yang dikirimkan
            //id yang sebelah kanan merupakan isi dari data tersebut.
            data: { id : id },
            method: 'post',
            dataType: 'json',
            success: function (data) {

                $('#id').val(data.id);
                $('#title').val(data.title);
                $('#body').val(data.body);
                $('#created_at').val(data.created_at);


            }

        });

    });
});