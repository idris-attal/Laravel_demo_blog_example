## Laravel 8 Sample Blog EXAMPLE

This is a sample project where you authenticate a user and if he is authenticated successfully,   the user can see news of the bolg, otherwise the user is not allowed to see the news.
This proejct was developed under a short peroid of time and was done for a test purpose, so, maybe some parts of it would needs improvements but for the sake of history I will not change a single bit of the wrriten code.

## Configuarations
    1- Configure your database in the .env file
    2- Run "composer install"
    3- Generate the application key via this command : "php artisan key:generate"
    4- Run migrations via this command: "php artisan migrate"
    
    
## Project Parts

### 1- User Creation
This is API based developed application and for inserting new users to the databse you will need to use api and some tools like postman to send the data in JSON format to the server.
### API EndPoints
    Users GET All http://localhost:8000/api/logins
    Users POST Create http://localhost:8000/api/logins
    
    
### 2- NEWS 
This is API based developed application and for managing reading the news of the blog by authentication, you will need to use api and some tools like postman to read data from database and send your username and passowrd via the post method in order to get authenticated, and you shoud send data in JSON format to the server.

### API EndPoints
    To Get the news send the data in JSON format to the below link:
    
    News- POST http://localhost:8000/api/news
    
    Data Should be like :
    {
      "name":"mr.x",
      "password": "whatever"
    }
    
