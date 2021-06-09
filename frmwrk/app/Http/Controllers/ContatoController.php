<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContatoRequest;
use Illuminate\Http\Request;
use Mail;

class ContatoController extends BaseController
{

    protected $path = 'contato';
    protected $menuprincipal = 5;


    /**
     * chama a página Contato
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contato()
    {
        return view($this->path . '.contato');
    }

//
//    public function sendContato(ContatoRequest $request)
   public function sendContato(Request $request)
    {

        $data = $request->all();

        $config_mail = [
            'fale_conosco_mail_from' => env('FALE_CONOSCO_MAIL_FROM'),
            'fale_conosco_mail_nome_from'=> env('FALE_CONOSCO_MAIL_NOME_FROM'),
            'fale_conosco_mail_to'=>env('FALE_CONOSCO_MAIL_TO'),
            'fale_conosco_mail_nome_to'=> env('FALE_CONOSCO_MAIL_NOME_TO'),
            'fale_conosco_mail_subject'=>env('FALE_CONOSCO_MAIL_SUBJECT'),
            'fale_conosco_mail_replayTo'=>env('FALE_CONOSCO_MAIL_REPLAY_TO')
        ];

        Mail::send($this->path . ".contato-template",  ["input" => $data], function ($mail) use ($data, $config_mail) {

            $mail->from($config_mail['fale_conosco_mail_from'], $config_mail['fale_conosco_mail_nome_from']);
            $mail->to($config_mail['fale_conosco_mail_to'], $config_mail['fale_conosco_mail_nome_to']);
            $mail->subject($config_mail['fale_conosco_mail_subject']);
            $mail->replyTo($config_mail['fale_conosco_mail_replayTo'], $data['nome']);

            if(array_key_exists('email_copia',$data)){

                $mail->bcc($data['email'], $config_mail['fale_conosco_mail_nome_to']);
                $mail->subject($config_mail['fale_conosco_mail_subject']);
            }
        });


        if (Mail::failures()) {

            return 'Não foi possível enviar a mensagem';
        }

        return "Enviado com sucesso!";

    }

}
