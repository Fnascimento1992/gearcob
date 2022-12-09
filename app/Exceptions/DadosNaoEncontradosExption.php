<?php
namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class DadosNaoEncontradosExption extends Exception
{
    public $message;

    public function ShowMessage()
    {
        
    }
}