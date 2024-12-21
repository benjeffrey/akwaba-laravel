<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

use App\Models\Booking;
use App\Models\booking_history;
use App\Models\Email;
use App\Models\picture;

class Admin extends Controller
{
    // function to make everything under auth
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $booking = Booking::latest()->paginate(3);
        // $booking = Booking::orderBy('created_at', 'desc')->first();
        $bookings = Booking::all()->count();
        $emails = Email::all()->count();
        return view('admin.dashboard',['bookings'=>$bookings, 'booking'=>$booking, 'emails'=>$emails]);
    }
    public function booking()
    {
        $booking = Booking::latest()->paginate(8);
        $total = Booking::all()->count();
        return view('admin.booking', ['booking'=>$booking,'total'=>$total]);
    }

    public function booking_action( Request $r, $id)
    {
        $currentRoute = Route::current()->uri();
        
        $temp_book = booking::find($id);
        $b = new booking_history();
        $b->name = $temp_book->name;
        $b->email = $temp_book->email;
        $b->phone = $temp_book->phone;
        $b->date = $temp_book->date;
        $b->haire = $temp_book->hair;
        $b->time = $temp_book->time;
        $b->additional = $temp_book->additional;

        if (str_contains($currentRoute, 'del')) {
            $b->status = "deleted";
            $b->save();
            $booking = Booking::find($id)->delete();
            $message = 
            '<div id="alert-3" class="flex items-center p-4 text-red-800 rounded-lg bg-red-50 w-10/12 mx-auto my-4" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Success</span>
                <div class="ms-3 text-sm font-medium">Booking Deleted Successfully</div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
            ';
        }
        
        if (str_contains($currentRoute, 'app')) {
            $b->status = "approved";
            $b->save();
            $booking = Booking::find($id)->delete();
            $message = 
            '<div id="alert-3" class="flex items-center p-4 text-green-800 rounded-lg bg-green-50 w-10/12 mx-auto my-4" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Success</span>
                <div class="ms-3 text-sm font-medium">Booking Approved Successfully</div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
            ';
        }
        return redirect()->back()->with('success', $message);
    }

    public function email()
    {
        $emails = Email::latest()->paginate(8);
        $total = Email::all()->count();
        return view('admin.email', ['emails'=>$emails,'total'=>$total]);
    }
    public function delete_email($id)
    {
        $email = Email::find($id);
        $email->delete();
        return redirect()->back()->with('success', 'Email deleted successfully');
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
        return view('admin.gallery', ['pictures'=>$pictures,'chunks'=>$chunks,'total'=>$total]);
    }
    public function delete_gallery($id)
    {
        $picture = Picture::find($id);
        // dd($picture);
        // dd($id);
        // First check if the image file exists and delete it
        if ($picture && file_exists(public_path('uploads/' . $picture->image))) {
            unlink(public_path('uploads/' . $picture->name));
        }
        
        // Then delete the database record
        $picture->delete();
        
        return redirect()->back()->with('success',
        '<div id="alert-3" class="flex items-center p-4 text-red-800 rounded-lg bg-red-50 w-10/12 mx-auto my-4" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Success</span>
            <div class="ms-3 text-sm font-medium">Picture deleted successfully</div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>'
        );
    }
    
    public function save_gallery(Request $r)
    {
        //validation 
        $r->validate([
            'files.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:10000' // 2MB max
        ]);

        if($r->hasFile('files')){
            $images = $r->file('files');
            $uploaded = [];
            $skipped = [];
            
            foreach($images as $image){
                $imageName = $image->getClientOriginalName();
                // Check if image already exists
                $exists = Picture::where('name', $imageName)->first();
                // dd($exists);
                if($exists == null){
                    // $path = $image->storeAs('public/uploads',$imageName);
                    $path = $image->move('uploads', $imageName);
                    if($path){
                        // Save to database
                        $picture = new Picture(); // Note: Model name should be Picture (capitalized)
                        $picture->name = $imageName;
                        $picture->save();
                        $uploaded[] = $imageName;
                    }
                }else{
                    $skipped[] = $imageName;
                }
            }
            if($skipped){
                // $skipped = implode(', ', $skipped);
                $total = count($skipped);
                $uploads_count = count($uploaded);
                return redirect()->back()->with('warning', 
                '<span class="text-red-800"> Skipped uploads: '.$total.' (already uploaded)!</span><br><span class="text-green-800">successfully uploaded: '.$uploads_count.'</span>');
            }
            if(empty($uploaded)){
                return redirect()->back()->with('errorr', 'Sorry, something went wrong');
            }
            // $image = $r->image->store('images', $filename);
            // dd($images);

            $pictures = picture::all()->toArray();
            // dd($pictures);
            $total = picture::all()->count();

            $elementsPerChunk = ceil($total / 4); // Round up to ensure we get at least one element per chunk
            $chunks = array_chunk($pictures, $elementsPerChunk);
            // dd($chunks);
            $pictures = picture::all();
            
            return view('admin.gallery', ['pictures'=>$pictures,'chunks'=>$chunks,'total'=>$total]);
        }
        else{
            return redirect()
            ->route('admin.gallery')
            ->with('error', 
            '<div id="alert-3" class="flex items-center p-4 text-red-800 rounded-lg bg-red-50 w-10/12 mx-auto my-4" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Success</span>
            <div class="ms-3 text-sm font-medium">Error, please select some images</div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
            ');
        }
    }

    public function booking_history()
    {
        $books = Booking_history::latest()->paginate(8);
        $total = Booking_history::all()->count();
        return view('admin.Booking_history', ['books'=>$books,'total'=>$total]);
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
