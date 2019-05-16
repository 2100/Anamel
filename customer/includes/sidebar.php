<div class="panel panel-default sidebar-menu"> <!-- panel panel-default sidebar-menu Begin -->

    <div class="panel-heading"> <!-- panel-heading Begin -->
        <center> <!-- Center Begin -->
            <img src="images/MM.png" alt="anamel logo" width="140" height="140">
        </center> <!-- Center Finish -->
        <br>
        <h3 align="center" class="panel-title"> <!-- Panel-title Begin -->
            Name: Mohamed Elmohamadi (MM)
        </h3><!-- Panel-title Finish -->
    </div> <!-- panel-heading Finish -->
    <div class="panel-body"> <!-- panel-body begin -->
        <ul class="nav-pills nav-stacked nav"> <!-- nav-pills nav-stacked-nav Begin -->
            <li class="<?php if(isset($_GET['my_orders'])){echo"active";}?>"> <!-- My_Orders 'active' class Begin -->
                <a href="my_account.php?my_orders">
                    <i class="fa fa-list"></i> My Orders
                </a>
            </li> <!-- My_Orders 'active' class End -->
            <li class="<?php if(isset($_GET['pay_offline'])){echo"active";}?>"> <!-- Pay_offline 'active' class Begin -->
                <a href="my_account.php?pay_offline">
                    <i class="fa fa-bolt"></i> Pay Offline
                </a>
            </li> <!-- Pay_offline 'active' class End -->
            <li class="<?php if(isset($_GET['edit_account'])){echo"active";}?>"> <!-- Edit_account 'active' class Begin -->
                <a href="my_account.php?edit_account">
                    <i class="fa fa-pencil"></i> Edit Account
                </a>
            </li> <!-- Edit_account 'active' class End -->
            <li class="<?php if(isset($_GET['change_pass'])){echo"active";}?>"> <!-- change_pass 'active' class Begin -->
                <a href="my_account.php?change_pass">
                    <i class="fa fa-user"></i> Change Password
                </a>
            </li> <!-- change_pass 'active' class End -->
            <li class="<?php if(isset($_GET['delete_account'])){echo"active";}?>"> <!-- delete_account 'active' class Begin -->
                <a href="my_account.php?delete_account">
                    <i class="fa fa-trash-o"></i> Delete Account
                </a>
            </li> <!-- delete_account 'active' class End -->
            <li class="logout.php"> <!-- Logout Begin -->
                <a href="my_account.php?change_pass">
                    <i class="fa fa-sign-out"></i> Log out
                </a>
            </li> <!-- Logout Finish -->
        </ul> <!-- nav-pills nav-stacked-nav Finish -->
    </div> <!-- panel-body body -->

</div> <!-- panel panel-default sidebar-menu Finish -->