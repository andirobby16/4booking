<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use App\Models\Layanan;
use App\Models\Booking;
use App\Models\User;
use Livewire\Component;

class BookingShow extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    // Untuk Booking
    public $nama_lengkap, $nama_organisasi, $judul_acara, $jenis_acara, $jumlah_peserta, $tgl_mulai, $tgl_selesai, $deskripsi;
    public $user_id;
    public $booking_id;
    
    public $name, $email, $no_hp, $organisasi;
    public $search = '';

    // Funciton untuk mengirim hidden value
    public function mount(){
        $id = auth()->user()->email;
        $this->user_id = "$id";
    }

    protected function rules(){
        return [
            'nama_lengkap' => 'required',
            'nama_organisasi' => 'required',
            'judul_acara' => 'required',
            'jenis_acara' => 'required',
            'jumlah_peserta' => 'required|integer',
            'tgl_mulai' => 'required',
            'tgl_selesai' => 'required',
            'deskripsi' => 'required',
            'user_id'=> 'required',
        ];
    }

    public function updated($fields){
        $this->validateOnly($fields);
    }

    // (Create) Buat masuk data yg diinput ke database
    public function saveBooking(){
        $validatedData = $this->validate();

        Booking::create($validatedData);
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
        return redirect('/home')->with('success', 'Jadwal Booking Berhasil Dikirim');
    }

    // Buat Nampilin modal Booking
    public function editBooking(int $booking_id){
        $booking = Booking::find($booking_id);
        if($booking){
            $this->booking_id = $booking->id;
            $this->nama_lengkap = $booking->nama_lengkap;
            $this->nama_organisasi = $booking->nama_organisasi;
            $this->judul_acara = $booking->judul_acara;
            $this->jenis_acara = $booking->jenis_acara;
            $this->jumlah_peserta = $booking->jumlah_peserta;
            $this->tgl_mulai = $booking->tgl_mulai;
            $this->tgl_selesai = $booking->tgl_selesai;
            $this->deskripsi = $booking->deskripsi;
            $this->user_id = $booking->user_id;
        }else{
            return redirect()->to('/home');
        }
    }

    // Update Jadwal Booking
    public function updateBooking(){
        $validatedData = $this->validate();
        Booking::where('id', $this->booking_id)->update([
            'nama_lengkap' =>  $validatedData['nama_lengkap'],
            'nama_organisasi' =>  $validatedData['nama_organisasi'],
            'judul_acara' =>  $validatedData['judul_acara'],
            'jenis_acara' =>  $validatedData['jenis_acara'],
            'jumlah_peserta' =>  $validatedData['jumlah_peserta'],
            'tgl_mulai' =>  $validatedData['tgl_mulai'],
            'tgl_selesai' =>  $validatedData['tgl_selesai'],
            'deskripsi' =>  $validatedData['deskripsi'],
            'user_id' =>  $validatedData['user_id']
        ]);
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
        return redirect('/home')->with('success', 'Jadwal Booking Berhasil Diubah');
    }

    // Buat Nampilin List Layanan
    public function bookingModal(int $layanan_id){
        if ($layanan_id == 1) {
            $this->jenis_acara = "Project";
        } elseif ($layanan_id == 2) {
            $this->jenis_acara = "Seminar";
        }elseif ($layanan_id == 3) {
            $this->jenis_acara = "Konsultasi";
        }elseif ($layanan_id == 4) {
            $this->jenis_acara = "Magang";
        } else {
            return redirect()->to('/home');
        }
    

        // $layanan = Layanan::find($layanan_id);
        // if($layanan){
        //     //Buat input jenis layanan auto
        //     $this->jenis_acara = $layanan->nama_layanan;
        //     $this->nama_layanan = Layanan::all();
        // }else{
        //     return redirect()->to('/home');
        // }
    }

    public function deleteBooking(int $booking_id){
        $this->booking_id = $booking_id;
    }
    
    public function destroyBooking(){
        $booking = Booking::find($this->booking_id)->delete();
        $this->dispatchBrowserEvent('close-modal');
        return redirect('/home')->with('success', 'Jadwal Booking Berhasil Dibatalin');
    }

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

    // Buat nampilin data di modal edit profile
    public function editProfile(int $id){
        $profile = User::find($id);
        if($profile){
            $this->user_id = $profile->id;
            $this->name = $profile->name;
            $this->email = $profile->email;
            $this->no_hp = $profile->no_hp;
            $this->organisasi = $profile->organisasi;
        }else{
            return redirect()->to('/home');
        }
    }

    // Buat nampilin data dimodal edit
    public function updateProfile(){
        User::where('id', $this->user_id)->update([
            "name" => $this->name,
            "email" => $this->email,
            "no_hp" => $this->no_hp,
            "organisasi" => $this->organisasi,
        ]);
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
        return redirect('/home')->with('success', 'Profile Berhasil Diubah');
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

    // Buat nampilin data
    public function render()
    {
        // $bookings = Booking::where()->get();';
        $email = auth()->user()->email;
        $bookings = Booking::where('user_id', $email)->orderBy('id','DESC')->paginate(5);
        // $this->layanans = Layanan::all();
        // $data = Booking::g

        return view('livewire.booking-show', ['bookings' => $bookings]);
        // return view('livewire.booking-show', ['bookings' => $bookings], [$this->layanans]);
        // return view('livewire.booking-show', ['bookings' => $bookings]);
    }
}
