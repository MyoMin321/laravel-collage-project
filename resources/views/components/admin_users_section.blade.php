@props(['users']);
{{-- @dd($users) --}}
@foreach ($users as $user)
<tr>
    <td><span class="list-img">
        <img src="images/user/1.png" alt=""></span>
    </td>
    <td><a href="#">
        <span class="list-enq-name">{{ $user->name }}</span>
        <span class="list-enq-city">Mandalay, Myanmar</span>
    </a>
    </td>
    <td>{{ $user->email }}</td>
    <td>united states</td>
    <td>ST17241</td>
	<td>03 Jun 1990</td>
    <td>
    <span class="label label-success">Active</span>
    </td>
	<td>
        <a href="admin-student-details.html" class="ad-st-view">View</a>
    </td>
</tr>
@endforeach