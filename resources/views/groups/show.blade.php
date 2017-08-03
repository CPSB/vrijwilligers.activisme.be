@extends('layouts.app')

@section('title', $group->name)

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h2 class="text-center">{{ $group->name }}</h2>
            </div>
        </div>

        <div class="tab-content">

            <div role="tabpanel" class="tab-pane fade in active" id="home">
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            {{ $group->long_description }}
                        </div>
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane fade in" id="members">
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Vrijwilligers van de groep:

                            <div class="pull-right">
                                @if ($group->volunteers()->count() >= 20)
                                    <a href="" class="btn btn-default btn-xs">Zoek vrijwilliger</a>
                                @endif

                                <a href="" class="btn btn-default btn-xs">Vrijwilliger toevoegen</a>
                            </div>
                        </div>

                        <div class="panel-body">
                            @if ($group->volunteers()->count() > 0)
                                <table class="table table-bordered table-condensed table-striped table-hover" id="data-table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Naam:</th>
                                            <th>Email:</th>
                                            <th class="text-center">Acties</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($group->volunteers as $volunteer) {{-- Loop through the volunteers --}}
                                            <tr>
                                                <td><code>#V{{ $volunteer->id }}</code></td>
                                                <td>{{ $volunteer->name }}</td>
                                                <td><a href="mailto:{{ $volunteer->email }}">{{ $volunteer->email }}</a></td>

                                                <td class="text-center"> {{-- Actions --}}
                                                    <a href="mailto:{{ $volunteer->email }}" class="btn btn-xs btn-primary">Mail</a>
                                                    <a href="{{ route('volunteers.show', $volunteer) }}" class="btn btn-xs btn-info">Bekijk</a>
                                                    <a href="" class="btn btn-xs btn-danger">Ontkoppel</a>
                                                </td> {{-- /Actions --}}
                                            </tr>
                                        @endforeach {{-- /Loop through volunteers --}}
                                    </tbody>
                                </table>
                            @else
                                <div class="alert alert-info alert-important" role="alert">
                                    <strong><span class="fa fa-info-circle" aria-hidden="true"></span> Info:</strong>
                                    Er zijn geen vrijwilligers voor deze groep.
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-3">
            <div class="list-group">
                <a href="#home" aria-controls="home" role="tab" data-toggle="tab" class="list-group-item">
                    <span class="fa fa-file-text-o" aria-hidden="true"></span> &nbsp;Beschrijving
                </a>

                <a href="#members" aria-controls="members" role="tab" data-toggle="tab" class="list-group-item">
                    <span class="fa fa-users" aria-hidden="true"></span> Vrijwilligers
                </a>
            </div>

            <div class="list-group">
                <a href="" class="list-group-item list-group-item-danger">
                    <span class="fa fa-close" aria-hidden="true"></span> Verwijder
                </a>
            </div>
        </div>
    </div>
@endsection
