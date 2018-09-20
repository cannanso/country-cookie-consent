# country-cookie-consent
Wordpress plugin that displays and sets a consent cookie for certain countries.

TESTING
=======

Check object
------------
###Cookies.get('cookie_consent');

Should be set to true if...
1. condition1
1. condition2

Remove object
-------------
###Cookies.remove('cookie_consent');

Variables
-------------
CookieConsent.is_agreed
CookieConsent.country