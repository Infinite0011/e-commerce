<?php

namespace App\Http\Livewire;

use Twilio\Rest\Client;
use Livewire\Component;
use App\Models\User;

class TwoFactorVerifyPage extends Component
{
    public $code = null;
    public $error;

    public function mount()
    {
        $this->sendCode();
    }

    public function sendCode()
    {
        $user = auth()->user();
        $phone = $user->phone ? $user->phone : '';
        try {
            $twilio = $this->connect();
            $verification = $twilio->verify
                ->v2
                ->services(config('twilio.verification_sid'))
                ->verifications
                ->create($phone, "sms");

            if ($verification->status === "pending") {
                session()->flash('message', 'OTP sent successfully');
            }
        } catch (\Exception $e) {
            $this->error = $e->getMessage();
        }
    }

    public function verifyCode()
    {
        $twilio = $this->connect();
        $user = auth()->user();
        $phone = $user->phone ? $user->phone : '';
        try {

            $check_code = $twilio->verify
                ->v2
                ->services(config('twilio.verification_sid'))
                ->verificationChecks
                ->create(
                    [
                        "to" => $phone,
                        "code" => $this->code
                    ]
                );
            if ($check_code->valid === true) {
                User::where('id', $user->id)
                    ->update([
                        'phone_verified' => $check_code->valid
                    ]);

                    return Redirect("/");
            } else {
                session()->flash('error', 'Verification failed, Invalid code.');
            }
        } catch (\Exception $e) {
            $this->error = $e->getMessage();
            session()->flash('error', $this->error);
        }
    }

    public function connect()
    {
        $sid = config('twilio.sid');
        $token = config('twilio.token');
        $twilio = new Client($sid, $token);
        return $twilio;
    }

    public function render()
    {
        return view('livewire.two-factor-verify');
    }
}
