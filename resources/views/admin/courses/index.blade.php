<x-admin_layout>
  {{-- @dd($courses); --}}
    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">

            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Dashboard</a>
                        </li>
                        <li class="page-back"><a href="index-2.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Course Details</h4>
                                    <p>All about courses, program structure, fees, best course lists (ranking), syllabus, teaching techniques and other details.</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Course Name</th>
													<th>Category</th>
                                                    <th>Public</th>
													<th>Contact Person</th>
                                                    <th>Contact Number</th>
													<th>Status</th>
                                                    <th>Edit</th>
													<th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- <x-admin_course_section :courses="$courses"/>                                          --}}
                                                @foreach ($courses as $course)
                                                <tr>
                                                    <td>
                                                        <span class="list-img">
                                                            <img src="/storage/{{ $course->thumbnail }}" alt="">
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href="/courses/{{$course->slug}}">
                                                            <span class="list-enq-name">{{ $course->title }}</span>
                                                            <span class="list-enq-city">
                                                                Mandalay, Myanmar
                                                            </span>
                                                        </a>
                                                    </td>
                                                    <td>{{ $course->category->name }}</td>
                                                    <td>{{ $course->created_at->diffForHumans() }}</td>
                                                    <td>{{ $course->contact_person }}</td>
                                                    <td>{{ $course->contact_phone }}</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                	<td>
                                                        <a href="/admin/courses/{{$course->slug}}/edit" class="btn btn-warning">
                                                            Edit
                                                        </a>
                                                    </td>
                                                	<td>
                                                        <form action="/admin/blogs/{{$course->slug}}/delete" method="POST"> @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">delete</button>
                                                        </form>
                                                        
                                                    </td>
                                                </tr> 
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin_layout>