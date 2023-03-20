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
                                    <h4>Blog Details</h4>
                                    <p>All about courses, program structure, fees, best course lists (ranking), syllabus, teaching techniques and other details.</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
													                          <th>Body</th>
                                                    <th>Status</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- <x-admin_course_section :courses="$courses"/>                                          --}}
                                                @foreach ($blogs as $blog)
                                                <tr>
                                                    <td>
                                                      <a href="/blogs/{{$blog->title}}">{{ $blog->title }}</a>
                                                    </td>
                                                    <td>{{ Str::limit(strip_tags($blog->body), 20) }}</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                	<td>
                                                        <a href="/admin/blogs/{{$blog->title}}/edit" class="btn btn-warning">
                                                            Edit
                                                        </a>
                                                    </td>
                                                	<td>
                                                        <form action="/admin/blogs/{{$blog->title}}/delete" method="POST"> @csrf
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