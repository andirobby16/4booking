<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Booking;

class AdminListBooking extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    // Untuk Booking
    public $nama_lengkap, $nama_organisasi, $judul_acara, $jenis_acara, $jumlah_peserta, $tgl_mulai, $tgl_selesai, $deskripsi;
    public $user_id, $layanan_id, $nama_layanan;
    public $booking_id;
    
    public $name, $email, $no_hp, $organisasi;
    public $search = '';

    // Buat Nampilin modal Detail
    public function detailBooking(int $booking_id){
        $booking = Booking::find($booking_id);
        if($booking){
            $this->booking_id = $booking->id;
            $this->nama_lengkap = $booking->nama_lengkap;
            $this->nama_organisasi = $booking->nama_organisasi;
            $this->judul_acara = $booking->judul_acara;
            $this->jenis_acara = $booking->jenis_acara;
            $this->jumlah_peserta = $booking->jumlah_peserta;
            $this->tgl_mulai = $booking->tgl_mulai->format('d-M-Y');
            $this->tgl_selesai = $booking->tgl_selesai->format('d-M-Y');
            $this->deskripsi = $booking->deskripsi;
            $this->user_id = $booking->user_id;
        }else{
            return redirect()->to('/home');
        }
    }

    // Buat reset inputan diform yg telah dimasukin
    public function resetInput(){
        $this->nama_lengkap = '';
        $this->nama_organisasi = '';
        $this->judul_acara = '';
        $this->jenis_acara = '';
        $this->jumlah_peserta = '';
        $this->tgl_mulai = '';
        $this->tgl_selesai = '';
        $this->deskripsi = '';
        $this->user_id = '';
    }

    public function closeModal(){
        $this->resetInput();
    }

    public function render()
    {
        $listbookings = Booking::orderBy('id','DESC')->paginate(10);

        return view('livewire.admin-list-booking', ['listbookings' => $listbookings]);
    }
}
