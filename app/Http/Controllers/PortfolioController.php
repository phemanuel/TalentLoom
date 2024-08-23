<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserSkill;
use App\Models\UserEducation;
use App\Models\UserExperience;
use App\Models\UserService;
use App\Models\UserPortfolio;
use Illuminate\Http\Request;
use App\Models\Themes;
use App\Models\UserTheme;
use App\Models\Chat ;

class PortfolioController extends Controller
{
    //    
        public function index()
        {
            $user_id = auth()->user()->id;
            
            // Fetch the user based on the provided username
            $user = User::where('id', $user_id)->first();
            //----Check if the user has a cover_picture----
            $userCoverPicture = $user->cover_picture;
            if(empty($userCoverPicture)){
                // return redirect()->route('cover-picture')->with('error', 'cover-picture has not been uploaded');
                $coverPicture = $user->update([
                    'cover_picture' => "profile_pictures/default_cover_picture.jpg",
                ]);
            }
            
            //-----check if the user has a default theme----------------
            $userTheme = UserTheme::where('user_id', $user_id)->first();             
            if(!$userTheme){
                $themes = "TalentLoom-Urban";
                $defaultTheme = Themes::where('theme', $themes)->first();
                $createTemplate = UserTheme::create([
                    'user_id' => $user_id,
                    'theme' => $themes,
                    'theme_path' => $defaultTheme->theme_path,
                    'theme_path_edit' => $defaultTheme->theme_path_edit,
                ]);
            }
            //---Check if the user exists---
            if (!$user) {
                // Handle the case where the user is not found                
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

            $theme_path_edit = $userTheme->theme_path_edit;

            $actionType = "Edit";

            return view($theme_path_edit, 
            compact('userSkills', 'userEducation', 'userExperience', 'user','userService'
            ,'userPortfolioImage','userPortfolioDocument','actionType'));
            
        }
        
        public function userPortfolio($username)
        {
            // Fetch the user based on the provided username
            $user = User::where('user_name_link', $username)->first();
            $user_id = $user->id;
            $userTheme = UserTheme::where('user_id', $user_id)->first(); 
            
            if(!$userTheme){
                $themes = "TalentLoom-Urban";
                $defaultTheme = Themes::where('theme', $themes)->first();
                $createTemplate = UserTheme::create([
                    'user_id' => $user_id,
                    'theme' => $themes,
                    'theme_path' => $defaultTheme->theme_path,
                    'theme_path_edit' => $defaultTheme->theme_path_edit,
                ]);
            }

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

            $theme_path = $userTheme->theme_path;

            return view($theme_path, 
            compact('userSkills', 'userEducation', 'userExperience', 'user','userService'
            ,'userPortfolioImage','userPortfolioDocument'));
        }

        public function changeTheme(){
            $id = auth()->user()->id;
            $userTheme = UserTheme::where('user_id', $id)->first();
            $appThemes = Themes::all();

            if(!$userTheme){
                $themes = "TalentLoom-Urban";
                $defaultTheme = Themes::where('theme', $themes)->first();
                $createTemplate = UserTheme::create([
                    'user_id' => $id,
                    'theme' => $themes,
                    'theme_path' => $defaultTheme->theme_path,
                    'theme_path_edit' => $defaultTheme->theme_path_edit,
                ]);

                // Get unread messages
            $messages = Chat::where('to_id', '=', $id)   
            ->where('seen', '=', 0)
            ->orderBy('created_at', 'desc')
            ->get();

            $unreadMessagesCount = $messages->count();

            return view('layout.change-theme', compact('themes','messages','unreadMessagesCount','appThemes'));
            }

            $themes = $userTheme->theme;

            // Get unread messages
            $messages = Chat::where('to_id', '=', $id)   
            ->where('seen', '=', 0)
            ->orderBy('created_at', 'desc')
            ->get();

            $unreadMessagesCount = $messages->count();

            return view('layout.change-theme', compact('themes','messages','unreadMessagesCount','appThemes'));

        
        }

        public function updateTheme($id, $theme){
            $id = auth()->user()->id;
            $userTheme = UserTheme::where('user_id', $id)->first();
            $appThemes = Themes::all();

            if(!$userTheme){
                $themes = $theme;
                $defaultTheme = Themes::where('theme', $themes)->first();
                $createTemplate = UserTheme::create([
                    'user_id' => $id,
                    'theme' => $themes,
                    'theme_path' => $defaultTheme->theme_path,
                    'theme_path_edit' => $defaultTheme->theme_path_edit,
                ]);

                // Get unread messages
            $messages = Chat::where('to_id', '=', $id)   
            ->where('seen', '=', 0)
            ->orderBy('created_at', 'desc')
            ->get();

            $unreadMessagesCount = $messages->count();

            return view('layout.change-theme', compact('themes','messages','unreadMessagesCount','appThemes'));
            }

            //-----update the theme-----
            $defaultTheme = Themes::where('theme', $theme)->first();
            $userTheme->update([
                'theme' => $theme ,
                'theme_path' => $defaultTheme->theme_path,
                'theme_path_edit' => $defaultTheme->theme_path_edit,
            ]);
            $themes = $theme;

            // Get unread messages
            $messages = Chat::where('to_id', '=', $id)   
            ->where('seen', '=', 0)
            ->orderBy('created_at', 'desc')
            ->get();

            $unreadMessagesCount = $messages->count();

            return redirect()->back()->with('success', 'Theme activated successfully.');        
        }

        public function previewTheme($id , $theme)
        {                               
            $user = User::where('id', $id)->first();
            $userTheme = UserTheme::where('user_id', $id)->first();
            $appTheme = Themes::where('theme', $theme)->first(); 
            
            if(!$userTheme){
                $themes = "TalentLoom-Urban";
                $defaultTheme = Themes::where('theme', $themes)->first();
                $createTemplate = UserTheme::create([
                    'user_id' => $user_id,
                    'theme' => $themes,
                    'theme_path' => $defaultTheme->theme_path,
                    'theme_path_edit' => $defaultTheme->theme_path_edit,
                ]);
            }

            if (!$user) {
                // Handle the case where the user is not found                
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

            $theme_path_edit = $appTheme->theme_path_edit;

            $actionType = "Preview";

            return view($theme_path_edit, 
            compact('userSkills', 'userEducation', 'userExperience', 'user','userService'
            ,'userPortfolioImage','userPortfolioDocument','actionType'));
            
        }

        
        public function type1(){
    
            return view('templates.classic');
        }

    
}
