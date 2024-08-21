<?php
// php artisan make:controller ApplicantController

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    // views/applicant/
    public function dashboard()
    {
        return view('applicant.dashboard');
    }
    // views/applicant/applicant_profile/
    public function personal_profile()
    {
        return view('applicant.applicant_profile.personal_profile');
    }

    public function education_profile()
    {
        // $educations = Education::where('user_id', auth()->id())->get(); // Example, update according to your database structure
        return view('applicant.applicant_profile.education_profile'/*, compact('educations') */);
    }

    public function other_trainings()
    {
        return view('applicant.applicant_profile.other_trainings');
    }
    public function professional_membership()
    {
        return view('applicant.applicant_profile.professional_membership');
    }
    public function employment_history()
    {
        return view('applicant.applicant_profile.employment_history');
    }
    public function upload_files()
    {
        return view('applicant.applicant_profile.upload_files');
    }
    // views/applicant/jobs/
    public function application_history()
    {
        return view('applicant.jobs.application_history');
    }
    public function vacancies()
    {
        return view('applicant.jobs.advertised_jobs');
    }
    // views/applicant/jobs/application_process
    public function singleJob()
    {
        return view('applicant.jobs.single_job', ['job_id' => $id]);
    }
}


