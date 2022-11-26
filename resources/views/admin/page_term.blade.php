@extends('admin.layout.app')

@section('heading', 'Edit Terms Page')

@section('main_content')
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
<div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{route('admin_page.terms.update')}}" method="post">
                                    @csrf
                                        <div class="row">
                                          
                                            <div class="col-md-12">
                                              
                                                                                               
                                                <div class="mb-4">
                                                    <label class="form-label">Term Heading *</label>
                                                    <input type="text" class="form-control" name="terms_heading" value="{{$term_data->terms_heading}}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Term Content *</label>
                                                   <textarea name="terms_content" class="form-control snote" id="" cols="30" rows="10">
                                                    {{$term_data->terms_content}}
                                                   </textarea>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Status *</label>
                                                    <select name="terms_status" class="form-control" id="">
                                                        <option value="1" 
                                                            @if ($term_data->terms_status == 1) selected
                                                            @endif>Show</option>
                                                        <option value="0" @if ($term_data->terms_status == 0) selected
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