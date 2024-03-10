<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - J Studio</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <link rel="stylesheet" href="registerstyle.css">
    <!-- Custom Styles -->
   
</head>

<body>
    <div class="create-account-overlay" id="overlayContainer">
        <!-- Content for the overlay container -->
        <div class="overlay-content">
            <h2>Sign Up</h2>
            <!-- Close button -->
            <button class="close-button" id="closeButton">Back</button>
            <form action="registerdb.php" method="post" id="registrationForm">
                <div class="form-group">
                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    <?php if (isset($_GET['error'])): ?>
                                        <div class="text-danger" role="alert" style="font-size: 13px; margin-left: -1px; margin-top: -19px; margin-bottom: -20px">
                                        <i class="fas fa-exclamation-circle mr-1"></i>
                                        <?php echo $_GET['error']; ?>
                                    </div>
                                <?php endif; ?>

                </div>
                <div class="form-group">
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                <small class="text-danger" id="phoneError"></small> <!-- Error message placeholder -->
                           
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    <div id="passwordError" class="text-danger" style="font-size: 12px; margin-top: -19px; padding: 8px;" ></div>
                
                
                <div class="form-group">
                    <input type="password" class="form-control" id="reEnterPassword" name="reEnterPassword" placeholder="Re-enter Password" required>
                    <div id="passwordErrors" class="text-danger" style="font-size: 12px; margin-top: -11px; padding: -20px;"></div>

                </div>
                <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="termsCheckbox" required>
        <label class="form-check-label" for="termsCheckbox">I agree to the <a href="#" id="termsLink">Terms of Service</a> and <a href="#" id="privacyPolicyLink">Privacy Policy</a></label>
    </div>
    <div id="termsError" class="text-danger" style="font-size: 12px; margin-top: -11px;"></div>

                <button type="submit" class="btn btn-dark btn-block">Next</button>
</form>
        </div>
    </div>

    <div class="create-account-overlay" id="overlayContainer2">
        <!-- Content for the second overlay container -->
        <div class="overlay-content">
            <h2>Email Verification</h2>
            <!-- Close button -->
            <button class="close-button" id="closeButton2">&times;</button>
            <form action="" method="post" id="registrationForm2">
                <div class="form-group">
                    <label for="verificationCode">Enter Verification Code:</label>
                    <input type="text" class="form-control" id="verificationCode" name="verificationCode" placeholder="Verification Code" required>
                </div>
                <button type="submit" class="btn btn-dark btn-block">Submit</button>
            </form>
        </div>
    </div>
    
    <div class="terms-popup" id="termsPopup">
    <div class="terms-content">
        <h2>Terms of Service</h2>
        <p>Welcome to our website. If you continue to browse and use this website, you are agreeing to comply with and be bound by the following terms and conditions of use, which together with our privacy policy govern our relationship with you in relation to this website. If you disagree with any part of these terms and conditions, please do not use our website.</p>
        <p>The use of this website is subject to the following terms of use:</p>
        <ul>
            <li>The content of the pages of this website is for your general information and use only. It is subject to change without notice.</li>
            <li>This website uses cookies to monitor browsing preferences. If you do allow cookies to be used, the following personal information may be stored by us for use by third parties.</li>
            <li>Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness, or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law.</li>
            <li>Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services, or information available through this website meet your specific requirements.</li>
            <li>This website contains material which is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance, and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions.</li>
        </ul>
        <!-- Close button -->
        <button class="closes-button" id="closeTermsPopup">&times;</button>
    </div>
</div>

<div class="privacy-policy-popup" id="privacyPolicyPopup">
    <div class="privacy-policy-content">
    <h2>Privacy Policy</h2>
        <p>Welcome to our Privacy Policy</p>
        <p>Your privacy is critically important to us. It is our policy to respect your privacy regarding any information we may collect while operating our website. We respect your privacy and are committed to protecting personally identifiable information you may provide us through the Website. We have adopted this privacy policy ("Privacy Policy") to explain what information may be collected on our Website, how we use this information, and under what circumstances we may disclose the information to third parties. This Privacy Policy applies only to information we collect through the Website and does not apply to our collection of information from other sources.</p>
        <p>This Privacy Policy, together with the Terms and conditions posted on our Website, set forth the general rules and policies governing your use of our Website. Depending on your activities when visiting our Website, you may be required to agree to additional terms and conditions.</p>
        <!-- Add more paragraphs as needed -->
        <!-- Close button -->
        <button class="closes-button" id="closePrivacyPolicyPopup">&times;</button>
    </div>
</div>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const overlayContainer = document.getElementById('overlayContainer');
        const closeButton = document.getElementById('closeButton');
        const registerButton = document.getElementById('registerButton');
        const registrationForm = document.getElementById('registrationForm');
        const overlayContainer2 = document.getElementById('overlayContainer2');
        const closeButton2 = document.getElementById('closeButton2');
        const registrationForm2 = document.getElementById('registrationForm2');

        // Show the overlay container when the page loads
        overlayContainer.style.display = 'flex'; // or 'block' depending on your layout

        // Add event listener to the close button
        closeButton.addEventListener('click', function () {
            // Redirect back to login.html
            window.location.href = 'login.php';
        });

        // Add event listener to the register button
        registerButton.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent the form from submitting

            // Hide the login form
            document.querySelector('.login-form').style.display = 'none';

            // Show the registration form
            overlayContainer.style.display = 'flex';
        });

     


        // Add event listener to the close button of the second overlay
        closeButton2.addEventListener('click', function () {
            // Hide the second overlay
            overlayContainer2.style.display = 'none';

            // Show the registration form again
            overlayContainer.style.display = 'flex';
        });

        // Add event listener to the registration form of the second overlay
        registrationForm2.addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent the form from submitting
            // Here you can perform any additional actions before submitting the form of the second overlay

            // Redirect to the address details page
            window.location.href = 'details.php';
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
    // Select the phone number input field
    var input = document.querySelector("#phone");

    // Initialize intlTelInput
    var iti = window.intlTelInput(input, {
        initialCountry: "PH", // Automatically select the user's country
        separateDialCode: true, // Display the country code separately
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js", // Path to the utils.js file
    });
    
    var registrationForm = document.getElementById('registrationForm');
    registrationForm.addEventListener('submit', function(event) {
        // Get the phone number value
        var phoneNumber = input.value;

        // Regular expression to check if the phone number contains only digits
        var phoneNumberPattern = /^\d+$/;

        // Check if the phone number contains only digits
        if (!phoneNumberPattern.test(phoneNumber)) {
            // Display error message
            document.getElementById('phoneError').textContent = "Enter a valid Phone number.";
            // Prevent form submission
            event.preventDefault();
        } else {
            // Clear error message if the phone number is valid
            document.getElementById('phoneError').textContent = "";   
        }

        
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var registrationForm = document.getElementById('registrationForm');
    var passwordInput = document.getElementById('password');
    var passwordError = document.getElementById('passwordError');

    registrationForm.addEventListener('submit', function(event) {
        // Get the password value
        var password = passwordInput.value;

        // Check if the password length is less than 7 characters
        if (password.length < 7) {
            // Display error message
            passwordError.textContent = "Password must be at least 7 characters long.";
            // Prevent form submission
            event.preventDefault();
        } else {
            // Clear error message if the password meets the requirement
            passwordError.textContent = "";   
        }
    });
});


document.addEventListener("DOMContentLoaded", function () {
    var registrationForm = document.getElementById('registrationForm');
    var passwordInput = document.getElementById('password');
    var reEnterPasswordInput = document.getElementById('reEnterPassword');
    var passwordError = document.getElementById('passwordErrors');

    registrationForm.addEventListener('submit', function(event) {
        // Get the values of password and re-enter password fields
        var passwordValue = passwordInput.value;
        var reEnterPasswordValue = reEnterPasswordInput.value;

        // Check if the passwords match
        if (passwordValue !== reEnterPasswordValue) {
            // Display error message
            passwordError.textContent = "Passwords do not match.";
            // Prevent form submission
            event.preventDefault();
        } else {
            // Clear error message if the passwords match
            passwordError.textContent = "";   
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var termsCheckbox = document.getElementById('termsCheckbox');
    var nextButton = document.getElementById('nextButton');
    var termsMessage = document.getElementById('termsMessage');

    // Disable the Next button initially
    nextButton.disabled = true;

    // Add event listener to the termsCheckbox
    termsCheckbox.addEventListener('change', function () {
        // Enable/disable the Next button based on checkbox state
        nextButton.disabled = !termsCheckbox.checked;

        // Show/hide the Terms of Service and Privacy Policy message
        if (!termsCheckbox.checked) {
            termsMessage.classList.add('show-message');
        } else {
            termsMessage.classList.remove('show-message');
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var termsCheckbox = document.getElementById('termsCheckbox');
    var nextButton = document.getElementById('nextButton');
    var termsError = document.getElementById('termsError');

    // Disable the Next button initially
    nextButton.disabled = true;

    // Add event listener to the termsCheckbox
    termsCheckbox.addEventListener('change', function () {
        // Enable/disable the Next button based on checkbox state
        nextButton.disabled = !termsCheckbox.checked;

        // Display/hide the error message
        termsError.textContent = !termsCheckbox.checked ? "You must agree to the Terms of Service and Privacy Policy." : "";
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const termsLink = document.getElementById('termsLink');
    const termsPopup = document.getElementById('termsPopup');
    const closeTermsPopup = document.getElementById('closeTermsPopup');

    // Add event listener to the Terms of Service link
    termsLink.addEventListener('click', function () {
        termsPopup.style.display = 'block';
    });

    // Add event listener to the close button of the Terms of Service pop-up
    closeTermsPopup.addEventListener('click', function () {
        termsPopup.style.display = 'none';
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const privacyPolicyLink = document.getElementById('privacyPolicyLink');
    const privacyPolicyPopup = document.getElementById('privacyPolicyPopup');
    const closePrivacyPolicyPopup = document.getElementById('closePrivacyPolicyPopup');

    // Add event listener to the Privacy Policy link
    privacyPolicyLink.addEventListener('click', function () {
        privacyPolicyPopup.style.display = 'block';
    });

    // Add event listener to the close button of the Privacy Policy pop-up
    closePrivacyPolicyPopup.addEventListener('click', function () {
        privacyPolicyPopup.style.display = 'none';
    });
});

</script>

</body>

</html>
