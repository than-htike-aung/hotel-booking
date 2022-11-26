@extends('admin.layout.app')

@section('heading', 'Edit About Page')

@section('main_content')
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
<div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{route('admin_page.about.update')}}" method="post">
                                    @csrf
                                        <div class="row">
                                          
                                            <div class="col-md-12">
                                              
                                                                                               
                                                <div class="mb-4">
                                                    <label class="form-label">Headin *</label>
                                                    <input type="text" class="form-control" name="about_heading" value="{{$page_data->about_heading}}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Content *</label>
                                                   <textarea name="about_content" class="form-control snote" id="" cols="30" rows="10">
                                                    {{$page_data->about_content}}
                                                   </textarea>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Status *</label>
                                                    <select name="about_stauts" class="form-control" id="">
                                                        <option value="1" 
                                                            @if ($page_data->about_status == 1) selected
                                                            @endif>Show</option>
                                                        <option value="0" @if ($page_data->about_status == 0) selected
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