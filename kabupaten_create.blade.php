@extends('template')
@section('content')
<section class="main-section">
  <div class="content">
    <h1> Tambah Kabupaten</h1>
    <hr>
    @if($errors->any())
    <div class="alert alert-danger">
      @foreach($errors->all() as $error)
      <li> <strong>{{ $error }}</strong> </li>
      @endforeach
    </div>
    @endif

    <form action="{{ route('kabupaten.store') }}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="kode">Kode: </label>
        <input type="text" class="form-control" id="kode" name="kode">
      </div>

      <div class="form-group">
        <label for="deskripsi">Deskripsi: </label>
        <input type="text" class="form-control" id="deskripsi" name="deskripsi">
      </div>

      </div> 
      <div class="form-group">
        <button type="submit" class="btn btn-md btn-primary">Submit</button>
        <button type="reset" class="btn btn-md btn-danger">Cancel</button>

      </div>

    </form>
  </div>
</section>
@endsection
