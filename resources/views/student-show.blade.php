@extends('layout')
@section('content')
    @livewire('student.show', ['id' => $id])
@endsection