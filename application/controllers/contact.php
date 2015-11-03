<?php

require_once __DIR__.'/application.php';

class Contact extends ApplicationController {

  public $countries = array('USA'    => 'USA',
                            'México' => 'México',
                            'Other'  => 'Other');

  public function __construct() {
    parent::__construct();
    $this->load->library('session');
  }

  public function show_form() {
    $mail_success = $this->session->flashdata('mail_success');
    $data = array('title'        => 'Contáctenos',
                  'countries'    => $this->countries,
                  'mail_success' => $mail_success);
    $this->load->helper('form');
    $this->render('contact/form', $data);
  }

  public function send_mail() {
    $contact = $this->input->post(null, true);
    $this->configure_email($contact);
    if ($this->send_email($contact)) {
      $this->session->set_flashdata('mail_success', 'true');
    } else {
      $this->session->set_flashdata('mail_success', 'false');
    }
    redirect('contacto');
  }

  private function configure_email($contact) {
    $this->load->library('email');
    $this->email->from('contacto@inmobiliariamarimar.com');
    $this->email->to(CONTACT_EMAIL_ADDRESS);
    $this->email->reply_to($contact['email']);
    $this->email->subject('Solicitud de contacto');
    $this->email->set_mailtype('html');
  }

  private function send_email($contact) {
    $data = array('contact' => $contact);
    $message = $this->load->view('contact/mail', $data, true);
    $this->email->message($message);
    return $this->email->send();
  }

}
