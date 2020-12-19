<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'adenben.com' // Put you mail domain here
	,
	'Anissa;s Portfolio' // Put your site name / form name here
	,
	'abennett5@ufl.edu' // Where will the form notification be sent?
	,
	'noreply@adenben.com' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

);


?>

<!-- HTML bottom code goes here -->
