@extends('layout')
@section('content')
    @livewire('class.show',  ['id' => $id])
@endsection