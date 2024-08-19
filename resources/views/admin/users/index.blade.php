@extends('layouts.admin.panel')
@section('content')

  <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Users</h1>
                    <p class="mb-4">User List</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Birthday</th>
                                            <th>About</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                              <th>Name</th>
                                            <th>Email</th>
                                            <th>Birthday</th>
                                            <th>About</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>                                     
                                         @foreach ($users as $user )
                                             <tr>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->birthday}}</td>
                                                <td>{{$user->aboutme}}</td>
                                             </tr>
                                         @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>




@endsection