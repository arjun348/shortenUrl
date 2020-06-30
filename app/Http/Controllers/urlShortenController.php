<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\urlShorten;
use App\visit;

class urlShortenController extends Controller
{
    public function short(Request $request){
        $exist_url = urlShorten::where('url', $request->url)->first();
        if($exist_url){
            $input = $exist_url;
            return view('urlView', compact('input'));
        }
        else{
            $shorted_left = base_convert(rand(100000, 9999999), 10, 36);
            $shorted_right = base_convert(rand(1000, 9999), 10, 36);
            $shorten_url = $shorted_left.'.'.$shorted_right;
            $input = new urlShorten;
            $input->url = $request->url;
            $input->shorten_url = $shorten_url;
            $input->visit = '0';
            $input->save();
            return view('urlView', compact('input'));
        }
    }

    public function redirect_short_link($link){
        $url = urlShorten::where('shorten_url', $link)->first();
        $visit_data = new visit;
        $visit_data->url_id = $url->id;
        $visit_data->visit_time = date('Y-m-d H:i:s');
        $visit_data->save();
        $visit = $url->visit;
        $visit++;
        urlShorten::where('shorten_url', $link)->update(['visit' => $visit]);
        return redirect($url->url);
    }

    public function view_all(){
        $all_list = urlShorten::all();
        return view('viewAll', compact('all_list'));
    }

    public function stats($id){
        $visit = visit::where('url_id', $id)->get();
        $total_visit = $visit->count();
        $url_details = urlShorten::where('id', $id)->first();
        $created_time = $url_details->created_at;
        $last_hour_visit_count = \DB::table('visit')->where('url_id', $id)->where('visit_time', '>=', \Carbon\Carbon::now()->subHour())->count();
        return view('stats', compact('total_visit', 'created_time', 'last_hour_visit_count'));
    }
}
