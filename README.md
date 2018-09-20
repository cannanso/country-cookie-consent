# country-cookie-consent
Wordpress plugin that displays and sets a consent cookie for certain countries.

TESTING:

Check object:
Cookies.get('cookie_consent');

Should be set to true if 
// conditions

Remove object:
Cookies.remove('cookie_consent');


Check if agreed:
CookieConsent.is_agreed


Check current country: 
CookieConsent.country