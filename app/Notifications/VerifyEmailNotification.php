<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\VerifyEmail as VerifyEmailBase;
use Illuminate\Notifications\Messages\MailMessage;

class VerifyEmailNotification extends VerifyEmailBase
{
    public function toMail($notifiable)
    {
        $url = $this->verificationUrl($notifiable);

        return (new MailMessage)
            ->subject('Vérifiez votre adresse email')
            ->view('emails.verify-email', [
                'url' => $url,
                'prenom' => $notifiable->prenom ?? $notifiable->name,
            ]);
    }
}