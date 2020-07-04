@extends('layout.master');

@section('content')
    <div class="py-2">
    <a href="/pertanyaan/create" class="btn btn-md btn-info" role="button"><i class="fas fa-plus-circle"></i> Buat Pertanyaan</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr> 
                <th>#</th>
                <th>Pertanyaan</th>
                <th style="text-align: center">Jawaban</th>
                <th style="text-align: center">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $kosong=true; $no=1;?>
            @foreach ($pertanyaan as $value)
                <tr>
                    <td>{{$no++}}</td>
                    <td><a href="/jawaban/{{$value->id}}">{{$value->judul}}</a></td>
                    <td style="text-align: center">
                        <a class="btn btn-sm btn-info" href="/jawaban/{{$value->id}}"><i class="fas fa-eye"></i> Lihat jawaban</a>&nbsp;
                        <a class="btn btn-sm btn-primary" href="/jawaban/{{$value->id}}"><i class="fas fa-reply-all"></i> Jawab</a>
                    </td>
                    <Td style="text-align: center">
                        <a class="btn btn-sm btn-info" href="/pertanyaan/{{$value->id}}"><i class="fas fa-info"></i> Detail pertanyaan</a>&nbsp;
                        <a class="btn btn-sm btn-warning" href="/pertanyaan/{{$value->id}}/edit"><i class="fas fa-edit"></i> Edit</a>&nbsp;
                        <form action="/pertanyaan/{{$value->id}}" style="display: inline" method="post">
                            @csrf
                            @method("delete")
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                        </form>
                    </Td>
                </tr>
                <?php $kosong=false;?>
            @endforeach
            @if ($kosong===true)
                <tr><td colspan="4">Belum ada pertanyaan yang diajukan</td></tr>
            @endif
        </tbody>
    </table>
@endsection