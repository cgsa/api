<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactoController extends Controller
{
    /**
     * Return an json with all debts by user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function debtsComoPagoUser($documento, $tipoDocumento)
    {
        
        $userDeudor = DB::connection('mysqlcontacto')
        ->select('call comopago_sp01_deudas(:dni, :documento);', [
            'documento'=>$documento,
            'dni'=>$tipoDocumento
        ]);
        
        return response(['user'=>$userDeudor, 'documento'=>$documento]);
    }
}
