@extends('layouts.master')
@section('judul','Data Jurusan')
@section('content-header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Jurusan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Jurusan</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
@endsection

@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <a href="/jurusan/form" class="btn btn-primary">Tambah Data</a>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Kode</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($jurusan as $item)
                <tr>
                    <th scope="row">{{$nomor++}}</th>
                    <td>{{$item->kode}}</td>
                    <td>{{$item->jurusan}}</td>
                    <td>
                        <a href="/jurusan/edit/{{$item->id}}" class="btn btn-sm btn-info">edit</a>
                        <a href="#" class="btn btn-sm btn-danger">hapus</a>
                    </td>
                  </tr>
                @endforeach
              
              
            </tbody>
          </table>
      </div>
      <!-- /.card-body -->
      
    </div>
    <!-- /.card -->

  </section>
@endsection