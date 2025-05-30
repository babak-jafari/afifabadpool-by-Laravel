<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $number = $request->input('phone');

        // بررسی اعتبار شماره
        if (!$number || strlen($number) != 11 || !preg_match('/^09[0-9]{9}$/', $number)) {
            return back()->with('error', '❌ شماره تماس نامعتبر است.');
        }

        // بررسی اینکه آیا قبلاً ثبت شده یا نه
        if (NewsletterSubscriber::where('phone', $number)->exists()) {
            return back()->with('error', '❌ این شماره قبلاً ثبت شده است.');
        }

        // ذخیره شماره
        $saved = NewsletterSubscriber::create([
            'phone' => $number,
        ]);

        if ($saved) {
            return back()->with('success', '✅ عضویت با موفقیت انجام شد!');
        } else {
            return back()->with('error', '❌ خطا در ذخیره شماره!');
        }
    }
}
