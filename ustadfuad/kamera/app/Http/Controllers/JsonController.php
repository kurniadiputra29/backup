<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Model\Payment;
use Form;

class JsonController extends Controller
{
    private $uri3 = 'payments';

    public function payment()
    {       
        $data = Payment::select(['id', 'name', 'created_at']);
        return Datatables::of($data)
            ->addColumn('action', function ($payment) {
                $tag = Form::open(array("url" => route($this->uri3.'.destroy',$payment->id), "method" => "DELETE"));
                $tag .= "<a href=".route($this->uri3.'.edit',$payment->id)." class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i> Edit</a>";
                $tag .= " <button type='submit' class='delete btn btn-danger btn-xs'><i class='fa fa-trash'></i> Delete</button>";
                $tag .= Form::close();
                return $tag;
            })
            ->make(true);    
    }
}
