<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index () {
        $schedules = Schedule::paginate(10);
        return view('pages.schedule.index', compact('schedules'));
    }

    public function generateQrCode (Schedule $schedule) {
        return view('pages.schedule.input-qrcode')->with('schedule', $schedule);
    }

    public function generateQrCodeUpdate (Request $request, Schedule $schedule) {
        $request->validate([
            'code' => 'required',
        ]);

        $schedule->update([
            'scan_qrcode' => $request->code
        ]);

        $code = $request->code;

        return view('pages.schedule.show-qrcode', compact('code'))->with('Success', 'Code updated successfully');
        // $schedule = Schedule::where('id', $request->id)->first();

        // if ($schedule) {
        //     $schedule->update([
        //         'code' => $request->code,
        //     ]);
        //     return view('pages.schedule.input-qrcode', compact('schedule'))->with('Success', 'Code updated successfully');
        // } else {
        //     redirect()->route('pages.schedule.index')->with('error', 'Code not found');
        // }

        // return view('pages.schedule.input-qrcode')->with('schedule', $schedule););
    }
}
