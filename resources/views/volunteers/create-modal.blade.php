<!-- Modal -->
<div id="volunteerCreate" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><span class="fa fa-plus" aria-hidden="true"></span> Nieuwe vrijwilliger</h4>
            </div>
            <div class="modal-body">
                <form id="newVolunteer" action="{{ route('volunteers.store') }}" class="form-horizontal" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="control-label col-sm-3">
                            Naam: <span class="text-danger">*</span>
                        </label>

                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name" placeholder="Naam van de vrijwilliger">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3">
                            Email adres: <span class="text-danger">*</span>
                        </label>

                        <div class="col-md-9">
                            <input type="email" class="form-control" name="email" placeholder="Email adres van de vrijwilliger">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">
                            Vrijw. groepen: <span class="text-danger">*</span>
                        </label>

                        <div class="col-md-9">
                            <select class="form-control" name="groups" multiple>
                                @foreach ($groups as $group)
                                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">
                            Extra info: <span class="text-danger">*</span>
                        </label>

                        <div class="col-md-9">
                            <textarea name="extra_information" class="form-control" rows="5" placeholder="Extra informatie over de vrijwilliger"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" form="newVolunteer">
                    <span class="fa fa-check" aria-hidden="true"></span> Aanmaken
                </button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    <span class="fa fa-undo" aria-hidden="true"></span> Annuleren
                </button>
            </div>
        </div>

    </div>
</div>
