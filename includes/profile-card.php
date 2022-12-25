

            <div class='card card-profile text-center'>
                <img alt='' class='card-img-top card-user-cover' src='./img/user.png'>
                <div class='card-block'>
                    <a href='profile.php'>
                        <img src='uploads/<?php echo $_SESSION["userImg"] ?>' class='card-img-profile'>
                    </a>
                    <?php  
                        // User Badge
                        if ($_SESSION['userLevel'] == 0)
                        {
                            echo '<img id="card-admin-badge" src="https://drive.google.com/uc?id=17urRssxXaPc6H-zE-LUSfNxrws9FgdXN">';
                        }
                    ?>
                    <a href="edit-profile.php">
                        <i class="fa fa-pencil fa-2x edit-profile" aria-hidden="true"></i>
                    </a>
                    <h4 class='card-title'>
                    <?php echo ucwords($_SESSION['userUid']); ?>
                        <small class="text-muted">
                            <?php echo ucwords($_SESSION['f_name']." ".$_SESSION['l_name']); ?>
                        </small>
                        <br>
                        <small class="text-muted"><?php echo $_SESSION['headline']; ?></small>
                        <br><br><br>
                    </h4>
                </div>
            </div>