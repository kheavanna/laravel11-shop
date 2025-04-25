<div class="modal fade" id="modalUpdateUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width:40%;">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #3f42ce; color: white;">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Update User</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" class="formUpdateUser" autocomplete="off">

            <div class="mb-3">
              <label for="name" class="form-label">Username</label>
              <input type="text" name="name" class="form-control name name_edit" id="name" aria-describedby="nameHelp" placeholder="Enter username">
              <div id="nameHelp" class="form-text">Username must be unique</div>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" class="form-control email email_edit" id="email" aria-describedby="emailHelp" placeholder="Enter email">
              <div id="emailHelp" class="form-text">Email must be unique</div>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control password password_edit" id="password" aria-describedby="passwordHelp" placeholder="Enter password">
              <div id="passwordHelp" class="form-text">Password must be at least 8 characters</div>
            </div>

            <div class="mb-3">
              <label for="role" class="form-label">Role</label>
              <select name="role" class="form-select role role_edit" id="role">
                <option value="1">Admin</option>
                <option value="0">User</option>
              </select>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" onclick="UserUpdate('.formUpdateUser')" class="btn btn-primary">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>  