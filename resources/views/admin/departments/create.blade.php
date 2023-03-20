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
                                    <form action="/admin/departments/store" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" name="name" value="{{ old('name') }}" class="validate" required>
                                                <label class="">Department Name</label>
                                                @error('name')
<p class="text-danger">{{$message}}</p>
@enderror
                                            </div>
                                        </div>




                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea class="materialize-textarea" value="{{ old('name') }}" name="description"></textarea>
                                                <label>Department Descriptions:</label>
                                                @error('name')
<p class="text-danger">{{$message}}</p>
@enderror
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