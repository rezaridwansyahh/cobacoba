@extends('layout.dasboard')
@section('content')
  <div class="jumbotron">

    <form class="form-horizontal" action="" method="post">
      {{ csrf_field() }}
      <fieldset>
        <legend>Tambah Siswa</legend>
        <div class="form-group">
          <label for="inputNisn" class="col-md-2 control-label">Nisn</label>
          <div class="col-md-10">
            <input type="text" class="form-control" id="inputNisn" name="nisn" placeholder="NISN">
          </div>
        </div>
        <div class="form-group">
          <label for="inputNama" class="col-md-2 control-label">Nama</label>
          <div class="col-md-10">
            <input type="text" class="form-control" id="inputNama" name="nama" placeholder="Nama">
          </div>
        </div>
        <div class="form-group">
          <label for="inputNama" class="col-md-2 control-label">Tanggal Lahir</label>
          <div class="col-md-10">
            <input type="date" class="form-control" id="inputNama" name="tanggal_lahir" placeholder="Password">
          </div>
        </div>
        <div class="form-group" id="dropdown-menu">
          <label for="select" class="col-md-2 control-label">Select</label>
          <div class="col-md-10">
            <select id="select" class="form-control" name="kelamin">
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-10 col-md-offset-2">
            <button type="button" class="btn btn-default">Cancel</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
@endsection
