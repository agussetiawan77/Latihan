@extends('frontend.layout.app')
@section('content')
<!-- About-->
<section class="resume-section" id="about">
    <div class="resume-section-content">
        <h1 class="mb-0">
            {{$data['nama']}}
        </h1>
        <div class="subheading mb-5">
            {{$data['alamat']}}·
            <a href="wkresna888@gmail.com">wkresna888@gmail.com</a>
        </div>
        <p class="lead mb-5">merupakan kantor konsultan pajak yang menyediakan jasa konsultasi laporan keuangan. menyusun laporan keuangan, selain itu juga menyediakan sistem aplikasi yang dapat membantu anda dalam menyusun pembukuan sehingga menghasilkan laporan keuangan.</p>
        <div class="social-icons">
            <a class="social-icon" href="#!"><i class="fab fa-linkedin-in"></i></a>
            <a class="social-icon" href="#!"><i class="fab fa-github"></i></a>
            <a class="social-icon" href="#!"><i class="fab fa-twitter"></i></a>
            <a class="social-icon" href="#!"><i class="fab fa-facebook-f"></i></a>
        </div>
    </div>
</section>
@endsection

@push('style')

@endpush

@push('script')
    
@endpush