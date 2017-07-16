<?php
/**
 * Created by PhpStorm.
 * User: Somnath
 * Date: 11-Jan-17
 * Template Name: Register
 * Time: 11:45 AM
 */
get_header();
$err = $_GET['id'];
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 panel panel-success"
             style="width:48%;padding-right:0px; padding-left: 0px; margin-top: 20px;margin-left:10px; ">
            <div class="panel-heading" style="background-color: #8aab6c;">
                <h3 class="panel-title">Registration Here</h3>
            </div>
            <div class="panel-body">
                <form id="signup-form" method="post" class="s-form wow zoomInUp" data-wow-delay="0.5s">
                    <div class="form-group col-md-12">
                        <label class="control-label" for="name">Enter Name: </label>
                        <input type="text" placeholder="FULL NAME" value="" name="uname" id="uname"
                               class="form-control"/>
                    </div>
                    <div class="form-group col-md-12">
                        <label class=" control-label" for="name">Email Address: </label>
                        <input type="email" placeholder="EMAIL ID" value="" name="uemail" id="uemail"
                               class="form-control"/>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="control-label" for="name">Phone Number: </label>
                        <input type="number" placeholder="PHONE NO" value="" name="uphone" id="uphone"
                               class="form-control"/>
                    </div>
                    <div class="form-group col-md-12">
                        <label class=" control-label" for="name">Enter Password:</label>
                        <input type="password" placeholder="PASSWORD" value="" name="upassword" id="upassword"
                               class="form-control"/>
                    </div>
                    <input type="button" name="btn_submit" class="btn  btn-success" id="btn_submit1" value="Submit"
                           style="float:right;margin-right: 17px;">

                </form>
            </div>
        </div>

        <div class="col-md-6 panel panel-success"
             style="width:48%;padding-right:0px; padding-left: 0px; margin-top: 20px;margin-left:25px; ">

            <div class="panel-heading">
                <h3 class="panel-title">Login Here</h3>
            </div>
            <form id="login" class="s-form wow zoomInUp" name="form" action="<?php echo home_url(); ?>/login/"
                  method="post">
                <div class="form-group col-md-12">
                    <label class="control-label" for="name">Enter Email: </label>
                    <input type="text" placeholder="Email Address" value="" name="username" id="username"
                           class="form-control" required/>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label" for="name">Enter Password: </label>
                    <input type="password" placeholder="Password" value="" name="password" id="password"
                           class="form-control" required/>
                </div>
                <input id="submit" class="btn btn btn-success" type="submit" name="submit" value="Login"
                       style="float:right;margin-right: 17px;margin-bottom: 10px;">
            </form>
            <p style="margin-left: 15px; color: #C93B37"><?php echo $err; ?></p>

        </div>

    </div>
</div>
<?php get_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
    var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
</script>
<script type="text/javascript">
    $(function () {
        $('#btn_submit1').click(function () {
            var name = $('#uname').val();
            var email = $('#uemail').val();
            var phone = $('#uphone').val();
            var password = $('#upassword').val();

            if (name == "") {
                alert(" Full Name is a required field");
                return false;
            }

            if (email == "") {
                alert("Email is a required field");
                return false;
            }

            if (phone == "") {
                alert("Phone is a required field");
                return false;
            }

            if (password == "") {
                alert("Password is a required field");
                return false;
            }

            var data = {
                'action': 'create_user',
                'name1': name,
                'email1': email,
                'phone1': phone,
                'password1': password
            };

            $.ajax({
                type: "POST",
                url: ajaxurl,
                data: data,
                success: function (response) {
                    alert(response);
                    $("#signup-form")[0].reset();
                },
                error: function (response) {
                    alert(response);
                    $("#signup-form")[0].reset();
                }
            });
        });
    });
</script>
