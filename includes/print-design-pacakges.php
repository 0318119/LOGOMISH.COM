
            <?php 
            include "./config.php";
            $servername = DBHOST;
            $username = DBUSER;
            $password = DBPWD;
            $dbname = DBNAME;
            $con = mysqli_connect($servername, $username, $password, $dbname);
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
                $sqlselect = "SELECT * FROM packages WHERE package_type = '3' OR package_type = '4' ";
                $result = $con->query($sqlselect);
                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
            ?>
            <div class='col-lg-4 package_box'>
                <?php
                    $best_seller = '';
                    if ($row['best_seller'] == 1) {
                        $best_seller = 'popular'; 
                    }
                ?>
                <?php  $best_seller = '';
                if ($row['best_seller'] == 1) {
                    $best_seller = 'popular'; 
                }?>
                <div class="boxpackages <?php echo $best_seller; ?>" data-package-box>
                    <div class="packheads">
                        <h3 class="montfont">
                            <?php echo $row['name'];?>
                        </h3>
                        <p>Package</p>
                    </div>
                    <div class="packdetails">
                        <div class="packtitles">
                            <div class="fleft">
                                <h3 class="opensansfont">$ <?php echo $row['price'];?></h3>
                            </div>
                            <div class="fright">
                                <h4>50% OFF !<span class="cutprice">$ <?php echo $row['old_price'];?></span></h4>
                            </div>
                        </div>
                        <div class="wrap-pack-detail pricing-list">
                            <div class="slim-scroll">
                                <div data-package-scroll>
                                    <?php echo $row['description'];?>
                                </div>
                            </div>
                        </div>
                        <div class="botarea-pack">
                            <div class="fleft">
                            <a href="javascript:void(0)" class="montfont btn-orders startchat order-package"
                            data-toggle="modal" data-target="#popup_form" 
                            onclick="changes22('<?php echo $row['id'];?>', 
                            '<?php echo $row['name'];?>',
                            '<?php echo $row['price'];?>')"; >Start Project</a>
                            </div>
                            <div class="fright">
                                <div class="liovechats-bx chatt">
                                    <a href="javascript:;" title="">
                                        <span>Click here to</span>
                                        <h5 class="montfont">Live Chat</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } } else { ?>
                <center><strong>No Record Found</strong></center>
            <?php } ?>