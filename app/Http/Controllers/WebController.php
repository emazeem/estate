<?php

namespace App\Http\Controllers;

use App\Models\ConstructionUpdates;
use App\Models\Guide;
use App\Models\Location;
use App\Models\News;
use App\Models\ResidentialDev;
use App\Models\Service;
use App\Models\Settings;
use App\Models\Sliders;
use App\Models\Team;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class WebController extends Controller
{
    public function home(){
        $sliders=Sliders::all();
        $latestres=ResidentialDev::orderBy('created_at', 'desc')->first();
        $resids=ResidentialDev::all();
        $locations=Location::all();
        $news=News::all();
        return view('home',compact('sliders','resids','latestres','locations','news'));
    }
    public function services($id){
        $service=Service::find($id);
        return view('services',compact('service'));
    }
    public function team_detail($id){
        $team=Team::find($id);
        return view('single_team',compact('team'));
    }
    public function location($id){
        $loc=Location::find($id);
        return view('location',compact('loc'));
    }
    public function residential($id){
        $res=ResidentialDev::find($id);
        return view('residential',compact('res'));
    }
    public function residential_all(){
        $res=ResidentialDev::all();
        $locations=Location::all();
        return view('residentials',compact('res','locations'));
    }
    public function faq_all(){
        $faqs=Settings::where('page','faqs')->get();
        return view('faqs',compact('faqs'));
    }
    public function construction_updates(){
        $updates=ConstructionUpdates::all();
        $latest=ConstructionUpdates::orderBy('created_at','desc')->first();
        return view('construction_updates',compact('updates','latest'));
    }
    public function construction_update($id){
        $update=ConstructionUpdates::find($id);
        return view('construction_update',compact('update'));
    }


    public function all_guides(){
        $guides=Guide::all();
        return view('guides',compact('guides'));
    }
    public function guide($id){
        $guide=Guide::find($id);
        return view('guide',compact('guide'));
    }




    public function testimonials(){
        $testimonials=Testimonials::all();
        return view('testimonials',compact('testimonials'));
    }
    public function team(){
        $teams=Team::all();
        $teamcats=Team::all()->unique('category');
        return view('team',compact('teams','teamcats'));
    }
    public function contact_us(){
        $settings=Settings::where('page','contact-us')->get();
        return view('contact_us',compact('settings'));
    }
    public function privacy_policy(){
        $settings=Settings::where('page','policy')->get();
        return view('privacy',compact('settings'));
    }
    public function terms_and_conditions(){
        $settings=Settings::where('page','terms-and-conditions')->get();
        return view('tac',compact('settings'));
    }
    public function complaints(){
        $settings=Settings::where('page','complaints')->get();
        return view('complaints',compact('settings'));
    }
    public function news(){
        $news=News::all();
        $latest=News::orderBy('created_at', 'desc')->first();
        return view('news',compact('news','latest'));
    }
    public function contact_submit(Request $request){
        $mail = new PHPMailer(true);
        $mail->IsSMTP();
        $mail->SMTPDebug = 3;
        $mail->SMTPSecure = 'ssl';
        $mail->SMTPAutoTLS = false;
        $mail->Host = "mrddevelopers.com";
        $mail->SMTPAuth = true;
        $mail->Username = 'dm@mrddevelopers.com';
        $mail->Password = 'mrd@12378690';
        $mail->Port = 465;
        $mail->setFrom($request->email, $request->firstName.' '.$request->lastName);
        $mail->addAddress('dm@mrddevelopers.com', 'MRD DEVELOPERS');
        $mail->isHTML(true);
        $mail->Subject = $request->reasonForBuying;
        $mail->Body = '+92'.$request->phoneInitial.' '.$request->country;
        try {
            $mail->send();
            return redirect('thank-you');
        }
        catch (Exception $exception){
            dd($mail->ErrorInfo);
            return $mail->ErrorInfo;
        }

    }
    public function thank_you(){
        return view('thankyou');
    }
}
