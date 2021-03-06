<?php
/**
 * Slovak language file
 * @author Ján Maras
 * @package p01-contact
 */
$p01contact_lang = array(
// fields
'name'    => 'Meno',
'email'   => 'Email',
'address' => 'Poštová adresa',
'phone'   => 'Telefón',
'website' => 'WWW',
'subject' => 'Predmet',
'message' => 'Správa',
'file'    => 'Príloha',
'captcha' => 'Captcha',
'reload'  => 'Načítať nový',
'fieldcaptcha' => 'Prosím <b>nevypĺňajte</b> nasledovné polia :',
'askcopy' => 'Pošlite mi kópiu tohto e-mailu',
'send'    => 'Odoslať',

// email words
'askedcopy'=> 'Kópia tohoto emailu bola vyžiadaná',
'nofrom'   => 'Anonym',
'nosubject'=> 'Správa z kontaktného formulára',
'fromsite' => 'Mail odoslaný z',
'sentfrom' => 'Tento email bol odoslaný zo stránky',
        
// status messages
'sent'    => 'Správa odoslaná.',
'error'   => 'Chyba : správa nebola odoslaná.',
'disable' => 'Kontaktný formulár je vypnutý.',
'target'  => 'Tento kontaktný formulár nemá príjemcu.',
'token'   => 'Správa už bola odoslaná.',

// fields errors
'field_required'=> 'Toto pole je povinné',
'field_email'   => 'Prosím, zadajte platný email',
'field_phone'   => 'Prosím zadajte platné tel. číslo',
'field_website' => 'Prosím, zadajte platnú www adresu',
'field_message' => 'Prosím, zadajte dlhšiu správu',
'field_captcha' => 'Prosím, skopírujte nasledujúci text',
'field_fieldcaptcha' => 'Prosím, nevypĺňajte toto pole',
'field_password'=> 'Zlé heslo',

// configuration panel

'config_title' => 'p01contact nastavenie',

// messages
'config_updated' => 'Vaše zmeny sú úspešne uložené.',

'config_error_open' =>
'<b>Nemožno otvoriť konfiguračný súbor.</b> 
Skontrolujte, či súbor existuje a či je povolené zapisovanie do súboru :',

'config_error_modify' => 
'<b>Nemožno zmeniť konfiguračný súbor.</b> 
Skontrolujte práva na zápis do súboru:',

// New release alert
'new_release' => 'K dispozícii je nová verzia!',
'download' => 'Stiahnite si poslednú verziu',

// Links
'doc' => 'Dokumentácia',
'forum' => 'Fórum',

// Parameters
'enable'     => 'Povoliť',
'enable_sub' =>
'Povoliť, alebo zakaázať odosielanie pošty (zaškrtnutím povolíte obrazenie formulára).',

'default_email'     => 'Predvolený email',
'default_email_sub' => 'Ak ponecháte prázdne, bude nastavené na',

'lang'     => 'Jazyk',
'lang_sub' => 'Predvolený jazyk je nastavený na',

'default_params'     => 'Predvolené parametre',
'default_params_sub' =>
'Predvolené tagy štruktúry formulára. Použite syntax popísanú v dokumentácii.',

'message_len'     => 'Minimálna dĺžka správy',
'message_len_sub' => 'Minimálny počet znakov pre položku správa.',

'checklists'     => 'Zozna polí',
'blacklist'      => 'Blacklist',
'whitelist'      => 'Whitelist',
'checklists_sub' =>
'Blacklist : hodnoty, ktoré nesmú byť prítomné v poli.<br />
Whitelist : hodnoty, ktoré musia byť prítomné v poli.<br />
Oddelené čiarkou.',

'general_fields' => 'Všeobecné polia',
'special_fields' => 'Špeciálne polia',
'save' => 'Uložiť',

'debug'     => 'Debug mode',
'debug_sub' =>
'Disable mail sending, display p01-contact data structure, data sent by POST and 
the email that would have been sent.',
'debug_warn'=> 'Don\'t active that on production website!'
);
?>
