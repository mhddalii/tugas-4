@extends('template')
@section('main')
<h2>Edit Data</h2>
<form action="{{route('siswa.update', $data->id)}}" method="POST">
  @csrf
  @method('put')
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">NIS</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="nis" value="{{$data->nis}}">
    @error('nis')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" value="{{$data->nama}}">
    @error('nama')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat">{{ $data->alamat }}</textarea>

    @error('alamat')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="mb-3 form-group">
    <label for="exampleFormControlSelect1">Sekolah</label>
    <select class="form-control" name="sekolah_id">
      @foreach ($sekolah as $item)
          <option value="{{$item->id}}" @selected($data->sekolah_id ==$item->id) >{{$item->nama_sekolah}}</option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection