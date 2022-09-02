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
        padding-left: 400px;
    }
    .m2{
        width: 550px;
        height: 540px;
        background-color: rgba(255, 255, 255, 0.281); 
    }
    h2{
        font-family: 'Times New Roman', Times, serif;
        font-weight: bold;
        color: rgb(0, 0, 0);
        margin-top: 20px;
        text-align: center;
    }
 .form-control{
    width: 350px;
    margin-top: 5px;
    background-color: rgba(255, 255, 255, 0.281); 

 }
 label{
    margin-left: 40px;
    color: black;
    font-weight: bold;
 }
 .btn{
        margin-left: 150px;
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
  </style>
</head>
<body>
  <div class="m1 ">
    <form action="/add" method="POST">
      @csrf
      <div class="m2">
        <h2>ADD POST</h2>
            <table>
                <tr>
                    <td><label for="">Image</label></td>
                    <td><input class='form-control' type="file" name="" id=""></td>
                </tr>
                <tr>
                    <td><label for="">Title</label></td>
                    <td><input class='form-control' type="text" name="" id=""></td>
                </tr><tr>
                    <td><label for="">Description</label></td>
                    <td><textarea class='form-control' name="" id="" cols="30" rows="10"></textarea></td>
                </tr><tr>
                    <td><label for="">date</label></td>
                    <td><input class='form-control' type="date" name="" id=""></td>
                </tr>
            </table>
                               
          <button type="submit" class="btn btn-light">ADD</button>
        </div>
        
    </form>
    </div>
</body>
</html>

    
  
  
  
    
