<x-admin_layout>
    <x-slot name="title">Event Edit</x-slot>

            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Edit Event</a>
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
                                <div class="inn-title">
                                    <h4>Edit Event</h4>
                                    <p>Here you can edit your website basic details URL, Phone, Email, Address, User and password and more</p>
                                </div>
                                <div class="tab-inn">
                                    <form action="/admin/events/{{ $event->name }}/update" method="POST" enctype="multipart/form-data">
                                        @method('patch')
                                        @csrf
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" name="name" value="{{ $event->name }}" class="validate" required>
                                                <label class="">Event name</label>
                                                @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea name="description" class="editor" id="editor" value="{{ $event->description }}"></textarea>
                                                {{-- <label class="">Event Descriptions</label> --}}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="date" name="date" value="{{ $event->date }}" class="validate" required>
                                                {{-- <label class="">Date</label> --}}
                                                @error('date')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="time" name="time" class="validate" value="{{ $event->time }}" required>
                                                {{-- <label class="">Time</label> --}}
                                                @error('time')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="text" name="city" value="{{ $event->city }}" class="validate">
                                                <label class="">City</label>
                                                @error('city')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="text" name="country" value="{{ $event->country }}" class="validate">
                                                <label class="">Country</label>
                                                @error('country')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="row">
											<div class="file-field input-field col s12">
												<div class="btn admin-upload-btn">
													<span>File</span>
													<input type="file" name="image">
												</div>
												<div class="file-path-wrapper">
													<input class="file-path validate" type="text" placeholder="Event image">
												</div>
											</div>
                                        </div>
										<div class="row">
                                            <div class="input-field col s12">
                                                <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input"></i>
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