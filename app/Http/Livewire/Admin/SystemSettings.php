<?php

namespace App\Http\Livewire\Admin;

use App\Models\Company;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class SystemSettings extends Component
{

    use LivewireAlert;
    use WithFileUploads;

    # ---------------------------------------------------------------------------- #
    #                       Livewire properties / models here                      #
    # ---------------------------------------------------------------------------- #
    public $name;
    public $edit; // id of table
    public $showingModalSystemSettings;
    public $button = "SUBMIT";
    public $status;
    public $company;
    public $company_local_currency,
        $company_name,
        $company_country,
        $company_city,
        $company_state,
        $company_zip_code,
        $company_street,
        $company_email,
        $company_phone_number,
        $tax_percentage, $logo, $image;

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
    ];

    # ---------------------------------------------------------------------------- #
    #                              Livewire rules here                             #
    # ---------------------------------------------------------------------------- #


    public function rules()
    {

        $user = Auth::user()->id;
        return  [
            'company_local_currency' => 'required',
            'company_name' => 'required|max:255',
            'company_country' => 'required|max:255',
            'company_city' => 'nullable|max:255',
            'company_state' => 'nullable|max:255',
            'company_zip_code' => 'nullable|max:255',
            'company_street' => 'nullable|max:255',
            'company_email' => [
                'required',
                Rule::unique('company_details')->ignore($user),
                'max:255'
            ],
            'company_phone_number' => 'nullable|max:255',
            'tax_percentage' => 'required|numeric|gt:0',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
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

        $this->showingModalSystemSettings = true;
        if ($this->edit) {
            $this->button = 'UPDATE';
        } else {
            $this->button = 'SUBMIT';
        }
    }



    public function hideModal()
    {
        $this->showingModalSystemSettings = false;
    }

    # ---------------------------------------------------------------------------- #
    #                              Livewire CRUD here                              #
    # ---------------------------------------------------------------------------- #

    public function save()
    {

        if ($this->edit == '') {
            $validatedData = $this->validate();
            if ($validatedData) {

                Company::find(1)->update($validatedData);





                $this->alert(
                    'success',
                    'Created successfully'
                );

                $this->emitTo('component', 'refresh');
                $this->emitSelf('hideModal');
            }
        } else {


            $validatedData = $this->validate();


            if ($validatedData) {









                $this->alert(
                    'success',
                    'Updated successfully'
                );

                $this->emitTo('component', 'refresh');
                $this->emitSelf('hideModal');
                $this->emitSelf('resetdata');
            }
        }
    } // End SAVE


    # ---------------------------------------------------------------------------- #
    #                         ALL OTHER LIVEWIRE FUNCTIONS                         #
    # ---------------------------------------------------------------------------- #

    // Edit modal open with fields inserted

    public function edit($data)
    {


        $this->edit = $data['key'];


        $this->emitSelf('showModal');
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

    public function updatedImage($value)
    {

        $this->validate([
            'image'  =>   'nullable|mimes:jpeg,jpg,png'
        ]);
        $cover_name = time() . '_' . $this->image->getClientOriginalName();

        $this->image->storeAs('logo', $cover_name, 'public');

        Company::find(1)->update([
            'logo' => $cover_name
        ]);

        $this->logo = $cover_name;

        $this->emitTo('admin.system-settings', 'changeImage');
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

    # ---------------------------------------------------------------------------- #
    #                             Livewire Render here                             #
    # ---------------------------------------------------------------------------- #

    public function mount()
    {

        $company = Company::first();

        $this->company = $company;

        $this->company_local_currency = $company->company_local_currency;
        $this->company_name = $company->company_name;
        $this->company_country = $company->company_country;
        $this->company_city = $company->company_city;
        $this->company_state = $company->company_state;
        $this->company_zip_code = $company->company_zip_code;
        $this->company_street = $company->company_street;
        $this->company_email = $company->company_email;
        $this->company_phone_number = $company->company_phone_number;
        $this->tax_percentage = round($company->tax_percentage);
        $this->logo = $company->logo;
    }
    public function render()
    {
        return view('livewire.admin.system-settings');
    }
}
