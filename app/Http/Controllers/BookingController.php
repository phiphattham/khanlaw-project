<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Booking;
use App\Models\Customer;
use App\Models\room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function index()
    {
        $content = [
            'subject' => 'Test Subject',
            'body' => 'test bodyyyyyyyyyy',
        ];

        Mail::to('jakkapatintarat92@gmail.com')->send(new SendMail($content));

        return 'Email sent';
    }

    public function booking(Request $request, $id)
    {
        // dd($request);
        $userId = Auth::user()->id;

        $booking = new Booking();

        $booking->user_id = $userId;
        $booking->room_id = $id;
        $booking->check_in = $request->check_in;
        $booking->check_out = $request->check_out;
        $booking->amount = $request->amount;
        $booking->total = $request->total;

        $booking->save();

        $room = room::find($id);
        return view('page.room.booking.check-out', ['booking_data' => $booking, 'room_data' => $room]);
    }

    public function customercheck(Request $request, $booking_id)
    {
        // $customer = new Customer();

        // $customer->f_name = $request->f_name;
        // $customer->l_name = $request->l_name;
        // $customer->tel = $request->tel;
        // $customer->email = $request->email;
        // $customer->identity_number = $request->identity_number;
        // $customer->booking_id = $booking_id;
        // $customer->save();

        // $booking = Booking::with('room')->with('user')->find($booking_id);

        // // ส่งผลสรุปไปที่หน้า result
        // return view('page.room.booking.result', ['customer' => $customer, 'booking' => $booking]);

        $haveBooking = Customer::where('booking_id', $booking_id)->latest()->first();
        // dd($haveBooking);
        if (!$haveBooking) {
            $customer = new Customer();
            $customer->f_name = $request->f_name;
            $customer->l_name = $request->l_name;
            $customer->tel = $request->tel;
            $customer->email = $request->email;
            $customer->identity_number = $request->identity_number;
            $customer->booking_id = $booking_id;
            $customer->save();

            $booking = Booking::with('room')->with('user')->find($booking_id);

            // ส่งผลสรุปไปที่หน้า result
            return view('page.room.booking.result', ['customer' => $customer, 'booking' => $booking]);
        } else {
            $booking = Booking::with('room')->with('user')->find($booking_id);
            return view('page.room.booking.result', ['customer'=> $haveBooking, 'booking' => $booking]);
        }
    }

    // เมื่อหน้า result กดยืนยันจะต้องส่งเมล์ไปหาอีเมล์ที่กรอกเข้ามา
    public function sendemail(Request $request)
    {
        // dd($request);
        $booking_id = $request->booking_id;
        $customer_id = $request->customer_id;
        // สรุปผล ยืนยัน -> ส่งเมล์ -> history
        $booking = Booking::with('room')->with('user')->find($booking_id);
        $customer = Customer::with('booking')->find($customer_id);
        $email = $request->email;
        dd($customer->email);

        // ส่งอีเมล์
        // $content = [
        //     'subject' => 'Test Subject',
        //     'body' => 'test bodyyyyyyyyyy',
        // ];

        // Mail::to('jakkapatintarat92@gmail.com')->send(new SendMail($content));

        // return 'Email sent';
        // หน้าสรุปผล มียืนยัน แก้ไข->back
    }


    public function history()
    {
        $userId = Auth::user()->id;
        $booking = Booking::where('user_id', $userId)->get();

        return view('page.booking-history', ['booking' => $booking,]);
    }
}
