@props(['blogs'])
@foreach($blogs as $blog)
<li>
  <div class="ho-ev-date pg-eve-date">
    <span>07</span>
    <span>jan,2018</span>
  </div>
  <div class="pg-eve-desc pg-blog-desc">
  <a href="/blogs/{{ $blog->title }}">
      <h3>{{ $blog->title }}<small>&nbsp; {{ $blog->created_at->diffForHumans() }}</small></h3>
  </a>
			<img src="/storage/{{ $blog->image }}" alt="">
      <p>{{ Str::limit(strip_tags($blog->body), 300) }}</p>
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
    </div>
    <div class="pg-eve-reg pg-blog-reg">
        <a href="/blogs/{{ $blog->title }}">Read more</a>
    </div>
</li>
@endforeach