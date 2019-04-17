<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use Mail;
use App\Mail\Email;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Ticket = Ticket::all();

        return view('tickets/tickets')->with('Ticket', $Ticket);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/Tickets/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'Title' => 'required',
            'Content' => 'required',
        ]);

        $Ticket = new ticket;
        $Ticket->title = $request->input('Title');
        $Ticket->content = $request->input('Content');
        $Ticket->slug = uniqid();
        $Ticket->save();

        $TicketData = array(
            'Slug' => $Ticket->slug,
        );

        Mail::send(new Email($TicketData));
        return redirect('/Tickets/create')->with('Status', 'Your ticket has been created! Its unique id is: ' . $Ticket->slug);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Ticket = Ticket::whereSlug($id)->first();
        return view('tickets/show')->with('Ticket', $Ticket);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Ticket = Ticket::whereSlug($id)->first();
        return view('tickets/edit')->with('Ticket', $Ticket);
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
        $this->validate($request, [
            'Title' => 'required',
            'Content' => 'required',
        ]);

        $Ticket = Ticket::whereSlug($id)->first();
        $Ticket->title = $request->input('Title');
        $Ticket->content = $request->input('Content');
        if($request->input('Status') != null){
            $Ticket->status = '0';
        } else {
            $Ticket->status = '1';
        }
        $Ticket->save();
        return redirect('/Tickets/'.$id.'/edit')->with('Status', 'Ticket has been updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Ticket = Ticket::whereSlug($id)->first();
        $Ticket->delete();
        return redirect('/Tickets')->with('Status', 'Ticket has been deleted!');
    }
}
