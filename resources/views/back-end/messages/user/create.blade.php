<div class="modal fade" id="modalCreateUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width:40%;">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #4b2bfd; color: white;">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Create User</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" class="formCreateUser" autocomplete="off">

            <div class="mb-3">
              <label for="name" class="form-label">Username</label>
              <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter username">
              <div id="nameHelp" class="form-text">Username must be unique</div>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
              <div id="emailHelp" class="form-text">Email must be unique</div>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="password" aria-describedby="passwordHelp" placeholder="Enter password">
              <div id="passwordHelp" class="form-text">Password must be at least 8 characters</div>
            </div>

            <div class="mb-3">
              <label for="role" class="form-label">Role</label>
              <select name="role" class="form-select" id="role">
                <option value="1">Admin</option>
                <option value="0">User</option>
              </select>
            </div>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" onclick="StoreUser('.formCreateUser')" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
</div>