@extends('layouts.main')

@section('content')
<div class="container">
        <div class="row">
                <div class="col s12">
                  <div class="card">
                    <div class="card-image">
                      <img src="{{URL::asset('assets/img/mokey.jpg')}}">
                      <span class="card-title">Jangan lupa tersenyum</span>
                    </div>
                    <div class="card-content">
                      <p>Kita tersenyum bukanlah karena sedang bersandiwara. Bukan karena senyuman adalah suatu kedok. Tetapi karena senyuman adalah suatu sikap. Sikap kita untuk Tuhan, manusia sesama, nasib dan kehidupan. </p>
                    </div>
                    <div class="card-action ">
                    <a href="{{url('/data')}}">Buka List Data</a>
                    </div>
                  </div>
                </div>
              </div>
    </div>
@endsection
