@props(['slides'])
<section>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" width="100" height="80%">
        <div class="carousel-inner">
          @foreach ($slides as $slide)
            <div class="item{{ $loop->first ? ' active' : '' }}">
                <img src="/storage/{{ $slide->image }}" alt="" class="carousel-image">
                <div class="carousel-caption slider-con">
                    <h2>Welcome to <span>University</span></h2>
                    <p>{{ $slide->description }}</p>
                    <a href="#" class="bann-btn-1">All Courses</a><a href="#" class=ann-btn-2">Read
                        More</a>
                </div>
            </div>
            @endforeach
        </div
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <i class="fa fa-chevron-left slider-arr"></i>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <i class="fa fa-chevron-right slider-arr"></i>
        </a>
    </div>
    </section>