{{-- @props("['courses']")
@dd($courses) --}}
@foreach ($courses as $course)
<tr>
    <td><span class="list-img"><img src="images/course/sm-2.jpg" alt=""></span>
    </td>
    <td><a href="admin-course-details.html"><span class="list-enq-name">{{ $course->title }}</span><span class="list-enq-city">Illunois, United States</span></a>
    </td>
    <td>Agriculture</td>
    <td>25 Days(420hrs)</td>
    <td>05 Jan 2018</td>
    <td>25 Jan 2018</td>
		<td>25</td>
    <td>
        <span class="label label-success">Active</span>
    </td>
	<td><a href="admin-course-details.html" class="ad-st-view">Edit</a></td>
</tr> 
@endforeach