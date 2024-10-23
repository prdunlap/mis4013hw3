<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newloanModal">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
  </svg>  
</button>



<!-- Modal -->
<div class="modal fade" id="newloanModal" tabindex="-1" aria-labelledby="newloanModelLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newborrowerModalLabel">New Loan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form method="post" action="">
            <div class="mb-3">
              <label for="BorrowerID" class="form-label">Borrower ID</label>
              <select class="form-control" id="BorrowerID" name="BorrowerID">
              <?php 
                require_once "model-loans.php";
                $borrs = selectBorrowerID();
                  if(!empty($borrs)) {
                    foreach ($borrs as $id) {
                      echo "<option value='" . htmlspecialchars($id) . "'>" . htmlspecialchars($id) . "</option>";
                    } 
                  }
              ?>
              </select>
            </div>
            <div class="mb-3">
              <label for="CheckoutDate" class="form-label">Checkout Date</label>
              <input type="date" class="form-control" id="CheckoutDate" name="CheckoutDate">
            </div>
            <input type="hidden" name="actionType" value="Add">
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
      </div>
    </div>
  </div>
</div>
