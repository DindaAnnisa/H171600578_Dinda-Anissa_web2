@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info" button class="btn btn-warning">Tambah Kategori Artikel</div>
          
                <div class="card-body">
                 
                        {!! Form::model($KategoriArtikel, ['route' => ['kategori_artikel.update', $KategoriArtikel->id], 'method' =>'patch']) !!}

                        @include('kategori_artikel.form')
                        {!! Form::close() !!}

                    </form>
                </div>
            </div>
        </div>
     </div>
@endsection