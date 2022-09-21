# Steps that I followed

# User Login
For the user login part, since laravel has a predefined package and it is called so, I will not use that, therefore, I will use my model with name of login insted of user, since it is already here.

I have created model, migrations and controller for the login(user) table, along with the api route

by following path, post request you can add users to your blog login table.
http://127.0.0.1:8000/api/logins


if you want to the list of users, you can do a get request to the below route

http://127.0.0.1:8000/api/logins


====================================================================================
# for the news part
I have the model, migration, and controller, pluse a fake data seeder so that I have some records to play with.


and I request to get the 10 news for my blog via the post request to the below url 
http://127.0.0.1:8000/api/news

after the request is done, the controller check the user, if he exist in database or not and the if he exist and the password is correct and he is authenticated, the list of 10 news is shown to the user.