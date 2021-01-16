<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/ajax-3.3.1.min.js"></script>
<?php
session_start();
include('connect.php');
if(isset($_SESSION['username']))
{
    $username=$_SESSION['username'];
    if(isset($_GET['skill']))
    {
        $table=$_GET['skill'];
        $id=$_GET['id'];
        $sql="select * from $table where id=$id";
        $result=mysqli_query($conn,$sql);
        $skill=mysqli_fetch_row($result);
        echo '<div class="container" align="center">
        <h2 class="text-uppercase">'.$table.'</h2>
        <div class="col-5">
            <form action="processupdate.php?table='.$table.'" method="post">
                <table class="table table-hover table-bordered">
                    <tbody>
                        <input type="hidden" class="form-control" name="id" value="'.$skill[3].'">
                        <tr>
                            <th scope="row">Name Skill</th>
                            <td><input type="text" class="form-control" name="skillname" value="'.$skill[1].'"></td>
                        </tr>
                        <tr>
                            <th scope="row">Percent</th>
                            <td><input type="number" min="0" max="100" class="form-control" name="percent" value="'.$skill[2].'"></td>
                        </tr>                       
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary">Update</button>
                <a name="" id="" class="btn btn-secondary" href="admin.php" role="button">Cancel</a>
            </form>
        </div>
    </div>';
    }
    else if(isset($_GET['exp']))
    {
        $table=$_GET['exp'];
        $id=$_GET['id'];
        $sql="select * from $table where id=$id";
        $result=mysqli_query($conn,$sql);
        $exp=mysqli_fetch_row($result);
        echo '<div class="container" align="center">
        <h2 class="text-uppercase">'.$table.'</h2>
        <div class="col-8">
            <form action="processupdate.php?table='.$table.'" method="post">
                <table class="table table-hover table-bordered">
                    <tbody>
                        <input type="hidden" class="form-control" name="id" value="'.$exp[4].'">
                        <tr>
                            <th scope="row">Name</th>
                            <td><input type="text" class="form-control" name="name" value="'.$exp[1].'"></td>
                        </tr>
                        <tr>
                            <th scope="row">Time</th>
                            <td><input type="text" class="form-control" name="time" value="'.$exp[2].'"></td>
                        </tr>
                        <tr>
                            <th scope="row">Description</th>
                            <td><textarea type="text"  class="form-control" name="mess">'.$exp[3].'</textarea></td>
                        </tr>                       
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary">Update</button>
                <a name="" id="" class="btn btn-secondary" href="admin.php" role="button">Cancel</a>
            </form>
        </div>
    </div>';
    }
    else
    {
        header("location:login.php");
    }
}
else
{
    header("location:login.php");
}