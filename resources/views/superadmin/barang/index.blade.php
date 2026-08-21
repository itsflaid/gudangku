@extends('layouts.app')

@section('title', 'Data Barang')
@section('menuSuperadminBarang', 'active')
@section('content')
    @livewire('superadmin.barang.index')
@endsection

