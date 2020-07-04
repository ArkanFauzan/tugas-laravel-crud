@extends('layout.master')
<?php
$created_at = date("d - m - Y" ,strtotime($pertanyaan->created_at))." pukul ".date("h:i:s" ,strtotime($pertanyaan->created_at));
$updated_at = date("d - m - Y" ,strtotime($pertanyaan->updated_at))." pukul ".date("h:i:s" ,strtotime($pertanyaan->updated_at));
?>

@section('content')
    <table style="font-size: 20px">
        <tr>
            <td>Judul</td>
            <td> &nbsp;&nbsp;:&nbsp;&nbsp; {{$pertanyaan->judul}}</td>
        </tr>
        <tr>
            <td>Isi pertanyaan</td>
            <td> &nbsp;&nbsp;:&nbsp;&nbsp; {{$pertanyaan->isi}}</td>
        </tr>
        <tr>
            <td>Tanggal dibuat</td>
            <td> &nbsp;&nbsp;:&nbsp;&nbsp; {{$created_at}}</td>
        </tr>
        <tr>
            <td>Tanggal diperbaharui</td>
            <td> &nbsp;&nbsp;:&nbsp;&nbsp; {{$updated_at}}</td>
        </tr>
    </table>

    <br/>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Jawaban</th>
            </tr>
        </thead>
        <tbody>
            <?php $kosong=true; $no=1;?>
            @foreach ($jawaban as $value)
                <tr>
                    <td style="width:5%">{{$no++}}</td>
                    <td>{{$value->isi}}</td>
                </tr>
                <?php $kosong=false;?>
            @endforeach
            @if ($kosong===true)
                <tr><td colspan="2">Belum ada jawaban</td></tr>
            @endif
        </tbody>
    </table>
@endsection