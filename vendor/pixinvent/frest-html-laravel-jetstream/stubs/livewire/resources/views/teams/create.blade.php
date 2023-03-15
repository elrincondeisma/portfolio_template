@extends('layouts.layoutMaster')
@php
$breadcrumbs = [['link' => 'home', 'name' => 'Home'], ['name' => 'Create Team']];
@endphp
@section('title', 'Create Team')

@section('content')
  @livewire('teams.create-team-form')
@endsection
