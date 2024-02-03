<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SolicitarTurno extends Mailable
{
    use Queueable, SerializesModels;

    public $name, $apellido, $email, $telefono, $tipoConsulta;

    /**
     * Create a new message instance.
     */
    public function __construct($name, $apellido, $email, $telefono, $tipoConsulta)
    {
        $this->name = $name;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->tipoConsulta = $tipoConsulta;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Solicitar Turno',
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
        return $this->view('mails.email-turno')
            ->with([
                'name' => $this->name,
                'apellido' => $this->apellido,
                'email' => $this->email,
                'telefono' => $this->telefono,
                'tipoConsulta' => $this->tipoConsulta
            ])
            ->subject("¡{$this->name} {$this->apellido} te ha enviado un mensaje desde el formulario para solicitar un turno!");

    }
}
