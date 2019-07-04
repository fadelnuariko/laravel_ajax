$(document).ready(function () {
    $('.sidenav').sidenav();
    $('.modal').modal();
    $('.add-btn').click(function () {
        $('.btn-save').val('save');
        $('.judul').html('Tambahkan Data');
    });

    $('.btn-batal').click(function () {
        $('#formData').trigger("reset");
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.add-div').click(function () {

        var div =  '<div class="col s6">';
            div += '<div class="card">';
            div += '<span class="card-title" style="padding:20px;">Kotak Kecil</span>';
            div += '<div class="card-content">';
            div += '</div>';
            div += '<div class="card-action" style="text-align:right">';
            div += '<a href="#" class="hapus">Hapus</a>';
            div += '</div>';
            div += '</div>';
            div += '</div>';
        
            $('#row-div').append(div);
          
    });

    $('.col').on('click', '.hapus', function(){
      
      $(this).parent('div').parent('div').parent('div').remove();
    });

});
