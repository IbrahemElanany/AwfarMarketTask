@extends('admin.layouts.layout')

@section('title')
    التحكم في الأعضاء
@stop

@section('header')

@stop


@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>التحكم في الأعضاء</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/adminpanel/users')}}">الرئيسية</a></li>
                        <li class="breadcrumb-item active"><a href="{{url('/adminpanel/users')}}">التحكم في الأعضاء</a></li>
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
                        <h3 class="card-title">كل الأعضاء</h3>
                        @if(Session::has('delete_user'))

                            <div class="alert alert-danger">{{session('delete_user')}}</div>

                        @endif

                        @if(Session::has('create_user'))

                            <div class="alert alert-success">{{session('create_user')}}</div>

                        @endif

                        @if(Session::has('update_user'))

                            <div class="alert alert-success">{{session('update_user')}}</div>

                        @endif
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body table table-responsive ">
                        {!! $dataTable->table([
                        'class'=>'dataTable table table-hover',
                        'id'=>'example'
                        ],true) !!}
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    @push('js')
        {!! $dataTable->scripts() !!}
    @endpush
@stop


{{--@section('footer')--}}

{{----}}

{{--<script type="text/javascript">--}}
{{--$(function () {--}}
{{--$('#example2').DataTable({--}}

{{--"language": {--}}
{{--"url": "{{ Request::root()  }}/admin/custom/Arabic.json"--}}
{{--},--}}

{{--"paging": true,--}}
{{--"lengthChange": true,--}}
{{--"searching": true,--}}
{{--"ordering": true,--}}
{{--"info": true,--}}
{{--"autoWidth": true,--}}



{{--});--}}
{{--});--}}
{{--</script>--}}
{{--@stop--}}