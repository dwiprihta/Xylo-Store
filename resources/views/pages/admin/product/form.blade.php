 <form id="appForm">
    <input type="hidden" name="id" id="id">

    <div class="form-group" id="form-group-name">
        <label for="name">Nama User</label>
        <input
            type="text"
            class="form-control"
            id="name"
            aria-describedby="name"
            name="name"
            value=""
            required
        />
        <div id="error-name"></div>
    </div>

    <div class="form-group" id="form-group-photo">
        <label for="email">Email</label>
        <input
            type="email"
            class="form-control"
            id="email"
            aria-describedby="email"
            name="email"
            value=""
            required
        />
        <div id="error-email"></div>
    </div>

    @if ($tombol == 'daftar')
        <div class="form-group" id="form-group-password">
        <label for="password">Password</label>
        <input
            type="password"
            class="form-control"
            id="password"
            aria-describedby="password"
            name="password"
            value=""
            required
        />
        <div id="error-password"></div>
    </div>

    {{-- <div class="form-group" id="form-group-password">
        <label for="password">Ulangi Password</label>
        <input
            type="password"
            class="form-control"
            id="password_confirmation"
            aria-describedby="password"
            name="password_confirmation"
            value=""
            required
        />
        <div id="error-password-confirmation"></div>
    </div> --}}
    @endif
    
    <div class="form-group" id="form-group-roles">
        <label for="roles">Roles</label>
        <select name="roles" id="roles" class="form-control" required>
            <option value="ADMIN">Admin</option>
            <option value="USER">User</option>
        </select>
        <div id="error-roles"></div>
    </div>
    </div>
    <div class="modal-footer">
            <button type="submit" class="btn btn-success" id="saveButton" value="create">Save</button>
    </div>
</form>