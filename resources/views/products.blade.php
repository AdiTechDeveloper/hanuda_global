@extends('layout.default')
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
                    ['class'=>'bearings','img'=>'bearings.jpeg','title'=>'Total Quality Management Implementation','tag'=>'Bearings'],
                    ['class'=>'electricalmotors','img'=>'electrical-moter.jpeg','title'=>'Advanced Research in Material Science','tag'=>'Electrical Motors'],
                    ['class'=>'beltingbelts','img'=>'belts.jpeg','title'=>'Workplace Safety Enhancement Initiative','tag'=>'Belting Belts'],
                    ['class'=>'rollerchains','img'=>'roller-chain.jpeg','title'=>'Robotic Process Automation Deployment','tag'=>'Roller Chains'],
                    ['class'=>'gearboxes','img'=>'gear-box.jpeg','title'=>'Energy-Efficient Manufacturing Systems','tag'=>'Gear Boxes'],
                    ['class'=>'casters','img'=>'casters.jpeg','title'=>'Redesigning Factory Layouts for Efficiency','tag'=>'Casters'],
                    ['class'=>'lubricants','img'=>'lubricants.jpeg','title'=>'Optimized Lubrication Systems','tag'=>'Lubricants'],
                    ['class'=>'constructionmining','img'=>'construction-mining.jpeg','title'=>'Heavy Equipment Optimization','tag'=>'Construction & Mining'],
                    ];
                    @endphp

                    @foreach($projects as $index => $project)
                    <div class="col-md-6 project-item-box {{ $project['class'] }}">
                        <div class="project-item wow fadeInUp" data-wow-delay="{{ $index * 0.2 }}s">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/'.$project['img']) }}" alt="{{ $project['tag'] }}">
                                </figure>
                            </div>

                            <div class="project-tag">
                                <a href="#">{{ $project['tag'] }}</a>
                            </div>

                            <div class="project-content">
                                <h3><a href="#">{{ $project['title'] }}</a></h3>
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


{{-- ✅ IMPORTANT SCRIPTS --}}
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
