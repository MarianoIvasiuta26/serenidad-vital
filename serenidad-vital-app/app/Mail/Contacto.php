<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Contacto extends Mailable
{
    use Queueable, SerializesModels;

    public $userName, $userApellido, $userEmail, $userTelefono, $userMensaje;

    /**
     * Create a new message instance.
     */
    public function __construct($userName, $userApellido, $userEmail, $userTelefono, $userMensaje)
    {
        $this->userName = $userName;
        $this->userApellido = $userApellido;
        $this->userEmail = $userEmail;
        $this->userTelefono = $userTelefono;
        $this->userMensaje = $userMensaje;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contacto',
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

    public function build(){
        return $this->view('mails.email-contacto')
            ->with([
                'userName' => $this->userName,
                'userApellido' => $this->userApellido,
                'email' => $this->userEmail,
                'telefono' => $this->userTelefono,
                'mensaje' => $this->userMensaje
            ])
            ->subject("{$this->userName} {$this->userApellido} te ha enviado un mensaje desde el formulario de contacto de la web.");

    }
}
