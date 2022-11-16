@extends('admin.layout.app')

@section('heading', 'Add Post')

@section('main_content')
<div class="section-body">


{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{route('admin.post.store')}}" method="post" enctype="multipart/form-data">
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
                                                    <label class="form-label">Short Content *</label>
                                                    <textarea name="short_content" id="" class="form-control h_100" cols="30" rows="10">
                                                        {{ old('short_content') }}
                                    
                                                    </textarea>
                                                   
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Content *</label>
                                                    <textarea name="content" class="form-control snote" cols="30" rows="10"></textarea>
                                                   
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