@extends('layouts.app')

@section('title', "Wijzig {$volunteer->name}")

@section('content')
    <div class="col-md-offset-1 col-md-10">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="fa fa-pencil" aria-hidden="true"></span> Wijzig vrijwilliger: {!! $volunteer->name !!}
            </div>

            <div class="panel-body">
                @php
                    $sizes    = ['sm' => [3, 9], 'md' => [3, 9], 'lg' => [3, 9], 'xs' => [3, 9]];
                    $required = '<span class="text-danger">*</span>';
                @endphp

                {!! BootForm::openHorizontal($sizes)->action(route('volunteers.update', $volunteer))->put() !!}
                    {!! BootForm::bind($volunteer) !!}

                    {!! BootForm::text("Naam: {$required}", 'name')->placeholder('Naam v/d vrijwilliger') !!}
                    {!! BootForm::text("Email adres: {$required}", 'email')->placeholder('Email adres v/d vrijwilliger') !!}

                    {{-- This form-group is not written in the helper. --}}
                    {{-- Because this form-group needs fcutom logic. --}}
                    <div class="form-group {{ $errors->has('groups') ? 'has-error' : '' }}">
                        <label class="control-label col-xs-3 col-md-3 col-lg-3 col-sm-3">
                             Vrijw. groepen:
                        </label>

                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                            <select name="groups" class="form-control" multiple>
                                @foreach($groups as $group)
                                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                                @endforeach
                            </select>

                            <span class="help-block">
                                @if ($errors->has('groups'))
                                    <strong>{{ $errors->first('groups') }}</strong>
                                @else
                                    <small>
                                        * Gebruik de CTRL toets voor meerdere opties. Indien u niet wenst de gebruiken te wijzigen. Kunt u dit veld leeg laten.
                                    </small>
                                @endif
                            </span>
                        </div>
                    </div>

                    {!! BootForm::textarea("Extra informatie: {$required}", 'extra-information')->rows(5)->cols(0)->placeholder('Extra informatie omtrent de vrijwilliger.') !!}

                    {!! BootForm::submit('<span class="fa fa-check"></span> Aanpassen', 'btn-success') !!}
                {!! BootForm::close() !!}
            </div>
        </div>
    </div>
@endsection