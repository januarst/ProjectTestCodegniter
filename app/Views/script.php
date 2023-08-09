<script>
$(document).ready(function(){
    $('#datatable').dataTable();
    $('.edit').on('click',function(){
        var cek = $(this).attr('data-id');        
        $.ajax({
            url:"<?php echo base_url();?>/public/pegawai/edit/"+cek,
            type:"GET",
            dataType:"JSON",
            success: function(data){    
                $("#frm_data").find("input[name=id]").val(data.id_pegawai);    
                $("#frm_data").find("input[name=nama]").val(data.nama);
                $("#frm_data").find("input[name=tanggal_lahir]").val(data.tanggal_lahir);    
                $("#frm_data").find("input[name=pekerjaan]").val(data.pekerjaan);    
                $("#frm_data").find("input[name=email]").val(data.email);
                $("#frm_data").find("input[name=alamat]").val(data.alamat);        
                $('#formModal').modal('show');
            }
        });
    });    
    $('.hapus').on('click',function(){
        var cek = $(this).attr('data-id');    
        $.ajax({
            url:"<?php echo base_url();?>/public/pegawai/hapus/"+cek,
            type: "POST",
            success: function(msg){
                //jika berhasil menghapus maka akan di redirect ke url dibawah
                window.location.href= "<?php echo base_url();?>/public/pegawai";
            }
        });
    });
    $('.date').daterangepicker({
                  singleDatePicker: true,
                  calender_style: "picker_1",
                  format: 'YYYY-MM-DD',
                  minDate: '2020-01-01',
                  maxDate: '2020-12-31',
            });    

});
</script>