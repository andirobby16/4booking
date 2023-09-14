<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class kirimEmail extends Mailable
{
    use Queueable, SerializesModels;
 
    public $nama, $organisasi, $judul, $jenis, $jumlah, $tglmulai, $tglselesai, $deskripsi;

    /**
     * Create a new message instance.
     */
    public function __construct($nama, $organisasi, $judul, $jenis, $jumlah, $tglmulai, $tglselesai, $deskripsi)
    {
        $this->nama = $nama;
        $this->organisasi = $organisasi;
        $this->judul = $judul;
        $this->jenis = $jenis;
        $this->jumlah = $jumlah;
        $this->tglmulai = $tglmulai;
        $this->tglselesai = $tglselesai;
        $this->deskripsi = $deskripsi;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Informasi Jadwal Booking di 4Booking',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'email.terima',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
