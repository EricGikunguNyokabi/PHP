<?php
// routes/applicant.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\ProfileController;

// Applicant routes
Route::prefix('applicant')->middleware(['auth', 'role:applicant'])->group(function () {
    // DASHBOARD
    Route::get('/dashboard', [ApplicantController::class, 'dashboard'])->name('applicant.dashboard');

    Route::get('/personal-profile', [ApplicantController::class, 'personal_profile'])->name('applicant.personal_profile');
    Route::put('/personal-profile', [ProfileController::class, 'updateProfile'])->name('applicant.updateProfile');


    // APPLICANT PROFILE
    Route::get('/education-profile', [ApplicantController::class, 'education_profile'])->name('applicant.education_profile');
    Route::get('/other-trainings', [ApplicantController::class, 'other_trainings'])->name('applicant.training_profile');
    Route::get('/professional-membership', [ApplicantController::class, 'professional_membership'])->name('applicant.membership_profile');
    Route::get('/employment-history', [ApplicantController::class, 'employment_history'])->name('applicant.employment_profile');
    Route::get('/referees', [ApplicantController::class, 'referees'])->name('applicant.referees');

    // FILE UPLOADS
    Route::get('/file-upload', [ApplicantController::class, 'upload_files'])->name('applicant.files_upload');
    Route::post('/file-upload', [ApplicantController::class, 'upload_files'])->name('files.upload');
    Route::get('/file-download/{id}', [ApplicantController::class, 'upload_files'])->name('files.download');
    Route::delete('/file-delete/{id}', [ApplicantController::class, 'upload_files'])->name('files.delete');

    // JOBS
    Route::get('/job-application-history', [ApplicantController::class, 'application_history'])->name('applicant.application_history');
    Route::get('/jobs-advertised', [ApplicantController::class, 'vacancies'])->name('applicant.advertised_jobs');

    // APPLICATION PROCESS
    Route::get('/jobs-advertised/{id}', [ApplicantController::class, 'singleJob'])->name('applicant.single_job');
});
