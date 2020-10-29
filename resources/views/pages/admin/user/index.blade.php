@extends('layouts.admin')
@section('title')
    User
@endsection

@section('content')
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
        <h2 class="dashboard-title">User</h2>
        <p class="dashboard-subtitle">
            List Of User!
        </p>
        </div>
        <div class="dashboard-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-5">
                    <div class="card-body">
                        <a href="javascript:void(0)" class="btn btn-sm btn-success text-white" id="addButton">+ Add User</a>
                            <div class="table-responsive mt-5">
                            <table class="table table-borderless table-hover scroll-horizontal-vertical" id="appTable">
                                <thead>
                                    <tr class="">
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Roles</th>
                                    <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Modal Add-->
<div class="modal fade" id="appModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="modalTittle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @include('pages.admin.user.form',['tombol'=>'daftar'])
      </div>
  </div>
</div>
<!-- Modal Add -->

<!-- Modal Update-->
<div class="modal fade" id="appModalUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="modalTittleUpdate"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @include('pages.admin.user.form',['tombol'=>'daftar'])
      </div>
  </div>
</div>
<!-- Modal Update -->

@push('addon-script')
<script>
//Set CSRF Token pada header App
   $(document).ready(function () {

        //stop loader
        $(".preloader").fadeOut();
           
         //start show data with yajra
        var datatable = $('#appTable').DataTable({
            processing:true,
            serverSide:true,
            ordering:true,
            ajax:{
                url:'{!! url()->current() !!}',
            },
            columns:[
                {data:'id', name:'id'},
                {data:'name', name:'name'},
                {data:'email', name:'email'},
                {data:'roles', name: 'roles'},
                {
                    data:'action',
                    name:'action',
                    orderable:false,
                    searcable:false,
                    width:'15%'
                },
            ],
            order:[
                [0,'asc']
            ]
        });

        //setup ajax crsf token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
            });
        });

        //If add button clicked
        $('#addButton').click(function(){
            $('#saveButton').val("create-post");//set value to create post
            $('#id').val('');//set value to Null
            $('#appForm').trigger("reset");//Reset Form
            $('#modalTittle').html("ADD User");//set Modal Tittle
            $('#appModal').modal('show');//Show Modal
        });

        //When update button clicked, show detail data table on modal
        $('body').on('click', '.change-user', function(){
            var data_id=$(this).data('id');
            $.get('user/'+data_id+'/edit',function(data){
                $('#modalTittleUpdate').html("Change User");
                $('#saveButton').val("change-user");
                $('#appModalUpdate').modal('show');
                $('#id').val(data.id);
                $('#name').val(data.name);
                $('#email').val(data.email);
                $('#password').val(data.password);
                $('#roles').val(data.roles);
            });
        });
        
        //Save, update & 
        $("#saveButton").click(function (event) {
        event.preventDefault();
            var form = $('#appForm')[0];
            var data = new FormData(form);
            $('#saveButton').html(`<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Mengirim`);
                $.ajax({
                    type: "POST", //karena simpan kita pakai method POST
                    enctype:'multipart/form-data',
                    url: "{{ route('user.store') }}", //url simpan data
                    data:data, //panggil form yang sudah dideklarasikan diatas
                    dataType: 'json', //data tipe kita kirim berupa JSON
                    processData: false,
                    contentType: false,
                    cache: false,
                    timeout: 600000,
                    success: function (data) { //jika berhasil 
                        $('#appForm').trigger("reset"); //form reset
                        $('#appModal').modal('hide'); //modal hide
                        $('#saveButton').html('Simpan'); //tombol simpan
                        var oTable = $('#appTable').dataTable(); //inialisasi datatable
                        oTable.fnDraw(false); //reset datatable
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: 'Data Sukses ditambahkan!',
                            showConfirmButton:false,
                            timer: 1500
                        });
                    },
                    error: function (data) { //jika error tampilkan error pada conso
                        $('#saveButton').html('Save');
                        console.log((data.responseJSON.errors));
                        $('#error-name').append('<div class="text-danger">'+data.responseJSON.errors.name[0]+'</div>');
                        $('#error-email').append('<div class="text-danger">'+data.responseJSON.errors.email[0]+'</div>');
                        $('#error-password').append('<div class="text-danger">'+data.responseJSON.errors.password[0]+'</div>');
                        $('#error-password-confirmed').append('<div class="text-danger">'+data.responseJSON.errors.password[0]+'</div>');
                        $('#roles').append('<div class="text-danger">'+data.responseJSON.errors.roles[0]+'</div>');
                    }
                });
            });
  
        //if delete button clicked
        $(document).on('click', '.delete', function (event) {
                event.preventDefault();
                dataId = $(this).attr('data-id');
                Swal.fire({
                    title: "Yakin akan menghapus?",
                    text: "Data yang dihapus tidak dapat diembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3F8838',
                    cancelButtonColor: '#fc5e84',
                    confirmButtonText: 'Hapus',
                    cancelButtonText: 'Batal'
                    }).then((result) => {
                    if (result.isConfirmed) {
                            $.ajax({
                                url: "user/" + dataId, //eksekusi ajax ke url ini
                                type: 'DELETE',
                                success: function (data) { //jika sukses
                                    var oTable = $('#appTable').dataTable();
                                    oTable.fnDraw(false); //reset datatable
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Terhapus',
                                        text: 'Data Berhasil dihapus!',
                                        showConfirmButton:false,
                                        timer: 1500
                                    });
                                }
                            })
                        }
                    });
                });

</script>
@endpush

