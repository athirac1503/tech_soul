<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <style>
    body{
            background-color: rgb(40, 113, 180);
            
    }
    .m1{
        width: 100%;
        height: 600px;
        padding-top: 50px;
        padding-left: 450px;
    }
    .m2{
        width: 450px;
        height: 460px;
        margin-top: 20px;
        padding-top: 20px;
        background-color: rgba(255, 255, 255, 0.281); 
        text-align: center; 
    }
    h2{
        font-family: 'Times New Roman', Times, serif;
        font-weight: bold;
        color: rgb(0, 0, 0);
        margin-top: 20px;
    }
    .form-control{
        width: 350px;
        height: 50px;
        margin-top: 30px;
        margin-left: 40px;
        border: solid 1px rgb(8, 8, 8);
        border-radius: 20px;
    }
    
    label{
        margin-right: 150px;
    }
    .btn{
        margin-right: 38px;
        margin-top: 30px;
        width: 250px;
        background-color: rgb(0, 0, 0) ;
        border: solid 1px rgb(0, 0, 0);;
        border-radius: 10px;
        font-weight: bold;
        color: #fff;
    }
    
    .btn:hover{
      border: solid 1px rgb(255, 255, 255);;
      background-color: rgb(255, 255, 255);
      color: black;
      font-weight: bold;
      border: solid 1px black;
    }
    h6{
        margin-top: 20px;
        margin-right: 25px;
    }
    .form-control{
      background-color: rgba(148, 148, 148, 0);
    }
    p{
        margin-top: 20px;
        text-align: center;
        color: red;
    }
 
  </style>
</head>
<body>
  <div class="m1 ">
    <form action="" method="POST">
      <div class="m2">
        <h2>LOGIN</h2>
        <div class="form-floating mb-3">
            <input type="text" class="form-control form-control-sm" name="name" id="floatingInput" placeholder="User name" required >
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" name="pass" placeholder="Password" required>
          </div>
          <button type="submit" class="btn btn-light">LOGIN</button>
        </div>
        
    </form>
    </div>
</body>
</html>

    
  
  
  
    
