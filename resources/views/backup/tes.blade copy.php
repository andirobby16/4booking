<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <!-- Button trigger modal -->
<a href="#" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Launch static backdrop modal
</a>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="modal-body">
                <div class="mb-3">
                    <label>Nama Lengkap</label>
                    <input type="text" wire:model="nama_lengkap" class="form-control">
                    @error('nama_lengkap') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label>Nama Organisasi</label>
                    <input type="text" wire:model="nama_organisasi" class="form-control">
                    @error('nama_organisasi') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label>Judul Acara</label>
                    <input type="text" wire:model="judul_acara" class="form-control">
                    @error('judul_acara') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label>Jumlah Peserta</label>
                    <input type="text" wire:model="nama_lengkap" class="form-control">
                    @error('nama_lengkap') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label>Tanggal Mulai</label>
                    <input type="text" wire:model="nama_organisasi" class="form-control">
                    @error('nama_organisasi') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label>Tanggal Berakhir</label>
                    <input type="text" wire:model="judul_acara" class="form-control">
                    @error('judul_acara') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label>Deskripsi Acara</label>
                    <input type="text" wire:model="judul_acara" class="form-control">
                    @error('judul_acara') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label>Deskripsi Acara</label>
                    <input type="text" wire:model="judul_acara" class="form-control">
                    @error('judul_acara') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label>Deskripsi Acara</label>
                    <input type="text" wire:model="judul_acara" class="form-control">
                    @error('judul_acara') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label>Deskripsi Acara</label>
                    <input type="text" wire:model="judul_acara" class="form-control">
                    @error('judul_acara') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>


  <a href="#" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewBookingModal">
    View
</a>

  {{-- Modal untuk User melihat jadwal booking --}}
<div wire:ignore.self class="modal fade mt-5" id="viewBookingModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="viewBookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="viewBookingModalLabel">List Jadwal Booking</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div class="modal-body">
                <table class="table table-borderd table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Lengkap</th>
                            <th>Nama Organisasi</th>
                            <th>Judul Acara</th>
                            <th>Jumlah Peserta</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                            </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
        </div>
    </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>