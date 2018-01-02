# pg-suggest404
Suggest404 adjusts the apache error handling for missing files to provide a suggestion button.

To use this module, modify /etc/apache2/conf-enabled/localized-error-pages.conf and add the following line near the top...

IncludeOptional /var/www/admin/.apache-*-errorDocs.conf

