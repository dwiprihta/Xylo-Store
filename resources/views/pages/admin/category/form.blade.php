 <div class="form-group">
    <label for="name">Nama Category</label>
    <input
        type="text"
        class="form-control"
        id="name"
        aria-describedby="name"
        name="name"
        value="{{ old('name') ?? $item->name ?? '' }}"
    />
</div>

 <div class="form-group">
    <label for="name">Icon Category</label>
    <input
        type="file"
        class="form-control"
        id="photo"
        aria-describedby="name"
        name="photo"
        value="{{ old('photo') ?? $item->photo ?? '' }}"
    />
</div>

