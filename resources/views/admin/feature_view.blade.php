@extends('admin.layout.app')

@section('heading', 'Admin Feature Page')
@section('right_top_button')
    <a href="{{route('admin.feature.add')}}" class="btn btn-primary">
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
                                                <th>Icon</th>
                                                <th>Heading</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                           @foreach($features as $item)
                                             <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>
                                                    <i class="{{ $item->icon }} fz_40"></i>
                                                </td>
                                                <td>
                                                    {{ $item->heading }}
                                                </td>
                                               
                                                <td class="pt_10 pb_10">
                                                    <a href="{{route('admin.feature.edit', $item->id)}}" class="btn btn-primary text-white">Edit</a>
                                                    
                                                    <a href="{{ route('admin.feature.delete', $item->id) }}" class="btn btn-danger" id="delete">Delete</a>
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