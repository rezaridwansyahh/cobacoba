@extends('layout.dasboard')
@section('content')
  <style>
    .box-button{
      display: inline-block;
    }
  </style>
<div class="jumbotron">
  @if (!empty($siswa_list))
    <div class="fieldset">
      <legend>
        Daftar Siswa
      </legend>
      <div class="table-responsive">
        <table class="table table-striped table-hover table-resposive">
          <thead>
          <tr>
            <th>NISN</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Nomor Telepon</th>
            <th>Kelas</th>
            <th>Hobi</th>
            <th>Detil Siswa</th>
          </tr>
          </thead>
          @php
            $i=1;
          @endphp
          <tbody>
            @foreach ($siswa_list as $data)
              <tr>
                <td>{{$data->nisn}}</td>
                <td>{{$data->nama_siswa}}</td>
                <td>{{$data->tanggal_lahir}}</td>
                <td>{{$data->jenis_kelamin}}</td>
                <td>
                  @if (!empty($data->telepon->nomor_telepon))
                    {{$data->telepon->nomor_telepon}}
                  @else
                    Tidak ada nomor Telepon
                  @endif
                </td>
                <td>
                  {{$data->kelas->nama_kelas}}
                </td>
                <td>
                  @foreach ($data->hobi as $item)
                    <strong><span>{{$item->nama_hobi}}</span></strong>,
                  @endforeach
                </td>
                <td>
                  <div class="box-button">
                    <button type="button" class="btn btn-raised btn-primary btn-sm" data-toggle="modal" data-target="#modal{{$i}}">Edit Siswa</button>
                  </div>
                  <div class="box-button">
                    <form method="post" action="/siswa/{{$data->id}}">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <input type="submit" class="btn btn-raised btn-danger btn-sm" value="Hapus" />
                    </form>
                  </div>
                </td>
              </tr>
              <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="modal{{$i}}"aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <H4>Edit Data Siswa</H4>
                    </div>
                    <div class="modal-body">
                      <div class="modal-body">
                        <form class="form-horizontal" action="/siswa/{{$data->id}}" method="post">
                          {{ csrf_field() }}
                          {{ method_field('PUT') }}
                            <div class="form-group">
                              <label for="inputNisn" class="col-md-2 control-label">Nisn</label>
                              <div class="col-md-10">
                                <input value="{{$data->nisn}}" type="text" class="form-control" id="inputNisn" name="nisn" placeholder="NISN">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputNama" class="col-md-2 control-label">Nama</label>
                              <div class="col-md-10">
                                <input value="{{$data->nama_siswa}} "type="text" class="form-control" id="inputNama" name="nama_siswa" placeholder="Nama">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputNama" class="col-md-2 control-label">Tanggal Lahir</label>
                              <div class="col-md-10">
                                <input value="{{$data->tanggal_lahir}}" type="date" class="form-control" id="inputNama" name="tanggal_lahir" placeholder="Password">
                              </div>
                            </div>
                            <div class="form-group" id="dropdown-menu">
                              <label for="select" class="col-md-2 control-label">Select</label>
                              <div class="col-md-10">
                                <select id="select" class="form-control" name="jenis_kelamin">
                                  <option value="L">Laki-Laki</option>
                                  <option value="P">Perempuan</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group" id="dropdown-menu">
                              <label for="select" class="col-md-2 control-label">Kelas</label>
                              <div class="col-md-10">
                                <select id="select" class="form-control" name="id_kelas">
                                  @foreach ($list_kelas as $kelas)
                                    <option value="{{$kelas->id}}">{{$kelas->nama_kelas}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputNama" class="col-md-2 control-label">Nomor Telepon</label>
                              <div class="col-md-10">
                                <input value="{{$data->telepon['nomor_telepon']}}"type="text" class="form-control" id="inputNama" name="nomor_telepon" placeholder="Nomor Telepon">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="checkbox" class="col-md-2 control-label">Hobi</label>
                              <div class="col-md-10">
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="hobi[]" value="1"> Memasak
                                  </label>
                                  <label>
                                    <input type="checkbox" name="hobi[]" value="2"> Coding
                                  </label>
                                </div>
                              </div>
                            </div>
                    <div class="modal-footer">
                      <div class="form-group">
                          <div class="col-md-10 col-md-offset-2">
                            <button type="button" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              @php
                $i++;
              @endphp
            @endforeach
          </tbody>
        </table>
      </div>

    @else
      <p>
        Tidak ada siswa
      </p>
    @endif
    </div>
    <div class="paginate">
        {{$siswa_list->links()}}
    </div>

    <button type="button" class="btn btn-raised btn-primary" data-toggle="modal" data-target="#tambah">Tambah</button>
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="tambah" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <H4>Siswa</H4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" action="/siswa/create" method="post">
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
                    <input type="text" class="form-control" id="inputNama" name="nama_siswa" placeholder="Nama">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-md-2 control-label">Tanggal Lahir</label>
                  <div class="col-md-10">
                    <input type="date" class="form-control" id="inputNama" name="tanggal_lahir" placeholder="Password">
                  </div>
                </div>
                <div class="form-group" id="dropdown-menu">
                  <label for="select" class="col-md-2 control-label">Kelamin</label>
                  <div class="col-md-10">
                    <select id="select" class="form-control" name="jenis_kelamin">
                      <option value="L">Laki-Laki</option>
                      <option value="P">Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="form-group" id="dropdown-menu">
                  <label for="select" class="col-md-2 control-label">Kelas</label>
                  <div class="col-md-10">
                    <select id="select" class="form-control" name="id_kelas">
                      @foreach ($list_kelas as $kelas)
                        <option value="{{$kelas->id}}">{{$kelas->nama_kelas}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-md-2 control-label">Nomor Telepon</label>
                  <div class="col-md-10">
                    <input type="text" class="form-control" id="inputNama" name="nomor_telepon" placeholder="Nomor Telepon">
                  </div>
                </div>
                <div class="form-group">
                  <label for="checkbox" class="col-md-2 control-label">Hobi</label>
                  <div class="col-md-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="hobi[]" value="1"> Memasak
                      </label>
                      <label>
                        <input type="checkbox" name="hobi[]" value="2"> Coding
                      </label>
                    </div>
                  </div>
                </div>
          <div class="modal-footer">
              <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                  <button type="button" class="btn btn-default">Cancel</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </fieldset>
          </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
