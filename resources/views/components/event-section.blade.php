@props(['events'])

@foreach($events as $event)
  <tr>
      <td>1</td>
      <td>
        <span class="list-img">
          <img src="/storage/{{ $event->image }}" alt="">
        </span>
      </td>
			<td><a href="/events/{{ $event->name }}">{{ $event->name }}</a></td>
      <td>{{ $event->date }}</td>
			<td>{{ $event->time }}</td>
			<td>{{ $event->user->name }}</td>
      <td>
          <span class="label label-success">Active</span>
      </td>
			<td><a href="/admin/events/{{ $event->name }}/edit" class="ad-st-view">Edit</a></td>
      </tr>   
@endforeach                                        