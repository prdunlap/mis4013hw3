<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editauthorModal<?php echo $author['AID']; ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editauthorModal<?php echo $author['AID']; ?>" tabindex="-1" aria-labelledby="editauthorModalLabel<?php echo $author['AID']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editauthorModalLabel<?php echo $author['AID']; ?>">Edit Author</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form method="post" action="">
            <div class="mb-3">
              <label for="FName<?php echo $author['AID']; ?>" class="form-label">First Name</label>
              <input type="text" class="form-control" id="FName<?php echo $author['AID']; ?>" name="FName" value="<?php echo $author['FName']; ?>">
            </div>
            <div class="mb-3">
              <label for="LName<?php echo $author['AID']; ?>" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="LName<?php echo $author['AID']; ?>" name="LName" value="<?php echo $author['LName']; ?>">
            </div>
            <div class="mb-3">
              <label for="Suffix<?php echo $author['AID']; ?>" class="form-label">Suffix</label>
              <input type="text" class="form-control" id="Suffix<?php echo $author['AID']; ?>" name="Suffix" value="<?php echo $author['Suffix']; ?>">
            </div>
            <div class="mb-3">
              <label for="DOB<?php echo $author['AID']; ?>" class="form-label">Date of Birth</label>
              <input type="date" class="form-control" id="DOB<?php echo $author['AID']; ?>" name="DOB">
            </div>
            <div class="mb-3">
              <label for="Country_of_Origin<?php echo $author['AID']; ?>" class="form-label">Country of Origin</label>
              <input type="text" class="form-control" id="Country_of_Origin<?php echo $author['AID']; ?>" name="Country_of_Origin" value="<?php echo $author['Country_of_Origin']; ?>">
            </div>
            <input type="hidden" name="AID" value="<?php echo $author['AID']; ?>">
            <input type="hidden" name="actionType" value="Edit">
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </form>
      </div>
    </div>
  </div>
</div>
