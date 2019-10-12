@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg-success" button class="btn btn-success">List Berita</div> 
                <div class="card-body text-left">
                <div class="col text-center">
                <table class="table table-bordered">

                    <thead class ="bg-primary">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Isi</th>
                                <th scope="col">Kategori Berita Id</th>
                                 <th scope="col">Create</th>
                                <th scope="col">Update</th>
                                <th scope="col">Aksi</th>
                            </tr>

                    </thead>

                        @foreach ($Berita as $item)
                            <tr>
                            <td>{!! $item->id !!}</td>
                            <td>{!! $item->judul !!}</td>
                            <td>{!! $item->isi !!}</td>
                            <td>{!! $item->kategori_berita_id !!}</td>
                            <td>{!! $item->created_at->format('d/m/Y H:i:s')!!}</td>
                            <td>{!! $item->updated_at->format('d/m/Y H:i:s')!!}</td>

                            <td>
                            <a href ="{!! route('berita.show',[$item->id]) !!}" button class="btn btn-sm btn-danger" type="button"> Lihat </a> 
                            <a href="{!! route('berita.edit',[$item-> id]) !!}" button class="btn btn-sm btn-dark" type="button"> Edit </a>

                            {!! Form::open(['route' => ['berita.destroy', $item-> id],'method'=>'delete']) !!}

                            {!! Form::submit('Hapus',['class'=>'btn btn-danger','onclik'=>"return confirm('apakah anda yakin?')"]) ; !!}

                            {!! Form::close() !!}

                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                    </table>
                </div>
                <a href ="{!! route('berita.create') !!}" button class="btn btn-warning" type="button"> Tambah </button></td></a>
            </div>
         
        </div>
    </div>
</div>
@endsection