<x-layout>
    <x-slot name="title">{{ $course->title }}</x-slot>
    <!--SECTION START-->
    <section>
        <div class="container com-sp pad-bot-70 pg-inn">
            <div class="row">
                <div class="cor">
                    {{-- <x-course_details_left_sidebar /> --}}
                    <div class="col-md-9">
                        <div class="cor-mid-img">
                            <img src="/storage/{{$course->thumbnail}}" alt="">
                        </div>
                        <div class="cor-con-mid">
                            <div class="cor-p1">
                                <h2>{{ $course->title }}</h2>
                                <span>Category: Software Testing</span>
                                <div class="share-btn">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook fb1"></i> Share On Facebook</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-twitter tw1"></i> Share On Twitter</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-google-plus gp1"></i> Share On Google Plus</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cor-p4">
                                <h3>Course Details:</h3>
                                <p>
                                    {!! $course->body !!}
                                </p>
                            </div>
                            <div class="cor-p5">
                                <h3>Course Syllabus</h3>
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#home">
									<img src="images/icon/cor4.png" alt=""> <span>Requirements</span></a>
                                    </li>
                                    <li><a data-toggle="tab" href="#menu1"><img src="images/icon/cor3.png" alt=""><span>Fees</span></a></li>
                                    <li><a data-toggle="tab" href="#menu2"><img src="images/icon/cor1.png" alt=""><span>Student Profile</span></a></li>
                                    <li><a data-toggle="tab" href="#menu2"><img src="images/icon/cor5.png" alt=""><span>How to Apply</span></a></li>
                                </ul>

                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active">
                                        <h4>Home</h4>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        <p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                        <h4>Menu 1</h4>
                                        <p>Some content in menu 1.</p>
                                    </div>
                                    <div id="menu2" class="tab-pane fade">
                                        <h4>Menu 2</h4>
                                        <p>Some content in menu 2.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cor-p4">
                                <h3>A typical weekly timetable:</h3>
                                <p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <ul class="collapsible" data-collapsible="accordion">
                                    <li>
                                        <div class="collapsible-header active">1st year</div>
                                        <div class="collapsible-body cor-tim-tab">
                                            <h4>First Year Courses</h4>
                                            <ul>
                                                <li>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</li>
                                                <li>Anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</li>
                                                <li>Combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem</li>
                                                <li>Nullam tincidunt urna non porttitor luctus. Suspendisse sem urna, auctor ac commodo eu, bibendum sed nulla.</li>
                                            </ul>
                                            <h4>Assessment</h4>
                                            <ul>
                                                <li>Three written papers form the First University Examination, together with a submitted portfolio of two exam essays of 2,000 words for Introduction to English Language and Literature.</li>
                                                <li>All exams must be passed, but marks do not count towards the final degree.</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="collapsible-header">2st year</div>
                                        <div class="collapsible-body cor-tim-tab">
                                            <h4>Second Year Courses</h4>
                                            <ul>
                                                <li>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</li>
                                                <li>Anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</li>
                                                <li>Combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem</li>
                                            </ul>
                                            <h4>Assessment</h4>
                                            <ul>
                                                <li>Three written papers form the First University Examination, together with a submitted portfolio of two exam essays of 2,000 words for Introduction to English Language and Literature.</li>
                                                <li>All exams must be passed, but marks do not count towards the final degree.</li>
                                                <li>Combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="collapsible-header">3st year</div>
                                        <div class="collapsible-body cor-tim-tab">
                                            <h4>Third Year Courses</h4>
                                            <ul>
                                                <li>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</li>
                                                <li>Anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</li>
                                            </ul>
                                            <h4>Assessment</h4>
                                            <ul>
                                                <li>Three written papers form the First University Examination, together with a submitted portfolio of two exam essays of 2,000 words for Introduction to English Language and Literature.</li>
                                                <li>All exams must be passed, but marks do not count towards the final degree.</li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="cor-p6">
                                <h3>Student Reviews</h3>
                                <div class="cor-p6-revi">
                                    <div class="cor-p6-revi-left">
                                        <img src="images/4.jpg" alt="">
                                    </div>
                                    <div class="cor-p6-revi-right">
                                        <h4>Rachel Britain</h4>
                                        <span>Date: 12may, 2017</span>
                                        <p>Mauris elementum et libero ac pharetra. Proin tristique dapibus tellus, lacinia blandit mi tincidunt at. Vivamus vitae interdum felis. Pellentesque congue mollis erat in imperdiet.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cor-p6">
                                <h3>Write Reviews</h3>
                                <div class="cor-p7-revi">
                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="text" class="validate">
                                                <label>Name</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="text" class="validate">
                                                <label>Email id</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea class="materialize-textarea"></textarea>
                                                <label>Message</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="submit" value="Submit" class="waves-effect waves-light btn-book">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <x-course_details_right_sidebar />
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->


    <!--SECTION START-->
    <section>
        <div class="full-bot-book">
            <div class="container">
                <div class="row">
                    <div class="bot-book">
                        <div class="col-md-2 bb-img">
                            <img src="images/3.png" alt="">
                        </div>
                        <div class="col-md-7 bb-text">
                            <h4>therefore always free from repetition</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                        </div>
                        <div class="col-md-3 bb-link">
                            <a href="course-details.html">Book This Course</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->
</x-layout>