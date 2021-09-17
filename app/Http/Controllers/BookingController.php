<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Book;
use App\Models\Customer;
use Carbon\Carbon;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bookings=Book::get();
        $customers=Customer::get();
        return view('booking',compact('bookings','customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
// dd($request);
        $date = Carbon::parse($request->from_date);
        $now = Carbon::parse($request->to_date);
        $days = $date->diffInDays($request->to_date);
        $data = [
           'entry_date'=>$request->entry_date,
           'customer_id'=>$request->customer,
           'book_id'=>$request->book,
           'from_date'=>$request->from_date,
           'to_date'=>$request->to_date,
           'no_of_days'=>$days,
           'rent'=>$request->rent,
           'totalrent'=>$request->totalrent,
        ];
           $result=Booking::create($data);
           return redirect()->back()->with('success','done');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $bbokingDataooking)
    {
        $ShowData = Booking::with('Book','Customer')->get();
        // dd($ShowData);
        return view('viewtable',compact('ShowData'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking, $id)
    {
       $books=Book::get();
       $customers=Customer::get();
       $updatelibrarydata=Booking::find($id);
       return view('edit', compact('updatelibrarydata','books','customers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        $updatelibrarydata = Booking::find($request->id);
        $updatelibrarydata->customer_id=$request->name;
        $updatelibrarydata->book_id=$request->book;
        $updatelibrarydata->entry_date=$request->entry_date;
        $updatelibrarydata->from_date=$request->from_date;
        $updatelibrarydata->to_date=$request->to_date;
        $updatelibrarydata->no_of_days=$request->days;
        $updatelibrarydata->rent=$request->rent;
        $updatelibrarydata->totalrent=$request->renttotal;
        $updatelibrarydata->Update();
        return redirect()->route('showLibraryData');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $library = Booking::find($id);
        $library->delete();
        return redirect()->route('showLibraryData');

    }
}
