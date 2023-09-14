{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
<!-- Modal -->

{{-- Modal untuk User membuat jadwal booking --}}
<div wire:ignore.self class="modal fade mt-5" id="bookingModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="bookingModalLabel">Buat Jadwal</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close"></button>
        </div>
        <form wire:submit.prevent="saveBooking">
           {{ csrf_field() }}
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 p-2">
                            <label>Nama Lengkap</label>
                            <input type="text" wire:model="nama_lengkap" class="form-control" placeholder="Nama Lengkap Anda...">
                            @error('nama_lengkap') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-6 p-2">
                            <label>Nama Organisasi</label>
                            <input type="text" wire:model="nama_organisasi" class="form-control" placeholder="Nama Organisasi Anda...">
                            @error('nama_organisasi') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-6 p-2">
                            <label>Judul/Nama Acara</label>
                            <input type="text" wire:model="judul_acara" class="form-control" placeholder="Judul/Nama Acara..." >
                            @error('judul_acara') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-6 p-2">
                            <label>Jenis Acara/Layanan</label>
                            @if ($this->jenis_acara == 'Project' || $this->jenis_acara == 'Seminar' || $this->jenis_acara == 'Konsultasi' ||
                                $this->jenis_acara == 'Magang')
                            <input type="text" wire:model="jenis_acara" class="form-control" placeholder="Tulisan 'Acara/Layanan Lainnya' jika tidak tahu" readonly>
                            @else
                            <input type="text" wire:model="jenis_acara" class="form-control" placeholder="Tulisan 'Acara/Layanan Lainnya' jika tidak tahu">
                            @endif
                            @error('jenis_acara') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm p-2">
                            <label>Jumlah Peserta</label>
                            <input type="number" wire:model="jumlah_peserta" class="form-control" min="1" placeholder="1">
                            @error('jumlah_peserta') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-5 p-2">
                            <label>Tanggal Mulai</label>
                            <input type="date" wire:model="tgl_mulai" class="form-control datepicker" >
                            @error('tgl_mulai') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-sm-5 p-2">
                            <label>Tanggal Selesai</label>
                            <input type="date" wire:model="tgl_selesai" class="form-control">
                            @error('tgl_selesai') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col p-2">
                            <label>Deskripsi</label>
                            <textarea class="form-control" wire:model="deskripsi" rows="3" placeholder="Deskripsikan secara singkat acara yang ada booking/pesan..."></textarea>
                            {{-- <input type="text" wire:model="deskripsi" class="form-control"> --}}
                            @error('deskripsi') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <input type="hidden" wire:model="email_user">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="closeModal">Close</button>
                <button type="submit" class="btn btn-primary" id="submit">Kirim</button>
            </div>
        </form>
        </div>
    </div>
</div>

{{-- Modal untuk update jadwal booking --}}
<div wire:ignore.self class="modal fade mt-5" id="updateBookingModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateBookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="updateBookingModalLabel">Edit Jadwal</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close"></button>
        </div>
        <form wire:submit.prevent="updateBooking">
           {{ csrf_field() }}
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 p-2">
                            <label>Nama Lengkap</label>
                            <input type="text" wire:model="nama_lengkap" class="form-control" placeholder="Nama Lengkap Anda...">
                            @error('nama_lengkap') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-6 p-2">
                            <label>Nama Organisasi</label>
                            <input type="text" wire:model="nama_organisasi" class="form-control" placeholder="Nama Organisasi Anda...">
                            @error('nama_organisasi') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-6 p-2">
                            <label>Judul/Nama Acara</label>
                            <input type="text" wire:model="judul_acara" class="form-control" placeholder="Judul/Nama Acara..." >
                            @error('judul_acara') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-6 p-2">
                            <label>Jenis Acara/Layanan</label>
                            @if ($this->jenis_acara == 'Project' || $this->jenis_acara == 'Seminar' || $this->jenis_acara == 'Konsultasi' ||
                                $this->jenis_acara == 'Magang')
                            <input type="text" wire:model="jenis_acara" class="form-control" placeholder="Tulisan 'Acara/Layanan Lainnya' jika tidak tahu" readonly>
                            @else
                            <input type="text" wire:model="jenis_acara" class="form-control" placeholder="Tulisan 'Acara/Layanan Lainnya' jika tidak tahu">
                            @endif
                            @error('jenis_acara') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm p-2">
                            <label>Jumlah Peserta</label>
                            <input type="number" wire:model="jumlah_peserta" class="form-control" min="1" placeholder="1">
                            @error('jumlah_peserta') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-5 p-2">
                            <label>Tanggal Mulai</label>
                            <input type="date" wire:model="tgl_mulai" class="form-control datepicker" >
                            @error('tgl_mulai') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-sm-5 p-2">
                            <label>Tanggal Selesai</label>
                            <input type="date" wire:model="tgl_selesai" class="form-control">
                            @error('tgl_selesai') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col p-2">
                            <label>Deskripsi</label>
                            <textarea class="form-control" wire:model="deskripsi" rows="3" placeholder="Deskripsikan secara singkat acara yang ada booking/pesan..."></textarea>
                            {{-- <input type="text" wire:model="deskripsi" class="form-control"> --}}
                            @error('deskripsi') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <input type="hidden" wire:model="user_id">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="closeModal">Close</button>
                <button type="submit" class="btn btn-primary" id="submit">Update</button>
                
            </div>
        </form>
        </div>
    </div>
</div>

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
                            <th>Jenis Acara</th>
                            <th>Jumlah Peserta</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($bookings as $booking)
                            <tr>
                                <th scope="row"> {{$loop->iteration}} </th>
                                <td>{{$booking->nama_lengkap}}</td>
                                <td>{{$booking->nama_organisasi}}</td>
                                <td>{{$booking->judul_acara}}</td>
                                <td>{{$booking->jenis_acara}}</td>
                                <td>{{$booking->jumlah_peserta}}</td>
                                <td>{{$booking->tgl_mulai->format('d M Y')}}</td>
                                <td>{{$booking->tgl_selesai->format('d M Y')}}</td>
                                {{-- <td>{{$booking->status}}</td> --}}
                                @if ($booking->status == 'Disetujui')
                                    <td class="cell"><span class="text-success">{{$booking->status}}</span></td>
                                @elseif ($booking->status == 'Menunggu Konfirmasi')
                                    <td class="cell"><span class="text-warning">{{$booking->status}}</span></td>
                                @else
                                    <td class="cell"><span class="text-danger">{{$booking->status}}</span></td>
                                @endif

                                @if ($booking->status == 'Disetujui' || $booking->status == 'Ditolak')
                                <td class="cell">
                                    <a href="" class="btn btn-info btn-sm" data-bs-toggle="modal"   wire:click="detailBooking({{$booking->id}})" data-bs-target="#DetailBookingModal">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </td>
                                @else
                                <td class="">
                                    <a href="" class="btn btn-success btn-sm" wire:click="editBooking({{$booking->id}})" data-bs-toggle="modal" data-bs-target="#updateBookingModal">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    <a href="" class="btn btn-danger btn-sm" data-bs-toggle="modal" wire:click="deleteBooking({{$booking->id}})" data-bs-target="#deleteBookingModal">
                                        <i class="fa-solid fa-xmark"></i>
                                    </a>
                                    <a href="" class="btn btn-info btn-sm" data-bs-toggle="modal" wire:click="detailBooking({{$booking->id}})" data-bs-target="#DetailBookingModal">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </td>
                                @endif
                        @empty
                            <tr>
                                <td colspan="4">Tidak ada Jadwal Booking</td>
                            </tr>
                        @endforelse
                        </tr>
                    </tbody>
                </table>
                <div>
                    {{$bookings->links()}}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
        </div>
    </div>
</div>

<!-- Modal untuk batalain booking -->
<div wire:ignore.self class="modal fade" id="deleteBookingModal" tabindex="-1" aria-labelledby="deleteBookingModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div>
            </div>
            <form wire:submit.prevent="destroyBooking">
                <div class="modal-body">
                    <div class="d-md-flex justify-content-md-end">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"  wire:click="closeModal"></button>
                    </div>
                    <h4>Apakah Anda yakin ingin membatalin pesanan ?</h4>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Iya, Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal untuk detail booking -->
<div wire:ignore.self class="modal fade mt-5" id="DetailBookingModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="DetailBookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="DetailBookingModalLabel">Detail Jadwal</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close"></button>
        </div>
        <form wire:submit.prevent="DetailBooking">
           {{ csrf_field() }}
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 p-2">
                            <label>Nama Lengkap</label>
                            <input type="text" wire:model="nama_lengkap" class="form-control" placeholder="Nama Lengkap Anda...">
                            
                        </div>
                        <div class="col-sm-6 p-2">
                            <label>Nama Organisasi</label>
                            <input type="text" wire:model="nama_organisasi" class="form-control" placeholder="Nama Organisasi Anda...">
                            
                        </div>
                        <div class="col-sm-6 p-2">
                            <label>Judul/Nama Acara</label>
                            <input type="text" wire:model="judul_acara" class="form-control" placeholder="Judul/Nama Acara..." >
                            
                        </div>
                        <div class="col-sm-6 p-2">
                            <label>Jenis Acara/Layanan</label>
                            @if ($this->jenis_acara == 'Project' || $this->jenis_acara == 'Seminar' || $this->jenis_acara == 'Konsultasi' ||
                                $this->jenis_acara == 'Magang')
                            <input type="text" wire:model="jenis_acara" class="form-control" placeholder="Tulisan 'Acara/Layanan Lainnya' jika tidak tahu" readonly>
                            @else
                            <input type="text" wire:model="jenis_acara" class="form-control" placeholder="Tulisan 'Acara/Layanan Lainnya' jika tidak tahu" readonly>
                            @endif
                            
                        </div>
                        <div class="col-sm p-2">
                            <label>Jumlah Peserta</label>
                            <input type="number" wire:model="jumlah_peserta" class="form-control" min="1" placeholder="1" readonly>
                            
                        </div>
                        <div class="col-sm-5 p-2">
                            <label>Tanggal Mulai</label>
                            <input type="text" wire:model="tgl_mulai" class="form-control datepicker" readonly>
                            
                        </div>

                        <div class="col-sm-5 p-2">
                            <label>Tanggal Selesai</label>
                            <input type="text" wire:model="tgl_selesai" class="form-control" readonly>
                            
                        </div>
                        <div class="col p-2">
                            <label>Deskripsi</label>
                            <textarea class="form-control" wire:model="deskripsi" rows="3" placeholder="Deskripsikan secara singkat acara yang ada booking/pesan..." readonly></textarea>
                            {{-- <input type="text" wire:model="deskripsi" class="form-control"> --}}
                            
                        </div>
                        <input type="hidden" wire:model="user_id">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="closeModal">Close</button>
            </div>
        </form>
        </div>
    </div>
</div>



{{-- Modal untuk profile --}}
<div wire:ignore.self class="modal fade" id="ProfileModal" tabindex="-1" aria-labelledby="ProfileModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-md-flex justify-content-md-end">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"  wire:click="closeModal"></button>
                </div>
                <div class="card-body p-4">
                    <h3>Profile Information</h3>
                    <hr class="mt-0 mb-4">
                    <div class="row pt-1">
                        <div class="col-6 mb-3">
                            <h6>Nama</h6>
                            <p class="fw-bold">{{Auth::user()->name}}</p>
                        </div>
                        <div class="col-6 mb-3">
                            <h6>Email</h6>
                            <p class="">{{Auth::user()->email}}</p>
                        </div>
                    </div>
                    <hr class="mt-0 mb-4">
                    <div class="row pt-1">
                        <div class="col-6 mb-3">
                            <h6>No Hp</h6>
                            <p class="">{{Auth::user()->no_hp}}</p>
                        </div>
                        <div class="col-6 mb-3">
                            <h6>Organisasi</h6>
                            <p class="">{{Auth::user()->organisasi}}</p>
                        </div>
                    </div>
                </div>
                <div class="d-md-flex justify-content-md-end gap-2">
                    {{-- <button type="button" class="btn btn-primary"  data-bs-target="#updateProfileModal" data-bs-dismiss="modal" >Edit</button> --}}
                    <button type="button "class="btn btn-primary" data-bs-target="#updateProfileModal" wire:click="editProfile({{Auth::user()->id}})" data-bs-toggle="modal">Edit</button>
                    <button type="button" class="btn btn-secondary"  wire:click="closeModal" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal untuk Update Profile --}}
<div wire:ignore.self class="modal fade" id="updateProfileModal" tabindex="-1" aria-labelledby="updateProfileModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form wire:submit.prevent="updateProfile">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="d-md-flex justify-content-md-end">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"  wire:click="closeModal"></button>
                    </div>
                    <div class="card-body p-4">
                        <h3>Edit Profile Information</h3>
                        <hr class="mt-0 mb-4">
                        <div class="row pt-1">
                            <div class="col-6 mb-3">
                                <label>Nama</label>
                                <input type="text" wire:model="name" class="form-control" placeholder="Nama Anda...">
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-6 mb-3">
                                <label>Email</label>
                                <input type="text" wire:model="email" class="form-control" placeholder="Email Anda...">
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <hr class="mt-0 mb-4">
                        <div class="row pt-1">
                            <div class="col-6 mb-3">
                                <label>No Handphone</label>
                                <input type="text" wire:model="no_hp" class="form-control" placeholder="No Handphone Anda...">
                                @error('no_hp') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-6 mb-3">
                                {{-- <h6>Organisasi</h6>
                                <p class="text-muted">{{Auth::user()->organisasi}}</p> --}}
                                <label>Organisasi</label>
                                <input type="text" wire:model="organisasi" class="form-control" placeholder="Organisasi Anda...">
                                @error('organisasi') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-md-flex justify-content-md-end gap-2">
                        <button type="submit" class="btn btn-success" data-bs-dismiss="modal" >Save</button>
                        <button type="button" class="btn btn-secondary" wire:click="closeModal" data-bs-target="#ProfileModal" data-bs-toggle="modal">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // Use datepicker on the date inputs
    $("input[type=date]").datepicker({
      dateFormat: 'yy-mm-dd',
      onSelect: function(dateText, inst) {
        $(inst).val(dateText); // Write the value in the input
      }
    });
    
    // Code below to avoid the classic date-picker
    $("input[type=date]").on('click', function() {
      return false;
    });
</script>


{{-- Modal untuk User membuat jadwal booking layanan lainnya --}}
{{-- <div wire:ignore.self class="modal fade mt-5" id="defaultbookingModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="defaultbookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="defaultbookingModalLabel">Buat Jadwal</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal"  wire:click="closeModal" aria-label="Close"></button>
        </div>
        <form wire:submit.prevent="saveBooking">
           {{ csrf_field() }}
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 p-2">
                            <label>Nama Lengkap</label>
                            <input type="text" wire:model="nama_lengkap" class="form-control" placeholder="Nama Lengkap Anda...">
                            @error('nama_lengkap') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-6 p-2">
                            <label>Nama Organisasi</label>
                            <input type="text" wire:model="nama_organisasi" class="form-control" placeholder="Nama Organisasi Anda...">
                            @error('nama_organisasi') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-6 p-2">
                            <label>Judul/Nama Acara</label>
                            <input type="text" wire:model="judul_acara" class="form-control" placeholder="Judul/Nama Acara..." >
                            @error('judul_acara') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-6 p-2">
                            <label>Jenis Acara/Layanan</label>
                            <input type="text" wire:model="jenis_acara" class="form-control" placeholder="Tulisan 'Acara/Layanan Lainnya' jika tidak tahu">
                            @error('jenis_acara') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm p-2">
                            <label>Jumlah Peserta</label>
                            <input type="number" wire:model="jumlah_peserta" class="form-control" min="1" placeholder="1">
                            @error('jumlah_peserta') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-5 p-2">
                            <label>Tanggal Mulai</label>
                            <input type="date" wire:model="tgl_mulai" class="form-control datepicker" >
                            @error('tgl_mulai') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-sm-5 p-2">
                            <label>Tanggal Selesai</label>
                            <input type="date" wire:model="tgl_selesai" class="form-control">
                            @error('tgl_selesai') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col p-2">
                            <label>Deskripsi</label>
                            <textarea class="form-control" wire:model="deskripsi" rows="3" placeholder="Deskripsikan secara singkat acara yang ada booking/pesan..."></textarea>
                            @error('deskripsi') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <input type="hidden" wire:model="user_id">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="submit">Kirim</button>
                
            </div>
        </form>
        </div>
    </div>
</div> --}}