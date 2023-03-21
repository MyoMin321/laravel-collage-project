@props(['blogs'])
@foreach($blogs as $blog)
<li>
  <div class="ho-ev-date pg-eve-date">
    <span>07</span>
    <span>jan,2018</span>
  </div>
  <div class="pg-eve-desc pg-blog-desc">
  <a href="/blogs/{{ $blog->title }}">
      <h4>{{ $blog->title }}</h4>
  </a>
			<img src="images/blog/6.jpg" alt="">
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
      <p>

      </p>
        <span>9:15 am – 5:00 pm</span>
    </div>
    <div class="pg-eve-reg pg-blog-reg">
        <a href="blog-details.html">Read more</a>
    </div>
</li>
@endforeach