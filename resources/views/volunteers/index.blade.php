@extends('layouts.app')

@section('title', 'Vrijwilligers')

@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-5">
                    <h3 class="modal-title">Vrijwilligers</h3>
                </div>
                <div class="col-md-7 page-action text-right">
                    <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm"> <i class="glyphicon glyphicon-plus-sign"></i> Nieuwe vrijwilliger</a>
                </div>
            </div>

            <div class="result-set">
                @if ((int) count($volunteers) > 0)
                    <table class="table table-bordered table-condensed table-striped table-hover" id="data-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Naam:</th>
                                <th>Email:</th>
                                <th>Ploegen:</th>
                                <th>Aangemaakt op:</th>
                                <th class="text-center">Acties</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($volunteers as $volunteer)
                                <tr>
                                    <td><code>#V{{ $volunteer->id }}</code></td>
                                    <td>{{ $volunteer->name }}</td>
                                    <td><a href="mailto:{{ $volunteer->email }}">{{ $volunteer->email }}</a></td>
                                    <td></td> {{-- TODO: Set up relation. --}}
                                    <td>{{ $volunteer->created_at }}</td>µ
                                    <td>
                                        <a href="" class="btn btn-xs btn-info">
                                            <span class="fa fa-info-circle" aria-hidden="true"></span> Bekijk
                                        </a>
                                        <a href="" class="btn btn-xs btn-warning">
                                            <span class="fa fa-pencil" aria-hidden="true"></span> Wijzig
                                        </a>
                                        <a href="" class="btn btn-xs btn-danger">
                                            <span class="fa fa-thrash" aria-hidden="true"></span> Verwijder
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                    @if ((int) count($volunteers) > 25) {{-- Pagination --}}
                        <div class="text-center">
                            {{ $volunteers->links() }}
                        </div>
                    @endif {{-- /Pagination --}}
                @else
                    <div class="alert alert-info alert-important" role="alert">
                        <strong><span class="fa fa-exclamation-triangle" aria-hidden="true"></span> Info:</strong>
                        Er zijn nog geen vrijwilligers in het systeem.
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
