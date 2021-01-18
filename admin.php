<?php
session_start();
if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$start = ($page - 1) * 10;
if(isset($_SESSION['username']))
{
    if($_SESSION['level']==1)
    {
        include('model/connect.php');
        $sql="select * from user where level=0 limit $start,10";
        $result=mysqli_query($conn,$sql);
        $users=mysqli_fetch_all($result);
    }
    else
    {
        header("location:profile.php");
    }
}
else
{
    header("location:login.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Admin page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="js/all.js"></script>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a class="navbar-brand text-light" href="#">ADMIN PAGE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-content">
            <ul class="navbar-nav ml-auto m-2">
            <li><a class="btn btn-success rounded-pill m-1" href="logout.php" role="button">Log Out</a></li>
        </ul>
        </div>
    </nav>
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-8 text-center mx-auto">
                <div>
                    <div class="text-center m-3">
                        <h2>User list</h2>
                    </div>
                </div>
                <table class="table table-bordered table-hover ">
                    <thead class="table-dark">
                        <tr>
                            <th>Status</th>
                            <th>Username</th>
                            <th>View</th>
                            <th>Set Pass</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i=($page-1)*10+1;
                            foreach($users as $user){ ?>
                        <tr>
                            <td><?php echo $i;$i++; ?></td>
                            <td><?php echo $user[0]; ?></td>                           
                            <td>
                                <a href="<?php echo $user[0]; ?>" class="btn btn-primary"><i class='fas fa-eye'></i></a>
                            </td>
                            <td>
                                <a href="setpass.php?user=<?php echo $user[0]; ?>" class="btn btn-warning"><i class='fas fa-edit'></i></a>
                            </td>
                            <td>
                                
                                <a onclick="return confirm('Do you want to delete this?')" href="deleteuser.php?user=<?php echo $user[0]; ?>" class="btn btn-danger"><i class='fas fa-trash'></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
              </div>
          </div>
      </div>
      <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <?php      
        $disable = ($page == 1) ? 'disabled' : '';
        if($page==1)
        {
            $page=2;
            $next=2;
        }
        else
        {
            $next=$page+1;
        }
        echo '<li class="page-item ' . $disable . '"><a class="page-link" href="admin.php?page=' . ($page - 1) . '" tabindex="-1" aria-disabled="true">Previous</a></li>';
        echo '<li class="page-item"><a class="page-link" href="admin.php?page=' . ($page -1) . '">' . ($page -1) . '</a></li>';
        echo '<li class="page-item"><a class="page-link" href="admin.php?page=' . ($page ) . '">' . ($page ) . '</a></li>';
        echo '<li class="page-item"><a class="page-link" href="admin.php?page=' . ($page + 1) . '">' . ($page + 1) . '</a></li>';
        echo '<li class="page-item"><a class="page-link" href="admin.php?page=' . $next . '">Next</a></li>';
        ?>
    </ul>
</nav>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>