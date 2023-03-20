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
                                    <h4>Team Details</h4>
                                    <p>All about courses, program structure, fees, best course lists (ranking), syllabus, teaching techniques and other details.</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Profile</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
													<th>Phone</th>
                                                    <th>Address</th>
                                                    <th>Added By</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- <x-admin_course_section :courses="$courses"/>                                          --}}
                                                @foreach ($teams as $team)
                                                <tr>
                                                    <td>
                                                        <span class="list-img">
                                                            <img src="/storage/{{ $team->profile }}" alt="">
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href="/courses/{{ $team->name }}">
                                                            <span class="list-enq-name">{{ $team->name }}</span>
                                                            <span class="list-enq-city">
                                                                {{ $team->city }}, {{ $team->country }}
                                                            </span>
                                                        </a>
                                                    </td>
                                                    <td>{{ $team->email }}</td>
                                                    <td>{{ $team->phone }}</td>
                                                    <td>{{ $team->address }}</td>
                                                    <td>{{ $team->user->name }}</td>
                                                	<td>
                                                        <a href="/admin/courses/{{$team->slug}}/edit" class="btn btn-warning">
                                                            Edit
                                                        </a>
                                                    </td>
                                                	<td>
                                                        <form action="/admin/blogs/{{$team->slug}}/delete" method="POST"> @csrf
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