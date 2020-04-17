<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6S"></script>
    <title>PHP CRUD</title>
  </head>

  <body>
    <div class="row justify-content-center">


     <form  action="index.html" method="post">
         <div class="form-group">
         <label>Name</label>
         <input type="text" name="name" class="form-control" value="Enter your name">
         </div>
         <div class="form-group">
         <label>Location</label>
         <input type="text" name="location" class="form-control" value="Enter your location">
         </div>
         <div class="form-group">
         <button type="submit" class="form-control" name="save">Save</button>
         </div>
     </form>
    </div>
  </body>
</html>
