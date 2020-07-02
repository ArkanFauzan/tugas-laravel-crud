@extends('layout.master');

@section('content')
    <h3 class="p-2">Punya pertanyaan? 
        <a href="/pertanyaan/create" role="button">Ajukan pertanyaan</a>
    </h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Judul Pertanyaan</th>
                <th>Isi Pertanyaan</th>
            </tr>
        </thead>
        <tbody>
            <?php $kosong=true;?>
            @foreach ($pertanyaan as $value)
                <tr>
                    <td><a href="/jawaban/{{$value->id}}">{{$value->judul}}</a></td>
                    <td><a href="/jawaban/{{$value->id}}">{{$value->isi}}</a></td>
                </tr>
                <?php $kosong=false;?>
            @endforeach
            @if ($kosong===true)
                <tr><td colspan="2">Belum ada pertanyaan yang diajukan</td></tr>
            @endif
        </tbody>
    </table>
@endsection