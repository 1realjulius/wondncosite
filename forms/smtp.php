<?php

// error_reporting(-1);
// ini_set('display_errors', 'On');

 /*----------------------------------------------------------------------------*\
|*  Email settings for sending all emails from your website forms.              *|
 \*============================================================================*/


// Set the details of your SMTP server here:
// These details will be used to log in to the SMTP server and send an email
// to the site admin when a user submits a form.
// Optionally, you can send an email to the user to confirm receipt of their form submission.

// Outgoing Server Settings - replace values on the right of the = sign with your own.
// These 3 settings are are required.
// We do not recommend using Gmail as a server to send email.
// We recommend that you set up an email address on your hosting provider to perform the sending.
// (see cPanel -> email accounts).  Using an account at your host improves deliverability.

// These are the Outgoing Server (SMTP) details provided by your email host
$outgoingServerAddress     = 'https://server289.web-hosting.com/cpanel'; // consult your hosting provider.
$outgoingServerPort        = '21';                  // '587' , '25' - consult your hosting provider
$outgoingServerSecurity    = 'tls';                 // 'ssl' , 'tls' , null - consult your hosting provider.

// Sending Account Settings - replace these details with an email account held on the SMTP server entered above.
// This will also be used as the account to send the confirmation to the user.
$sendingAccountUsername    = 'juliuseghan@wonderco.site';
$sendingAccountPassword    = 'iamjuliuseghan@01022004';

// Recipient (To:) Details - Change this to the email details of who will receive all the emails from the website.
$recipientEmail            = 'iamjuliuseghan@gmail.com';      // Where to send the admin email.
$recipientName             = 'Julius'; // Name of admin to receive email from website.

// Email details - Change these to suit your website needs
$emailSubject              = 'Your request is being reviewed and will be responded shortly'; // Subject of the email that the admin will see.
$websiteName               = 'wonderco';       // This is used as the "From name".
$adminEmailTemplate        = 'email_to_admin.html';      // Name of template (in templates folder) to use for email to admin.

// Success Message to display in browser
$successMessage            = 'Thank you, a member of our team will be in touch shortly.'; 

// Google reCAPTCHA
// If your form is configured with a reCAPTCHA widget, this secret key will be used to validate with Google's server.
$recaptchaSecretKey        = '6Le--SgaAAAAAHFRSYfIcQPwsNyqUoq47YQJesS-';
$recaptchaErrorMessage     = 'There was a problem verifying the Google reCaptcha.  Please try again.';

// Send User a Confirmation Email?
$sendConfirmationToUser    = true;    // leave false to disable confirmation, set to true to enable.
$userEmailField            = "iamjuliuseghan@gmail.com";  // What part of form data to use as an address to send confirmation email.
$userNameField             = "Julius";   // What part of form data to use as the user's name on confirmation email.
$confirmationEmailTemplate = "confirmation_to_user.html";   // Name of template (in templates folder) to use for email to user.
$confirmationSubject       = "Thanks for testing our contact form!"; // The subject of the confirmation email.
$confirmationFromName      = "Wonderrco";         // Used in the "from" field of the email.
$confirmationReplyTo       = "iamjuliuseghan@gmail.com";  // If the user wants to reply to the confirmation email, where should it go?
// The text replacements to use when constructing the confirmation email body
// Eg. By default, this will replace [[name]] in the email template with
// the 'name' field sent through the form.  ucfirst sets the first letter to uppercase.
$confirmationReplacements  = array( 
    "[[contact-name]]"     => ucfirst($_POST["contact-name"]),
    "[[mRareAddress]]"     => 'http://wonderco.site',
);

// Save to CSV file to keep a text record of the form entries 
// This file should be password protected!
$saveToCSV                 = true;
$saveToCSVFileName         = "csv/csv_forms_email_1.csv";

 /*----------------------------------------------------------------------------*\
|*  You do not need to edit anything below this line, the rest is automatic.    *|
 \*============================================================================*/
include('vendor/mediumrare/smtp_email.php');

?>
