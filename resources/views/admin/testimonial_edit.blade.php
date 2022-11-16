@extends('admin.layout.app')

@section('heading', 'Edit Slide')
@section('right_top_button')
    <a href="{{route('admin.testimonial.view')}}" class="btn btn-primary">
        <i class="fa fa-eye fa-add"></i> View All
    </a>
@endsection
@section('main_content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{route('admin.testimonial.update', $testimonial_data->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                        <div class="row">
                                          
                                            <div class="col-md-9">
                                                {{-- <div class="mb-4">
                                                    <label class="form-label">Existing Photo *</label>
                                                   <div>
                                                        <img src="{{asset('uploads/'. $slide_data->photo)}}" class="w_200" alt="">
                                                   </div>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Change Photo *</label>
                                                    <input type="file" class="form-control" name="photo" >
                                                </div> --}}
                                                <div class="mb-4">
                                                    <label class="form-label">Existing Photo *</label>
                                                   <div>
                                                        <img src="{{asset('uploads/'. $testimonial_data->photo)}}" class="w_200" alt="">
                                                   </div>
                                                </div>
                                                <div class="mb-4">                                                    
                                                        {{-- <img src="{{asset('uploads/'. $slide_data->photo)}}" id="mainThmb" class="w_200"> --}}                                                  
                                                            <div class="form-group">
                                                                <label for="" class="form-control-label">Change Image <span class="tx-danger">*</span></label>
                                                                <input type="file" name="photo" class="form-control" onChange="mainThamUrl(this)" >
                                                                @error('photo')
                                                                <p class="text-danger">{{ $message }}</p>
                                                                @enderror
                                                                <img src="" id="mainThmb">                                                            
                                                       
                                                         </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Name *</label>
                                                    <input type="text" class="form-control" name="name" value="{{$testimonial_data->name}}">
                                                    @error('name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Designation *</label>
                                                    <input type="text" class="form-control" name="designation" value="{{$testimonial_data->designation}}">
                                                    @error('designation')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Comment *</label>
                                                    <textarea name="comment" id="" class="form-control h_100" cols="30" rows="10">
                                                        {!! $testimonial_data->comment !!}
                                    
                                                    </textarea>
                                                    @error('comment')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                               
                                                <div class="mb-4">
                                                    <label class="form-label"></label>
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script type="text/javascript">
                    function mainThamUrl(input){
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function(e){
                                $('#mainThmb').attr('src',e.target.result).width(80).height(80);
                            };
                            reader.readAsDataURL(input.files[0]);
                        }
                    }	
                </script>
@endsection