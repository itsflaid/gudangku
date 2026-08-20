@extends('layouts.app')

@section('title', 'Data User')
@section('menuSuperadminUser', 'active')
@section('content')
    @livewire('superadmin.user.index')
@endsection
{{-- @livewire('superadmin.user.index') --}}

