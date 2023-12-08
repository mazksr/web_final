<?php

// app/Http/Controllers/ProfilesController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\JobProfile;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class JobProfileController extends Controller
{
    public function store(Request $request, $jobId)
{
    $validatedData = $request->validate([
        'CV' => ['required', 'regex:/^(https?:\/\/)?drive\.google\.com\/.*/'],
    ], [
        'CV.regex' => 'The CV link must be a Google Drive link.',
    ]);

    $user = Profile::where('userId', Auth::user()->id)->first();
    // $jobId = $request->route('upcvs');
    echo $jobId;

    // Create a new instance of JobProfile
    $jobProfile = new JobProfile;

    // Set the properties individually
    $jobProfile->nama = $user->nama;
    $jobProfile->CV = $validatedData['CV'];
    $jobProfile->jobId = $jobId;
    $jobProfile->profileId = $user->id; // Assuming the user ID is used as profileId

    // Save the jobProfile
    $jobProfile->save();

    // Redirect or return a response as needed
    return redirect()->route('profile');
}

    
}
