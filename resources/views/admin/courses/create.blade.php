<x-admin_layout>
   <x-slot name="title">New Course Create</x-slot>
   {{-- @dd($categories); --}}
            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="/"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Add new course</a>
                        </li>
                        <li class="page-back"><a href="index-2.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp admin-form">
				<div class="sb2-2-add-blog sb2-2-1">
                    <h2>Add New Course</h2>
                    <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>

                    <ul class="nav nav-tabs tab-list">
                        <li class="active"><a data-toggle="tab" href="#home" aria-expanded="true"><i class="fa fa-info" aria-hidden="true"></i> <span>Detail</span></a>
                        </li>
                        <li class=""><a data-toggle="tab" href="#menu1" aria-expanded="false"><i class="fa fa-bed" aria-hidden="true"></i> <span>Course Syllabus</span></a>
                        </li>
                        <li class=""><a data-toggle="tab" href="#menu2" aria-expanded="false"><i class="fa fa-picture-o" aria-hidden="true"></i> <span>Banner Image</span></a>
                        </li>
                        <li class=""><a data-toggle="tab" href="#menu3" aria-expanded="false"><i class="fa fa-facebook" aria-hidden="true"></i> <span>Time table</span></a>
                        </li>
                        <li class=""><a data-toggle="tab" href="#menu4" aria-expanded="false"><i class="fa fa-phone" aria-hidden="true"></i> <span>Contact Info</span></a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade active in">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Course Information</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                </div>
                                <div class="bor">
                                    <form action="/admin/courses/store" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="list-title" type="text" name="title" class="validate">
                                                <label for="list-title" class="">Course Name</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="list-slug" type="text" name="slug" class="validate">
                                                <label for="list-slug" class="">Course title</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="list-name" type="text" name="contact_person" class="validate">
                                                <label for="list-name">Contact Person</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="list-phone" type="text" name="contact_phone" class="validate">
                                                <label for="list-phone">Contact Phone</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <select class="input-field col s12" name="category_id">
                                                    <option value="" disabled selected>Select Degree</option>
                                                    @foreach ($categories as $category)
                                                        <option {{$category->id==old('category_id') ? 'selected':''}}
                                                            value="{{$category->id}}">{{$category->name}}
                                                        </option>
                                                    @error('name')
                                                    <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea class="editor" id="editor" name="body"></textarea>
                                                {{-- <label>Course Descriptions:</label> --}}
                                            </div>
                                        </div>
                                            {{-- <div class="row">
                                                <div class="input-field col s12">
                                                    <select>
									  <option value="" disabled selected>Select Status</option>
									  <option value="1">Active</option>
									  <option value="2">De-Active</option>
									  <option value="3">Delete</option>
									</select>
                                                </div>
                                            </div> --}}
                                        
                                        <div class="row">
											<div class="file-field input-field col s12">
											    <div class="btn admin-upload-btn">
											        <span>File</span>
											            <input type="file" name="thumbnail">
											    </div>
											    <div class="file-path-wrapper">
											    <input class="file-path validate" type="text" placeholder="Profile image">
                                                </div>
											</div>
                                        </div> 
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input" value="Submit"></i>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <div class="inn-title">
                                <h4>Requirements, feese, student profile and how to apply</h4>
                                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                            </div>
                            <div class="bor ad-cou-deta-h4">
                                <form>
										<h4>Requirements:</h4>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea class="materialize-textarea"></textarea>
                                                <label>Course Descriptions:</label>
                                            </div>
                                        </div> 
										<h4>Feese:</h4>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="number" class="validate" required>
                                                <label>1'st terms feese</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input type="number" class="validate" required>
                                                <label>2'nd terms feese</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input type="number" class="validate" required>
                                                <label>3'rd terms feese</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <textarea class="materialize-textarea"></textarea>
                                                <label>Price Descriptions:</label>
                                            </div>
                                        </div>
										<h4>Student Profile:</h4>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea class="materialize-textarea"></textarea>
                                                <label>Student Profile Descriptions:</label>
                                            </div>
                                        </div>	
										<h4>How to apply this course:</h4>
                                        <div class="row">
                                            <div class="input-field col s12">
												<input type="text" class="validate" required>
                                                <label>Step 1 Descriptions:</label>
                                            </div>
                                            <div class="input-field col s12">
												<input type="text" class="validate" required>
                                                <label>Step 2 Descriptions:</label>
                                            </div>
                                            <div class="input-field col s12">
												<input type="text" class="validate" required>
                                                <label>Step 3 Descriptions:</label>
                                            </div>
                                            <div class="input-field col s12">
												<input type="text" class="validate" required>
                                                <label>Step 4 Descriptions:</label>
                                            </div>
                                            <div class="input-field col s12">
												<input type="text" class="validate" required>
                                                <label>Step 5 Descriptions:</label>
                                            </div>
                                        </div>	
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input" value="Submit"></i>
                                            </div>
                                        </div>										
                                </form>
                            </div>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <div class="inn-title">
                                <h4>Photo Gallery</h4>
                                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                            </div>
                            <div class="bor">
                                <form action="#">
                                    <div class="file-field input-field">
                                        <div class="btn admin-upload-btn">
                                            <span>File</span>
                                            <input type="file" multiple="">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="Upload course banner image">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input" value="Upload"></i>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <div class="inn-title">
                                <h4>Time table</h4>
                                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                            </div>
                            <div class="bor ad-cou-deta-h4">
                                <form>
									<h4>1st semester:</h4>
									<div class="row">
										<div class="input-field col s12">
											<input type="text" class="validate" required>
											<label>Title:</label>
										</div>
										<div class="input-field col s12">
											<textarea class="materialize-textarea"></textarea>
											<label>Descriptions:</label>
										</div>
									</div> 
									<h4>2nd semester:</h4>
									<div class="row">
										<div class="input-field col s12">
											<input type="text" class="validate" required>
											<label>Title:</label>
										</div>
										<div class="input-field col s12">
											<textarea class="materialize-textarea"></textarea>
											<label>Descriptions:</label>
										</div>
									</div> 
									<h4>3rd semester:</h4>
									<div class="row">
										<div class="input-field col s12">
											<input type="text" class="validate" required>
											<label>Title:</label>
										</div>
										<div class="input-field col s12">
											<textarea class="materialize-textarea"></textarea>
											<label>Descriptions:</label>
										</div>
									</div> 
									<h4>4th semester:</h4>
									<div class="row">
										<div class="input-field col s12">
											<input type="text" class="validate" required>
											<label>Title:</label>
										</div>
										<div class="input-field col s12">
											<textarea class="materialize-textarea"></textarea>
											<label>Descriptions:</label>
										</div>
									</div> 
									
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input" value="Submit"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="menu4" class="tab-pane fade">
                            <div class="inn-title">
                                <h4>Contact Info</h4>
                                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                            </div>
                            <div class="bor">
                                <form>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input id="t5-n1" type="text" class="validate">
                                            <label for="t5-n1">Contact Name</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input id="t5-n2" type="text" class="validate">
                                            <label for="t5-n2">Alter Contact Name</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input id="t5-n3" type="number" class="validate">
                                            <label for="t5-n3">Phone</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input id="t5-n4" type="number" class="validate">
                                            <label for="t5-n4">Mobile</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="t5-n5" type="email" class="validate">
                                            <label for="t5-n5">Email</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="t5-n6" class="materialize-textarea"></textarea>
                                            <label for="t5-n6">Listing Descriptions:</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input" value="Upload"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>

</x-layout_admin>