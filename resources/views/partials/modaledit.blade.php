<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Holiday</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="edit-title" class="control-label">Title:</label>
            <input type="text" class="form-control" id="edit-title">
          </div>
          <div class="form-group">
            <label for="edit-description" class="control-label">Description:</label>
            <textarea rows="8" class="form-control" id="edit-description"></textarea>
          </div>
          <div class="form-group">
            <label for="edit-price" class="control-label">Price:</label>
            <input type="text" class="form-control" id="edit-price">
          </div>
          <div class="form-group">
            <label for="edit-tag" class="control-label">Country:</label>
              <select class="form-control" id="select-country">
                @foreach ($countries as $country)
                  <option value="{{$country->id}}">{{$country->name}}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="edit-tag" class="control-label">Accommodation:</label>
              <select class="form-control" id="select-accommodation">
                @foreach ($accommodations as $accommodation)
                  <option value="{{$accommodation->id}}">{{$accommodation->name}}</option>
                @endforeach
              </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="edit-save">Edit</button>
      </div>
    </div>
  </div>
</div>