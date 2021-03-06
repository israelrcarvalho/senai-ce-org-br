<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

use Validator;

class ContatoRequest extends FormRequest
{

    protected $rules = [
        'contato' =>
            [
                'cpf' => 'validar_cpf',
                'g-recaptcha-response' => 'required|captcha'
            ]
    ];


    public function rules()
    {
        Validator::extend('validar_cpf', function($attribute, $value, $parameters) {
            $cpf = str_pad ( preg_replace ( '/[^0-9]/', '', $value ), 11, '0', STR_PAD_LEFT );
            // Verifica se nenhuma das sequências abaixo foi digitada, caso seja, retorna falso
            if (strlen ( $cpf ) != 11 || $cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' ||
                $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' ||
                $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999') {
                return FALSE;
            } else { // Calcula os números para verificar se o CPF é verdadeiro
                for($t = 9; $t < 11; $t ++) {
                    for($d = 0, $c = 0; $c < $t; $c ++) {
                        $d += $cpf {$c} * (($t + 1) - $c);
                    }
                    $d = ((10 * $d) % 11) % 10;
                    if ($cpf {$c} != $d) {
                        return FALSE;
                    }
                }
                return TRUE;
            }
        });

        return $this->rules[substr($this->url(),strrpos($this->url(), '/') + 1)];
        // return $this->route('testexxx');
    }

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'cpf.validar_cpf' => 'CPF inválido.',
            'g-recaptcha-response.required' => 'selecione captcha',
        ];
    }

}
