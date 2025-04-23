<form action="{{ route('menus.store') }}" method="POST">
    @csrf
    <label for="nama_menu">Nama Menu:</label>
    <input type="text" name="nama_menu" id="nama_menu" required>

    <label for="kategori">Kategori:</label>
    <input type="text" name="kategori" id="kategori" required>

    <label for="harga">Harga:</label>
    <input type="text" name="harga" id="harga" required>

    <button type="submit">Tambah Menu</button>
</form>
