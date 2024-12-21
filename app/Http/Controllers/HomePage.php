<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Email;
use App\Models\picture;

class HomePage extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function services()
    {
        return view('services');
    }

    public function about()
    {
        return view('about');
    }

    public function braidtip()
    {
        return view('braidtip');
    }

    public function contact()
    {
        return view('contact');
    }

    public function gallery()
    {
        $pictures = picture::all()->toArray();
        // dd($pictures);
        $total = picture::all()->count();
        if($total == 0){
            return view('admin.gallery', ['pictures'=>$pictures, 'total'=>$total]);
        }
        $elementsPerChunk = ceil($total / 4); // Round up to ensure we get at least one element per chunk
        $chunks = array_chunk($pictures, $elementsPerChunk);
        // dd($chunks);
        $pictures = picture::all();
        // dd($pictures);
        return view('gallery', ['pictures'=>$pictures,'chunks'=>$chunks,'total'=>$total]);
    }

    public function book()
    {
        return view('book');
    }
    public function save_book( Request $r)
    {
        $book = new Booking();
        $book->name = $r->name;
        $book->email = $r->email;
        $book->phone = $r->tel;
        $book->date = $r->date;
        $book->time = $r->time;
        $book->hair = $r->hair;
        $book->additional = $r->note;
        $book->save();
        return redirect()->back()->with('success', 'Booking Order Successfully sent !');
    }
    public function save_email(Request $r)
    {
        $email = new Email();
        $r->validate([
            'email' => 'required|email'
        ]);
        
        $email->email = $r->email;
        $email->save();
        return redirect()->back()->with('success', 'Email Successfully sent !');
    }
}

