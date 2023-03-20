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
                                    <h4>Department Details</h4>
                                    <p>All about courses, program structure, fees, best course lists (ranking), syllabus, teaching techniques and other details.</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Department Name</th>
													<th>Description</th>
													<th>Public</th>
                                                    <th>Status</th>
                                                    <th>Edit</th>
													<th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- <x-admin_course_section :courses="$courses"/>                                          --}}
                                                @foreach ($departments as $department)
                                                <tr>
                                                    <td>
                                                        <a href="/courses/{{ $department->name }}">
                                                            <span class="list-enq-name">{{ $department->name }}</span>
                                                            <span class="list-enq-city">
                                                                Mandalay, Myanmar
                                                            </span>
                                                        </a>
                                                    </td>
                                                    <td>{{ Str::limit(strip_tags($department->description), 20) }}</td>
                                                    <td>{{ $department->created_at->diffForHumans() }}</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                	<td>
                                                        <a href="/admin/departments/{{$department->name}}/edit" class="btn btn-warning">
                                                            Edit
                                                        </a>
                                                    </td>
                                                	<td>
                                                        <form action="/admin/departments/{{$department->name}}/delete" method="POST"> @csrf
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