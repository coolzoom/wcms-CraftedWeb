<?php
#   ___           __ _           _ __    __     _     
#  / __\ __ __ _ / _| |_ ___  __| / / /\ \ \___| |__  
# / / | '__/ _` | |_| __/ _ \/ _` \ \/  \/ / _ \ '_ \ 
#/ /__| | | (_| |  _| ||  __/ (_| |\  /\  /  __/ |_) |
#\____/_|  \__,_|_|  \__\___|\__,_| \/  \/ \___|_.__/ 
#
#		-[ Created by �Nomsoft
#		  `-[ Original core by Anthony (Aka. CraftedDev)
#
#				-CraftedWeb Generation II-                  
#			 __                           __ _   							   
#		  /\ \ \___  _ __ ___  ___  ___  / _| |_ 							   
#		 /  \/ / _ \| '_ ` _ \/ __|/ _ \| |_| __|							   
#		/ /\  / (_) | | | | | \__ \ (_) |  _| |_ 							   
#		\_\ \/ \___/|_| |_| |_|___/\___/|_|  \__|	- www.Nomsoftware.com -	   
#                  The policy of Nomsoftware states: Releasing our software   
#                  or any other files are protected. You cannot re-release    
#                  anywhere unless you were given permission.                 
#                  � Nomsoftware 'Nomsoft' 2011-2012. All rights reserved.    

    global $Account;
?>
<div class='box_two_title'>Login</div>
Please log in to view this page. <hr/>
<?php
    if (isset($_POST['x_login']))
        $Account->logIn($_POST['x_username'], $_POST['x_password'], $_POST['x_redirect'], $_POST['x_remember']);
?>
<form action="?page=login" method="post">
    <table>
        <tr>
            <td>Username:</td>
            <td><input type="text" name="x_username"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="x_password"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="checkbox" name="x_remember"> Remember Me</td>
        </tr>
        <tr>
            <td><input type="hidden" value="<?php echo $_GET['r']; ?>" name="x_redirect"></td>
            <td><input type="submit" value="Log In" name="x_login"></td>
        </tr>
    </table>
</form>