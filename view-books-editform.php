<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editbookModal<?php echo $book['BID']; ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editbookModal<?php echo $book['BID']; ?>" tabindex="-1" aria-labelledby="editbookModalLabel<?php echo $book['BID']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editbookModalLabel<?php echo $book['BID']; ?>">Edit Author</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form method="post" action="">
            <div class="mb-3">
              <label for="GID<?php echo $book['BID']; ?>" class="form-label">Genre ID</label>
              <select class="form-control" id="GID" name="GID">
              <?php 
                require_once "model-books.php";
                $gids = selectGenres();
                  if(!empty($gids)) {
                    foreach ($gids as $gid) {
                      echo "<option value='" . $gid['GID'] . "'>" . $gid['GID'] . "</option>";
                    } 
                  }
              ?>
              </select>
            </div>
            <div class="mb-3">
              <label for="Title<?php echo $book['BID']; ?>" class="form-label">Title</label>
              <input type="text" class="form-control" id="Title<?php echo $book['BID']; ?>" name="Title" value="<?php echo $book['Title']; ?>">
            </div>
            <div class="mb-3">
              <label for="PubDate<?php echo $book['BID']; ?>" class="form-label">Publication Date</label>
              <input type="date" class="form-control" id="PubDate<?php echo $book['BID']; ?>" name="PubDate" value="<?php echo $book['PubDate']; ?>">
            </div>
            <div class="mb-3">
              <label for="LID<?php echo $book['BID']; ?>" class="form-label">Loan ID</label>
              <select class="form-control" id="GID" name="GID">
              <?php 
                require_once "model-books.php";
                $gids = selectLoans();
                  if(!empty($lids)) {
                    foreach ($lids as $loanid) {
                      echo "<option value='" . $loanid['LID'] . "'>" . $loanid['LID'] . "</option>";
                    } 
                  }
              ?>
              </select>            
            </div>
            <input type="hidden" name="BID" value="<?php echo $book['BID']; ?>">
            <input type="hidden" name="actionType" value="Edit">
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </form>
      </div>
    </div>
  </div>
</div>
