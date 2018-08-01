<!-- Modal Start -->
<div class="modal fade" id="award-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Team Member of the Month</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="award-form">
              <div class="form-row mb-3">
                <div class="col">
                  <input type="text" class="form-control" id="first-name" placeholder="First Name" name="first-name" autocomplete="off">
                </div>
                <div class="col">
                  <input type="text" class="form-control" id="last-name" placeholder="Last Name" name="last-name" autocomplete="off">
                </div>
              </div>
              <div class="form-row mb-3">
                <div class="col">
                  <input type="text" class="form-control" id="position" placeholder="Position" name="position" autocomplete="off">
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="awardee-pic" name="awardee-pic" onchange="document.getElementById('preview').src = window.URL.createObjectURL(this.files[0])"
                      required>
                    <label class="custom-file-label" for="awardee-pic" name="awardee-pic">Select Picture</label>
                  </div>
                </div>
                <div class="col">
                  <input type="text" class="form-control" id="datepick" placeholder="Date to Award" name="date">
                </div>
              </div>
              <div class="form-group mt-3">
                <img src="" id="preview" alt="Image Preview" width="100%" height="200px">
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" form="award-form" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal End -->