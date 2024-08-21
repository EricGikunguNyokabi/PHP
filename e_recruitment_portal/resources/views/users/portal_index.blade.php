@extends('layouts.layout')

@section('title', 'EGN Recruitment Portal')

@section('main')
<div class="container mt-5">
        <!-- Company Information -->
        <div class="row mb-4">
            <div class="col-12">
                <h1 class="text-center mt-4">Welcome to EGN E-Recruitment Portal</h1>
                <p class="text-center">At EGN, we strive to provide an efficient and user-friendly recruitment experience. Our portal connects talented individuals with exciting job opportunities in various sectors. We are committed to upholding the highest standards of data privacy and ensuring a smooth application process for all users.</p>
            </div>
        </div>

        <!-- Data Privacy Act -->
        <div class="row mb-4">
            <div class="col-12">
                <h4 class="text-center">Data Privacy and Protection</h4>
                <p class="text-center">Your privacy is important to us. Please review our data protection practices in accordance with the Kenyan Data Privacy Act by clicking the link below:</p>
                <div class="text-center">
                    <a href="https://mzalendo.com/media/resources/Data_Protection_Act_2019_Popular_Version.pdf" class="btn btn-primary" target="_blank">View Kenyan Data Privacy Act</a>
                </div>
            </div>
        </div>

        

    <!-- Job Vacancies -->
    <div class="mt-4">
        <h3 class="text-center">Job Vacancies</h3>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Job Title</th>
                    <th>Position Needed</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Software Developer</td>
                    <td>3</td>
                    <td><a href="#" class="btn btn-info btn-sm">View Details</a></td>
                </tr>
                <tr>
                    <td>Network Administrator</td>
                    <td>2</td>
                    <td><a href="#" class="btn btn-info btn-sm">View Details</a></td>
                </tr>
                <tr>
                    <td>Data Analyst</td>
                    <td>1</td>
                    <td><a href="#" class="btn btn-info btn-sm">View Details</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
