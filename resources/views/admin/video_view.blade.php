@extends('admin.layout.app')

@section('heading', 'Admin Video Page')
@section('right_top_button')
    <a href="{{route('admin.video.add')}}" class="btn btn-primary">
        <i class="fa fa-plus fa-add"></i> Add New
    </a>
@endsection
@section('main_content')


                                  <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="example1">
                                            <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Video Preview</th>
                                                <th>Video Caption</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                           @foreach($videos as $item)
                                             <tr>
                                                <td>{{$item->id}}</td>
                                                <td>
                                            <div class="iframe-container1">
                                                    <iframe 
                                                    src="https://www.youtube.com/embed/{{ $item->video_id }}" 
                                                    title="YouTube video player" frameborder="0" 
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                                    allowfullscreen>
                                                </iframe>
                                            </div>
                                                </td>
                                                <td>{{ $item->caption }}</td>
                                               
                                                <td class="pt_10 pb_10">
                                                    <a href="{{route('admin.video.edit', $item->id)}}" class="btn btn-primary text-white">Edit</a>
                                                    
                                                    <a href="{{ route('admin.video.delete', $item->id) }}" class="btn btn-danger" id="delete">Delete</a>
                                                </td>
                                               
                                            </tr>
                                           @endforeach
                                           
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection