<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\appointment;
use App\Models\appointment_querie;
use App\Models\enquirie;
use App\Models\feedbacks;
use App\Models\user_question;
use App\Models\mailcontact;
use Illuminate\Support\Facades\Session;
use App\Mail\contactmail;
use App\Mail\appointmentmail;
use Mail;

class basic_controller extends Controller
{
    public function index()
       {
          return view('index');
       }


       public function doc()
          {
             return view('find_mydoc');
          }
       
          public function Query()
          {
             return view('docquery');
          }
          public function medical()
          {
             return view('medical-service');
          }
          public function apoin()
          {
             return view('BookAppointment');
          }
       
          public function apoin_status()
          {
             return view('appoint');
          }
          public function about()
          {
             return view('about');
          }
          public function carrier()
          {
             return view('career');
          }
          public function contact()
          {
             return view('contact');
          }
          public function child()
          {
             return view('childdata');
          }
          public function specility()
          {
             return view('specilties');
          }
          public function kidney()
          {
          return view('kidney');
          }
          public function job()
          {
          return view('jobs');
          }
       
          public function brain(){
             return view('brain_tumor');
            }
            public function cadiology(){
             return view('caidology');
            }
       
            public function cardiac(){
             return view('Cardiac Surgery');
            }
       
            public function heart(){
             return view('heart attack');
            }
       
            public function live(){
             return view('LiveCancer');
            }
       
            public function lung(){
             return view('Lung Cancer');
            }
       
            public function nephro(){
             return view('Nephrology');
            }
       
            public function Neurology(){
             return view('Neurology');
            }
       
            public function Neurosurgery(){
             return view('Neurosurgery');
            }
       
            public function Ortho(){
             return view('Ortho');
            }
            public function Orthopadic(){
             return view('Orthopadic');
            }
            public function urinary(){
             return view('Uninary Problem');
            }
       
            public function hernia(){
             return view('heria');
            }
       
            public function environment(){
             return view('enviorment');
            }
   //          public function environmentone(){
   //  return view('enviorment', ['first']);
   //           }
            public function mission(){
             return view('about#mission');
            }
            public function envior_first(){
             return view('enviorment#first');
            }
            public function blog(){
             return view('enviorment_#blog');
            }
       
            public function Physicial_medici(){
             return view('Physical Mediacine & Rehabilitation');
       }
       
       

   public function apointbook(Request $appointment)
   {
      $appointment->validate([
         'name' => 'required',
         'email' => 'required',
         'age' => 'required',
         'phone' => 'required|min:10|max:10',
         'dates' => 'date|after_or_equal:today',
         //  'times'=>'required',
         'area' => 'required',
         'city' => 'required',
         'state' => 'required',
         'pincode' => 'required',
      ]);


      $appointments = new appointment;
      $appointments->name = $appointment['name'];
      $appointments->email = $appointment['email'];
      $appointments->age = $appointment['age'];
      $appointments->phone = $appointment['phone'];
      $appointments->dates = $appointment['dates'];
      $appointments->time = $appointment['times'];
      $appointments->area = $appointment['area'];
      $appointments->city = $appointment['city'];
      $appointments->state = $appointment['state'];
      $appointments->pincode = $appointment['pincode'];
      print_r($appointments->save());

      // print_r('success', 'Data saved successfully.');
      Session::flash('success', "Your Appiontment Booked  Successfully Check Your Mail ");
      mail::to(  $appointments->email)->send(new appointmentmail ($appointment));
      return redirect()->back();

   }


   public function main_enquiry(Request $query)
   {


      $this->validate($query, [
         'name' => 'required',
         'email' => ['required', 'string', 'email'],
         'mobile_num' => 'required|max :10 |min :10 ',
         'doc_name' => 'required|max :50',
         'query' => 'required|max: 395',

      ]);

      $enquiries = new enquirie;
      $enquiries->name = $query['name'];
      $enquiries->email = $query['email'];
      $enquiries->mobile_num = $query['mobile_num'];
      $enquiries->doc_name = $query['doc_name'];
      $enquiries->query = $query['query'];
      echo $enquiries->save();


      Session::flash('success', 'Your Request Submitted Successfully!');
      return redirect()->back();
   }



   public function feedback(Request $feedback)
   {

      $this->validate(
         $feedback,
         [
            'user_name' => 'required',
            'phone_num' => 'required',
            'mail' => 'required',
            'department' => 'required',
            'feedback' => 'required'
         ],
         [
            'name.required' => 'The name field is required.',
            'phone.required' => 'The phone number field is required.',
            'phone.min' => 'The phone number must be 10 digits.',
            'phone.max' => 'The phone number must be 10 digits.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'gender.required' => 'The gender field is required.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be 8 characters.',
            'password.max' => 'The password must be 8 characters.',
            'confirmPassword.required' => 'The confirm password field is required.',
            'confirmPassword.same' => 'The password and confirm password must match.',
         ]
      );
      // print_r($feedback->all());


      $feedbacks = new feedbacks;
      $feedbacks->name = $feedback['user_name'];
      $feedbacks->mobile_no = $feedback['phone_num'];
      $feedbacks->email = $feedback['mail'];
      $feedbacks->department = $feedback['department'];
      $feedbacks->feedback = $feedback['feedback'];
      $feedbacks->save();
      Session::flash('success', " Thank you ,Feedback submitted Successfully ");
      return redirect()->back();

   }
   public function appoint_enquiry(Request $apoint_query)
   {
      $this->validate($apoint_query, [
         'users_name' => 'required',
         'mail' => 'required|email',
         'mobile_number' => 'required|max :10|min:10',
         'difficulty' => 'required',
         'appoint_enquery' => 'required',
      ]);

      $appointment_queries = new appointment_querie;
      $appointment_queries->users_name = $apoint_query['users_name'];
      $appointment_queries->email = $apoint_query['mail'];
      $appointment_queries->mobile_number = $apoint_query['mobile_number'];
      $appointment_queries->difficulties = $apoint_query['difficulty'];
      $appointment_queries->description = $apoint_query['appoint_enquery'];
      $appointment_queries->save();

      // print_r($apoint_query->all());

      Session::flash('success', " Thank You  , Appointment Enquery Submitted Successfully ");
      return redirect()->back();
   }

   public function sub(Request $user){
    
      $user->validate([
           'fname'=>'required',
           'mail'=>'required | email',
           'num'=>'required | digits:10' ,
           'loc'=>'required',
           'hos'=>'required',
           'ask'=>'required'
        ]);  
        

        // echo "<pre>";
        // print_r( $user->all());
        // echo "</pre>";


$user_question= new user_question;
$user_question->fname=$user['fname'];
$user_question->mail=$user['mail'];
$user_question->num=$user['num'];
$user_question->loc=$user['loc'];
$user_question->hos=$user['hos'];
$user_question->ask=$user['ask'];
($user_question->save());

Session::flash('success', " Thank You , Your Question Submitted Successfully ");
return redirect()->back();

}


// Email

// public function gomail()
// {
//    $mailData= [

//       'title'=> 'Mail From Future Health',
//       'body' => 'its is for know you your appoinment is appoint successfully',

//    ];

//   Mail::to('bhupeshther5@gmail.com')->send(New DemoMail($mailData));

//    dd('Email send Successfully');
// }

// contact

public function data(Request $con)
{
   $con->validate([
      'name'=>'required',
      'email'=>'required | email',
      'subject'=>'required' ,
      'message'=>'required',
      
   ]);  
  
$mailcontacts= new mailcontact;
$mailcontacts->name=$con['name'];
$mailcontacts->email=$con['email'];
$mailcontacts->subject=$con['subject'];
$mailcontacts->message=$con['message'];
($mailcontacts->save());

mail::to('bhupeshther5@gmail.com')->send(new contactmail ($con));
Session::flash('success', " Thank You , Your message Submitted successfully");
return redirect()->back();
  
// return redirect()->back()
//                  ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);

}


// checkApponment





}
