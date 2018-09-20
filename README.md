# country-cookie-consent
Wordpress plugin that displays site agreement and sets a consent cookie *only for certain countries*. This README includes information for plugin configuration and testing.

Testing in Browser
==================

Check object
------------
    Cookies.get('cookie_consent');

Should be set to true if...

1.  condition1
1.  condition2

Remove object
-------------
    Cookies.remove('cookie_consent');

Object & properties
-------------
    CookieConsent.is_agreed
Lorem ipsum dolor sit amet, consectetur adipisicing elit.

    CookieConsent.country
Ipsum eum, iste quam, consequatur voluptatem facere ea minima sapiente ab.

Content Configuration
==================
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum eum, iste quam, consequatur voluptatem facere ea minima sapiente ab, velit doloremque similique sit dicta dolores id consequuntur voluptas possimus assumenda.

Note About Geoip
================
This plugin uses [ipstack](https://ipstack.com) to locate and identify website visitors by their IP address.