@foreach ($events as $event)
  
<li>
  <div class="ho-ev-date">
    <span>{{ explode('-', $event->date)[2] }}
</span>
    <span>{{ date('M', strtotime($event->date)) }}
,{{ explode('-', $event->date)[0] }}</span>
  </div>
  <div class="ho-ev-link">
    <a href="events.html">
      <h4>{{ $event->name }}</h4>
    </a>
    <p>{{ Str::limit(strip_tags($event->description), 25) }}</p>
    <span>{{ $event->date }} – {{ $event->time }}</span>
  </div></li> 

  @endforeach