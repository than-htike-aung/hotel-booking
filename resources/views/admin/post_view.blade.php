@extends('admin.layout.app')

@section('heading', 'Admin Post Page')
@section('right_top_button')
    <a href="{{route('admin.post.add')}}" class="btn btn-primary">
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
                                                <th>Photo</th>
                                                <th>Heading</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                           @foreach($posts as $item)
                                             <tr>
                                                <td>{{$item->id}}</td>
                                                <td>
                                                    <img src="{{ asset('uploads/'.$item->photo) }}" alt="no img" class="w_200">
                                                </td>
                                                <td>
                                                    {{ $item->heading }}
                                                </td>
                        
                                               
                                                <td class="pt_10 pb_10">
                                                    <a href="{{route('admin.post.edit', $item->id)}}" class="btn btn-primary text-white">Edit</a>
                                                    
                                                    <a href="{{ route('admin.post.delete', $item->id) }}" class="btn btn-danger" id="delete">Delete</a>
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