@component('mail::message')

# Jadwal Booking Anda telah Di Tolak! 

<h4>Yth. {{ $nama }}</h4>

Mohon maaf, jadwal kegiatan yang Anda booking telah kami tolak. Silahkan Booking Jadwal di tanggal yang berbeda.
<br>
<br>
Click Tombol ini untuk pergi ke website 4Booking
@component('mail::button', ['url' => 'https://www.google.com/'] )
    Click Disini
@endcomponent

<br>
<div class="penutup">
    Terima Kasih,<br>
    4Booking Team.
</div>
@endcomponent