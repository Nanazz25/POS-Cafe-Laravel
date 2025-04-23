<form action="{{ route('menus.update', $menu->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="nama_menu">Nama Menu:</label>
        <input type="text" name="nama_menu" id="nama_menu" value="{{ old('nama_menu', $menu->nama_menu) }}" required>
    </div>

    <div>
        <label for="kategori">Kategori:</label>
        <input type="text" name="kategori" id="kategori" value="{{ old('kategori', $menu->kategori) }}" required>
    </div>

    <div>
        <label for="harga">Harga:</label>
        <input type="number" name="harga" id="harga" value="{{ old('harga', $menu->harga) }}" required>
    </div>

    <button type="submit">Update</button>
</form>
