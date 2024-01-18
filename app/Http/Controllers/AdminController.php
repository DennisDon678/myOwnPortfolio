<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Educations;
use App\Models\Experience;
use App\Models\Project;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add_project(Request $request)
    {
        
        $image = time().'.'.$request->image->extension();
        $request->image->move(public_path('projects'), $image);

        $inputs = [
            'title' => $request->title,
            'link' => $request->link,
            'description' => $request->description,
            'image' => $image
        ];

        if(Project::create($inputs))
        {
            return redirect('/dashboard#new_project')->with('message','Project created successfully');
        }
    }

    public function add_about(Request $request)
    {
        if ($request->type === 'education'){
            $inputs = [
                'title' => $request->title,
                'description' => $request->description
            ];

            if(Educations::create($inputs)){
                return redirect('/dashboard#about')->with('message', 'Education Detail created');
            }
        }else{
            $inputs = [
                'title' => $request->title,
                'description' => $request->description
            ];

            if(Experience::create($inputs))
            {
                return redirect('/dashboard#about')->with('message', 'Experience Details created');
            }
        }
    }

    public function add_contact(Request $request){
        $inputs = [
            'email' => $request->email,
            'phone' => $request->phone
        ];

        if (Contact::first() === null){
            if (Contact::create($inputs)){
                return redirect('/dashboard#contact')->with('message', 'Contact Info Updated');
            }
        }
        else {
            $contact =  Contact::first();
            $contact->email = $request->email;
            $contact->phone = $request->phone;

            $contact->save();

            return redirect('/dashboard#contact')->with('message', 'Contact Info Updated');
        }

        
    }
}
