FROM dockerfiles/centos-lamp 

COPY index.php /var/www/html/index.php
COPY console.php /var/www/html/console.php
COPY login.php /var/www/html/login.php
COPY style.css /var/www/html/style.css
RUN echo 'ICED{PT_4_bab13s_have_fUn!!!}' > /flag-$(xxd -l 6 -p /dev/urandom)
