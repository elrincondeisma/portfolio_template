@extends('layouts.layoutMaster')

@php
$breadcrumbs = [['link' => 'home', 'name' => 'Home'], ['name' => 'Team Settings']];
@endphp

@section('title', 'Team Settings')

@section('content')
  <div class="mb-4">
    @livewire('teams.update-team-name-form', ['team' => $team])
  </div>

  @livewire('teams.team-member-manager', ['team' => $team])


  @if (Gate::check('delete', $team) && !$team->personal_team)

  <div class="mt-4">
    @livewire('teams.delete-team-form', ['team' => $team])
  </div>
  @endif
@endsection
