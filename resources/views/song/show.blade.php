@extends ("layouts.editor")

@section ("content")
<div style="height: 100px;">
<div class="toast" id="good_toast">
    <div class="toast-header">
        <strong class="mr-auto"><i class="fa fa-grav"></i> </strong>
        <small>Just Now</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
    </div>
    <div class="toast-body">
        Song Updated!
    </div>
</div>
<div class="toast" id="bad_toast">
    <div class="toast-header">
        <strong class="mr-auto"><i class="fa fa-grav"></i> </strong>
        <small>Just Now</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
    </div>
    <div class="toast-body">
        Song Failed to sync!
    </div>
</div>
</div>
    <div class="card">
    <h5 class="card-title">
        <label class="label" for="song_name">Song Title</label>
        <input id="song_name" class="form-control" type="text" name="song_name" value="{{ $song->song_name }}" />
        <input id="song_id" type="hidden" value="{{ $song->id }}" />
    </h5>
    <div class="card-body" style="height: 50vh;">
        <div class="row" style="height: 100%;">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            Left
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <textarea id="editor">
                
                </textarea>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            Backing tracks or some shit
            </div>
        </div>
    </div>
    <div class="card-footer">
        <table class="table table-hover table-striped">
            <thead>
                <th>Take Length</th>
                <th>Take Date</th>
                <th>Backing Track</th>
                <th>Play</th>
            </thead>
            <tbody>
                <tr>
                    <td>1:30</td>
                    <td>2020-12-25</td>
                    <td>The monster</td>
                    <td><span><i class="fa fa-play"></i></span></td>
                </tr>
            </tbody>
    </table>
    </div>
    </div>
@endsection