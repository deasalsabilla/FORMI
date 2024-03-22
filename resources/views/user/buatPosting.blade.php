<!-- Button trigger modal -->
<button type="button" class="btn btn-primary post" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="fas fa-plus"></i> Buat Posting
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-black">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Buat Posting</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukkan Judul">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" placeholder="Masukkan Deskripsi"></textarea>
                </div>
                <div class="mb-3">
                    <label for="semester">Kategori Materi</label>
                    <select class="form-select" id="semester" name="semester" aria-label="Default select example">
                        <option value="">-- Pilih Kategori --</option>
                        @foreach($opt as $item)
                        <option value="{{ $item->kode }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="matakuliah">Mata Kuliah</label>
                    <select class="form-select" id="matakuliah" name="matakuliah" aria-label="Default select example">
                        <option value="">-- Pilih Mata Kuliah --</option>
                    </select>
                </div>

                <script>
                    // Menangkap perubahan pada select kategori materi
                    document.getElementById('semester').addEventListener('change', function() {
                        var semesterId = this.value; // Mendapatkan nilai dari select kategori materi
                        var selectMataKuliah = document.getElementById('matakuliah'); // Menemukan elemen select mata kuliah

                        // Menghapus semua opsi mata kuliah sebelumnya
                        selectMataKuliah.innerHTML = '<option value="">-- Pilih Mata Kuliah --</option>';

                        // Jika kategori materi dipilih
                        if (semesterId) {
                            // Mengambil data dari server dengan AJAX
                            fetch('/api/mata-kuliah/' + semesterId)
                                .then(function(response) {
                                    return response.json();
                                })
                                .then(function(data) {
                                    // Menambahkan opsi mata kuliah ke dalam select
                                    data.forEach(function(mataKuliah) {
                                        var option = document.createElement('option');
                                        option.value = mataKuliah.id;
                                        option.innerText = mataKuliah.nama;
                                        selectMataKuliah.appendChild(option);
                                    });
                                });
                        }
                    });
                </script>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>