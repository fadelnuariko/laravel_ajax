$(document).ready(function(){

    $(".delete-data").click(function(e){
      e.preventDefault();
  
      var id = $(this).attr('data-id');
      Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Data yang sudah dihapus tidak bisa dikembalikan!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus',
        cancelButtonText: 'Batal'
      }).then((result) => {
        if (result.value) {
            $.ajax({
                type:'GET',
                url:'/data/delete/'+id,
                success:function(data){
                   if(data.status=="OK"){
                    console.log(data)
                    $('#tr_'+id).remove(); // Remove to table
        
                    Swal.fire('Success','Data berhasil update','success'); // Alert sukses 
        
                   }else{
                    Swal.fire('Unknown','Telah terjadi kesalahan','error');  
                   }
                }
             }); 
        }
      })     
    });
  });