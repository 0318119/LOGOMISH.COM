<section class="main-design-portfolio pricing-main-sec">
    <div class="container">
        <div class="service-heading">
            <h2>Affordable FOR YOUR BUSINESS</h2>
            <span class="ser_agency_span"></span>
            <span class="ser_inner_border"></span>
            <h3>High Quality Services At Pocket Friendly Rates</h3>
            <p>Have a look at the packages below and select the one that fits
                your needs</p>
        </div>
    </div>
    <ul class="nav nav-tabs combo-package-ul" role="tablist">
        <li class="nav-item">
            <a href="#LogoCombo" class="nav-link active" data-toggle="tab">
                Logo </a>
        </li>
        <li class="nav-item">
            <a href="#WebsiteCombo" class="nav-link" data-toggle="tab">
                Website </a>
        </li>
        <li class="nav-item">
            <a href="#AnimationCombo" class="nav-link" data-toggle="tab">
                Animation </a>
        </li>
        <li class="nav-item">
            <a href="#CorporateCombo" class="nav-link" data-toggle="tab">
                Corporate Branding </a>
        </li>
        <li class="nav-item">
            <a href="#BrandCombo" class="nav-link" data-toggle="tab">
                Brand Collateral </a>
        </li>
        <li class="nav-item">
            <a href="#SocialCombo" class="nav-link" data-toggle="tab">
                Social Media </a>
        </li>
        <li class="nav-item">
            <a href="#SEOCombo" class="nav-link" data-toggle="tab">
                SEO </a>
        </li>
        <li class="nav-item">
            <a href="#EcoomerceCombo" class="nav-link" data-toggle="tab">
                E-coomerce </a>
        </li>
        <li class="nav-item">
            <a href="#LogoMishCombo" class="nav-link" data-toggle="tab">
                LogoMish Packages </a>
        </li>
        <li class="nav-item">
            <a href="#ContentCombo" class="nav-link" data-toggle="tab">
                Content Generation Packages </a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="container">
        <div class="tab-content row combo-pkg-tab-content">
            <div id="LogoCombo" class="tab-pane fade in show active">
                <div class="col-md-12 text-center">
                    <div class="row justify-content-center">
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
                            $sqlselect = "SELECT * FROM packages WHERE package_type = '1'";
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
                    </div>
                </div>
            </div>
            <div id="WebsiteCombo" class="tab-pane fade in">
                <div class="col-md-12 text-center">
                    <div class="row justify-content-center">
                    <?php 
                        $con = mysqli_connect($servername, $username, $password, $dbname);
                        if (mysqli_connect_errno()) {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        }
                            $sqlselect = "SELECT * FROM packages WHERE package_type = '2'";
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
                    </div>
                </div>
            </div>
            <div id="AnimationCombo" class="tab-pane fade in">
                <div class="col-md-12 text-center">
                    <div class="row justify-content-center">
                    <?php 
                        $con = mysqli_connect($servername, $username, $password, $dbname);
                        if (mysqli_connect_errno()) {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        }
                            $sqlselect = "SELECT * FROM packages WHERE package_type = '6'";
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
                    </div>
                </div>
            </div>
            <div id="CorporateCombo" class="tab-pane fade in">
                <div class="col-md-12 text-center">
                    <div class="row justify-content-center">
                    <?php 
                        $con = mysqli_connect($servername, $username, $password, $dbname);
                        if (mysqli_connect_errno()) {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        }
                            $sqlselect = "SELECT * FROM packages WHERE package_type = '3'";
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
                    </div>
                </div>
            </div>
            <div id="BrandCombo" class="tab-pane fade in">
                <div class="col-md-12 text-center">
                    <div class="row justify-content-center">
                    <?php 
                        $con = mysqli_connect($servername, $username, $password, $dbname);
                        if (mysqli_connect_errno()) {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        }
                            $sqlselect = "SELECT * FROM packages WHERE package_type = '4'";
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
                    </div>
                </div>
            </div>
            <div id="SocialCombo" class="tab-pane fade in">
                <div class="col-md-12 text-center">
                    <div class="row justify-content-center">
                    <?php 
                        $con = mysqli_connect($servername, $username, $password, $dbname);
                        if (mysqli_connect_errno()) {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        }
                            $sqlselect = "SELECT * FROM packages WHERE package_type = '5'";
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
                    </div>
                </div>
            </div>
            <div id="SEOCombo" class="tab-pane fade in">
                <div class="col-md-12 text-center">
                    <div class="row justify-content-center">
                    <?php 
                        $con = mysqli_connect($servername, $username, $password, $dbname);
                        if (mysqli_connect_errno()) {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        }
                            $sqlselect = "SELECT * FROM packages WHERE package_type = '9'";
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
                    </div>
                </div>
            </div>
            <div id="EcoomerceCombo" class="tab-pane fade in">
                <div class="col-md-12 text-center">
                    <div class="row justify-content-center">
                    <?php 
                        $con = mysqli_connect($servername, $username, $password, $dbname);
                        if (mysqli_connect_errno()) {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        }
                            $sqlselect = "SELECT * FROM packages WHERE package_type = '8'";
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
                    </div>
                </div>
            </div>
            <div id="LogoMishCombo" class="tab-pane fade in">
                <div class="col-md-12 text-center">
                    <div class="row justify-content-center">
                    <?php 
                        $con = mysqli_connect($servername, $username, $password, $dbname);
                        if (mysqli_connect_errno()) {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        }
                            $sqlselect = "SELECT * FROM packages WHERE package_type = '7'";
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
                    </div>
                </div>
            </div>
            <div id="ContentCombo" class="tab-pane fade in">
                <div class="col-md-12 text-center">
                    <div class="row justify-content-center">
                    <?php 
                        $con = mysqli_connect($servername, $username, $password, $dbname);
                        if (mysqli_connect_errno()) {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        }
                            $sqlselect = "SELECT * FROM packages WHERE package_type = '10'";
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>