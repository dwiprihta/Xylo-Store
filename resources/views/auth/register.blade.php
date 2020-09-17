@extends('layouts.auth')

@section('title')
    Register
@endsection

@section('content')
<div class="page-content page-auth" id="register">
    <section class="store-auth" data-aos="fade-up">
    <div class="container">
        <div class="row justify-content-center align-items-center row-login mb-5">
            <div class="col-lg-4">
                <h2>Cara baru jual beli furniture</h2>
                <form action="" class="mt-3">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control is-valid" name="name" id="name" v-model="name" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" name="password" id="password" v-model="email">
                    </div>
                    <div class="form-group display-inline">
                        <label for="store">Store</label>
                        <p class="text-muted">apakah anda juga ingin membuka toko</p>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="openStoreTrue" name="is_store_open" class="custom-control-input" v-model="is_store_open" :value="true">
                                <label class="custom-control-label" for="openStoreTrue">Ya Boleh </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="openStoreFalse" name="is_store_open" class="custom-control-input" v-model="is_store_open" :value="false">
                                <label class="custom-control-label" for="openStoreFalse">Enggak dulu deh </label>
                            </div>
                    </div>
                    <div class="form-group" v-if="is_store_open">
                        <label for="password">Nama Toko</label>
                        <input type="text" class="form-control" name="password" id="password">
                    </div>
                        <div class="form-group" v-if="is_store_open">
                        <label for="password">Category</label>
                        <select name="category" class="form-control">
                            <option value="">All</option>
                            <option value="">Meja</option>
                            <option value="">Kursi</option>
                        </select>
                    </div>
                    <button type="submit" name="sumbit" id="btn-add" class="btn btn-success btn-block mt-4">
                    Sign up Now
                    </button>
                    <button class="btn btn-default btn-block">
                    Back to Sign
                    </button>
                    </div>
                </form>
            </div>
        </div>
        </section>
</div>


{{-- <div class="container hide">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script src="https://unpkg.com/vue-toasted"></script>
    <script>
      Vue.use(Toasted);
      var register= new Vue({
          el:"#register",
          mounted(){
              AOS.init();
              this.$toasted.error(
                  "Maaf, email anda sudah terdaftar",
                  {
                      position:"top-center",
                      className:"rounded",
                      duration:1000,
                  }
              );
          },
          data:{
              name:"Dwi Prihtapambudi",
              email:"dwi@gmail.com",
              password:"",
              is_store_open:true,
              store_name:"",
          },
      });
    </script>
@endpush
