@extends('layouts.main')

@section('content')

<script src="{{URL::asset('assets/js/applications/DataSave.js')}}"></script>
<script src="{{URL::asset('assets/js/applications/DataEdit.js')}}"></script>
<script src="{{URL::asset('assets/js/applications/DataDelete.js')}}"></script>
<div class="container">
    <div class="row">
        <div class="col s12">
          <div class="card">
            
            <div class="card-content">
                <button class="btn green waves-effect waves-dark modal-trigger add-btn"  data-target="modal1"><i class="material-icons left">person_add</i> Tambah Data</button>
                <table class="highlight" id="data-crud">
                    <thead>
                        <tr>
                            <th class="center">ID</th>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>

                    {{-- Loop data start --}}
                    @foreach ($list as $data)
                  <tr id="tr_{{ $data->id }}">
                      <td class="center">{{ $data->id  }}</td>
                      <td>{{ $data->nama  }}</td>
                      <td>{{ $data->umur  }}</td>
                      <td>
                          <a href="javascript:void(0)"  data-id="{{ $data->id }}" class="waves-effect waves-light btn blue darken-2 edit-data  modal-trigger " data-target="modal1"><i class="material-icons ">edit</i></a>
                          <a data-id="{{ $data->id }}" class="waves-effect waves-light btn red darken-2 delete-data"><i class="material-icons ">delete</i></a>
                      </td>
                  </tr>
                    @endforeach
                    {{-- Loop data end --}}
                </table>
            </div>
          </div>
        </div>
      </div>
</div>
<!-- Modal Structure -->
<form id="formData">
 <div id="modal1" class="modal">
  <div class="modal-content">
      <h4 class="judul">Tambah Orang</h4>
      <input type="hidden" name="user_id" id="user_id">
      <div class="row">
            <div class="row">
              <div class="input-field col s12">
                <input name="nama" id="nama" type="text" class="validate" required>
                <label class="label-nama" for="nama">Nama</label>
              </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                  <input name="umur" id="umur" type="text" class="validate" required>
                  <label class="label-umur" for="umur">Umur</label>
            </div>
        </div> 
    </div>
    <div class="modal-footer">
      <a href="#!" class="btn waves-effect light-blue darken-3 btn-save"><i class="material-icons left">save</i> Simpan</a>
      <a href="#!" class="modal-close waves-effect waves-red btn-flat btn-batal"><i class="material-icons left">cancel</i>Batalkan</a>
    </div>  
  </div>
</form>
@endsection