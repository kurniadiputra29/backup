<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Payment;
use App\Model\Rental;
use App\Model\Item;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $payments = Payment::all();
        $rentals = Rental::all();
        $items = Item::all();
        return view('admin.rentals.index', compact('users', 'payments', 'rentals', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $payments = Payment::all();
        $rentals = Rental::all();
        $items = Item::all();
        return view('admin.rentals.create', compact('users', 'payments', 'rentals', 'items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Rental::create($request->all());
        return redirect('admin/rentals');
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
    public function edit($id)
    {
        $users = User::all();
        $payments = Payment::all();
        $rentals = Rental::find($id);
        $items = Item::all();
        return view('admin.rentals.edit', compact('users', 'payments', 'rentals', 'items'));
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
        Rental::find($id)->update($request->all());
        return redirect('admin/rentals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rental::find($id)->delete();
        return redirect('admin/rentals');
    }
}
