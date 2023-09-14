<div class="app-wrapper">
	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">
			<div class="row g-3 mb-4 align-items-center justify-content-between">
				<div class="col-auto">
					<h1 class="app-page-title mb-0">Orders</h1>
				</div>
				<div class="col-auto">
						<div class="page-utilities">
						<div class="row g-2 justify-content-start justify-content-md-end align-items-center">
							<div class="col-auto">
								{{-- <form class="table-search-form row gx-1 align-items-center">
									<div class="col-auto">
										<input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Search">
									</div>
									<div class="col-auto">
										<button type="submit" class="btn app-btn-secondary">Search</button>
									</div>
								</form> --}}
							</div>
						</div>
					</div>
				</div>
			</div>

			@include('livewire.adminmodal')
			<div class="tab-content" id="orders-table-tab-content">
				<div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					<div class="app-card app-card-orders-table shadow-sm mb-5">
						<div class="app-card-body">
							<div class="table-responsive">
								<table class="table app-table-hover mb-0 text-left">
									<thead>
										<tr>
											<th class="cell">No.</th>
											<th class="cell">Nama Lengkap</th>
											<th class="cell">Nama Organisasi</th>
											<th class="cell">Judul Acara</th>
											<th class="cell">Jenis Acara</th>
											<th class="cell">Jumlah Peserta</th>
											<th class="cell">Tanggal Mulai</th>
											<th class="cell">Tanggal Selesai</th>
											<th class="cell">Deskripsi Acara</th>
											<th class="cell">Status</th>
											<th class="cell">Action</th>
										</tr>
									</thead>
									<tbody>
										@forelse ($listbookings as $booking)
										<tr>
											<td class="cell">{{$loop->iteration}}</td>
											<td class="cell">{{$booking->nama_lengkap}}</td>
											<td class="cell">{{$booking->nama_organisasi}}</td>
											<td class="cell"><span class="truncate">{{$booking->judul_acara}}</span></td>
											<td class="cell">{{$booking->jenis_acara}}</td>
											<td class="cell">{{$booking->jumlah_peserta}}</td>
											<td class="cell"><span>{{$booking->tgl_mulai->format('d M Y')}}</span></td>
											<td class="cell"><span>{{$booking->tgl_selesai->format('d M Y')}}</span></td>
											<td class="cell"><span class="truncate">{{$booking->deskripsi}}</span></td>
											@if ($booking->status == 'Disetujui')
												<td class="cell"><span class="text-success fw-bold">{{$booking->status}}</span></td>
											@elseif ($booking->status == 'Menunggu Konfirmasi')
												<td class="cell"><span class="text-warning fw-bold">{{$booking->status}}</span></td>
											@else
												<td class="cell"><span class="text-danger fw-bold">{{$booking->status}}</span></td>
											@endif

											@if ($booking->status == 'Disetujui' || $booking->status == 'Ditolak')
											<td class="cell"><a class="btn btn-sm btn-info" id="detail" data-bs-toggle="modal" wire:click="detailBooking({{$booking->id}})" data-bs-target="#detailModal"><i class="fa-solid fa-eye fa-inverse"></i></a></td>
											@else
											<td class="cell">
												<a class="btn btn-sm btn-success" id="diterima" data-id="{{$booking->id}}" onclick="return Diterima(this)"><i class="fa-solid fa-check fa-inverse "></i></a>
												<a class="btn btn-sm btn-danger" id="cancel" data-id="{{$booking->id}}" onclick="return Ditolak(this)"><i class="fa-solid fa-x fa-inverse"></i></a>
												<a class="btn btn-sm btn-info" data-bs-toggle="modal" wire:click="detailBooking({{$booking->id}})" data-bs-target="#detailModal" ><i class="fa-solid fa-eye fa-inverse"></i></a>
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
							</div>
						</div>	
					</div>
					{{$listbookings->links()}}
				</div>
			</div>
		</div>
	</div>
</div>