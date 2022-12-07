@extends('admin.layout.app')

@section('heading', 'Edit Video Gallery Page')

@section('main_content')
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
<div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{route('admin_page.video_gallery.update')}}" method="post">
                                    @csrf
                                        <div class="row">
                                          
                                            <div class="col-md-12">
                                              
                                                                                               
                                                <div class="mb-4">
                                                    <label class="form-label"> Heading *</label>
                                                    <input type="text" class="form-control" name="video_gallery_heading" value="{{$video_gallery->video_gallery_heading}}">
                                                </div>
                                               
                                                <div class="mb-4">
                                                    <label class="form-label">Status *</label>
                                                    <select name="video_gallery_status" class="form-control" id="">
                                                        <option value="1" 
                                                            @if ($video_gallery->video_gallery_status == 1) selected
                                                            @endif>Show</option>
                                                        <option value="0" @if ($video_gallery->video_gallery_status == 0) selected
                                                            @endif>Hide</option>
                                                    </select>
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

               
@endsection