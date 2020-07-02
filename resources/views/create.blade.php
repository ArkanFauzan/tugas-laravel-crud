@extends('layout.master')

@section('content')
    <form action="/pertanyaan" method="POST">
    @csrf
        <div class="form-group">
            <h1>Silahkan Ajukan Pertanyaan</h1>
            <label for="judul">Judul pertanyaan:</label>
            <input type="text" class="form-control" name="judul" id="judul">
        </div>
        <div class="form-group">
            <label for="isi">Isi pertanyaan:</label><br/>
            <textarea style="width:100%" name="isi"></textarea>
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
    </form>
@endsection