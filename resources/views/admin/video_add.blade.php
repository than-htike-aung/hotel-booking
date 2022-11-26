@extends('admin.layout.app')

@section('heading', 'Add Video')

@section('main_content')
<div class="section-body">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{route('admin.video.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                        <div class="row">
                                          
                                            <div class="col-md-9">
                                                
                                                <div class="mb-4">
                                                    <label class="form-label">Video ID *</label>
                                                    <input type="text" class="form-control" name="video_id" value="{{old('video_id')}}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Caption *</label>
                                                    <input type="text" class="form-control" name="caption" value="{{old('caption')}}">
                                                   
                                                </div>
                                               
                                                <div class="mb-4">
                                                    <label class="form-label"></label>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
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