# Getting Started
Follow these steps to set up and run the project on your local machine.
## Prerequisites
Make sure you have the following installed on your machine:
* PHP
* Composer
* Node.js
* npm
* Git
## Clone the Repository
git clone https://Wael-Hamwi@bitbucket.org/sleibi/semiramis.git
## Navigate to the Project Directory
cd semiramis
## Install Dependencies
You need to install Node.js. This project is using the latest version of Laravel, which is version 10. Run the following commands:
composer create-project laravel/laravel example-app you can use laravel 10 from this link: [https://laravel.com/docs/10.x/installation]
npm install
## Create a Copy of the Environment File
cp .env.example .env
## Generate Application Key
php artisan key:generate
## Configure Database
Update the `.env` file with your database credentials.
## Run Migrations
php artisan migrate
## Start the Development Server
php artisan serve 127.0.0.1
Alternatively, you can follow these steps to use Apache instead of `php artisan serve`:
### Configure Apache Virtual Host
Open your Apache configuration file, usually located at `conf/extra/httpd-vhosts.conf` in your XAMPP installation directory.
Add a virtual host entry for your Laravel project:
<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/semiramis/public"
    ServerName semiramis.dv
</VirtualHost>
## Update Hosts File
Add an entry to your hosts file to map the domain to your localhost:
127.0.0.1    semiramis.com
Hosts file location: `C:\Windows\System32\drivers\etc\hosts`
The application will be accessible at [http://semiramis.dv/] .
