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
                <h2 class="dashboard-title">Sirup Marzzan</h2>
                <p class="dashboard-subtitle">
                  Your Product
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
The Nike Air Max 720 SE goes bigger than ever before with Nike's tallest Air unit yet for unimaginable, all-day comfort. There's super breathable fabrics on the upper, while colours add a modern edge. Bring the past into the future with the Nike Air Max 2090, a bold look inspired by the DNA of the iconic Air Max 90. Brand-new Nike Air cushioning
                                </textarea>
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
                <div class="row mt-4">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-4">
                            <div class="gallery-container">
                              <img
                                src="/images/product-card-1.png"
                                class="w-100"
                                alt=""
                              />
                              <a href="" class="delete-gallery">
                                <img src="/images/icon-delete.svg" alt="" />
                              </a>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="gallery-container">
                              <img
                                src="/images/product-card-2.png"
                                class="w-100"
                                alt=""
                              />
                              <a href="" class="delete-gallery">
                                <img src="/images/icon-delete.svg" alt="" />
                              </a>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="gallery-container">
                              <img
                                src="/images/product-card-3.png"
                                class="w-100"
                                alt=""
                              />
                              <a href="" class="delete-gallery">
                                <img src="/images/icon-delete.svg" alt="" />
                              </a>
                            </div>
                          </div>
                          <div class="col-12">
                            <input
                              type="file"
                              id="file"
                              style="display: none;"
                              multiple
                            />
                            <button
                              href="#"
                              class="btn btn-secondary btn-block mt-3"
                              onclick="thisFileUpload()"
                            >
                              Add Product
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
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

