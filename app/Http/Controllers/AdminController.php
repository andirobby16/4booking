<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Booking;
use WithPagination;
// use App\Http\Controllers\Auth;
// use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;

use App\Mail\kirimEmail;
use App\Mail\JadwalDiTolak;

class AdminController extends Controller
{
    public $email;
    protected $paginationTheme = 'bootstrap';
    // public $status;

    public function viewListBooking(){

        // $listbookings = DB::table('booking')->get();
        // $listbookings = Booking::all();
        // $listbookings = Booking::paginate(10);

        // return view('admin.listbooking', ['listbookings' => $listbookings]);
        return view('admin.listbooking');
    }

    // Funciton buat tombol diterima
    public function approve($id){
        $data = Booking::find($id);

        $data->status="Disetujui";

        $data->save();
        
        $nama       = $data->nama_lengkap;
        $organisasi = $data->nama_organisasi;
        $judul      = $data->judul_acara;
        $jenis      = $data->jenis_acara;
        $jumlah     = $data->jumlah_peserta;
        $tglmulai   = $data->tgl_mulai->format('d M Y');
        $tglselesai = $data->tgl_selesai->format('d M Y');
        $deskripsi  = $data->deskripsi;
        Mail::to($data->user_id)
            ->send(new kirimEmail($nama, $organisasi, $judul, $jenis, $jumlah, $tglmulai, $tglselesai, $deskripsi));

        // Mail::to('tes@gmail.com')->send(new kirimEmail());
        return redirect()->back();
    }

    // Funciton buat tombol cancel
    public function canceled($id){
        $data = Booking::find($id);

        $data->status="Ditolak";

        $data->save();
        $nama       = $data->nama_lengkap;
        Mail::to($data->user_id)
        ->send(new JadwalDiTolak($nama));
        
        // Mail::to('tes@gmail.com')->send(new JadwalDiTolak());
        return redirect()->back();
    }

    public function detail(int $id){

        $data = Booking::find($id);

        if($data){
            $this->nama_lengkap = $data->nama_lengkap;
            // $this->nama_layanan = Layanan::all();
        }
        else{
            return redirect()->to('/admin/listbooking');
        }
        // $data = Booking::find($id);
        // return view('admin.')

    }

    // public function viewCreateLayanan(){

    //     // $listbookings = DB::table('booking')->get();
    //     $listbookings = Booking::all();

    //     return view('admin.createlayanan', ['listbookings' => $listbookings]);
    // }
}
