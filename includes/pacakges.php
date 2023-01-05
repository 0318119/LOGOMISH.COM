

    <ul class="nav nav-tabs portfolio-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="tab_421" data-toggle="tab" href="#Logopac" role="tab"
                aria-controls="Logo Design" aria-selected="false">Logo Design</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="tab_422" data-toggle="tab" href="#Webpac" role="tab"
                aria-controls="Web Design" aria-selected="false">Web Design</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="tab_423" data-toggle="tab" href="#Videopac" role="tab"
                aria-controls="Video Animation" aria-selected="false">Video Animation</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="tab_424" data-toggle="tab" href="#Printpac" role="tab"
                aria-controls="Print Design" aria-selected="false">Print Design</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="tab_425" data-toggle="tab" href="#SEOpackages" role="tab" aria-controls="SEO"
                aria-selected="false">SEO</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="tab_426" data-toggle="tab" href="#eCommercepac" role="tab"
                aria-controls="E-Commerce" aria-selected="false">E-Commerce</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="tab_427" data-toggle="tab" href="#Contentpac" role="tab"
                aria-controls="Content Writing" aria-selected="false">Content Writing</a>
        </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content container">
        <div class="tab-pane fade in show active" id="Logopac" role="tabpanel" aria-labelledby="profile-tab">
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

        <div class="tab-pane fade in show" id="Webpac" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row justify-content-center">
                <?php 
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

        <div class="tab-pane fade in show" id="Videopac" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row justify-content-center">
                <?php 
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

        <div class="tab-pane fade in show" id="Printpac" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row justify-content-center">
                <?php 
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
            </div>
        </div>

        <div class="tab-pane fade in show" id="SEOpackages" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row justify-content-center">
                <?php 
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

        <div class="tab-pane fade in show" id="eCommercepac" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row justify-content-center">
                <?php 
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
   
   

