@extends('layout.default')
@section('title', 'Products')
@section('content')
<div class="page-projects">
    <div class="container">
        <div class="row">

            <!-- Filter Nav -->
            <div class="col-lg-12">
                <div class="our-Project-nav wow fadeInUp" data-wow-delay="0.4s">
                    <ul>
                        <li><a href="#" class="active-btn" data-filter="*">All</a></li>
                        <li><a href="#" data-filter=".bearings">Bearings</a></li>
                        <li><a href="#" data-filter=".electricalmotors">Electrical Motors</a></li>
                        <li><a href="#" data-filter=".beltingbelts">Belting / Belts</a></li>
                        <li><a href="#" data-filter=".rollerchains">Roller Chains</a></li>
                        <li><a href="#" data-filter=".gearboxes">Gear Boxes</a></li>
                        <li><a href="#" data-filter=".casters">Casters</a></li>
                        <li><a href="#" data-filter=".lubricants">Lubricants</a></li>
                        <li><a href="#" data-filter=".constructionmining">Construction & Mining</a></li>
                    </ul>
                </div>
            </div>

            <!-- Items -->
            <div class="col-lg-12">
                <div class="row project-item-boxes">

                    @php
                    $projects = [
                    [
                    'slug'=>'bearings',
                    'class'=>'bearings',
                    'img'=>'bearings.jpg',
                    'title'=>'High-Performance Bearings for Industrial Applications',
                    'tag'=>'Bearings',
                    ],
                    [
                    'slug'=>'electricalmotors',
                    'class'=>'electricalmotors',
                    'img'=>'electrical-moter.jpeg',
                    'title'=>'Energy Efficient Electrical Motors for Heavy Duty Use',
                    'tag'=>'Electrical Motors'
                    ],
                    [
                    'slug'=>'beltingbelts',
                    'class'=>'beltingbelts',
                    'img'=>'belts.jpg',
                    'title'=>'Durable Belting Solutions for Power Transmission',
                    'tag'=>'Belting Belts'
                    ],
                    [
                    'slug'=>'rollerchains',
                    'class'=>'rollerchains',
                    'img'=>'roller-chain.jpg',
                    'title'=>'Precision Roller Chains for Smooth Operations',
                    'tag'=>'Roller Chains'
                    ],
                    [
                    'slug'=>'gearboxes',
                    'class'=>'gearboxes',
                    'img'=>'gear-box.jpeg',
                    'title'=>'Robust Gear Boxes for Industrial Machinery',
                    'tag'=>'Gear Boxes'
                    ],
                    [
                    'slug'=>'casters',
                    'class'=>'casters',
                    'img'=>'casters.jpg',
                    'title'=>'Heavy Duty Casters for Material Handling',
                    'tag'=>'Casters'
                    ],
                    [
                    'slug'=>'lubricants',
                    'class'=>'lubricants',
                    'img'=>'lubricants.jpeg',
                    'title'=>'Premium Lubricants for Equipment Longevity',
                    'tag'=>'Lubricants'
                    ],
                    [
                    'slug'=>'constructionmining',
                    'class'=>'constructionmining',
                    'img'=>'construction-mining.jpg',
                    'title'=>'Reliable Solutions for Construction & Mining Equipment',
                    'tag'=>'Construction & Mining'
                    ],
                    ];
                    @endphp

                    @foreach($projects as $index => $project)
                    <div class="col-lg-3 col-md-6 project-item-box {{ $project['class'] }}">
                        <div class="project-item wow fadeInUp" data-wow-delay="{{ $index * 0.2 }}s">

                            <div class="project-image">
                                <a href="{{ url('products/'.$project['slug']) }}">
                                    <figure class="image-anime">
                                        <img src="{{ asset('assets/images/'.$project['img']) }}" alt="{{ $project['tag'] }}" class="img-fluid">
                                    </figure>
                                </a>
                            </div>

                            <div class="project-tag">
                                <a href="{{ url('products/'.$project['slug']) }}">
                                    {{ $project['tag'] }}
                                </a>
                            </div>

                            <div class="project-content">
                                <h6>
                                    <a href="{{ url('products/'.$project['slug']) }}">
                                        {{ $project['title'] }}
                                    </a>
                                </h6>
                            </div>

                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>
</div>
@endsection


@section('scripts')
<script>
    $(document).ready(function() {

        var $grid = $('.project-item-boxes').isotope({
            itemSelector: '.project-item-box'
            , layoutMode: 'fitRows'
        });

        // Fix layout after images load (MOST IMPORTANT)
        $grid.imagesLoaded().progress(function() {
            $grid.isotope('layout');
        });

        // Filter click
        $('.our-Project-nav a').on('click', function(e) {
            e.preventDefault();

            $('.our-Project-nav a').removeClass('active-btn');
            $(this).addClass('active-btn');

            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue
            });
        });

    });

</script>
@endsection
