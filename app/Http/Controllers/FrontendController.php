<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{

    public function index()
    {
        $services = DB::table('services')->get();
        $screenshots = DB::table('screenshots')->get();
        $socials = DB::table('socials')->get();
        $designs = DB::table('designs')->get();
        foreach ($designs as $key => $design) {
            if ($key % 2 == 0) {
                $left[] = $design;
            } else {
                $right[] = $design;
            }
        }
        return view('welcome', compact('services', 'screenshots', 'socials', 'right', 'left'));
    }

    public function contact(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
        ]);
        Contact::create($data);

        session()->flash('success', 'Your message has been sent successfully');

        $this->bot("sendMessage", [
            'chat_id' => '-1001785671382',
            'text' => "<b>👨‍ F.I.SH: </b>" . $data['name'] . "\n" . "<b>📞 Tel: </b>" . $data['phone'],
            'parse_mode' => 'html'
        ]);

        return redirect()->back();
    }

    public function bot($method, $data = [], $token = '1490144262:AAEbR4gl_44_aPF3tqUkaLFvGvjveVqCAkc')
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/bot' . $token . '/' . $method);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($ch);
        return json_decode($res);

    }
}
