@extends('layouts.main')

@section('title', 'Produto')

@section('content')
<p>
    @if($id != null)
        Exibindo produto id: {{ $id }}
    @endif
</p>
@endsection