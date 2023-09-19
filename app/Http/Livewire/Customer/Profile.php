<?php

namespace App\Http\Livewire\Customer;

use App\Models\User;
use Livewire\Component;
use App\Models\Customer;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Profile extends Component
{

    use LivewireAlert;
    use WithFileUploads;

    # ---------------------------------------------------------------------------- #
    #                       Livewire properties / models here                      #
    # ---------------------------------------------------------------------------- #
    public $name;
    public $edit; // id of table
    public $showingModalProfile;
    public $button = "SUBMIT";
    public $status;
    public $profile_picture, $first_name, $last_name, $phone_number, $email, $home_address, $birth_date, $gender, $facebook_link, $twitter_link, $instagram_link;
    public $image;
    public $tab = 1;
    public $facebook, $instagram, $twitter, $new_password, $old_password, $new_password_confirmation;
    # ---------------------------------------------------------------------------- #
    #                            Livewire listeners here                           #
    # ---------------------------------------------------------------------------- #

    protected $listeners = [

        'resetdata' => 'resetdata',
        'edit' => 'edit',
        'delete' => 'delete',
        'destroy' => 'destroy',
        'destroyAll' => 'destroyAll',
        'activatemodal' => 'activatemodal',
        'deactivatemodal' => 'deactivatemodal',
        'activate' => 'activate',
        'deactivate' => 'deactivate',
        'hideModal' => 'hideModal',
        'showModal' => 'showModal',
        'change' => 'change',
        'deleteMultiple' => 'deleteMultiple',
        'changeMessage' => 'changeMessage',
        'confirm_request' => 'confirm_request',
        'clearUp' => 'clearUp',
        'refresh' => '$refresh',
        'data' => 'data',
    ];

    # ---------------------------------------------------------------------------- #
    #                              Livewire rules here                             #
    # ---------------------------------------------------------------------------- #



    public function updatedProfilePicture($value)
    {

        $this->validate([
            'profile_picture'  =>   'nullable|mimes:jpeg,jpg,png'
        ]);
        $cover_name = time() . '_' . $this->profile_picture->getClientOriginalName();

        $this->profile_picture->storeAs('profile_pictures', $cover_name, 'public');

        Customer::find(auth()->user()->customers->first()->id)->update([
            'profile_picture' => $cover_name
        ]);

        $this->image = $cover_name;

        $this->emitTo('customer.pic-component', 'changeImage');
    }
    public function updated($fields)
    {
        // $this->validateOnly($fields);


    }


    public function clearUp()
    {
    }

    public function updatedTab($value)
    {
    }

    # ---------------------------------------------------------------------------- #
    #                       Livewire Modals & Reset Data here                      #
    # ---------------------------------------------------------------------------- #
    public function resetdata()
    {

        $this->reset();
        $this->resetValidation();
    }


    public function showModal()
    {

        $this->showingModalProfile = true;
        if ($this->edit) {
            $this->button = 'UPDATE';
        } else {
            $this->button = 'SUBMIT';
        }
    }



    public function hideModal()
    {
        $this->showingModalProfile = false;
    }

    # ---------------------------------------------------------------------------- #
    #                              Livewire CRUD here                              #
    # ---------------------------------------------------------------------------- #

    public function save()
    {

        if ($this->tab == 1) {

            $validatedData = $this->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'facebook_link' => 'nullable|url',
                'instagram_link' => 'nullable|url',
                'twitter_link' => 'nullable|url',
                'birth_date' => 'nullable|date',
                'home_address' => 'nullable|max:255',
                'phone_number' => 'nullable|string',
            ]);
            if ($validatedData) {

                $customer = auth()->user()->customers->first()->id;

                Customer::find($customer)->update([
                    'first_name' => $this->first_name,
                    'last_name' => $this->last_name,
                    'facebook_link' => $this->facebook_link,
                    'instagram_link' => $this->instagram_link,
                    'twitter_link' => $this->twitter_link,
                    'birth_date' => $this->birth_date,
                    'home_address' => $this->home_address,
                    'phone_number' => $this->phone_number
                ]);

                $this->alert(
                    'success',
                    'Profile updated successfully'
                );

                $this->emitSelf('refresh');
            }
        }
    } // End SAVE

    public function saveEmail()
    {
        $customer = auth()->user()->customers->first()->id;
        $user = auth()->user()->id;

        $this->validate([
            'email' => [
                'required',
                Rule::unique('users')->ignore($user),
                'email'
            ],

            'name' => [
                'required',

            ],

        ]);


        User::find($user)->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);


        $this->alert(
            'success',
            'Username & email updated successfully'
        );

        $this->emitSelf('data');
    }
    public function savePassword()
    {
        $customer = auth()->user()->customers->first()->id;
        $user = auth()->user()->id;
        $this->validate([
            'old_password' => [
                'required',
                Rules\Password::defaults(),
                'current_password'

            ],
            'new_password' => [
                'required',
                Rules\Password::defaults(),
                'confirmed'
            ],
            'new_password_confirmation' => [
                'required',
                Rules\Password::defaults(),
                'same:new_password'
            ],


        ]);


        User::find($user)->update([

            'password' => Hash::make($this->new_password)
        ]);

        $this->alert(
            'success',
            'Password updated successfully'
        );

        $this->reset(['old_password', 'new_password', 'new_password_confirmation']);

        $this->emitSelf('data');
    }
    # ---------------------------------------------------------------------------- #
    #                         ALL OTHER LIVEWIRE FUNCTIONS                         #
    # ---------------------------------------------------------------------------- #

    // Edit modal open with fields inserted

    public function edit($data)
    {


        $this->edit = $data['key'];


        $this->emitSelf('showModal');
    }

    public function forgot()
    {
        Auth::logout();

        $this->redirect(route('password.request'));
    }


    public function delete($data)
    {


        $this->emitTo('component', 'showModal');
        $this->edit = $data['key'];
    }

    // Delete data here

    public function destroy()
    {









        $this->emitTo('component', 'hideModal');
        $this->alert('success', 'Deleted successfully');
        $this->emitTo('component', 'refresh');
        $this->emitSelf('resetdata');
    }

    // checkboxes bulk delete


    public function destroyAll($data)
    {






        //auto change numbering


        //

        $this->emitTo('component', 'hideModal');
        $this->alert('success', 'Item(s) deleted successfully');
        $this->emitTo('component', 'clear');
        $this->emitTo('component', 'refresh');


        $this->emitSelf('resetdata');
    }

    public function deleteMultiple($data)
    {

        $this->emitTo('component', 'changeMessage', $data);

        if (count($data) == 1) {
            $this->edit = $data[0];
        }
    }



    # ---------------------------------------------------------------------------- #
    #                        Livewire Delete Functions here                        #
    # ---------------------------------------------------------------------------- #

    /*
 public $message = " Are you sure you want delete this programme?";
    public $count = 0;
    public $data = [];



    public $showingModalDeleteProgram = false;
    public function showModal()
    {
        $this->reset('message');
        $this->showingModalDeleteProgram = true;

        //    $this->counter++;
    }

    public function hideModal()
    {
        $this->showingModalDeleteProgram = false;
    }

    public function changeMessage($data)
    {
        $this->data = $data;
        $valuesCount = count($data);

        if ($valuesCount == 1) {
            $this->message =  "Are you sure you want delete this programme?";
            $this->showingModalDeleteProgram = true;
            $this->count = 0; //0 means default value to hide the button


        } else if ($valuesCount > 1) {
            $this->message =  "Are you sure you want delete these programmes?";
            $this->showingModalDeleteProgram = true;
            $this->count = 1; // 1 means multiple data


        }
    }

    public function delete()
    {
        $this->emitTo('admin.add-program', 'destroyAll', $this->data);
    }


*/

    public function data()
    {

        $this->gender = 'male';
        $check = Customer::find(auth()->user()->customers->first()->id);
        $user = Auth::user();
        $this->image = $check->profile_picture;
        $this->birth_date = $check->birth_date;
        $this->first_name = $check->first_name;
        $this->last_name = $check->last_name;
        $this->phone_number = $check->phone_number;
        $this->home_address = $check->home_address;
        $this->facebook_link = $check->facebook_link;
        $this->twitter_link = $check->twitter_link;
        $this->instagram_link = $check->instagram_link;



        function trimUser($username)
        {
            $url = $username;
            $string = $username;
            $wordToFind =   ["instagram", "facebook", "twitter"];

            foreach ($wordToFind as $word) {
                # code...

                if (strpos($string, $word) !== false) {
                    $parts = explode('/', rtrim($url, '/'));
                    return end($parts);
                }
            }
        }


        $this->facebook = trimUser($check->facebook_link);
        $this->instagram = trimUser($check->instagram_link);
        $this->twitter = trimUser($check->twitter_link);
        $this->email = $user->email;
        $this->name = $user->name;
    }

    # ---------------------------------------------------------------------------- #
    #                             Livewire Render here                             #
    # ---------------------------------------------------------------------------- #

    public function mount()
    {
        $this->data();
    }

    public function render()
    {
        return view('livewire.customer.profile');
    }
}
