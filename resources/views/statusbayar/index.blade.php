@extends('layouts.backend')

@section('extra-css')

@stop
@section('subtitle')
    | Jenis Bayar
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            List Jenis Bayar
            <small>Master Data</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Jenis Bayar</li>
        </ol>
    </section>
@stop

@section('content')
    @include('widget.alert')

    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <a href="{{ route('status-bayar.create') }}" class="btn btn-success btn-sm"><i class="fa
                        fa-plus-circle"></i> Tambah Jenis Bayar</a>
                </div>

                <div class="box-body">
                    <table id="tbl-status-bayar" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Jenis Bayar</th>
                            <th>Tgl Buat</th>
                            <th>Tgl Update</th>
                            <th>Operation</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($statusBayar as $key => $val)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $val->statusbyr }}</td>
                                <td>{{ $val->created_at }}</td>
                                <td>{{ $val->updated_at }}</td>
                                <td>
{{--                                    @can("viewPelanggan")--}}
                                    <a class="btn btn-success btn-xs" href="{{ route('status-bayar.show',$val->id)
                                    }}">View</a>
                                    {{--@endcan--}}
{{--                                    @can('editPelanggan')--}}
                                    <a href="{{ route('status-bayar.edit',$val->id) }}" class="btn btn-primary
                                btn-xs">Edit</a>
                                    {{--@endcan--}}
{{--                                    @can('deletePelanggan')--}}
                                        {!! Form::open(['method' => 'DELETE','route' => ['status-bayar.destroy', $val->id],
                                        'style'=>'display:inline']) !!}
                                        {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs']) !!}
                                        {!! Form::close() !!}
                                    {{--@endcan--}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                {{ $statusBayar->onEachSide(1)->links() }}
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection

@push('js')
<script>
    $('#tbl-status-bayar').DataTable({
        {{--'processing'  : true,--}}
        {{--'serverSide'  : true,--}}
        {{--'ajax'        : {--}}
            {{--"url" : "{!! route('ajax.pelanggan') !!}",--}}
            {{--"type" : "POST"--}}
        {{--},--}}
        {{--'columns'   : [--}}
            {{--{"data" : "id"},--}}
            {{--{"data" : "namapel"},--}}
            {{--{"data" : "alamat"},--}}
            {{--{"data" : "notelp"},--}}
            {{--{"data" : "created_at"},--}}
            {{--{"data" : "tgl_ambil"},--}}
            {{--{"data" : "status_bayar"},--}}
            {{--{"data" : "updated_at"},--}}
        {{--],--}}
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'autoWidth'   : true,
        "language": {
            "lengthMenu": "Tampilkan _MENU_ baris per page",
            "zeroRecords": "Maaf, Data tidak ditemukan dalam database",
            //"info": "Showing page _PAGE_ of _PAGES_",
            "infoEmpty": "Data tidak tersedia",
            "infoFiltered": "(Filter dari _MAX_ total data)",
            "search" : "Pencarian",
            "paginate" : {
                "first" : "Awal",
                "last" : "Akhir",
                "next" : "&gt;",
                "previous" : "&lt;"
            }
        },
        "pagingType": "full_numbers",
    })
</script>
@endpush
