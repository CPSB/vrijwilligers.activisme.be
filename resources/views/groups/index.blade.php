@extends('layouts.app')

@section('title', 'Vrijwilligers groepen')

@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row" style="margin-bottom: 15px;">
                <div class="col-md-5">
                    <h3 class="modal-title">Vrijwilligers groepen</h3>
                </div>
                <div class="col-md-7 page-action text-right">
                    <button type="button" class="btn btn-primary btn-sm"> <i class="glyphicon glyphicon-plus-sign"></i> Create</button>
                </div>
            </div>

            <div class="result-set">
                <div class="row">
                    @if ((int) count($groups) === 0)
                        <div class="alert alert-info alert-important">
                            <strong><span class="fa fa-info-circle" aria-hidden="true"></span> info:</strong>
                            Er zijn geen vrijwilligers groepen in het systeem gevonden.
                        </div>
                    @else
                        @foreach($groups as $group)
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h4 style="margin-top: -5px;">Groep naam</h4>
                                        <i class="fa fa-users fa-3x fa-pull-left fa-border" aria-hidden="true"></i>
                                        ...tomorrow we will run faster, stretch out our arms farther...
                                        And then one fine morning&mdash; So we beat on, boats against the
                                        current, borne back ceaselessly into the past. <br><br>

                                        <a href="" class="btn btn-info btn-xs">
                                            <span class="fa fa-info-circle" aria-hidden="true"></span> Info
                                        </a>
                                        <a href="" class="btn btn-warning btn-xs">
                                            <span class="fa fa-pencil" aria-hidden="true"></span> Wijzig
                                        </a>
                                        <a href="" class="btn btn-danger btn-xs">
                                            <span class="fa fa-trash" aria-hidden="true"></span> Verwijder
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        @if ((int) count($groups) > 15) {{-- There are more then 15 groups so we need a paginator. --}}
                            {{ $groups->links() }} {{-- Groups pagination instance --}}
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
