<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use Form;
use App\Model\Status;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Forms\StatusForm;

class StatusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function json_status(){
        $statuses = Status::all();

        return DataTables::of($statuses)
        ->addColumn('action', function ($status) {
            return '<form action="'. route('status.destroy', $status->id) .'" method="POST" class="text-center">
            <a href="' . route('status.edit', $status->id) . '" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>Edit</a>
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="'. csrf_token() .'">
            <button type="submit" class="btn btn-xs btn-danger btn-label" onclick="javascript:return confirm(\'Apakah anda yakin ingin menghapus data ini?\')"><i class="fa fa-trash"></i>
            Hapus</button>
            </form>
            ';
        })
        ->make(true);
    }

    public function index()
    {
        return view('status.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(StatusForm::class, [
            'method' => 'POST',
            'url' => route('status.store')
        ]);
        return view('status.create', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diisi !!!'
        ];
        $this->validate($request,[
            'name' => 'required'
        ],$messages);
        Status::create($request->all());
        return redirect('/admin/status')->with('Success', 'Data anda telah berhasil di input !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(FormBuilder $formBuilder, $id)
    {
        $statuses = Status::find($id);
        $form = $formBuilder->create(StatusForm::class, [
            'method' => 'PUT',
            'model' => $statuses,
            'url' => route('status.update', $id)
        ]);
        return view('status.create', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $messages = [
            'required' => ':attribute wajib diisi !!!'
        ];
        $this->validate($request,[
            'name' => 'required',
        ],$messages);
        $data = Status::find($id);

        $data->update($request->all());
        return redirect('/admin/status')->with('Success', 'Data anda telah berhasil di edit !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('/admin/status')->with('Success', 'Data anda telah berhasil di hapus !');
    }
}
