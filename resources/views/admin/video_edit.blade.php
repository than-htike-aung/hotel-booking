@extends('admin.layout.app')

@section('heading', 'Edit Slide')
@section('right_top_button')
    <a href="{{route('admin.video.view')}}" class="btn btn-primary">
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
                                    <form action="{{route('admin.video.update', $video_data->id)}}" method="post">
                                    @csrf
                                        <div class="row">
                                          
                                            <div class="col-md-12">
                                              
                                                                                               
                                                <div class="mb-4">
                                                    <label class="form-label">Video ID *</label>
                                                    <input type="text" class="form-control" name="video_id" value="{{$video_data->video_id}}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Caption *</label>
                                                    <input type="text" class="form-control" name="caption" value="{{$video_data->caption}}">
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