<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newbookauthorModal">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
  </svg>  
</button>

<!-- Modal -->
<div class="modal fade" id="newbookauthorModal" tabindex="-1" aria-labelledby="newbookauthorModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newbookauthorModalLabel">New Book</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form method="post" action="">
            <div class="mb-3">
              <label for="BID" class="form-label">Book ID</label>
              <select class="form-control" id="BID" name="BID">
              <?php 
                require_once "model-books-by-author.php";
                $bookbids = selectBIDs();
                  if(!empty($bookbids)) {
                    foreach ($bookbids as $id) {
                      echo "<option value='" . $id['BID'] . "'>" . $id['BID'] . "</option>";
                    } 
                  }
              ?>
              </select>
            </div>
            <div class="mb-3">
              <label for="AID" class="form-label">Author ID</label>
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
            <input type="hidden" name="actionType" value="Add">
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
      </div>
    </div>
  </div>
</div>
