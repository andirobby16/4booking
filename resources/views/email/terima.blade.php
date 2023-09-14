@component('mail::message')

# Jadwal Booking Anda telah Di Setujui! 

<h4>Yth. {{ $nama }}</h4>

Pemesanan jadwal kegiatan Anda telah sukses dikonfirmasi. Anda dapat mengecek jadwal anda di website 4Booking.
@component('mail::button', ['url' => 'https://www.google.com/'] )
    Click Disini
@endcomponent

Anda juga bisa melihat detail jadwal kegiatan anda dibawah ini :

@component('mail::panel')
    
{{-- @component('mail::table')
| Detail Jadwal     |                       |
| :-----------------|:----------------------|
| Nama Lengkap      | : Robby               |
| Nama Organisasi   | : Telkom              |
| Judul Acara       | : Mahasiswa Magang    |
| Jenis Acara       | : Magang              |
| Jumlah Peserta    | : 6                   |
| Tanggal Mulai     | : 20 Sept 2023        |
| Tanggal Selesai   | : 20 Sept 2023        |
| Deskripsi         | : Today were talking about everything you need to know when starting with Laravel Mail    |
@endcomponent --}}
@component('mail::table')
| Detail Jadwal     |                       |
| :-----------------|:----------------------|
| Nama Lengkap      | : {{ $nama }}         |
| Nama Organisasi   | : {{ $organisasi }}   |
| Judul Acara       | : {{ $judul }}        |
| Jenis Acara       | : {{ $jenis }}        |
| Jumlah Peserta    | : {{ $jumlah }}       |
| Tanggal Mulai     | : {{ $tglmulai }}     |
| Tanggal Selesai   | : {{ $tglselesai }}   |
| Deskripsi         | : {{ $deskripsi }}    |
@endcomponent
    
@endcomponent

<br>

<div class="penutup">
    Terima Kasih,<br>
    4Booking Team.
</div>
@endcomponent