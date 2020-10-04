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
                        <a class="btn btn-sm btn-success text-white" data-target="#modalAdd" data-toggle="modal">+ Add Category</a>
                            <div class="table-responsive mt-5">
                            <table class="table table-borderless table-hover scroll-horizontal-vertical" id="crudTable">
                                <thead>
                                    <tr class="">
                                    <th scope="col">id</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Slug</th>
                                     <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
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
<div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('pages.admin.category.form',['button'=>'Save'])
      </div>
            <div class="modal-footer">
                 <button type="submit" class="btn btn-success">Save </button>
            </div>
        </form>
    </div>
  </div>
</div>
<!-- Modal Add & Update -->

@push('addon-script')
<script>
    var datatable = $('#crudTable').DataTable({
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
        ]
    })
</script>
@endpush

