@extends('layout.default')
@section('title', 'Product Details')
@section('content')

<!-- Page Header Start -->
<div class="page-header parallaxie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">{{ $product['title'] }}</span></h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('/products') }}">Products</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $product['title'] }}</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Page Project Single Start -->
<div class="page-project-single">
    <div class="container">
        <!-- Added justify-content-center to center the columns -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Project Single Content Start -->
                <div class="project-single-content">
                    <!-- Project Single Image Start -->
                    <div class="project-single-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('assets/images/'.$product['image']) }}" alt="{{ $product['title'] }}">
                        </figure>
                    </div>
                    <!-- Project Single Image End -->

                    <!-- Project Entry Start -->
                    <div class="project-entry">
                        <!-- Project Info Start -->
                        <div class="project-info">
                            <h2 class="text-anime-style-2">{{ $product['title'] }}</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">{{ $product['intro'] }}</p>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">{{ $product['details'] }}</p>
                        </div>
                        <!-- Project Info End -->

                        <div class="project-goal">
                            <!-- Dynamic Points -->
                            @if(!empty($product['points']))
                            <ul class="wow fadeInUp" data-wow-delay="0.4s">
                                @foreach($product['points'] as $point)
                                <li>{{ $point }}</li>
                                @endforeach
                            </ul>
                            @endif
                        </div>

                        <div class="project-info">
                            <h2 class="text-anime-style-2">Why choose <span>{{ $product['title'] }}</span></h2>

                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                {{ $product['why_choose'] ?? '' }}
                            </p>
                        </div>
                    </div>
                    <!-- Project Entry End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Project Single End -->

@endsection
