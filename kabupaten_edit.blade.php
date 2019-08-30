@extends('template')
@section('content')
<section class="main-section">
  <div class="content">
    <h1>Ubah Kabupaten</h1>
    <hr>
    @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif
 
    @foreach($data as $datas)
    <form action="{{ route('kabupaten.update' , $datas->id)}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT')}}
        <div class="form-group">
          <label for="kode">Kode:</label>
          <input type="text" class="form-control" name="kode" value="{{ $datas->kode}}">
        </div>

        <div class="form-group">
          <label for="deskripsi">Deskripsi:</label>
          <input type="text" class="form-control" name="deskripsi" value="{{ $datas->deskripsi}}">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-md btn-primary">Submit</button>
          <button type="reset" class="btn btn-md btn-danger">Cancel</button>

        </div>
      </form>
      @endforeach
      </div>
</section>
@endsection
