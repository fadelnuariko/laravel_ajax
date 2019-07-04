$(document).ready(function(){

  $(document).on('click', '.edit-data', function(){
    $('.judul').html('Edit Data');
    var user_id = $(this).attr('data-id');
    console.log(user_id);
    $.ajax({
      type:'GET',
      url:'/data/edit/'+user_id,
      success:function(data){
         $('.btn-save').val("edit");
          $('.label-nama').addClass('active');
          $('.label-umur').addClass('active');
          $('#user_id').val(data.data.id);
          $('#nama').val(data.data.nama);
          $('#umur').val(data.data.umur);
      }
   });
  });
   
  $(".btn-save").click(function(e){
    e.preventDefault();

    var btn = $('.btn-save').val();
    var id = $("input[name=user_id]").val();
    var nama = $("input[name=nama]").val();
    var umur = $("input[name=umur]").val();
    
    if(btn=="edit"){
      if(nama=="" || umur==""){
        Swal.fire('Kesalahan','Masukan inputan dengan benar','error');
      }else if(isNaN(umur)==true){
        Swal.fire('Kesalahan','Masukan umur dengan angka','error');
      }else{
        $.ajax({
          data: $('#formData').serialize(),
          type:'POST',
          url:'/data/edit',
          data:{id:id, nama:nama, umur:umur},
          success:function(data){
             if(data.status=="OK"){
              var user = '<tr id="tr_'+ data.data.id + '"><td class="center">' + data.data.id + '</td><td>' + data.data.nama + '</td><td>' + data.data.umur + '</td>';
              user += '<td><a href="javascript:void(0)"  data-id="'+data.data.id+'" class="waves-effect waves-light btn blue darken-2 edit-data  modal-trigger " data-target="modal1"><i class="material-icons ">edit</i></a> <a data-id="' + data.data.id + '" class="waves-effect waves-light btn red darken-2 delete-data"><i class="material-icons ">delete</i></a></td>';
              
              $('#tr_'+data.data.id).replaceWith(user); // Add to table

              $('.modal.open').modal('close'); // Close modal

              Swal.fire('Success','Data berhasil update','success'); // Alert sukses 

              $('#formData').trigger("reset"); //Reset Form

             }else{
              Swal.fire('Unknown','Telah terjadi kesalahan','error');  
             }
          }
       });
      }
    }
    
  });
});