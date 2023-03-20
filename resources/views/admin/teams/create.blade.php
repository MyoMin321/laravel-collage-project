<x-admin_layout>
    {{-- @dd(auth()->user()); --}}
<x-slot name="title">Add New University Member</x-slot>
            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="/"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Add new student</a>
                        </li>
                        <li class="page-back"><a href="/admin"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
						<div class="box-inn-sp admin-form">
                                <div class="inn-title">
                                    <h4>Add New University Member Informations</h4>
                                    <p>Here you can edit your website basic details URL, Phone, Email, Address, User and password and more</p>
                                </div>
                                <div class="tab-inn">
                                    <form action="/admin/teams/store" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="text" name="name" value="{{ old('name') }}" class="validate" required>
                                                <label class="">Name</label>
                                                @error('name')
<p class="text-danger">{{$message}}</p>
@enderror
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="text" name="position" value="{{ old('position') }}" class="validate" required>
                                                <label class="">Position</label>
                                                @error('position')
<p class="text-danger">{{$message}}</p>
@enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="number" name="phone" value="{{ old('phone') }}" class="validate" required>
                                                <label class="">Phone number</label>
                                                @error('phone')
<p class="text-danger">{{$message}}</p>
@enderror
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="email" name="email" class="validate" value="{{ old('email') }}" required>
                                                <label class="">Email</label>
                                                @error('email')
<p class="text-danger">{{$message}}</p>
@enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="text" name="address" value="{{ old('address') }}" class="validate" required>
                                                <label class="">Address</label>
                                                @error('address')
<p class="text-danger">{{$message}}</p>
@enderror
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="text" name="social_link" value="{{ old('social_link') }}" class="validate" required>
                                                <label class="">Social Links</label>
                                                @error('social_link')
<p class="text-danger">{{$message}}</p>
@enderror
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="text" name="country" value="{{ old('country') }}" class="validate" required>
                                                <label class="">Country</label>
                                                @error('country')
<p class="text-danger">{{$message}}</p>
@enderror
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="text" name="city" value="{{ old('city') }}" class="validate" required>
                                                <label class="">City</label>
                                                @error('city')
<p class="text-danger">{{$message}}</p>
@enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                            <select class="input-field col s12" name="department_id">
                                                <option value="" disabled selected>Select Department</option>
                                        @foreach ($departments as $department)
                                            <option {{$department->id==old('department_id') ? 'selected':''}}
                                                value="{{$department->id}}">{{$department->name}}
                                            </option>
                                        @error('department_id')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        @endforeach
                                            </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea class="materialize-textarea" value="{{ old('education') }}" name="education"></textarea>
                                                <label>Education Descriptions:</label>
                                                @error('name')
<p class="text-danger">{{$message}}</p>
@enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea class="materialize-textarea" value="{{ old('experience') }}" name="experience"></textarea>
                                                <label>Experience Descriptions:</label>
                                                @error('name')
<p class="text-danger">{{$message}}</p>
@enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea class="materialize-textarea" value="{{ old('carrier') }}" name="carrier"></textarea>
                                                <label>Carrier Descriptions:</label>
                                                @error('name')
<p class="text-danger">{{$message}}</p>
@enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea class="materialize-textarea" value="{{ old('role') }}" name="role"></textarea>
                                                <label>Role Descriptions:</label>
                                                @error('name')
<p class="text-danger">{{$message}}</p>
@enderror
                                            </div>
                                        </div>
                                        <div class="row">
											<div class="file-field input-field col s12">
												<div class="btn admin-upload-btn">
													<span>Photo</span>
													<input type="file" value="{{ old('name') }}" name="profile">
												</div>
												<div class="file-path-wrapper">
												<input class="file-path validate" type="text" placeholder="Profile image">
											    </div>
											</div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                            <i class="waves-effect waves-light btn-large waves-input-wrapper" style="">                                    <input type="submit" class="waves-button-input">
                                            </i>
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

</x-admin_layout>