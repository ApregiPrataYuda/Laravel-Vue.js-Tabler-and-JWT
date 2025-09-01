<template>
  <DefaultLayout>
   <div class="page-header d-print-none">
    <div class="container-xl">
    <div class="row g-2 align-items-center">
        <div class="col">
        <!-- Page pre-title -->
        <div class="page-pretitle">
            Page
        </div>
        <h2 class="page-title">
            Dashboard
        </h2>
        </div>
    </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="subheader">Sales</div>
                    <div class="ms-auto lh-1">
                    <div class="dropdown">
                        <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                        <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item active" href="#">Last 7 days</a>
                        <a class="dropdown-item" href="#">Last 30 days</a>
                        <a class="dropdown-item" href="#">Last 3 months</a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="h1 mb-3">75%</div>
                <div class="d-flex mb-2">
                    <div>Conversion rate</div>
                    <div class="ms-auto">
                    <span class="text-green d-inline-flex align-items-center lh-1">
                        7% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                    </span>
                    </div>
                </div>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                    <span class="visually-hidden">75% Complete</span>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="subheader">Revenue</div>
                    <div class="ms-auto lh-1">
                    <div class="dropdown">
                        <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                        <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item active" href="#">Last 7 days</a>
                        <a class="dropdown-item" href="#">Last 30 days</a>
                        <a class="dropdown-item" href="#">Last 3 months</a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="d-flex align-items-baseline">
                    <div class="h1 mb-0 me-2">$4,300</div>
                    <div class="me-auto">
                    <span class="text-green d-inline-flex align-items-center lh-1">
                        8% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                    </span>
                    </div>
                </div>
                </div>
                <div id="chart-revenue-bg" class="chart-sm"></div>
            </div>
            </div>
            <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="subheader">New clients</div>
                    <div class="ms-auto lh-1">
                    <div class="dropdown">
                        <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                        <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item active" href="#">Last 7 days</a>
                        <a class="dropdown-item" href="#">Last 30 days</a>
                        <a class="dropdown-item" href="#">Last 3 months</a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="d-flex align-items-baseline">
                    <div class="h1 mb-3 me-2">6,782</div>
                    <div class="me-auto">
                    <span class="text-yellow d-inline-flex align-items-center lh-1">
                        0% <!-- Download SVG icon from http://tabler-icons.io/i/minus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /></svg>
                    </span>
                    </div>
                </div>
                <div id="chart-new-clients" class="chart-sm"></div>
                </div>
            </div>
            </div>
            <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="subheader">Active users</div>
                    <div class="ms-auto lh-1">
                    <div class="dropdown">
                        <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                        <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item active" href="#">Last 7 days</a>
                        <a class="dropdown-item" href="#">Last 30 days</a>
                        <a class="dropdown-item" href="#">Last 3 months</a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="d-flex align-items-baseline">
                    <div class="h1 mb-3 me-2">2,986</div>
                    <div class="me-auto">
                    <span class="text-green d-inline-flex align-items-center lh-1">
                        4% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                    </span>
                    </div>
                </div>
                <div id="chart-active-users" class="chart-sm"></div>
                </div>
            </div>
            </div>

        </div>
        </div>
        </div>


        


<div class="page-body">
<div class="container-xl">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Invoices</h3>
        </div>
        <div class="table-responsive">
            <table class="table card-table table-vcenter text-nowrap">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Invoice Subject</th>
                        <th>Client</th>
                        <th>VAT No.</th>
                        <th>Created</th>
                        <th>Status</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample Row -->
                    <tr>
                        <td>1</td>
                        <td>Sample Invoice</td>
                        <td>Client Name</td>
                        <td>123456789</td>
                        <td>12 Feb 2025</td>
                        <td><span class="badge bg-success">Paid</span></td>
                        <td>$500</td>
                        <td>
                            <button class="btn btn-sm btn-warning mr-3">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>



 <div class="page-body">
    <div class="container-xl">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Registration Form</h3>
        </div>
        <div class="card-body">
          <form>
            <!-- Full Name -->
            <div class="mb-3">
              <label class="form-label">Full Name</label>
              <input type="text" class="form-control" placeholder="Enter your full name">
            </div>
  
            <!-- Email -->
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control" placeholder="Enter your email">
            </div>
  
            <!-- Password -->
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" placeholder="Enter your password">
            </div>
  
            <!-- Textarea -->
            <div class="mb-3">
              <label class="form-label">Address</label>
              <textarea class="form-control" rows="3" placeholder="Enter your address"></textarea>
            </div>
  
            <!-- Select -->
            <div class="mb-3">
              <label class="form-label">Gender</label>
              <select class="form-select">
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
            </div>
  
            <!-- Radio Buttons -->
            <div class="mb-3">
              <label class="form-label">Subscribe to Newsletter</label>
              <div>
                <label class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="subscribe" value="yes">
                  <span class="form-check-label">Yes</span>
                </label>
                <label class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="subscribe" value="no">
                  <span class="form-check-label">No</span>
                </label>
              </div>
            </div>
  
            <!-- Checkbox -->
            <div class="mb-3">
              <label class="form-check">
                <input class="form-check-input" type="checkbox">
                <span class="form-check-label">I agree to the terms and conditions</span>
              </label>
            </div>
  
            <!-- Submit Button -->
            <div class="form-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


   <div class="container-xl">
            <div class="row g-3">
                <!-- Card Kiri -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Form Kiri</h3>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="first_name" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="first_name" placeholder="Enter first name">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="Enter your password">
                                </div>
                                <div class="form-footer">
                                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Card Kanan -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Form Kanan</h3>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" placeholder="Enter last name">
                                </div>
                                <div class="mb-3">
                                    <label for="role" class="form-label">Role</label>
                                    <select class="form-select" id="role">
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                        <option value="guest">Guest</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="notes" class="form-label">Notes</label>
                                    <textarea class="form-control" id="notes" rows="3" placeholder="Additional notes"></textarea>
                                </div>
                                <div class="form-footer">
                                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </DefaultLayout>
</template>

<script setup>
import DefaultLayout from "@/layouts/DefaultLayout.vue"; 
</script>
