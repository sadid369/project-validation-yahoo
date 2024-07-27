<?php

namespace App\Http\Requests;

use App\Rules\Uppercase;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */

     //give the validation rule
    public function rules(): array
    {
        return [
            // here custom validation rules apply
            "username"=>['required', new Uppercase],
            "useremail"=>'required|email',
            "userage"=>'required | numeric |min:18',
            "userpassword"=>'required | min:6',
            "usercity"=>'required'
            // "userpassword"=>'required | alpha_num |min:6',
            // "userage"=>'required | numeric | min:18 | max:65',
        ];
    }
    //  make custom message for validation
    public  function messages()  {
        return [
            "username.required"=>':attribute  দিতে হবে',
             "userpassword.min"=>":attribute  অবশ্যই ছয় অক্ষরের বেশি হতে হবে",
             "userage.min"=>"'বয়স আঠারো বছর হতে হবে'"
        ];
    }
  //change the actual "name" of text from field to My own given name
    public function attributes()
    {
       return [
        "useremail" => "Email Address",
        "username" => "User Name",
        "userage" => "User Age",
        "userpassword" => "Password",
       ];
    }
   //make the incoming from filed data change like make upper case etc. 
    protected function prepareForValidation():void
    {
        $this->merge(
            [
                // "username" => strtoupper($this->username),
                // "username" => Str::slug($this->username),
            ]
        );
    }
   // to prevent show all error messages on from field
    // protected $stopOnFirstFailure = true;
}
