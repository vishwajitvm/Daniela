<?php namespace TelasSantoAntonio\Contact;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {

        return [

            'TelasSantoAntonio\Contact\Components\ContactForm' => 'ContactForm',

        ];

    }

    public function registerSettings()
    {
    }
}
