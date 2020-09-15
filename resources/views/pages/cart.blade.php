@extends('layouts.app')

@section('title')
    Keranjang Belanjamu
@endsection

@section('content')
<div class="page-content page-cart">
    <!-- Breadcumb -->
    <section class="store-breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                 Cart
                </li>
              </ol>
              </nav>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcumb -->

    <section class="store-cart">
      <div class="container">
        <!-- Tabel Cart -->
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 table-responsive">
            <table class="table table-borderless table-cart">
              <thead>
                <tr>
                  <td>Image</td>
                  <td>Name &amp; Seller</td>
                  <td>Price</td>
                  <td>Menu</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width:15%;"><img src="/images/product-details-2.jpg" class="cart-image w-100" alt=""></td>
                  <td  style="width:30%;">
                    <div class="product-title">Sofa Ternyaman</div>
                    <div class="product-subtitele">by dwi prihta</div>
                  </td>
                  <td style="width:30%;">
                    <div class="product-title">$30</div>
                    <div class="product-subtitele">USD</div>
                  </td>
                  <td style="width:20%;">
                      <a href="#" class="btn btn-remove mt-3">Remove</a>
                  </td>
                </tr>
                
                 <tr>
                  <td style="width:15%;"><img src="/images/product-details-2.jpg" class="cart-image w-100" alt=""></td>
                  <td  style="width:30%;">
                    <div class="product-title">Sofa Ternyaman</div>
                    <div class="product-subtitele">by dwi prihta</div>
                  </td>
                  <td style="width:30%;">
                    <div class="product-title">$30</div>
                    <div class="product-subtitele">USD</div>
                  </td>
                  <td style="width:20%;">
                      <a href="#" class="btn btn-remove mt-3">Remove</a>
                  </td>
                </tr>

                 <tr>
                  <td style="width:15%;"><img src="/images/product-details-2.jpg" class="cart-image w-100" alt=""></td>
                  <td  style="width:30%;">
                    <div class="product-title">Sofa Ternyaman</div>
                    <div class="product-subtitele">by dwi prihta</div>
                  </td>
                  <td style="width:30%;">
                    <div class="product-title">$30</div>
                    <div class="product-subtitele">USD</div>
                  </td>
                  <td style="width:20%;">
                    <a href="#" class="btn btn-remove mt-3">Remove</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- Tabel Cart -->

        <!-- Form Title -->
        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-12">
            <hr>
          </div>
          <div class="col-12">
            <h2 class="mb-4">
              Shipping Details
            </h2>
          </div>
        </div>
        <!-- Form Title -->

        <!-- Form Shippimg -->
        <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-6 col-sm-12">
            <div class="form-group">
              <label for="addresOne">Address One</label>
              <input type="text" class="form-control" id="addresOne" name="addressOne" >
            </div>
          </div>
          <div class="col-lg-6 col-sm-12">
            <div class="form-group">
              <label for="addresTwo">Address Two</label>
              <input type="text" class="form-control" id="addresTwo" name="addressTwo" >
            </div>
          </div>
          <div class="col-lg-4 col-sm-12">
            <div class="form-group">
              <label for="province">Province</label>
              <select name="province" id="province" class="form-control">
                <option value="">Jawa Barat</option>
              </select>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12">
            <div class="form-group">
              <label for="city">City</label>
              <select name="city" id="city" class="form-control">
                <option value="">Bandung</option>
              </select>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12">
            <div class="form-group">
              <label for="postalCode">Postal Code</label>
              <input type="text" class="form-control" id="postalCode" name="postalCode" >
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="country">Country</label>
              <input type="text" class="form-control" id="country" name="country">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="mobile">Mobile</label>
              <input type="text" class="form-control" id="mobile" name="mobile" >
            </div>
          </div>
        </div>
        <!-- Form Shippimg -->

        <!-- Tottal Shipping Tittle -->
        <div class="row mb-2" data-aos="fade-up" data-aos-delay="250">
          <div class="col-12">
            <hr>
          </div>
          <div class="col-12">
            <h2 class="mb-4">
              Shipping Details
            </h2>
          </div>
        </div>
        <!-- Tottal Shipping Tittle-->

        <!-- Tottal Shipping-->
        <div class="row mb-2" data-aos="fade-up" data-aos-delay="300">
          <div class="col-4 col-md-2">
            <div class="product-title">$10</div>
            <div class="product-subtitle">Country Tax</div>
          </div>
          <div class="col-4 col-md-2">
            <div class="product-title">$342</div>
            <div class="product-subtitle">Product Insurance</div>
          </div>
          <div class="col-4 col-md-2">
            <div class="product-title">$89</div>
            <div class="product-subtitle">Ship to Jakarta</div>
          </div>
          <div class="col-4 col-md-2">
            <div class="product-title text-success">$5700</div>
            <div class="product-subtitle">Tottal</div>
          </div>
          <div class="col-8 col-md-4">
            <a href="/success.html" class="btn btn-block mt-4 btn-success">Checkout</a>
          </div>
        </div>
        <!-- Tottal Shipping-->
      </div>
    </section>
</div>
@endsection