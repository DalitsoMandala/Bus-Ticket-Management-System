<?php

namespace App\Mail;

use Mccarlosen\LaravelMpdf\Facades\LaravelMpdf as PDF;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Support\Facades\Storage;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Contracts\Queue\ShouldQueue;


class BookingReceipt extends Mailable
{
    use Queueable, SerializesModels;
    public $filepath;
    public $data;
    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        //

        $this->data = $data;
        // $options = new Options();
        // $options->set('isRemoteEnabled', true);
        // $dompdf = new Dompdf($options);
        // $view = view('mail.booking-receipt', ['data' => $this->data])->render();
        // $dompdf->loadHtml($view);
        // // (Optional) Set paper size and orientation
        // $dompdf->setPaper('A4', 'portrait');

        // $dompdf->render();
        // $pdf = $dompdf->output();
        // $uniqueId = uniqid();
        // $this->filepath = 'public/invoices/invoice_'    . $uniqueId . '.pdf';
        // $filePath = Storage::put($this->filepath, $pdf);




        $pdf = new PDF();
        //   $view = view('mail.booking-receipt', ['data' => $this->data])->render();
        $pdf = PDF::loadView('mail.booking-receipt', ['data' => $this->data]);


        // (Optional) Set paper size and orientation
        $pdf = $pdf->output();
        $uniqueId = uniqid();
        $this->filepath = 'public/invoices/bus_ticket_receipt_'    . $uniqueId . '.pdf';
        $filePath = Storage::put($this->filepath, $pdf);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Booking Receipt',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.booking-receipt',
            with: [
                'data' => $this->data
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $path = Storage::path($this->filepath);
        return [
            Attachment::fromPath($path)
                ->withMime('application/pdf'),
        ];
    }
}
