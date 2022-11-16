@extends('admin.layout.app')

@section('heading', 'Add Testimonial')

@section('main_content')
<div class="section-body">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{route('admin.testimonial.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                        <div class="row">
                                          
                                            <div class="col-md-9">
                                                <div class="mb-4">
                                                    <label class="form-label">Photo *</label>
                                                    <input type="file" class="form-control" name="photo" onChange="mainThamUrl(this)" >
                                                    <img src="" id="mainThmb">  
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Name *</label>
                                                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Designation *</label>
                                                    <input type="text" class="form-control" name="designation" value="{{old('designation')}}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Comment *</label>
                                                    <textarea name="comment" id="" class="form-control h_100" cols="30" rows="10">
                                                        {{ old('comment') }}
                                    
                                                    </textarea>
                                                   
                                                </div>
                                               
                                                <div class="mb-4">
                                                    <label class="form-label"></label>
                                                    <button type="submit" class="btn btn-primary">Save</button>
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