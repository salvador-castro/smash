<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  
  $receiving_email_address = 'info@smash.com.uy';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['nombre'];
  $contact->apellido = $_POST['apellido'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['asunto'];
  $contact->mensaje = $_POST['mensaje'];

  $contact->smtp = array(
    'host' => 'mail.smash.com.uy',
    'username' => 'info@smash.com.uy',
    'password' => 'Smash.2021..',
    'port' => '587'
  );

  $contact->add_message( $_POST['nombre'] . " " . $_POST['apellido'], 'De: ');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['asunto'], 'Asunto: ');
  $contact->add_message( $_POST['mensaje'], 'Mensaje: ', 10);

  echo $contact->send();
?>
