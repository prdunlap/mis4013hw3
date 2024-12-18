<!-- Button trigger modal -->
<button type="button" class="btn btn-primary fixed-width-btn" data-bs-toggle="modal" data-bs-target="#editbookauthorModal<?php echo $bookauthor['BAID']; ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editbookauthorModal<?php echo $bookauthor['BAID']; ?>" tabindex="-1" aria-labelledby="editbookauthorModalLabel<?php echo $bookauthor['BAID']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editauthorModalLabel<?php echo $bookauthor['BAID']; ?>">Edit bookauthor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form method="post" action="">
            <div class="mb-3">
              <label for="BID" class="form-label">Book ID</label>
              <select class="form-control" id="BID" name="BID">
                <?php 
                  require_once "model-books-by-author.php";
                  $bookids = selectBIDs();
                  if(!empty($bookids)) {
                    foreach ($bookids as $id) {
                      echo "<option value='" . $id['BID'] . "'>" . $id['BID'] . "</option>";
                    }
                  }
                ?>
              </select>
            </div>
            <div class="mb-3">
              <label for="AID<?php echo $bookauthor['AID']; ?>" class="form-label">Author ID</label>
              <select class="form-control" id="AID" name="AID">
              <?php 
                require_once "model-books-by-author.php";
                $authids = selectAuthors();
                  if(!empty($authids)) {
                    foreach ($authids as $id) {
                      echo "<option value='" . $id['AID'] . "'>" . $id['AID'] . "</option>";
                    } 
                  }
              ?>
              </select>
            </div>
            
            <input type="hidden" name="BAID" value="<?php echo $bookauthor['BAID']; ?>">
            <input type="hidden" name="actionType" value="Edit">
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </form>
      </div>
    </div>
  </div>
</div>
