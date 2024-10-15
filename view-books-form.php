<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newbookModal">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
  </svg>  
</button>

<!-- Modal -->
<div class="modal fade" id="newbookModal" tabindex="-1" aria-labelledby="newbookModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newbookModalLabel">New Book</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form method="post" action="">
            <div class="mb-3">
              <label for="genreID" class="form-label">Genre ID</label>
              <input type="integer" class="form-control" id="genreID" name="genreID">
            </div>
            <div class="mb-3">
              <label for="bookTitle" class="form-label">Book Title</label>
              <input type="text" class="form-control" id="bookTitle" name="bookTitle">
            </div>
            <div class="mb-3">
              <label for="pubDate" class="form-label">Publication Date</label>
              <input type="date" class="form-control" id="pubDate" name="pubDate">
            </div>
            <div class="mb-3">
              <label for="loanID" class="form-label">Loan ID</label>
              <input type="integer" class="form-control" id="loanID" name="loanID">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
      </div>
    </div>
  </div>
</div>
