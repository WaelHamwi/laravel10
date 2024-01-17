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

php artisan serve
The application will be accessible at http://samiramis.com/