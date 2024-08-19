@extends('layouts.admin.panel')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12" style="padding:20px;">
                <div class="card">
                    <div class="card-header">Display in Datatable | File Storage</div>
                    <div class="card-body">
                        @hasanyrole('blog-admin|SuperAdmin')
                        <a href="{{route('admin.news.create')}}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        @endhasanyrole
                        <br/>
                        
                        <br/>
                        <div class="table-responsive">

                           


                        
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        
                                        <th>Photo</th> 
                                </thead>
                                </thead>
                                <tbody>
                                @foreach($news as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->content }}</td>
                                        <!-- <td>{{ $item->mobile }}</td> -->
                                        <td>
                                            <img src="{{ asset($item->photo) }}" width= '50' height='50' class="img img-responsive" />
 
 
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