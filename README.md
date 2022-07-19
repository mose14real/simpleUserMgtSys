Link to **[simpleUserMgtSys](https://simple-user-mgt-sys.herokuapp.com/)** app hosted on heroku

Create a Simple User Management system using Laravel MVC

Having the following:

Controllers ->

UserController with the following methods:

Create user: creates a new user and inserts into the database
Edit users: takes in user id from the front-end and edits the user
Delete user: takes in the user id from the front-end  and deletes the user based on the ID
Get users: gets all users and passes them to the laravel blade template
 

Models ->

User: this model should have the following fields:
Id
Name
Email
phone
Views

Users.blade.php: this is the view to display all users from the getusers method of the user controller
Edituser.blade.php: this view displays a form with current user info and possibility to edit, then a submit button
 

Your work should follow the latest laravel 9 principles for routing.

Host your application on Heroku and add the link to your project readme on github
 

NB: a model with name User is suppose to be represented by a database table called users

Create a database of your own name with at least one table called users.