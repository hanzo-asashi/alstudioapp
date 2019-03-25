@extends('layouts.backend')

@section('extra-css')

@stop
@section('subtitle')
    | Jenis Display
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah Jenis Display
            <small>Master Jenis Display</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ route('jenis-display.index') }}"><i class="fa fa-dashboard"></i> Jenis Display</a></li>
            <li class="active">Create</li>
        </ol>
    </section>
@stop

@section('content')
    <!-- Main row -->
    <div class="row">
        <div class="col-xs-6">
            @include('widget.alert')
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Tambah Jenis Display</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::open(array('route' => 'jenis-display.store','method'=>'POST')) !!}
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Jenis Display</label>
                        {!! Form::text('jenis_display', null, array('placeholder' => 'Jenis Display','class' =>
                        'form-control','autofocus')) !!}
                    </div>
                    {{--<div class="form-group">--}}
                        {{--<label for="satuanid">Kategori</label>--}}
                        {{--{!! Form::select('id_satuan',$satuan, null, array--}}
                        {{--('placeholder' => 'Pilih Satuan','class' =>'form-control select2')) !!}--}}
                    {{--</div>--}}
                    <div class="form-group">
                        <label for="bahan">HPP</label>
                        {!! Form::number('hpp',0,['placeholder' => 'Harga','class' => 'form-control','id'=>'bahan'])
                         !!}
                    </div>

                    <div class="box-footer text-center">
                        <button type="submit" class="btn btn-primary btn-flat">Submit</button>
                        <a href="{{ route('jenis-display.index') }}" class="btn btn-default btn-flat">Kembali</a>
                    </div>
                </div>
            {!! Form::close() !!}
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection
@push('js')
    <script>
    </script>
@endpush