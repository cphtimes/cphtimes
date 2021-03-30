<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use App\Models\User;

class ArticleController extends Controller
{

    //////////////////////////////////////////////////////////////////////
    //PARA: Date Should In YYYY-MM-DD Format
    //RESULT FORMAT:
    // '%y Year %m Month %d Day %h Hours %i Minute %s Seconds'        =>  1 Year 3 Month 14 Day 11 Hours 49 Minute 36 Seconds
    // '%y Year %m Month %d Day'                                    =>  1 Year 3 Month 14 Days
    // '%m Month %d Day'                                            =>  3 Month 14 Day
    // '%d Day %h Hours'                                            =>  14 Day 11 Hours
    // '%d Day'                                                        =>  14 Days
    // '%h Hours %i Minute %s Seconds'                                =>  11 Hours 49 Minute 36 Seconds
    // '%i Minute %s Seconds'                                        =>  49 Minute 36 Seconds
    // '%h Hours                                                    =>  11 Hours
    // '%a Days                                                        =>  468 Days
    //////////////////////////////////////////////////////////////////////
    private function dateDifference($date_1 , $date_2 , $differenceFormat = '%a' )
    {
        $datetime1 = date_create($date_1);
        $datetime2 = date_create($date_2);
        $interval = date_diff($datetime1, $datetime2);
        return $interval->format($differenceFormat);
    }

    /**
     * Show the Homepage
     * @return \Illuminate\View\View
     */
    public function show($year, $month, $day, $topic, $title)
    {
      $now = date("Y-m-d h:i:sa");
      $dkLockdownDate = date("Y-m-d h:i:sa", mktime(20, 30, 0, 3, 11, 2020));
      $dateFormat = "%y year %m months %d days %h hours %i minutes %s seconds";
      $elapsedTimeSinceDKLockdown = $this->dateDifference(
        $now, $dkLockdownDate, $dateFormat
      );
      return view('article', [
        'year' => $year,
        'month' => $month,
        'day' => $day,
        'topic' => $topic,
        'title' => $title,
        'elapsedTimeSinceDKLockdown' => $elapsedTimeSinceDKLockdown
      ]);
    }
}
