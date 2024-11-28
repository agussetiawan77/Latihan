@extends('frontend.layout.app')

@section('content')
<!-- Skills-->
<section class="resume-section" id="skills">
    <div class="resume-section-content">
         <!-- Tampilkann Judul -->        
         <h1 class="mb-0">
            <!--memanggil variable data di controoler -->
            {{$t2}}
        </h1>
        <h1 class="subheading mb-3">
            <!--memanggil variable data di controoler -->
            {{$t2}}
        </h1>

         <!-- Menampilkan Data dari Array -->
         <ul class="fa-ul mb-0">
            @foreach ($data['head'] as $item)
                <li><span class="fa-li"><i class="fas fa-check"></i></span> {{ $item['nama'] }} - {{ $item['divisi'] }}</li>
                <!-- Menampilkan sub-item 'komputer' atau 'pajak' jika ada -->
                @if(isset($item['komputer']))
                    <ul>
                        @foreach ($item['komputer'] as $komputer)
                            <li><span class="fa-li"><i class="fas fa-laptop"></i></span> {{ $komputer }}</li>
                        @endforeach
                    </ul>
                @elseif(isset($item['pajak']))
                    <ul>
                        @foreach ($item['pajak'] as $pajak)
                            <li><span class="fa-li"><i class="fas fa-file-invoice-dollar"></i></span> {{ $pajak }}</li>
                        @endforeach
                    </ul>
                @endif
            @endforeach
        </ul>

        <p></p>
        <ul class="list-inline dev-icons">
            <li class="list-inline-item"><i class="fab fa-html5"></i></li>
            <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
            <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
            <li class="list-inline-item"><i class="fab fa-angular"></i></li>
            <li class="list-inline-item"><i class="fab fa-react"></i></li>
            <li class="list-inline-item"><i class="fab fa-node-js"></i></li>
            <li class="list-inline-item"><i class="fab fa-sass"></i></li>
            <li class="list-inline-item"><i class="fab fa-less"></i></li>
            <li class="list-inline-item"><i class="fab fa-wordpress"></i></li>
            <li class="list-inline-item"><i class="fab fa-gulp"></i></li>
            <li class="list-inline-item"><i class="fab fa-grunt"></i></li>
            <li class="list-inline-item"><i class="fab fa-npm"></i></li>
        </ul>
        <div class="subheading mb-3">Kami Bekerja Secara Proforsional</div>
        <ul class="fa-ul mb-0">
            <li>
                <span class="fa-li"><i class="fas fa-check"></i></span>
                Menjaga Kejujuran
            </li>
            <li>
                <span class="fa-li"><i class="fas fa-check"></i></span>
                Berintegritas
            </li>
            <li>
                <span class="fa-li"><i class="fas fa-check"></i></span>
                Komitment Tinggi
            </li>
            <li>
                <span class="fa-li"><i class="fas fa-check"></i></span>
                Cinta Kasih
            </li>
        </ul>
    </div>
</section>
@endsection

@push('style')

@endpush

@push('script')

@endpush
