<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Basic;
use App\Notifysetting;
use Auth;

class BackBasicsController extends Controller
{
  public function edit()
  {
    $info = Basic::find(1);

    return view('back-end.basic', [
      'info' => $info
    ]);
  }

  public function update(Request $request)
  {

    if (Auth::check()) {

      request()->validate([
        'name' => 'required|min:3',
        'contact_no' => 'required|min:5',
        'phone' => 'required',
        'logo' => 'image'
      ]);

      $folder = "image/manufacturer_logo/";

      if ($logo = $request->file('logo')) {
        if (file_exists($request->preLogo)) {
          unlink($request->preLogo);
        }
        $ext = $logo->extension();
        $logo_name = "logo." . $ext;
        $logo_url = $folder . $logo_name;
        $logo->move($folder, $logo_name);
      } else {
        $logo_url = $request->preLogo;
      }

      $info = Basic::find(1);
      $info->name = $request->name;
      $info->contact_no = $request->contact_no;
      // $info->phone = $request->phone;

      $info->logo = $logo_url;

      $info->save();

      return back()->with('msg-success', 'Success!! Info updated successfully.');
    }
    return back()->with('msg-error', 'Opps!! Something wrong, please try again.');
  }

  public function delivery_edit()
  {
    $info = Basic::find(1);

    return view('back-end.delivery', [
      'info' => $info
    ]);
  }

  public function delivery_update(Request $request)
  {
    if (Auth::check()) {
      request()->validate([
        'delivery_cost1' => 'required|numeric',
        'delivery_cost2' => 'required|numeric'
      ]);

      $info = Basic::find(1);
      $info->delivery_cost1 = $request->delivery_cost1;
      $info->delivery_cost2 = $request->delivery_cost2;
      $info->inside_details = $request->inside_details;
      $info->outside_details = $request->outside_details;

      $info->save();

      return back()->with('msg-success', 'Success!! Info updated successfully.');
    }
    return back()->with('msg-error', 'Opps!! Something wrong, please try again.');
  }

  public function code_edit()
  {
    $info = Basic::find(1);

    return view('back-end.code', [
      'info' => $info
    ]);
  }

  public function code_update(Request $request)
  {
    if (Auth::check()) {
      $info = Basic::find(1);
      $info->header_code = $request->header_code;
      $info->footer_code = $request->footer_code;

      $info->save();

      return back()->with('msg-success', 'Success!! Code updated successfully.');
    }
    return back()->with('msg-error', 'Opps!! Something wrong, please try again.');
  }
  public function mail_edit()
  {
    $info = Notifysetting::latest()->first();
    //dd($info);
    return view('back-end.emailsetting', [
      'info' => $info
    ]);
  }

  public function mail_update(Request $request)
  {

    if (Auth::check()) {
      request()->validate([
        'admin_mail' => 'sometimes|nullable|email'
      ]);
      $notify_customer = 0;
      $notify_admin = 0;
      if ($request->has('notify_customer')) {
        $notify_customer = 1;
      }
      if ($request->has('notify_admin')) {
        $notify_admin = 1;
      }
      $info = Notifysetting::latest()->first();

      if ($info) {
        $info->notify_customer = $notify_customer;
        $info->notify_admin = $notify_admin;
        $info->admin_mail = $request->admin_mail;
        $info->mail_driver = $request->mail_driver;
        $info->mail_host = $request->mail_host;
        $info->mail_port = $request->mail_port;
        $info->mail_username = $request->mail_username;
        $info->mail_password = $request->mail_password;
        $info->mail_encryption = $request->mail_encryption;
        $info->mail_from_address = $request->mail_from_address;
        $info->mail_from_name = $request->mail_from_name;
      } else {
        $info = new Notifysetting();

        $info->notify_customer = $notify_customer;
        $info->notify_admin = $notify_admin;
        $info->admin_mail = $request->admin_mail;
        $info->mail_driver = $request->mail_driver;
        $info->mail_host = $request->mail_host;
        $info->mail_port = $request->mail_port;
        $info->mail_username = $request->mail_username;
        $info->mail_password = $request->mail_password;
        $info->mail_encryption = $request->mail_encryption;
        $info->mail_from_address = $request->mail_from_address;
        $info->mail_from_name = $request->mail_from_name;
      }
      $info->save();

      return back()->with('msg-success', 'Success!! Settings updated successfully.');
    }
    return back()->with('msg-error', 'Opps!! Something wrong, please try again.');
  }
}
