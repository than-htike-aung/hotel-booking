@extends('admin.layout.app')

@section('heading', 'Edit Slide')
@section('right_top_button')
    <a href="{{route('admin.slide.view')}}" class="btn btn-primary">
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
                                    <form action="{{route('admin.slide.update', $slide_data->id)}}" method="post" enctype="multipart/form-data">
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
                                                        <img src="{{asset('uploads/'. $slide_data->photo)}}" class="w_200" alt="">
                                                   </div>
                                                </div>
                                                <div class="mb-4">                                                    
                                                        {{-- <img src="{{asset('uploads/'. $slide_data->photo)}}" id="mainThmb" class="w_200"> --}}                                                  
                                                            <div class="form-group">
                                                                <label for="" class="form-control-label">Change Image <span class="tx-danger">*</span></label>
                                                                <input type="file" name="photo" class="form-control" onChange="mainThamUrl(this)" >
                                                                <img src="" id="mainThmb">                                                            
                                                       
                                                         </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Heading *</label>
                                                    <input type="text" class="form-control" name="heading" value="{{$slide_data->heading}}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Text *</label>
                                                    <textarea name="text" id="" class="form-control h_100" cols="30" rows="10">
                                                        {!! $slide_data->text !!}
                                    
                                                    </textarea>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Button Text *</label>
                                                    <input type="text" class="form-control" name="button_text" value="{{$slide_data->button_text}}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Button URL *</label>
                                                    <input type="text" class="form-control" name="button_url" value="{{$slide_data->button_url}}">
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