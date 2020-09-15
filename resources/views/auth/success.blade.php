@extends('layouts.success')
@section('title')
    Register Success
@endsection

@section('content')
    <div class="page-content page-success">
        <div class="section-success" data-aos="zoom-in">
            <div class="container">
                <div class="row align-item-center row-login justify-content-center">
                    <div class="col-lg-6 text-center">
                        <img src="/images/success.svg" alt="image success" class="mb-4">
                        <h2>
                            Welcome to Store
                        </h2>
                        <p>
                            Akunmu berhasil dibuat, sekarang kamu bisa belanja furniture yang kamu suka
                        </p>
                    
                    <a href="/dhasboard.html" class="btn btn-success w-50 mt-4">
                        My Dashboard
                    </a>
                     <a href="/index.html" class="btn btn-default w-50 mt-2">
                        Sign UP
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
