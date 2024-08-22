<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserSkill;
use App\Models\UserEducation;
use App\Models\UserExperience;
use App\Models\UserService;
use App\Models\UserPortfolio;
use Illuminate\Http\Request;
use App\Models\USerTemplate;
use App\Models\Chat ;

class PortfolioController extends Controller
{
    //    
        public function index()
        {
            $user_id = auth()->user()->id;
            
            // Fetch the user based on the provided username
            $user = User::where('id', $user_id)->first();

            if (!$user) {
                // Handle the case where the user is not found
                // You can return a custom error message, redirect, or take other actions here
                return redirect()->back()->with
                ('error', 'User not found.');
            }
            // Fetch user skills
            $userSkills = UserSkill::where('user_id', $user->id)
            ->paginate(5);
            // Fetch user education
            $userEducation = userEducation::where('user_id', $user->id)
            ->orderBy('college_year', 'desc') 
            ->get();
            // Fetch user work experience
            $userExperience = UserExperience::where('user_id', $user->id)
            ->orderBy('company_year', 'desc') 
            ->get();
            // Fetch user services
            $userService = UserService::where('user_id', $user->id)
            ->orderBy('user_service', 'asc') 
            ->get();
            // Fetch user projects by image
            $userPortfolioImage = UserPortfolio::where('user_id', $user->id)
            ->where('file_type','Image')
            ->orderBy('file_name', 'asc') 
            ->get();
            // Fetch user projects by document
            $userPortfolioDocument = UserPortfolio::where('user_id', $user->id)
            ->where('file_type','Document')
            ->orderBy('file_name', 'asc') 
            ->get();

            return view('portfolio.portfolio', 
            compact('userSkills', 'userEducation', 'userExperience', 'user','userService'
            ,'userPortfolioImage','userPortfolioDocument'));
            
        }
        
        public function userPortfolio($username)
        {
            // Fetch the user based on the provided username
            $user = User::where('user_name_link', $username)->first();

            if (!$user) {            

                return view('dashboard.user-not-found');
            }

            // Fetch user skills
            $userSkills = UserSkill::where('user_id', $user->id)
            ->paginate(7);
            // Fetch user education
            $userEducation = userEducation::where('user_id', $user->id)
            ->orderBy('college_year', 'desc') 
            ->get();
            // Fetch user work experience
            $userExperience = UserExperience::where('user_id', $user->id)
            ->orderBy('company_year', 'desc') 
            ->get();
            // Fetch user services
            $userService = UserService::where('user_id', $user->id)
            ->orderBy('user_service', 'asc') 
            ->get();
            // Fetch user projects by image
            $userPortfolioImage = UserPortfolio::where('user_id', $user->id)
            ->where('file_type','Image')
            ->orderBy('file_name', 'asc') 
            ->get();
            // Fetch user projects by document
            $userPortfolioDocument = UserPortfolio::where('user_id', $user->id)
            ->where('file_type','Document')
            ->orderBy('file_name', 'asc') 
            ->get();

            return view('portfolio.user-page', 
            compact('userSkills', 'userEducation', 'userExperience', 'user','userService'
            ,'userPortfolioImage','userPortfolioDocument'));
        }

        public function changeTheme($id){

            $userTemplates = UserTemplate::where('user_id', $id)->first();

            if(!$userTemplates){
                $templateType = "TalentLoom-Default";
                $createTemplate = UserTemplate::create([
                    'user_id' => $id,
                    'template_type' => $templateType,
                ]);

                // Get unread messages
            $messages = Chat::where('to_id', '=', $id)   
            ->where('seen', '=', 0)
            ->orderBy('created_at', 'desc')
            ->get();

            $unreadMessagesCount = $messages->count();

            return view('layout.change-template', compact('templateType','messages','unreadMessagesCount'));
            }

            $templateType = $userTemplates->template_type;

            // Get unread messages
            $messages = Chat::where('to_id', '=', $id)   
            ->where('seen', '=', 0)
            ->orderBy('created_at', 'desc')
            ->get();

            $unreadMessagesCount = $messages->count();

            return view('layout.change-template', compact('templateType','messages','unreadMessagesCount'));

        
        }
    
        public function type1(){
    
            return view('templates.type-1');
        }

    
}
