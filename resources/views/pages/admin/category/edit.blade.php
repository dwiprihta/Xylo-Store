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
                        <form action="{{route('category.update',$item->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            @include('pages.admin.category.form')
                             <button type="submit" class="btn btn-success">Save </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


