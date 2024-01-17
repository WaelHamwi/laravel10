-Getting Started-
Follow these steps to set up and run the project on your local machine.

--Prerequisites--
Make sure you have the following installed on your machine:

PHP
Composer
Node.js
npm
Git

---Clone the Repository---

git clone https://Wael-Hamwi@bitbucket.org/sleibi/semiramis.git

----Navigate to the Project Directory----


-----cd semiramis-----

------Install Dependencies------
you need to install node.js
this project is using the last version of laravel which is 10:
you need to install :
composer create-project laravel/laravel example-app
npm install


-------Create a Copy of the Environment File-------

cp .env.example .env


--------Generate Application Key--------

php artisan key:generate

---------Configure Database---------
Update the .env file with your database credentials.

----------Run Migrations----------

php artisan migrate

----------Start the Development Server----------

php artisan serve 127.0.0.1
or you can use this steps as follows in order not to use php artisan serve:

Configure Apache Virtual Host:

Open your Apache configuration file. This is usually located in the conf/extra/httpd-vhosts.conf file in your XAMPP installation directory.

Add a virtual host entry for your Laravel project:

<VirtualHost *:80>
    ServerAdmin webmaster@samiramis.local
    DocumentRoot "C:/xampp/htdocs/samiramis/public"
    ServerName samiramis.local
    ErrorLog "logs/samiramis-error.log"
    CustomLog "logs/samiramis-access.log" common
    <Directory "C:/xampp/htdocs/samiramis/public">
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>

Update Hosts File:

Add an entry to your hosts file to map the domain to your localhost:
127.0.0.1    semiramis.com

The application will be accessible at http://semiramis.com/
