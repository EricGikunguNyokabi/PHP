@extends('layouts.layout')

@section('side_navbar')
    @include('layouts.applicant_sidebar')
@endsection

@section('main')
    <div class="row mt-2">
        <!-- Back to Dashboard Button -->
        <div class="col-md-6">
            <button type="button" class="btn btn-warning btn-sm">
                <a href="#" class="text-white text-decoration-none">
                    <i class="bi bi-arrow-left"></i> <span class="text-dark">Back to Dashboard</span>
                </a>
            </button>
        </div>

        <!-- Add Education Button -->
        <div class="col-md-6 text-end">
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addEducationModal">
                Add Education Background
            </button>
        </div>
    </div>

    <!-- Flash Messages Section -->
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Education Background Table or No Details Available -->
    <div class="card mt-3">
        <div class="card-header">
            <h5>My Education Background</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Institution Name</th>
                            <th>Academic Level</th>
                            <th>Course</th>
                            <th>Grade</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>University of Example</td>
                            <td>Bachelor's Degree</td>
                            <td>Computer Science</td>
                            <td>A</td>
                            <td>2018-01-01</td>
                            <td>2022-01-01</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-sm">
                                    Edit
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger btn-sm">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Institute of Example</td>
                            <td>Diploma</td>
                            <td>Information Technology</td>
                            <td>B+</td>
                            <td>2015-01-01</td>
                            <td>2017-01-01</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-sm">
                                    Edit
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger btn-sm">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Add Education Modal -->
    <div class="modal fade" id="addEducationModal" tabindex="-1" aria-labelledby="addEducationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addEducationModalLabel">Add Education Background</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="institutionName" class="form-label">Institution Name</label>
                            <input type="text" class="form-control" id="institutionName" name="institution_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="academicLevel" class="form-label">Academic Level</label>
                            <select class="form-select" id="academicLevel" name="academic_level" required>
                                <option value="" disabled selected>Select Academic Level</option>
                                <option value="Bachelor's Degree">Bachelor's Degree</option>
                                <option value="Diploma">Diploma</option>
                                <option value="Master's Degree">Master's Degree</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="course" class="form-label">Course</label>
                            <input type="text" class="form-control" id="course" name="course" required>
                        </div>
                        <div class="mb-3">
                            <label for="grade" class="form-label">Grade</label>
                            <select class="form-select" id="grade" name="grade" required>
                                <option value="" disabled selected>Select Grade</option>
                                <option value="A">A</option>
                                <option value="B+">B+</option>
                                <option value="B">B</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="startDate" class="form-label">Start Date</label>
                            <input type="date" class="form-control" id="startDate" name="start_date" required>
                        </div>
                        <div class="mb-3">
                            <label for="endDate" class="form-label">End Date</label>
                            <input type="date" class="form-control" id="endDate" name="end_date" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="add">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
