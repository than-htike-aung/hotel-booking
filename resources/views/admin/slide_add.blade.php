@extends('admin.layout.app')

@section('heading', 'Add Slide')

@section('main_content')
<div class="section-body">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{route('admin.slide.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                        <div class="row">
                                          
                                            <div class="col-md-9">
                                                <div class="mb-4">
                                                    <label class="form-label">Photo *</label>
                                                    <input type="file" class="form-control" name="photo" onChange="mainThamUrl(this)" >
                                                    <img src="" id="mainThmb">  
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Heading *</label>
                                                    <input type="text" class="form-control" name="heading" value="{{old('heading')}}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Text *</label>
                                                    <textarea name="text" id="" class="form-control h_100" cols="30" rows="10">
                                                        {{ old('text') }}
                                    
                                                    </textarea>
                                                   
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Button Text *</label>
                                                    <input type="text" class="form-control" name="button_text" value="{{old('button_text')}}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Button URL *</label>
                                                    <input type="text" class="form-control" name="button_url" value="{{old('button_url')}}">
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