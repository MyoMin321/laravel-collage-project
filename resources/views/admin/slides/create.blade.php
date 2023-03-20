<x-admin_layout>

            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="/"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Slider</a>
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
                                    <h4>Slider details</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                </div>
                                <div class="tab-inn">
                                    <form action="store" method="POST" enctype="multipart/form-data">
                                      @csrf
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" name="title" value="{{ old('title') }}" class="validate">
                                                <label class="">Slider title</label>
                                                @error('title')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="input-field col s12">
                                                <input type="text" name="description" value="{{ old('description') }}" class="validate">
                                                <label>Descriptio(max:2 lines)</label>
                                                @error('description')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
											                            <div class="input-field col s12">
                                                <input type="text" name="link1" value="{{ old('link1') }}" class="validate">
                                                <label>Button 1 link (eg.www.example.com)</label>
                                                @error('link1')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
											                            <div class="input-field col s12">
                                                <input type="text" name="link2" value="{{ old('link2') }}" class="validate">
                                                <label>Button 2 link (eg.www.example.com)</label>
                                                @error('link2')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
											                  <div class="file-field input-field col s12">
											                  	<div class="btn admin-upload-btn">
											                  		<span>File</span>
											                  		<input type="file" name="image" multiple="">
											                  	</div>
											                  	<div class="file-path-wrapper">
											                  		<input class="file-path validate" type="text" placeholder="Slider image">
											                  	</div>
											                  </div>
                                        </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <select name="status_id">
									                    <option value="" disabled selected>Select Status</option>
                                                      @foreach ($status as $status)
									                    <option {{ $status->id==old('status_id') ? 'selected':''}}  value="{{ $status->id }}">{{ $status->name }}     
                                                        </option>
                                                      @endforeach
									                </select>
                                                </div>
                                            </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="waves-effect waves-light btn-large waves-input-wrapper" style="">                                       <input type="submit" class="waves-button-input" value="Submit"></i>
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