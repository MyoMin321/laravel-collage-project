@props(['courses'])
@foreach($courses as $course)
                <div class="col-md-6">
                        
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="/storage/{{ $course->thumbnail }}" alt="" class=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>{{ $course->title }}</h3>
                                </a>
                                <h4>Courses / {{$course->category->name}}</h4>
                                <p>{!! Str::limit($course->body, 10) !!}</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details"><i class="fa fa-eye" aria-hidden="true"></i>10 Aavailable</a> </li>
                                        <li><a href="course-details"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>
                @endforeach  