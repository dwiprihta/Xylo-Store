 <form id="appForm">
            <input type="hidden" name="id" id="id">
            <input type="hidden" name="photo_update" id="photo_update">

            <div class="form-group" id="form-group-name">
                <label for="name">Nama Category</label>
                <input
                    type="text"
                    class="form-control"
                    id="name"
                    aria-describedby="name"
                    name="name"
                    value=""
                />
                <div id="error-name"></div>
            </div>

            <div class="form-group">
                <label for="photo">
                </label>
                    <div class="custom-file">
                    <input type="file" id="photo" name="photo" accept="image/*"
                    class="custom-file-input">
                    <label  id="photo" value="" class="custom-file-label col-md-12" for="gambar_profil"
                    onchange="$('#photo').val($(this).val());">
                    {{ $user->gambar_profil ?? 'Pilih gambar...'}}
                    </label>
                </div>
                 <div id="error-photo"></div>
                  <small id="infPhoto" class="form-text text-info"></small>
            </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" id="saveButton" value="create">Save </button>
            </div>
        </form>