<div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">New Holiday</h4>
      </div>
      <div class="modal-body">
        <form>
          {{-- personen --}}
          <div class="form-group">
            <label for="create-tag" class="control-label">personen:</label>
              <select class="form-control" id="select-country">
            </select>
          </div>
          {{-- Vertrekdatum --}}

          {{-- aantaldagen --}}
          <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker5'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="reservation">reserveer</button>
      </div>
    </div>
  </div>
</div>

