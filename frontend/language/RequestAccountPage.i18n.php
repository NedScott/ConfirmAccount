<?php
/**
 * Internationalisation file for RequestAccount special page.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

$messages['en'] = array(
	'requestaccount'            => 'Request account',
	'requestaccount-text'       => '{{RequestAccount}}',
	'requestaccount-footer'     => '', # only translate this message to other languages if you have to change it
	'requestaccount-page'       => '{{ns:project}}:Terms of Service',
	'requestaccount-dup'        => '\'\'\'Note: You already are logged in with a registered account.\'\'\'',
	'requestaccount-leg-user'   => 'User account',
	'requestaccount-leg-areas'  => 'Main areas of interest',
	'requestaccount-leg-person' => 'Personal information',
	'requestaccount-leg-other'  => 'Other information',
	'requestaccount-leg-tos'    => 'Terms of Service',
	'requestaccount-acc-text'   => 'Your e-mail address will be sent a confirmation message once this request is submitted.
Please respond by clicking on the confirmation link provided by the e-mail.
Also, your password will be e-mailed to you when your account is created.',
	'requestaccount-areas' 		=> '', # Do not translate this message to other languages
	'requestaccount-areas-text' => 'Select the topic areas below in which you have formal expertise or would like to do the most work in.',
	'requestaccount-ext-text'   => 'The following information is kept private and will only be used for this request.
You may want to list contacts such a phone number to aid in identify confirmation.',
	'requestaccount-bio-text'   => "Human identification",
	'requestaccount-bio-text-i' => "'''Your biography will be set as the initial content for your userpage.'''
Make sure you are comfortable publishing such information.",
	'requestaccount-real'       => 'Name:',
	'requestaccount-same'       => '(same as real name below)',
	'requestaccount-email'      => 'E-mail address:',
	'requestaccount-reqtype'    => 'Position:',
	'requestaccount-level-0'    => 'author',
	'requestaccount-level-1'    => 'editor',
	'requestaccount-info'       => '(?)',
	'requestaccount-bio'        => 'Say why you want to edit the wiki, so that we know you are a human and not a spambot (plain text only):',
	'requestaccount-attach'     => 'Resume or CV (optional):',
	'requestaccount-notes'      => 'Additional notes:',
	'requestaccount-urls'       => 'List of websites, if any (each on a separate line):',
	'requestaccount-agree'      => 'You must certify that your real name is correct and that you agree to our Terms of Service.',
	'requestaccount-inuse'      => 'Username is already in use in a pending account request.',
	'requestaccount-tooshort'   => 'Your biography must be at least $1 {{PLURAL:$1|word|words}} long.',
	'requestaccount-emaildup'   => 'Another pending account request uses the same e-mail address.',
	'requestaccount-exts'       => 'Attachment file type is disallowed.',
	'requestaccount-resub'      => 'Your CV/resume file must be re-selected for security reasons.
Leave the field blank if you no longer want to include one.',
	'requestaccount-tos'        => 'I have read and agree to abide by the [[{{MediaWiki:Requestaccount-page}}|Terms of Service]] of {{SITENAME}}.',
	'requestaccount-submit'     => 'Request account',
	'requestaccount-sent'       => 'Your account request has successfully been sent and is now pending review.
	A confirmation email has been sent to your e-mail address.',

	'request-account-econf'     => 'Your e-mail address has been confirmed and will be listed as such in your account request.',
	'requestaccount-email-subj' => '{{SITENAME}} e-mail address confirmation',
	'requestaccount-email-body' => 'Someone, probably you from IP address $1, has requested an account "$2" with this e-mail address on {{SITENAME}}.

To confirm that this account really does belong to you on {{SITENAME}}, open this link in your browser:

$3

If the account is created, only you will be e-mailed the password.
If this is *not* you, don\'t follow the link.
This confirmation code will expire at $4.',
	'requestaccount-email-subj-admin' => '{{SITENAME}} account request',
	'requestaccount-email-body-admin' => '"$1" has requested an account and is waiting for confirmation.
The e-mail address has been confirmed. You can confirm the request here "$2".',

	'acct_request_throttle_hit' => "Sorry, you have already requested {{PLURAL:$1|1 account|$1 accounts}}.
You cannot make any more requests.",
);

/** Message documentation (Message documentation)
 * @author Bennylin
 * @author EugeneZelenko
 * @author Jon Harald Søby
 * @author Lejonel
 * @author McDutchie
 * @author Purodha
 * @author Siebrand
 * @author The Evil IP address
 * @author Umherirrender
 */
$messages['qqq'] = array(
	'requestaccount' => '{{Identical|Request account}}',
	'requestaccount-footer' => '{{optional}}',
	'requestaccount-leg-user' => '{{Identical|User account}}',
	'requestaccount-leg-areas' => '{{Identical|Main areas of interest}}',
	'requestaccount-leg-person' => '{{Identical|Personal information}}',
	'requestaccount-leg-other' => '{{Identical|Other information}}',
	'requestaccount-real' => 'When changing this message, please make sure to change {{msg-mw|requestaccount-tos|notext=yes}} too, which directly references to this message.
{{Identical|Real name}}',
	'requestaccount-email' => '{{Identical|E-mail address}}',
	'requestaccount-reqtype' => '{{Identical|Position}}',
	'requestaccount-level-0' => '{{Identical|Author}}',
	'requestaccount-level-1' => '{{Identical|Editor}}',
	'requestaccount-info' => '{{optional}}',
	'requestaccount-notes' => '{{Identical|Additional notes}}',
	'requestaccount-tos' => '"Real name" should be exactly as {{msg-mw|requestaccount-real}}, minus the colon.',
	'requestaccount-submit' => '{{Identical|Request account}}',
	'requestaccount-email-subj' => '{{Identical|SITENAME e-mail address confirmation}}',
	'requestaccount-email-body' => 'This text is sent in an e-mail.
* $1 is an IP address
* $2 is a requested user name (no GENDER support)
* $3 is a URL
* $4 is a date/time
* $5 is a date
* $6 is a time',
	'requestaccount-email-subj-admin' => '{{Identical|SITENAME account request}}',
	'requestaccount-email-body-admin' => 'This message is the email body text send to a site admin whenever someone has requested a new account.
* $1: is a username
* $2 is a URL',
);
