<?php namespace TelasSantoAntonio\Contact\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Config;

class ContactForm extends ComponentBase {

    public function componentDetails(){

        return [

            'name' => 'Contact Form',

            'description' => 'Simple Contact Form'

        ];

    }

    public function onSend(){

        $vars = [
            'name' => Input::get('name'), 
            'email' => Input::get('email'), 
            'phone' => Input::get('phone'), 
            'content' => Input::get('content'),
            'baseUrl' => Config::get('app.url')
        ];

        $url = $_SERVER['REQUEST_URI'];

        if ($url == '/orcamento') {

            Mail::send('telassantoantonio.contact::mail.message', $vars, function($message) {

                $message->to('comercial@telassantoantonio.com.br', 'Admin Person');
                $message->subject('Orçamento');

            });

            Mail::send('telassantoantonio.contact::mail.reply', $vars, function($message) {

                $message->to(Input::get('email'));
                $message->subject('Agradecemos o contato!');

            });


        } else {

            Mail::send('telassantoantonio.contact::mail.message', $vars, function($message) {

                $message->to('comercial@telassantoantonio.com.br', 'Admin Person');
                $message->subject('Contato');

            });
    
            Mail::send('telassantoantonio.contact::mail.reply', $vars, function($message) {

                $message->to(Input::get('email'));
                $message->subject('Agradecemos o contato!');

            });

            return [
                'message' => 'E-mail enviado com sucesso!',
            ];

        }

    }

}