@extends('layouts.app')

@section('title', $volunteer->name)

@section('content')
    <div class="row">
        <div class="col-md-9"> {{-- Content section --}}
            <div class="panel panel-default">
               <div class="panel-body">
                   <form class="form-horizontal">

                       <div class="form-group">
                            <label class="control-label col-md-3">Naam:</label>
                            <div class="col-md-9">
                                <div class="well well-sm">
                                    {{ $volunteer->name }}
                                </div>
                            </div>
                       </div>

                       <div class="form-group">
                            <label class="control-label col-md-3">
                               Email adres:
                            </label>

                            <div class="col-md-9">
                                <div class="well well-sm">
                                    {{ $volunteer->email }}
                                </div>
                            </div>
                       </div>

                       <div class="form-group">
                            <label class="control-label col-md-3">
                                Extra informatie:
                            </label>

                            <div class="col-md-9">
                                <div class="well well-sm">
                                    {{ $volunteer->extra_information }}
                                </div>
                            </div>
                       </div>

                       <div class="form-group">
                            <label class="control-label col-md-3">
                               Vrijwilligers groepen:
                            </label>

                            <div class="col-md-9">
                                <div class="well well-sm">
                                    @if ($volunteer->volunteerGroups()->count() === 0)
                                        - Geen
                                    @else
                                        @foreach ($volunteer->volunteerGroups as $group)
                                            - {{ $group->name }} <br>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                       </div>

                   </form>
               </div>
            </div>
        </div> {{-- /Content section --}}

        <div class="col-md-3"> {{-- Operation sidebar --}}
            <div class="list-group">
                <a href="{{ route('volunteers.index') }}" class="list-group-item">
                    <span class="fa fa-list" aria-hidden="true"></span> Terug naar overzicht
                </a>
                <a href="mailto:{{ $volunteer->email }}" class="list-group-item">
                    <span class="fa fa-envelope" aria-hidden="true"></span> Mail vrijwilliger
                </a>
            </div>

            <div class="list-group">
                <form id="delete" method="POST" action="{{ route('volunteers.destroy', $volunteer) }}">
                    {{ csrf_field()  }}
                    {{ method_field('DELETE') }}
                </form>

                <button type="submit" form="delete" class="list-group-item list-group-item-danger">
                    <span class="fa fa-close" aria-hidden="true"></span> Verwijder vrijwilliger
                </button>
            </div>
        </div> {{-- /Operations sidebar --}}
    </div>
@endsection
