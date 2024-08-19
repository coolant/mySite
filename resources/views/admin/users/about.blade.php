@extends('layouts.admin.panel')
@section('content')

<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <p>Link to Github: <a class="small" href="https://github.com/coolant/mySite">Githubsite</a></p>
                <p>Project is written in Laravel 11 (not 10). So that middlewares are not used like route...->middleware('auth')</p>
                <p>Resources:</p>
                <ul>
                    <li><a class="small" href="https://www.youtube.com/watch?v=l-ZwPDOTjQY&list=PL6tf8fRbavl3k_PKLvOfDk16hIrSTp6bE&index=35">Youtube site</a></li>
                    <li><a class="small" href="https://spatie.be/docs/laravel-permission/v6/basic-usage/super-admin">Spatie.be site</a></li>
                    <li><a class="small" href="https://startbootstrap.com/theme/sb-admin-2">Template site</a></li>
                    <li><a class="small" href="https://laravel.com/docs/11.x/providers">Laravel documentation</a></li>
                </ul>

                <p>As a developer, i never liked php before. Thanks to Laravel framework and new versions of Php, i guess i will be addict to PHP.</p>
                <p>I know that my project is not completed cause i did not push them to github and last minute i decide to do it this way. I have changed my job and could not focus on all details.</p>
                <p>I was thinking about a startup project and i will be developing it with Laravel from now.</p>
                <p>Thanks.</p>

                <p>PS: After using UserSeeder, please refer to db mysite->Model_has_roles and edit first line (Role_id = 2) to (Role_id = 1). So that admin user with id=1 can get admin rights =1  </p>
              </div>

        </div>

    </div>

@endsection