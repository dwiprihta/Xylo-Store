@extends('layouts.dashboard')
@section('title')
    Dashboard
@endsection

@section('content')
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
  >
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Add New Product</h2>
        <p class="dashboard-subtitle">
          Create your own product
        </p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-12">
            <form action="">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="name">Product Name</label>
                        <input
                          type="text"
                          class="form-control"
                          id="name"
                          aria-describedby="name"
                          name="storeName"
                          value="Papel La Casa"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="price">Price</label>
                        <input
                          type="number"
                          class="form-control"
                          id="price"
                          aria-describedby="price"
                          name="price"
                          value="200"
                        />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="description">Description</label>
                        <textarea
                          name="description"
                          id="editor"
                          cols="30"
                          rows="4"
                          class="form-control"
                        >

                        </textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="thumbnails">Thumbnails</label>
                        <input
                          type="file"
                          multiple
                          class="form-control pt-1"
                          id="thumbnails"
                          aria-describedby="thumbnails"
                          name="thumbnails"
                        />
                        <small class="text-muted">
                          Kamu dapat memilih lebih dari satu file
                        </small>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col">
                      <button
                        type="submit"
                        class="btn btn-success btn-block px-5"
                      >
                        Save Now
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

@push('addon-script')
 <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace("editor");
    </script>
    <script>
        function thisFileUpload() {
            document.getElementById("file").click();
        }
    </script>
@endpush

