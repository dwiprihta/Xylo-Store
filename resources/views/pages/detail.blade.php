@extends('layouts.app')
@section('title')
    Detail Product
@endsection

@section('content')
   <div class="page-content page-details">
    <section class="store-breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Detail Products
                </li>
              </ol>
              </nav>
          </div>
        </div>
      </div>
    </section>
    <section class="store-gallery" id="gallery">
      <div class="container">
        <div class="row">
          <div class="col-lg-8" data-aos="zoom-in">
            <transition name="slide-fade" mode="out-in">
              <img :key="photos[activePhoto].id" :src="photos[activePhoto].url" class="w-100 main-image" alt="" />
            </transition>
          </div>
          <div class="col-lg-2">
            <div class="row mt-2">
              <div class="col-3 col-lg-12 mt-lg-8" v-for="(photo,index) in photos" :key="photo.id" data-aos="zoom-in"
                data-aos-delay="100">
                <a href="#" @click="changeActive(index)">
                  <img :src="photo.url" class="w-100 thumbnail-image" :class="{active:index==activePhoto}" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="store-details-container" data-aos="fade-up">
      <section class="store-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <h1>Sofa Alexca</h1>
              <div class="owner">Dwi Prihta </div>
              <div class="price">$340</div>
            </div>
            <div class="col-lg-2">
              <a href="/cart.html" class="btn btn-success px-4 text-white btn-block mb-3">Add to cart</a>
            </div>
          </div>
        </div>

        <div class="store-description">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-8">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio accusantium, veritatis laborum sed non
                  perferendis error provident, accusamus reprehenderit ab excepturi sapiente iusto tenetur quia
                  perspiciatis vitae harum cupiditate ipsa similique pariatur? Dolores provident dolorem ullam
                  cupiditate temporibus tempore nihil eaque architecto voluptatum? Illum aspernatur error qui quia
                  ducimus ad?
                </p>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio accusantium, veritatis laborum sed non
                  perferendis error provident, accusamus reprehenderit ab excepturi sapiente iusto tenetur quia
                  perspiciatis vitae harum cupiditate ipsa similique pariatur? Dolores provident dolorem ullam
                  cupiditate temporibus tempore nihil eaque architecto voluptatum? Illum aspernatur error qui quia
                  ducimus ad?
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="store-review">
        <div class="container">
          <div class="row">
            <div class="col-12 mt-5 mb-5">
              <h5> Cutomer Review (3)</h5>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12">
              <div class="media">
                <img src="images/icon-testimonial-1.png" class="mr-3" alt="Profil Tstimonial">
                <div class="media-body">
                  <h5 class="mt-0">Media heading</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                  odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                  fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12">
              <div class="media">
                <img src="images/icon-testimonial-2.png" class="mr-3" alt="Profil Tstimonial">
                <div class="media-body">
                  <h5 class="mt-0">Media heading</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                  odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                  fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>git init
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12">
              <div class="media">
                <img src="images/icon-testimonial-3.png" class="mr-3" alt="Profil Tstimonial">
                <div class="media-body">
                  <h5 class="mt-0">Media heading</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                  odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                  fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
@endsection

@push('addon-script')
     <script src="/vendor/vue/vue.js"></script>
  <script>
    var gallery = new Vue({
      el: "#gallery",
      mounted() {
        AOS.init();
      },
      data: {
        activePhoto: 1,
        photos: [{
            id: 1,
            url: "/images/product-details-1.jpg"
          },
          {
            id: 2,
            url: "/images/product-details-2.jpg"
          },
          {
            id: 3,
            url: "/images/product-details-3.jpg"
          },
          {
            id: 4,
            url: "/images/product-details-4.jpg"
          },
        ],
      },
      methods: {
        changeActive(id) {
          this.activePhoto = id
        }
      }
    })
  </script>
@endpush
