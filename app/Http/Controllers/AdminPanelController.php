<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\About;
use App\Education;
use App\Experience;
use App\Portfolio;
use App\contact;


class AdminPanelController extends Controller
{
   

    public function admin(){
        
        return view('pages.Admin.Dashboard.signin');
    }

    public function AdminLogin(){
        $AdminLogin_Attributes = request()->validate([
            'email' => 'required|min:10',
            'password' => 'required|min:8'
        ]);

        if(Auth::attempt($AdminLogin_Attributes)){
            return redirect()-> route('dashboard');
        }
        else{
            return "Login Details Does Not Match!";
        }
    }
    public function dashboard(){
       return view('pages.Admin.Dashboard.dashboard');
    }

    public function AdminSignout(){
        Auth::logout();
        return redirect()->route('admin');
    }

    //EDITPROFILE VIEW
    public function AdminEditProfile(){
        return view('pages.Admin.Dashboard.editprofile');
    }



            //THE ABOUT PAGE CODE STARTS HERE
public function EditAboutProfile(About $about){
    return view('pages.Admin.About.edit', compact('about'));
}

public function UpdateAboutProfile(About $about){
    $about->update($this->validatepages());

    return redirect ('/dashboard');
}



// EDUCATION PROFILE STARTS HERE
public function CreateEducationProfile(){
    return view('pages.Admin.Education.create');

}

public function StoreEducationProfile(){
    $education_attributes = $this->ValidateEducationProfile();

    Education::create($education_attributes);

    return redirect('/dashboard')->with('success', 'Profile Created');
}

public function EditEducationProfile(Education $education){
    return view('pages.Admin.Education.edit', compact('education'));

}
public function UpdateEducationProfile(Education $education){
        $education->update($this->ValidateEducationProfile());
        
        return redirect('/dashboard');
}


// PROFESSIONAL EXPERIENCE PROFILE START HERE
public function CreateExperienceProfile(){
return view('pages.Admin.Experience.create');
}

public function StoreExperienceProfile(){
$experience_attributes = $this->ValidateExperienceProfile();

Experience::create($experience_attributes);

return redirect('/dashboard');
}

public function EditExperienceProfile(Experience $experience){
return view('pages.Admin.Experience.edit', compact('experience'));
}

public function UpdateExperienceProfile(Experience $experience){
$experience->update($this->ValidateExperienceProfile());

return redirect('/dashboard');
}


// PORTFOLIO CODE START HERE

public function CreatePortfolioProfile(){
return view('pages.Admin.Portfolio.create');
}

public function StorePortfolioProfile(){
   $portfolio_attributes =  request()->validate([
    'portfolio_images' => 'image|nullable|max:1999'
    ]);
    

if(request()->hasFile('portfolio_images')){
    // GETTING FILENAME WITH EXTENSION 
    $FileNameWithExtension = request()->file('portfolio_images')->getClientOriginalName();
    // GETTING FILE NAME 
    $FileName = pathinfo($FileNameWithExtension, PATHINFO_FILENAME);
    //GETTING EXTENSION
    $Extension = request()->file('portfolio_images')->getClientOriginalExtension();
    //FILENAME TO STORE
    $FileNameToStore = $FileName.'_'.time().'.'.$Extension;
    //UPLOAD FILE
    $path = request()->file('portfolio_images')->storeAs('public/portfolio_images', $FileNameToStore);
}


 
//  $portfolio->portfolio_images = $FileNameToStore;
//  $portfolio->save();

  $FileNameToStore = $portfolio_attributes;
  Portfolio::create($FileNameToStore);
return redirect('/dashboard');


}


// PORTFOLIO CODE START HERE






// VALIDATION METHOD
//VALIDATION FOR ABOUT PAGE
public function validatepages(){
   return request()->validate([
        'site' => 'required',
        'phone' => 'required|min:11|max:11',
        'state' => 'required',
        'degree' => 'required',
        'email' => 'required'
    ]);
}
// VALIDATION FOR EDUCATION PAGE
public function ValidateEducationProfile(){
    return request()->validate([
         'qualification' => 'required',
         'date' => 'required',
         'institution' => 'required',
         'course' => 'required'
         
     ]);
 }


 // VALIDATION FOR EXPERIENCE PAGE
public function ValidateExperienceProfile(){
    return request()->validate([
         'position' => 'required',
         'year' => 'required',
         'company' => 'required',
         'responsibilities' => 'required'
         
     ]);
 }
 



   
}
