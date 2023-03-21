<x-layout>
  <x-slot name="title">{{ $blog->title }}</x-slot>
    <!--SECTION START-->
    {{-- @dd("blogs") --}}
    <section>
        <div class="container com-sp">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>{{ $blog->title }}</h2>
                            <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                        </div>
                        <div>
                            <div class="ho-event pg-eve-main pg-blog">
                                <ul>
									 <li>
                                        <div class="ho-ev-date pg-eve-date"><span>07</span><span>jan,2018</span>
                                        </div>
                                        <div class="pg-eve-desc pg-blog-desc">
                                            <a href="event-register.html">
                                                <h4>{{ $blog->title }}<small>&nbsp;{{ $blog->created_at->diffForHumans() }}</small></h4>
                                            </a>
											<div class="share-btn blog-share-btn">
												<ul>
													<li><a href="#"><i class="fa fa-facebook fb1"></i> Share On Facebook</a>
													</li>
													<li><a href="#"><i class="fa fa-twitter tw1"></i> Share On Twitter</a>
													</li>
													<li><a href="#"><i class="fa fa-google-plus gp1"></i> Share On Google Plus</a>
													</li>
												</ul>
											</div>
											<img src="images/blog/5.jpg" alt="">
                                            <p class="text-justify">
                                              {!! $blog->body !!}
                                            </p>

                                            <div class="cor-p6">
                                                <h3>Write Comments</h3>
                                                <x-comment-section />
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->

</x-layout>