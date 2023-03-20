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
                            <h2>Experience of Studying <span> Abroad</span></h2>
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
                                                <h4>{{ $blog->title }}</h4>
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
                                            <span>{{ $blog->created_at->diffForHumans() }}</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="pg-pagina">
                            <ul class="pagination">
                                <li class="disabled"><a href="#!"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                                <li class="active"><a href="#!">1</a></li>
                                <li class="waves-effect"><a href="#!">2</a></li>
                                <li class="waves-effect"><a href="#!">3</a></li>
                                <li class="waves-effect"><a href="#!">4</a></li>
                                <li class="waves-effect"><a href="#!">5</a></li>
                                <li class="waves-effect"><a href="#!"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->

</x-layout>