#!/usr/bin/perl -w
#
# V 1.0 / 13.02.2001
#

use CGI qw/:standard fatalsToBrowser/;
use strict;

print header();
print start_html( -title => 'Reading Environment Variables with Perl',
-author => 'support@ionos.com');

print p("Most of the information required for a CGI program is provided by environment variables.  You can access these variables in the same way as any other environment variable (in Perl via %ENV Hash). The following table lists the environment variables usually available for a CGI script.");

print table(
{-border=>'1'},
Tr(
[
th(['Environment variable','Content','Value for this query']),

td(['AUTH_TYPE','The authentication method used to verify the user',"$ENV{'AUTH_TYPE'}"]),

td(['CONTENT_LENGTH','The length of the data transmitted on the form',"$ENV{'CONTENT_LENGTH'}"]),

td(['CONTENT_TYPE','The format of the form data',"$ENV{'CONTENT_TYPE'}"]),

td(['DOCUMENT_ROOT','The root directory of your website',"$ENV{'DOCUMENT_ROOT'}"]),

td(['GATEWAY_INTERFACE','The version of the CGI protocol used',"$ENV{'GATEWAY_INTERFACE'}"]),

td(['HTTP_ACCEPT','A list of formats accepted by your browser',"$ENV{'HTTP_ACCEPT'}"]),

td(['HTTP_COOKIE','List of Cookies Sent',"$ENV{'HTTP_COOKIE'}"]),

td(['HTTP_FROM','Your e-mail address, as provided by your brower',"$ENV{'HTTP_FROM'}"]),

td(['HTTP_REFERER','The URL of the page which directed you to this CGI program',"$ENV{'HTTP_REFERER'}"]),

td(['HTTP_USER_AGENT','The name and version of your browser',"$ENV{'HTTP_USER_AGENT'}"]),

td(['PATH_INFO','Path to CGI script on your webspace',"$ENV{'PATH_INFO'}"]),

td(['PATH_TRANSLATED','Absolute path to the CGI script',"$ENV{'PATH_TRANSLATED'}"]),

td(['QUERY_STRING','The form data transmitted to the script',"$ENV{'QUERY_STRING'}"]),

td(['REMOTE_ADDR','IP address of the visitor',"$ENV{'REMOTE_ADDR'}"]),

td(['REMOTE_HOST','The resolved IP address of the visitor','<font color="brightred">Deactivated!</font>']),

td(['REMOTE_IDENT','Browser user name (UNIX)',"$ENV{'REMOTE_IDENT'}"]),

td(['REMOTE_USER','Username after authentication',"$ENV{'REMOTE_USER'}"]),

td(['REQUEST_METHOD','The HTTP request method used for the query',"$ENV{'REQUEST_METHOD'}"]),

td(['SCRIPT_NAME','Virtual script path',"$ENV{'SCRIPT_NAME'}"]),

td(['SERVER_NAME','Server name (virtual)',"$ENV{'SERVER_NAME'}"]),

td(['SERVER_PORT','Server side port number',"$ENV{'SERVER_PORT'}"]),

td(['SERVER_PROTOCOL','The name and version of the request protocol',"$ENV{'SERVER_PROTOCOL'}"]),

td(['SERVER_SOFTWARE','HTTP server name and version',"$ENV{'SERVER_SOFTWARE'}"])
]
)
);

print p("Variables are only populated when they are called using CGI scripts.");
print p("Enviromental Variables will not always be populdated, for example, REMOTE_USER is only set where the directory or sub-directory is password protected using a .htaccess file, and HTTP_REFERER will only be set where a referral takes place, not where the script is called directly.");