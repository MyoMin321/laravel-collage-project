<x-layout>
    <x-slot name="title">Admission</x-slot>
    <!--SECTION START-->
    <section class="c-all h-quote">
        <div class="container">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="all-title quote-title qu-new">
                    <h2>Request an Admission</h2>
                    <p>Fusce purus mauris, blandit vitae purus eget, viverra volutpat nibh. Nam in elementum nisi, a placerat nisi. Quisque ullamcorper magna in odio rhoncus semper.Sed nec ultricies velit. Aliquam non massa id enim ultrices aliquet a ac
                        tortor.</p>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    <p class="help-line">Help Line <span>+010 4561 32145</span> </p> <span class="help-arrow pulse"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="n-form-com admiss-form">
                    <div class="col s12">
                        <form class="form-horizontal" action="admissions/create" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="control-label col-sm-3">Full Name:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                    @error('name')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Email:</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                    @error('email')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Phone:</label>
                                <div class="col-sm-9">
                                    <input type="number" name="phone" class="form-control" placeholder="Phone" required>
                                    @error('phone')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Your Country:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="country" class="form-control" placeholder="Country">
                                    @error('country')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Your City:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="city" class="form-control" placeholder="City">
                                    @error('city')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Zip Code:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="zipcode" class="form-control" placeholder="Zip Code">
                                    @error('zipcode')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Education:</label>
                                <div class="col-sm-9">
                                    <select name="education">
								        <option>-- Your Education Level --</option>
								        <option value="doctoris">Doctoris</option>
								        <option value="master">Master's</option>							
								        <option value="bachelor">Bachelor</option>
								        <option value="under-graduate">Under Graduate</option>
								        <option value="higher-education">Higher Education Level</option>
								        <option value="elementary-education">Elementary Education</option>
								        <option value="other">Other</option>
                                        @error('education')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
							        </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Course:</label>
                                <div class="col-sm-9">
                                    <select name="course_id">
								        <option value="" disabled selected>-- Select course --</option>
                                            @foreach ($courses as $course)
								                <option {{ $course->id==old('course_id') ? 'selected' : '' }} value="{{ $course->id }}">
                                                    {{ $course->title }}
                                        </option>
                                            @endforeach
							        </select>
                                </div>
                            </div>
                            <div class="form-group mar-bot-0">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <i class="waves-effect waves-light light-btn waves-input-wrapper" style=""><input type="submit" value="APPLY NOW" class="waves-button-input"></i>
                                </div>
                            </div>
                        </form>
                    </div>
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