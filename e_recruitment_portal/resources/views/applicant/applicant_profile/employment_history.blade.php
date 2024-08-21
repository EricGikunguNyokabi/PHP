@extends('layouts.layout')

@section('side_navbar')
    @include('layouts.applicant_sidebar')
@endsection

@section('main')
    <div class="row mt-2">
        <!-- Back to Dashboard Button -->
        <div class="col-md-6">
            <button type="button" class="btn btn-warning btn-sm mt-2">
                <a href="{{ route('applicant.dashboard') }}" class="text-white text-decoration-none">
                    <i class="bi bi-arrow-left"></i> <span class="text-dark">Back to Dashboard</span>
                </a>
            </button>
        </div>

        <!-- Add Employment History Button -->
        <div class="col-md-6 d-flex justify-content-end">
            <button type="button" class="btn btn-primary btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#addEmploymentModal">
                Add Employment History
            </button>
        </div>
    </div>

    <!-- Flash Messages Section -->
   

    <!-- Employment History Table or No Details Available -->
    <div class="card mt-3">
        <div class="card-header">
            <h5>My Employment History</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Company Name</th>
                            <th>Job Title</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Total Months</th>
                            <th>Responsibilities</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Example Corp</td>
                            <td>Software Developer</td>
                            <td>2020-06-01</td>
                            <td>2023-05-31</td>
                            <td>35 months</td>
                            <td>Developed and maintained web applications.</td>
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
                            <td>Tech Solutions</td>
                            <td>IT Support Specialist</td>
                            <td>2018-02-01</td>
                            <td>2020-05-31</td>
                            <td>28 months</td>
                            <td>Provided technical support and managed IT infrastructure.</td>
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
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
            <!-- Note for No Details -->
            
        </div>
    </div>

    <!-- Add Employment Modal -->
    <div class="modal fade" id="addEmploymentModal" tabindex="-1" aria-labelledby="addEmploymentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addEmploymentModalLabel">Add Employment History</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="companyName" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="companyName" name="company_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="jobTitle" class="form-label">Job Title</label>
                            <input type="text" class="form-control" id="jobTitle" name="job_title" required>
                        </div>
                        <div class="mb-3">
                            <label for="startDate" class="form-label">Start Date</label>
                            <input type="date" class="form-control" id="startDate" name="start_date" required>
                        </div>
                        <div class="mb-3">
                            <label for="endDate" class="form-label">End Date</label>
                            <input type="date" class="form-control" id="endDate" name="end_date" required>
                        </div>
                        <div class="mb-3">
                            <label for="responsibilities" class="form-label">Responsibilities</label>
                            <textarea class="form-control" id="responsibilities" name="responsibilities" rows="3" required></textarea>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="currentlyEmployed" name="currently_employed">
                            <label class="form-check-label" for="currentlyEmployed">Currently Employed Here</label>
                        </div>
                        <button type="submit" class="btn btn-primary" name="add">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS + Popper -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('addEmploymentModal').addEventListener('show.bs.modal', function (event) {
            var currentlyEmployedCheckbox = document.getElementById('currentlyEmployed');
            var endDateInput = document.getElementById('endDate');

            currentlyEmployedCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    endDateInput.value = ''; // Clear the end date if currently employed
                    endDateInput.disabled = true; // Disable end date field
                } else {
                    endDateInput.disabled = false; // Enable end date field
                }
            });
        });
    </script>
@endsection
