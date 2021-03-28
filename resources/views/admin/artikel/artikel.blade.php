@extends('master') 
@section('content')
  <div class="col-md-6">
    <div class="card card-user">
      <div class="card-header">
        <h5 class="card-title">Artikel</h5>
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Judul</th>
              <th scope="col">Isi</th>
              <th scope="col">Gambar</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($artikel as $index => $a)
            <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <td>{{ $a->judul }}</td>
                <td>{{ Str::limit($a->artikel, 20) }}</td>
                <td>
                    <img src="{{ URL::asset('/uploads/image/artikel/'.$a->gambar) }}" class="img-thumbnail" alt="" style="width: 50px;height: 70px;">
                </td>
                <td>
                  <a href="{{ url('/artikel/update/'.$a->id) }}">
                    <button type="button" class="btn btn-success">Update</button>
                  </a>
                  <a href="{{ url('/artikel/delete/'.$a->id) }}">
                    <button type="button" class="btn btn-danger">Delete</button>
                  </a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="card card-user">
      <div class="card-header">
        <h5 class="card-title">Post Artikel</h5>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('artikel_create') }}"enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Judul Artikel</label>
                <input type="text" name="judul" class="form-control" placeholder=" " value=" ">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Isi Artikel</label>
                <textarea name="artikel" class="form-control" id="mytextarea" cols="30" rows="35"></textarea> 
              </div>
            </div>
          </div>
          <div class="class row">
              <div class="col-md-6">
                  <div class="form-group">
                    <div class="custom-file" id="customFile" lang="es">
                        <input type="file" name="gambar" class="custom-file-input" id="exampleInputFile" aria-describedby="fileHelp">
                        <label class="custom-file-label" for="exampleInputFile">
                           Select file...
                        </label>
                      </div>
                  </div>
              </div>
          </div>
         
          <div class="row">
            <div class="update ml-auto mr-auto">
              <button type="submit" class="btn btn-primary btn-round">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  @stop