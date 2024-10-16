<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newborrowerModal">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
  </svg>  
</button>

<!-- Modal -->
<div class="modal fade" id="newborrowerModal" tabindex="-1" aria-labelledby="newborrowerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newborrowerModalLabel">New Book</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form method="post" action="">
            <div class="mb-3">
              <label for="FName" class="form-label">First Name</label>
              <input type="text" class="form-control" id="FName" name="FName">
            </div>
            <div class="mb-3">
              <label for="LName" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="LName" name="LName">
            </div>
            <div class="mb-3">
              <label for="DOB" class="form-label">DOB</label>
              <input type="date" class="form-control" id="DOB" name="DOB">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">E-Mail</label>
              <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Phone</label>
              <input type="integer" class="form-control" id="phone" name="phone">
            </div>
            <input type="hidden" name="actionType" value="Add">
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
      </div>
    </div>
  </div>
</div>
