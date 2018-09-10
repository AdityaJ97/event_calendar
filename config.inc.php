<?php
namespace MRBS;

// $Id$

/**************************************************************************
 *   MRBS Configuration File
 *   Configure this file for your site.
 *   You shouldn't have to modify anything outside this file.
 *
 *   This file has already been populated with the minimum set of configuration
 *   variables that you will need to change to get your system up and running.
 *   If you want to change any of the other settings in systemdefaults.inc.php
 *   or areadefaults.inc.php, then copy the relevant lines into this file
 *   and edit them here.   This file will override the default settings and
 *   when you upgrade to a new version of MRBS the config file is preserved.
 **************************************************************************/

/**********
 * Timezone
 **********/
 
// The timezone your meeting rooms run in. It is especially important
// to set this if you're using PHP 5 on Linux. In this configuration
// if you don't, meetings in a different DST than you are currently
// in are offset by the DST offset incorrectly.
//
// Note that timezones can be set on a per-area basis, so strictly speaking this
// setting should be in areadefaults.inc.php, but as it is so important to set
// the right timezone it is included here.
//
// When upgrading an existing installation, this should be set to the
// timezone the web server runs in.  See the INSTALL document for more information.
//
// A list of valid timezones can be found at http://php.net/manual/timezones.php
// The following line must be uncommented by removing the '//' at the beginning
$timezone = "Asia/Kolkata";


/*******************
 * Database settings
 ******************/
// Which database system: "pgsql"=PostgreSQL, "mysql"=MySQL
$dbsys = "mysql";
// Hostname of database server. For pgsql, can use "" instead of localhost
// to use Unix Domain Sockets instead of TCP/IP. For mysql "localhost"
// tells the system to use Unix Domain Sockets, and $db_port will be ignored;
// if you want to force TCP connection you can use "127.0.0.1".
$db_host = "localhost";
// If you need to use a non standard port for the database connection you
// can uncomment the following line and specify the port number
// $db_port = 1234;
// Database name:
$db_database = "event_calendar";
// Schema name.  This only applies to PostgreSQL and is only necessary if you have more
// than one schema in your database and also you are using the same MRBS table names in
// multiple schemas.
//$db_schema = "public";
// Database login user name:
$db_login = "root";
// Database login password:
$db_password = 'coep@123';
// Prefix for table names.  This will allow multiple installations where only
// one database is available
$db_tbl_prefix = "mrbs_";
// Set $db_persist to TRUE to use PHP persistent (pooled) database connections.  Note
// that persistent connections are not recommended unless your system suffers significant
// performance problems without them.   They can cause problems with transactions and
// locks (see http://php.net/manual/en/features.persistent-connections.php) and although
// MRBS tries to avoid those problems, it is generally better not to use persistent
// connections if you can.
$db_persist = FALSE;


/* Add lines from systemdefaults.inc.php and areadefaults.inc.php below here
   to change the default configuration. Do _NOT_ modify systemdefaults.inc.php
   or areadefaults.inc.php.  */
require_once "database_config.php";
$mrbs_company = "College of Engineering Pune";
$url_base = "";
$mrbs_admin = "Your Administrator";
$mrbs_admin_email = "admin_email@your.org";
$mrbs_company_url = "http://www.coep.org.in/";
$weekstarts = 1;
$times_along_top = TRUE;
$default_view = "month";
$auth["type"] = "ldap";
$ldap_host = "ldap://10.1.101.41";
$ldap_base_dn = "dc=coep,dc=org,dc=in";
$ldap_dn_search_dn = "ou=students,dc=coep,dc=org,dc=in";
$ldap_user_attrib = "uidNumber";
$ldap_dn_search_attrib = "uidNumber";

//$auth["type"] = "config";
//$auth["user"]["aditya"] = "aditya123"; $auth["user"]["rohit"] = "rohit123";
$auth["admin"][] = "111503002";
$auth["admin"][] = "111405006";

//$ldap_admin_group_dn = 'cn=admin,ou=groups,dc=sds,dc=com';
//$auth['admin'][] = 'aditya';
//$auth['admin'][] = 'Admin2';
//$auth['admin'][] = 'rohit';
$ldap_group_member_attrib = 'departmentNumber';
$approval_enabled = TRUE;
$confirmation_enabled = FALSE;
$vocab_override['en']['entry.club_name'] = 'Club Name';
$vocab_override['en']['entry.club_secretary'] = 'Club Secretary';
$vocab_override['en']['entry.contact_details'] = 'User Contact';
$vocab_override['en']['entry.secretary_contact'] = 'Secretary Contact';
$vocab_override['en']['entry.secretary_email'] = 'Secretary Email';
$vocab_override['en']['entry.user_email'] = 'User Email';
$vocab_override['en']['entry.facad_contact'] = 'Faculty Advisor Contact';
$vocab_override['en']['entry.speakers'] = 'Speakers description';
$vocab_override['en']['entry.approved_facad'] = 'Approved by Faculty Advisor';
$vocab_overrirde['en']['entry.students_attended'] = 'No. of Students Attended';
$vocab_override['en']['entry.event_report'] = 'Report on Event';
$vocab_override['en']['entry.image_path'] = 'Upload event image';
unset($booking_types);
$booking_types[] = "F";
$booking_types[] = "P";
$vocab_override['en']['type.F'] = 'Free';
$vocab_override['en']['type.P'] = 'Paid';
$is_mandatory_field['entry.club_name'] = 'Club Name';
$is_mandatory_field['entry.club_secretary'] = 'Club Secretary';
$is_mandatory_field['entry.contact_details'] = 'User Contact';
$is_mandatory_field['entry.secretary_contact'] = 'Secretary Contact';
$is_mandatory_field['entry.secretary_email'] = 'Secretary Email';
$is_mandatory_field['entry.user_email'] = 'User Email';
$is_mandatory_field['entry.facad_contact'] = 'Faculty Advisor Contact';
$is_mandatory_field['entry.speakers'] = 'Speakers description';
$select_options['entry.club_name'] = array( '' => 'Please select one option',
						                    'a' => 'SDS',
                                            'b' => 'CSAT',
                                            'c' => 'Robot Study Circle',
                                            'd' => 'History Club',
                                            'e' => 'Janeev Club',
                                            'f' => 'MindSpark',
                                            'g' => 'Impressions',
                                            'h' => 'Astronomy Club',
                                            'i' => 'BAJA Club',
                                            'j' => 'Team Velociracers',
                                            'k' => 'Aryaraas',
                                            'l' => 'Abhijaat News letter',
                                            'm' => 'Magazine',
                                            'n' => 'Sunrisers Club',
                                            'o' => 'Gocarting',
                                            'p' => 'Society for Women Engineers',
                                            'q' => 'Tedex COEP',
                                            'r' => 'Spandan',
                                            's' => 'Annual Social Gathering',
                                            't' => 'Regatta',
                                            'u' => 'Team Incendium',
                                            'v' => 'NSS',
                                            'w' => 'Nemesis',
                                            'x' => 'HAM Club',
                                            'y' => 'Team Octane Racing',
                                            'z' => 'Debate Club',
                                            'aa' => 'Ramanujan Club',
                                            'ab' => 'Spic Macay',
                                            'ac' => 'BHAU E-Cell',
                                            'ad' => 'Philomistic Club',
                                            'ae' => 'Personality Development Club',
                                            'af' => 'Student Welfare Forum',
                                            'ag' => 'ZEST',
                                            'ah' => 'Science Club');
$vocab_override['en']['namebooker'] = 'Title';
$edit_entry_field_order = array('name', 'description', 'speakers');
unset($is_report_criteria);
$is_report_criteria = array();
$is_report_criteria[] = 'club_name';
$is_report_criteria[] = 'speakers';
$is_report_criteria[] = 'approved_facad';

/*$mail_settings['admin_on_bookings']      = TRUE; 
$mail_settings['booker']                 = TRUE;
$mail_settings['book_admin_on_approval'] = TRUE;
$mail_settings['on_new']    = TRUE;
$mail_settings['details']   = TRUE;
$sendmail_settings['path'] = '/usr/bin/sendmail';
$mail_settings['from'] = 'aj7744904623@gmail.com';
$mail_settings['recipients'] = 'rohitkhole5@gmail.com';
$mail_settings['debug'] = TRUE;
$mail_settings['debug_output'] = 'log';*/

$mail_settings['admin_on_bookings'] = TRUE;
 $mail_settings['booker'] = TRUE; 
 $mail_settings['book_admin_on_approval'] = TRUE; 
 $mail_settings['on_new'] = TRUE; 
 $mail_settings['on_change'] = TRUE; 
 $mail_settings['on_delete'] = TRUE; 
 $mail_settings['details'] = TRUE; 
 $mail_settings['admin_backend'] = 'smtp';
 // These settings are only used with the "smtp" backend $smtp_settings['host'] = 'mx1.hostinger.in'; 
 // SMTP server $smtp_settings['port'] = 587; 
 // SMTP port number $smtp_settings['auth'] = TRUE; 
 // Whether to use SMTP authentication $smtp_settings['secure'] = 'tls'; 
 // Encryption method: '', 'tls' or 'ssl' $smtp_settings['username'] = 'webcalendar@sdscoep.com'; 
 // Username (if using authentication) $smtp_settings['password'] = 'webca@123'; 
 // Password (if using authentication) $mail_settings['from'] = "webcalendar@sdscoep.com"; $mail_settings['recipients'] = ''; $smtp_settings['disable_opportunistic_tls'] = false; $mail_settings['debug'] = TRUE; $mail_settings['debug_output'] = 'log'; $max_level = 3; 
 // The lowest level of admin allowed to view other users $min_user_viewing_level = 3; 
 // The lowest level of admin allowed to edit other users $min_user_editing_level = 3; $vocab_override['en']['level_3'] = 'superadmin';

