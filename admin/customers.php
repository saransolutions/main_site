<?php
require_once 'includes/cons.php';
require_once 'includes/db.php';
require_once 'includes/page.php';
require_once 'includes/customer/select.php';
session_start();
checkUserLoggedIn();
$profile = array();
$profile["page-title"] = "Customer";
$profile["add-new-form"] = '<div class="row justify-content-center">
<div class="col-xxl-6 col-xl-8">
    <h3 class="text-primary">Step 1</h3>
    <h5 class="card-title mb-4">Enter your account information</h5>
    <form>
        <div class="mb-3">
            <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
            <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="username">
        </div>
        <div class="row gx-3">
            <div class="mb-3 col-md-6">
                <label class="small mb-1" for="inputFirstName">First name</label>
                <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie">
            </div>
            <div class="mb-3 col-md-6">
                <label class="small mb-1" for="inputLastName">Last name</label>
                <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
            </div>
        </div>
        <div class="row gx-3">
            <div class="mb-3 col-md-6">
                <label class="small mb-1" for="inputOrgName">Organization name</label>
                <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your organization name" value="Start Bootstrap">
            </div>
            <div class="mb-3 col-md-6">
                <label class="small mb-1" for="inputLocation">Location</label>
                <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="San Francisco, CA">
            </div>
        </div>
        <div class="mb-3">
            <label class="small mb-1" for="inputEmailAddress">Email address</label>
            <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="name@example.com">
        </div>
        <div class="row gx-3">
            <div class="col-md-6 mb-md-0">
                <label class="small mb-1" for="inputPhone">Phone number</label>
                <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="555-123-4567">
            </div>
            <div class="col-md-6 mb-0">
                <label class="small mb-1" for="inputBirthday">Birthday</label>
                <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="06/10/1988">
            </div>
        </div>
    </form>
</div>
</div>';
$profile["content"] = get_main_table(null);
echo get_doc($profile);

?>