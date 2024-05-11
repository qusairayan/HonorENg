<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use App\Models\WrokingHour;
use Livewire\Component;

class SettingController extends Component
{

    public $timeFromSat = '';
    public $timeToSat = '';
    public $offDaySat = '';


    public $timeFromSun = '';
    public $timeToSun = '';
    public $offDaySun = '';



    public $timeFromMon = '';
    public $timeToMon = '';
    public $offDayMon = '';


    public $timeFromTus = '';
    public $timeToTus = '';
    public $offDayTus = '';


    public $timeFromWed = '';
    public $timeToWed = '';
    public $offDayWed = '';


    public $timeFromThu = '';
    public $timeToThu = '';
    public $offDayThu = '';


    public $timeFromFri = '';
    public $timeToFri = '';
    public $offDayFri = '';


    public function mount()
    {

        $saturday = WrokingHour::where('day', 'saturday')->first();
        $sunday = WrokingHour::where('day', 'sunday')->first();
        $monday = WrokingHour::where('day', 'monday')->first();
        $tuseday = WrokingHour::where('day', 'tuseday')->first();
        $wednseday = WrokingHour::where('day', 'wednseday')->first();
        $thurseday = WrokingHour::where('day', 'thurseday')->first();
        $friday = WrokingHour::where('day', 'friday')->first();


        $this->timeFromSat=$saturday->time_from ?? '';
        $this->timeToSat=$saturday->time_to ?? '';
        $this->offDaySat=$saturday->off_day ?? '';


        $this->timeFromSun=$sunday->time_from ?? '';
        $this->timeToSun=$sunday->time_to ?? '';
        $this->offDaySun=$sunday->off_day ?? '';


        
        $this->timeFromMon=$monday->time_from ?? '';
        $this->timeToMon=$monday->time_to ?? '';
        $this->offDayMon=$monday->off_day ?? '';




        $this->timeFromTus=$tuseday->time_from ?? '';
        $this->timeToTus=$tuseday->time_to ?? '';
        $this->offDayTus=$tuseday->off_day ?? '';



        $this->timeFromWed=$wednseday->time_from ?? '';
        $this->timeToWed=$wednseday->time_to ?? '';
        $this->offDayWed=$wednseday->off_day ?? '';


        
        $this->timeFromThu=$thurseday->time_from ?? '';
        $this->timeToThu=$thurseday->time_to ?? '';
        $this->offDayThu=$thurseday->off_day ?? '';



        $this->timeFromFri=$friday->time_from ?? '';
        $this->timeToFri=$friday->time_to ?? '';
        $this->offDayFri=$friday->off_day ?? '';



    }


    public function render()
    {
        return view('livewire.admin.setting');
    }


    public function update()
    {
      


        WrokingHour::updateOrCreate(['day' => 'saturday'], ["time_from" => $this->timeFromSat, "time_to" => $this->timeToSat, "off_day" => $this->offDaySat]);
        WrokingHour::updateOrCreate(['day' => 'sunday'], ["time_from" => $this->timeFromSun, "time_to" => $this->timeToSun, "off_day" => $this->offDaySun]);
        WrokingHour::updateOrCreate(['day' => 'monday'], ["time_from" => $this->timeFromMon, "time_to" => $this->timeToMon, "off_day" => $this->offDayMon]);
        WrokingHour::updateOrCreate(['day' => 'tuseday'], ["time_from" => $this->timeFromTus, "time_to" => $this->timeToTus, "off_day" => $this->offDayTus]);
        WrokingHour::updateOrCreate(['day' => 'wednseday'], ["time_from" => $this->timeFromWed, "time_to" => $this->timeToWed, "off_day" => $this->offDayWed]);
        WrokingHour::updateOrCreate(['day' => 'thurseday'], ["time_from" => $this->timeFromThu, "time_to" => $this->timeToThu, "off_day" => $this->offDayThu]);
        WrokingHour::updateOrCreate(['day' => 'friday'], ["time_from" => $this->timeFromFri, "time_to" => $this->timeToFri, "off_day" => $this->offDayFri]);




        return redirect()->route('setting');
    }
}
