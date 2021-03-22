@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> {{ $project->name }}</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('projects.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nome:</strong>
            {{ $project->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Passagem:</strong>
            {{ $project->introduction }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Destino:</strong>
            {{ $project->location }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Custo:</strong>
            {{ $project->cost }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Data de Criação:</strong>
            {{ date_format($project->created_at, 'jS M Y') }}
        </div>
    </div>
</div>
@endsection