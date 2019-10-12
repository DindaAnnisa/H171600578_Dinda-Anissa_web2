@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg-success">Kategori Artikel</div>
                <div class="card-body">

                <table class="table table-bordered">
                    <thead class="bg-primary">
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">User_id</th>
                        <th scope="col">Create</th>
                        <th scope="col">Update</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $KategoriArtikel as $item)
                        <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->nama !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
                        <td>{!! $item->updated_at->format('d/m/Y H:i:s') !!}</td>
                        <td>

                        
                        <a href="{!! route('kategori_artikel.show',[$item->id]) !!}" button class="btn btn-dark" type="button"> Lihat </a>
                        <a href="{!! route('kategori_artikel.edit',[$item->id]) !!}" button class="btn btn-dark" type="button"> Edit </a>

                            {!! Form::open(['route' => ['kategori_artikel.destroy', $item->id],'method' => 'delete']) !!}

                                {!! Form::submit('Hapus', ['class'=>'btn  btn-sm btn-danger','onclick'=>"return confirm('Apakah Anda yakin menghapus data ini ?')"]); !!}
                                {!! Form::close() !!}

                        </td>

            @endforeach
                       <a href ="{!! route('kategori_artikel.create') !!}"  button class="btn btn-warning" type="button"> Tambah </button></td></a>
                   </tr>

                    </tbody>
                </table>
        @endsection