@extends('master') 
@section('content')
  <div class="col-md-12">
    <div class="card card-user">
      <div class="card-header">
        <h5 class="card-title">Update Artikel</h5>
      </div>
      <div class="card-body">
        <form method="POST" role="form" action="{{ url('/artikel/aksi_update/'.$artikel->id) }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Judul Artikel</label>
                <input type="text" name="judul" value="{{ $artikel->judul }}" class="form-control" placeholder=" " value=" ">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Isi Artikel</label>
                <textarea name="artikel" class="form-control" id="mytextarea" cols="30" rows="35">{{ $artikel->artikel }}</textarea> 
              </div>
            </div>
          </div>
          <div class="class row">
              <div class="col-md-3">
                  <div class="form-group">
                    <img src="{{ URL::asset('/uploads/image/artikel/'.$artikel->gambar) }}" class="img-thumbnail" alt="" style="width: 50px;height: 70px;">
                    <label>Thumbnail</label>
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