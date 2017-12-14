
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add User</button>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="uploadForm">
            <div class="row">
                <div class="form-group col-6">
                    <label for="firstname" class="col-form-label">First Name</label>
                    <input class="form-control" type="text" name="firstname">
                </div>
                <div class="form-group col-6">
                    <label for="lastname" class="col-form-label">Last Name</label>
                    <input class="form-control" type="text" name="lastname">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label for="email" class="col-form-label">Email</label>
                    <input class="form-control" type="email" name="email">
                </div>
                <div class="form-group col-6">
                    <label for="age" class="col-form-label">Age</label>
                    <input class="form-control" type="text" name="age">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label for="location" class="col-form-label">Location</label>
                    <input class="form-control" type="text" name="location">
                </div>
                <div class="form-group col-6" id="previewImage">
                    <label for="file">Image</label>
                    <input class="form-control" type="file" name="featureImage" id="featureImage">
                </div>
            </div>
            
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>