
<?php
// hamza 
//  1 ,12, 011111111 , hamza@gmail.com
//adam
//4,14,01444444,adam@gmail.com
// seif 
// 2 ,13, 012222222 , seif@gmail.com
//aser
//3,2,016666666,aser@gmail.com
// hussien
// 5,38 , 0155555 , hussien@gmail.com

if($_POST){
    switch ($_POST['user']) {
        case 'Hamza':
            $name=$_POST['user'];
            $id=1;
            $age=12;
            $phone="0111111";
            $email="hamza@gmail.com";
            break;
        case 'Adam':
               $name=$_POST['user'];
                $id=4;
                $age=14;
                $phone="0144444";
                $email="adam@gmail.com";
                break;
         case 'Seif':
            $name=$_POST['user'];
            $id=2;
            $age=13;
            $phone="0122222";
            $email="seif@gmail.com";
                    break;
        case 'Aser':
                  $name=$_POST['user'];
                  $id=3;
                  $age=2;
                 $phone="0166666";
                 $email="aser@gmail.com";
                 break;
        
        default: 
        $name=$_POST['user'];
        $id=5;
        $age=38;
        $phone="0155555";
        $email="hussien@gmail.com";
    }
    $message = "<div class='alert alert-danger'>
    <ul>
        <li>
            id : $id
        </li> 
        <li>
            Name : $name
        </li> 
        <li>
            age : $age
        </li>
        <li>
            email : $email
        </li> 
        <li>
            phone : $phone
        </li> 
        
    </ul> 
  </div>";

}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-12 mt-5">
                  <h1 class="text-dark text-center h1"> Users </h1>
              </div>
              <div class="offset-4 col-4">
                    <form method="post">
                        <div class="form-group">
                          <label for="users">Users</label>
                          <select name="user" class="form-control" id="users">
                                <option value="Hamza">Hamza</option>
                                <option value="Adam">Adam</option>
                                <option value="Seif">Seif</option>
                                <option value="Aser">Aser</option>
                                <option value="Hussien">Hussien</option>
                          </select>
                        </div>
                        <div class="form-group">
                            <button name="sale"  class="btn btn-dark rounded">Get Data!</button>   
                        </div>
                    </form>
                    <?php if(isset($message)){ echo $message;} ?>
              </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>