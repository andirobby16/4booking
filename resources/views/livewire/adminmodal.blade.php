<!-- Modal -->
<div wire:ignore.self class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="detailModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Lengkap</label>
                <div class="col-sm-8">
                    <p>: {{$nama_lengkap}} </p>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Organisasi</label>
                <div class="col-sm-8">
                    <p>: {{$nama_organisasi}}</p>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Judul Acara</label>
                <div class="col-sm-8">
                    <p>: {{$judul_acara}}</p>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Jenis Acara</label>
                <div class="col-sm-8">
                    <p>: {{$jenis_acara}}</p>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Jumlah Peserta</label>
                <div class="col-sm-8">
                    <p>: {{$jumlah_peserta}}</p>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Tanggal Mulai</label>
                <div class="col-sm-8">
                    <p>: {{$tgl_mulai}}</p>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Tanggal Selesai</label>
                <div class="col-sm-8">
                    <p>: {{$tgl_selesai}}</p>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Deskripsi</label>
                <div class="col-sm-8">
                    <p>: {{$deskripsi}}</p>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>