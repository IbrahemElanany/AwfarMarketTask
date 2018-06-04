@extends('admin.layouts.layout')

@section('title')
    Create User
@stop

@section('header')
@stop


@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create User </h1>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/adminpanel')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/adminpanel/users')}}">Control Users</a></li>
                        <li class="breadcrumb-item active"><a href="{{url('/adminpanel/users/create')}}">Create User</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Create User</h3>
                    </div>

                    <!-- /.card-header -->

                    <div class="card-body">

                        <form method="POST" action="{{ url('/adminpanel/users') }}">

                            @include('admin.user.form')

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>


@stop


@section('footer')

@stop