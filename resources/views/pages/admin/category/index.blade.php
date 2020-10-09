@extends('layouts.admin')
@section('title')
    Category
@endsection

@section('content')
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
        <h2 class="dashboard-title">Category</h2>
        <p class="dashboard-subtitle">
            List Of Category!
        </p>
        </div>
        <div class="dashboard-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-5">
                    <div class="card-body">
                        <a href="javascript:void(0)" class="btn btn-sm btn-success text-white" id="addButton">+ Add Category</a>
                            <div class="table-responsive mt-5">
                            <table class="table table-borderless table-hover scroll-horizontal-vertical" id="appTable">
                                <thead>
                                    <tr class="">
                                    <th scope="col">id</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Slug</th>
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

<!-- Modal Add & Update-->
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
        <form id="appForm" name="appForm" method="POST" enctype="multipart/form-data">
              @csrf

         {{-- <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data"> 
            @csrf  --}}
          
            <div class="form-group">
                <label for="name">Nama Category</label>
                <input
                    type="text"
                    class="form-control"
                    id="name"
                    aria-describedby="name"
                    name="name"
                    value=""
                    required
                />
            </div>

            <div class="form-group">
                <label for="photo">Icon Category</label>
                <input
                    type="file"
                    class="form-control"
                    id="photo"
                    aria-describedby="photo"
                    name="photo"
                    value=""
                    required
                />
            </div>
      </div>
    <div class="modal-footer">
            <button type="submit" class="btn btn-success" id="saveButton" value="create">Save </button>
             {{-- <button type="submit" class="btn btn-success">Save </button> --}}
    </div>
        </form>
    </div>
  </div>
</div>
<!-- Modal Add & Update -->

@push('addon-script')
<script>
    //Set CSRF Token pada header App
   $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

    //IF save button clicked
    $('#addButton').click(function(){
        $('#saveButton').val("create-post");//set value to create post
        $('#id').val('');//set value to Null
        $('#appForm').trigger("reset");//Reset Form
        $('#modalTittle').html("ADD Category");//set Modal Tittle
        $('#appModal').modal('show');//Show Modal
    });

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
            {data:'photo', name:'photo'},
            {data:'slug', name: 'slug'},
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

    //Save, update & validation
    function saveCategory(){
        //if ($("#appForm").length > 0) {
        //$("#appForm").validate({
        //submitHandler: function (form) {
        //var actionType = $('#saveButton').val();
        //$('#saveButton').html('Sending..');
        var form = $('#appForm')[0];
        var data = new FormData(form);
        $.ajax({
            type: "POST", //karena simpan kita pakai method POST
            enctype:'multipart/form-data',
            url: "{{ route('category.store') }}", //url simpan data
            data: data, //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
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
                iziToast.success({ //tampilkan iziToast dengan notif data berhasil disimpan pada posisi kanan bawah
                    title: 'Data Berhasil Disimpan',
                    message: '{{ Session('
                    success ')}}',
                    position: 'bottomRight'
                });
            },
            // error: function (data) { //jika error tampilkan error pada console
            //     console.log('Error:', data);
            //     $('#saveButton').html('Simpan');
            // }
            error: function (e) { }
        });
    }

 $("#saveButton").click(function (event) {
     event.preventDefault();
     saveCategory();
    });

        //when update button clicked, show detail data table on modal
        $('body').on('click', '.change-category', function(){
            var data_id=$(this).data('id');
            $.get('category/'+data_id+'/edit',function(data){
                $('#modalTittle').html("Change Category");
                $('#saveButton').val("change-category");
                $('#appModal').modal('show');

                $('#id').val(data.id)
                $('#name').val(data.name);
                $('#photo').val(data.photo);
            })
        });

</script>
@endpush

