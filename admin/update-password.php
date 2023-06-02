<?php include('partials/menu.php'); ?>

    <div class="main-content">
        <div class="wrapper">
            <h2>Change Password</h2>
            <br></br>

            <?php
                if(isset($_GET['id']))
                {
                    $id=$_GET['id'];
                    
                }
            ?>

            <form action="" method="POST">

                <table class="tbl-30">

                    <div class="formbold-mb-2">
                        <label for="username" class="formbold-form-label"> Password </label>
                        <input type="password" name="current_password" id="current_password" placeholder="Current Password" class="formbold-form-input" />
                    </div><br/>

                    <div class="formbold-mb-2">
                        <label for="username" class="formbold-form-label"> New Password </label>
                        <input type="password" name="new_password" id="new_password" placeholder="New Password" class="formbold-form-input" />
                    </div><br/>

                    <div class="formbold-mb-2">
                        <label for="confirm_password" class="formbold-form-label"> Confirm Password </label>
                        <input type="password" name="confirm_password" id="confirm_password" placeholder="Re-enter New Password" class="formbold-form-input" />
                    </div><br/>

                    <div class="formbold-mb-2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Save" class="btn btn-default waves-teal btn-success">
                    </div>

                </table>
            </form>
        </div>
    </div>


    <?php
        //check
        if(isset($_POST['submit']))
        {
            //echo "Clicked";

            // mendapatkan data
            $id=$_POST['id'];
            $current_password = md5($_POST['current_password']);
            $new_password = md5($_POST['new_password']);
            $confirm_password = md5($_POST['confirm_password']);

            // check current ID dan current Password
            $sql = "SELECT * FROM tbl_admin WHERE id=$id AND password='$current_password'";

            //execute the Query
            $res = mysqli_query($conn, $sql);

            if($res==true)
            {
                $count=mysqli_num_rows($res);

                if($count==1)
                {
                    //echo "User Found";

                    if($new_password==$confirm_password)
                    {
                        //echo "Password Match";
                        $sql2 = "UPDATE tbl_admin SET
                            password='$new_password'
                            WHERE id=$id
                            ";

                        $res2 = mysqli_query($conn, $sql2);

                        if($res2==true)
                        {
                            $_SESSION['change-pwd'] = "<div class='success'>Password Changed Successfully. </div>";
                            header('location:'.HOME.'admin/manage-admin.php');
                        }
                        else
                        {
                            $_SESSION['change-pwd'] = "<div class='error'>Failed to Change Password. </div>";
                            header('location:'.HOME.'admin/manage-admin.php');
                        }

                    }
                    else
                    {
                        $_SESSION['pwd-not-match'] = "<div class='error'>Password Did not Match. </div>";
                        header('location:'.HOME.'admin/manage-admin.php');

                    }
                }
                else 
                {
                    $_SESSION['user-not-found'] = "<div class='error'>User Not Found. </div>";
                    header('location:'.HOME.'admin/manage-admin.php');
                }
            }

            // check new Password dan confirm Password

            // mengubah Password
        }
    ?>

            

<?php include('partials/footer.php'); ?>