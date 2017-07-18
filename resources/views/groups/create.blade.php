@extends('layouts.app')

@section('title', 'Nieuwe vrijwilligers groep')

@push('styles')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
@endpush

@section('content')
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="fa fa-plus" aria-hidden="true"></span> Vrijwilligers groep toevoegen.
                </div>

                <div class="panel-body">
                    <form action="{{ route('groups.store') }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label class="control-label col-md-3">
                                Naam: <span class="text-danger">*</span>
                            </label>

                            <div class="col-md-9">
                                <input class="form-control" name="name" placeholder="Naam van de vrijwilligers groep.">

                                @if ($errors->has('name'))
                                    <small class="help-block">{{ ucfirst($errors->first('name')) }}</small>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                            <label class="control-label col-md-3">
                                Afbeelding: <span class="text-danger">*</span>
                            </label>

                            <div class="col-md-9">
                                <input type="file" name="image" class="form-control">
                                @if ($errors->has('image')) <small class="help-block">{{ ucfirst($errors->first('image')) }}</small> @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('short_description') ? 'has-error' : '' }}">
                            <label class="control-label col-md-3">
                                Korte beschrijving: <span class="text-danger">*</span>
                            </label>

                            <div class="col-md-9">
                                <textarea name="short_description" rows="2" placeholder="Korte beschijving voor de groep." class="form-control"></textarea>

                                @if ($errors->has('short_description'))
                                    <small class="help-block">{{ ucfirst($errors->first('short_description')) }}</small>
                                @else
                                    <small class="help-block">* word gebruikt voor de tiles in de back-end en de index pagina.</small>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('long_description') ? 'has-error' : '' }}">
                            <label class="control-label col-md-3">
                                Volledige beschrijving: <span class="text-danger">*</span>
                            </label>

                            <div class="col-md-9">
                                <textarea id="summernote" name="long_description">
                                    <p>De volledige beschrijving van de groep.</p>
                                </textarea>

                                @if ($errors->has('long_description'))
                                    <small class="help-block">{{ $errors->first('long_description') }}</small>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-check" aria-hidden="true"></span> Aanmaken
                                </button>

                                <button type="reset" class="btn btn-danger">
                                    <span class="fa fa-undo" aria-hidden="true"></span> Formulier legen
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 300,
                lang: 'nl-NL',
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['view', ['fullscreen', 'codeview']],
                    ['height', ['height']]
                ]
            });
        });
    </script>
@endpush
