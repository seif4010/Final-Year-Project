<?php 

    require_once 'header.php';

    $email = $_SESSION['admin_login'];

?>


<div class="basic-price-table">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <?php 
                                if(isset($success)){
                                    ?>
                <div class="alert alert-success alert-dismissible fade show mt-3 mb-3" role="alert">
                    <?= $success ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                                }
                            ?>

                <?php 
                                if(isset($error)){
                                    ?>
                <div class="alert alert-danger alert-dismissible fade show mt-3 mb-3" role="alert"><?= $error ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                                }
                            ?>

                <table class="table table-bordered table-striped table-hover mt-5 mb-5">
                    <thead>
                        <tr>
                            <td colspan="12">
                                <h3>Manage Cargos</h3>
                            </td>
                        </tr>
                        <tr>
                            <th>Destination To Destination</th>
                            <th scope="col">Tracking ID</th>
                            <th scope="col">Sender Name</th>
                            <th scope="col">Sender Contact</th>
                            <th scope="col">Sender Address</th>
                            <th scope="col">Sender City</th>
                            <th scope="col">Receiver Name</th>
                            <th scope="col">Receiver Contact</th>
                            <th scope="col">Receiver Address</th>
                            <th scope="col">Receiver City</th>
                            <th scope="col">Order Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                
                                $result = mysqli_query($connect, "SELECT * FROM `cargo` WHERE ( `sender_city` = 'Nairobi' OR `sender_city` = 'Kiambu') AND ( `receiver_city` = 'Nairobi' OR `receiver_city` = 'Kiambu' ) AND `status` = 1 ");

                                while($row = mysqli_fetch_assoc($result)){

                                ?>
                        <tr>
                            <td>Nairobi - Kiambu Cargo Books</td>
                            <td><?= $row['tracking_id'] ?></td>
                            <td><?= $row['sender_name'] ?></td>
                            <td><?= $row['sender_contact'] ?></td>
                            <td><?= $row['sender_address'] ?></td>
                            <td><?= $row['sender_city'] ?></td>
                            <td><?= $row['receiver_name'] ?></td>
                            <td><?= $row['receiver_contact'] ?></td>
                            <td><?= $row['receiver_address'] ?></td>
                            <td><?= $row['receiver_city'] ?></td>
                            <td><?= date('d-M-Y', strtotime($row['date'])) ?></td>
                            <td><a style="text-decoration: none;"
                                    href="cargo-details.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>">See
                                    Full Details</a> <a style="text-decoration: none;"
                                    href="manage-cargo.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">Manage
                                    Cargo</a> <a style="text-decoration: none;"
                                    href="book-driver.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">BookDriver</a>
                            </td>

                        </tr>

                        <?php 
                                    
                                } ?>

                        <?php 
                                
                                $result = mysqli_query($connect, "SELECT * FROM `cargo` WHERE ( `sender_city` = 'Nairobi' OR `sender_city` = 'Mandera') AND ( `receiver_city` = 'Nairobi' OR `receiver_city` = 'Mandera' ) AND `status` = 1 ");

                                while($row = mysqli_fetch_assoc($result)){

                                ?>
                        <tr>
                            <td>Nairobi - Mandera Cargo Books</td>
                            <td><?= $row['tracking_id'] ?></td>
                            <td><?= $row['sender_name'] ?></td>
                            <td><?= $row['sender_contact'] ?></td>
                            <td><?= $row['sender_address'] ?></td>
                            <td><?= $row['sender_city'] ?></td>
                            <td><?= $row['receiver_name'] ?></td>
                            <td><?= $row['receiver_contact'] ?></td>
                            <td><?= $row['receiver_address'] ?></td>
                            <td><?= $row['receiver_city'] ?></td>
                            <td><?= date('d-M-Y', strtotime($row['date'])) ?></td>
                            <td><a style="text-decoration: none;"
                                    href="cargo-details.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>">See
                                    Full Details</a> <a style="text-decoration: none;"
                                    href="manage-cargo.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">Manage
                                    Cargo</a> <a style="text-decoration: none;"
                                    href="book-driver.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">BookDriver</a>
                            </td>

                        </tr>

                        <?php 
                                    
                                } ?>


                        <?php 
                                
                                $result = mysqli_query($connect, "SELECT * FROM `cargo` WHERE ( `sender_city` = 'Nairobi' OR `sender_city` = 'Kericho') AND ( `receiver_city` = 'Nairobi' OR `receiver_city` = 'Kericho' ) AND `status` = 1 ");

                                while($row = mysqli_fetch_assoc($result)){

                                ?>
                        <tr>
                            <td>Nairobi - Kericho Cargo Books</td>
                            <td><?= $row['tracking_id'] ?></td>
                            <td><?= $row['sender_name'] ?></td>
                            <td><?= $row['sender_contact'] ?></td>
                            <td><?= $row['sender_address'] ?></td>
                            <td><?= $row['sender_city'] ?></td>
                            <td><?= $row['receiver_name'] ?></td>
                            <td><?= $row['receiver_contact'] ?></td>
                            <td><?= $row['receiver_address'] ?></td>
                            <td><?= $row['receiver_city'] ?></td>
                            <td><?= date('d-M-Y', strtotime($row['date'])) ?></td>
                            <td><a style="text-decoration: none;"
                                    href="cargo-details.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>">See
                                    Full Details</a> <a style="text-decoration: none;"
                                    href="manage-cargo.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">Manage
                                    Cargo</a> <a style="text-decoration: none;"
                                    href="book-driver.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">BookDriver</a>
                            </td>

                        </tr>

                        <?php 
                                    
                                } ?>


                        <?php 
                                
                                $result = mysqli_query($connect, "SELECT * FROM `cargo` WHERE ( `sender_city` = 'Nairobi' OR `sender_city` = 'Kisumu') AND ( `receiver_city` = 'Nairobi' OR `receiver_city` = 'Kisumu' ) AND `status` = 1 ");

                                while($row = mysqli_fetch_assoc($result)){

                                ?>
                        <tr>
                            <td>Nairobi - Kisumu Cargo Books</td>
                            <td><?= $row['tracking_id'] ?></td>
                            <td><?= $row['sender_name'] ?></td>
                            <td><?= $row['sender_contact'] ?></td>
                            <td><?= $row['sender_address'] ?></td>
                            <td><?= $row['sender_city'] ?></td>
                            <td><?= $row['receiver_name'] ?></td>
                            <td><?= $row['receiver_contact'] ?></td>
                            <td><?= $row['receiver_address'] ?></td>
                            <td><?= $row['receiver_city'] ?></td>
                            <td><?= date('d-M-Y', strtotime($row['date'])) ?></td>
                            <td><a style="text-decoration: none;"
                                    href="cargo-details.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>">See
                                    Full Details</a> <a style="text-decoration: none;"
                                    href="manage-cargo.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">Manage
                                    Cargo</a> <a style="text-decoration: none;"
                                    href="book-driver.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">BookDriver</a>
                            </td>

                        </tr>

                        <?php 
                                    
                                } ?>


                        <?php 
                                
                                $result = mysqli_query($connect, "SELECT * FROM `cargo` WHERE ( `sender_city` = 'Nairobi' OR `sender_city` = 'Busia') AND ( `receiver_city` = 'Nairobi' OR `receiver_city` = 'Busia' ) AND `status` = 1 ");

                                while($row = mysqli_fetch_assoc($result)){

                                ?>
                        <tr>
                            <td>Nairobi - Busia Cargo Books</td>
                            <td><?= $row['tracking_id'] ?></td>
                            <td><?= $row['sender_name'] ?></td>
                            <td><?= $row['sender_contact'] ?></td>
                            <td><?= $row['sender_address'] ?></td>
                            <td><?= $row['sender_city'] ?></td>
                            <td><?= $row['receiver_name'] ?></td>
                            <td><?= $row['receiver_contact'] ?></td>
                            <td><?= $row['receiver_address'] ?></td>
                            <td><?= $row['receiver_city'] ?></td>
                            <td><?= date('d-M-Y', strtotime($row['date'])) ?></td>
                            <td><a style="text-decoration: none;"
                                    href="cargo-details.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>">See
                                    Full Details</a> <a style="text-decoration: none;"
                                    href="manage-cargo.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">Manage
                                    Cargo</a> <a style="text-decoration: none;"
                                    href="book-driver.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">BookDriver</a>
                            </td>

                        </tr>

                        <?php 
                                    
                                } ?>

                        <?php 
                                
                                $result = mysqli_query($connect, "SELECT * FROM `cargo` WHERE ( `sender_city` = 'Nairobi' OR `sender_city` = 'Nanyuki') AND ( `receiver_city` = 'Nairobi' OR `receiver_city` = 'Nanyuki' ) AND `status` = 1 ");

                                while($row = mysqli_fetch_assoc($result)){

                                ?>
                        <tr>
                            <td>Nairobi - Nanyuki Cargo Books</td>
                            <td><?= $row['tracking_id'] ?></td>
                            <td><?= $row['sender_name'] ?></td>
                            <td><?= $row['sender_contact'] ?></td>
                            <td><?= $row['sender_address'] ?></td>
                            <td><?= $row['sender_city'] ?></td>
                            <td><?= $row['receiver_name'] ?></td>
                            <td><?= $row['receiver_contact'] ?></td>
                            <td><?= $row['receiver_address'] ?></td>
                            <td><?= $row['receiver_city'] ?></td>
                            <td><?= date('d-M-Y', strtotime($row['date'])) ?></td>
                            <td><a style="text-decoration: none;"
                                    href="cargo-details.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>">See
                                    Full Details</a> <a style="text-decoration: none;"
                                    href="manage-cargo.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">Manage
                                    Cargo</a> <a style="text-decoration: none;"
                                    href="book-driver.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">BookDriver</a>
                            </td>

                        </tr>

                        <?php 
                                    
                                } ?>

                        <?php 
                                
                                $result = mysqli_query($connect, "SELECT * FROM `cargo` WHERE ( `sender_city` = 'Nairobi' OR `sender_city` = 'Mombasa') AND ( `receiver_city` = 'Nairobi' OR `receiver_city` = 'Mombasa' ) AND `status` = 1 ");

                                while($row = mysqli_fetch_assoc($result)){

                                ?>
                        <tr>
                            <td>Nairobi - Mombasa Cargo Books</td>
                            <td><?= $row['tracking_id'] ?></td>
                            <td><?= $row['sender_name'] ?></td>
                            <td><?= $row['sender_contact'] ?></td>
                            <td><?= $row['sender_address'] ?></td>
                            <td><?= $row['sender_city'] ?></td>
                            <td><?= $row['receiver_name'] ?></td>
                            <td><?= $row['receiver_contact'] ?></td>
                            <td><?= $row['receiver_address'] ?></td>
                            <td><?= $row['receiver_city'] ?></td>
                            <td><?= date('d-M-Y', strtotime($row['date'])) ?></td>
                            <td><a style="text-decoration: none;"
                                    href="cargo-details.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>">See
                                    Full Details</a> <a style="text-decoration: none;"
                                    href="manage-cargo.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">Manage
                                    Cargo</a> <a style="text-decoration: none;"
                                    href="book-driver.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">BookDriver</a>
                            </td>

                        </tr>

                        <?php 
                                    
                                } ?>
                        <?php 
                                
                                $result = mysqli_query($connect, "SELECT * FROM `cargo` WHERE ( `sender_city` = 'Nairobi' OR `sender_city` = 'Garissa') AND ( `receiver_city` = 'Nairobi' OR `receiver_city` = 'Garissa' ) AND `status` = 1 ");

                                while($row = mysqli_fetch_assoc($result)){

                                ?>
                        <tr>
                            <td>Nairobi - Garissa Cargo Books</td>
                            <td><?= $row['tracking_id'] ?></td>
                            <td><?= $row['sender_name'] ?></td>
                            <td><?= $row['sender_contact'] ?></td>
                            <td><?= $row['sender_address'] ?></td>
                            <td><?= $row['sender_city'] ?></td>
                            <td><?= $row['receiver_name'] ?></td>
                            <td><?= $row['receiver_contact'] ?></td>
                            <td><?= $row['receiver_address'] ?></td>
                            <td><?= $row['receiver_city'] ?></td>
                            <td><?= date('d-M-Y', strtotime($row['date'])) ?></td>
                            <td><a style="text-decoration: none;"
                                    href="cargo-details.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>">See
                                    Full Details</a> <a style="text-decoration: none;"
                                    href="manage-cargo.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">Manage
                                    Cargo</a> <a style="text-decoration: none;"
                                    href="book-driver.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">BookDriver</a>
                            </td>

                        </tr>
                        <?php 
                                    
                                } ?>

                                <!-- new table row -->
                        <?php 
                                
                                $result = mysqli_query($connect, "SELECT * FROM `cargo` WHERE ( `sender_city` = 'Nairobi' OR `sender_city` = 'Mandera') AND ( `receiver_city` = 'Nairobi' OR `receiver_city` = 'Mandera' ) AND `status` = 1 ");

                                while($row = mysqli_fetch_assoc($result)){

                                ?>
                        <tr>
                            <td>Nairobi - Mandera Cargo Books</td>
                            <td><?= $row['tracking_id'] ?></td>
                            <td><?= $row['sender_name'] ?></td>
                            <td><?= $row['sender_contact'] ?></td>
                            <td><?= $row['sender_address'] ?></td>
                            <td><?= $row['sender_city'] ?></td>
                            <td><?= $row['receiver_name'] ?></td>
                            <td><?= $row['receiver_contact'] ?></td>
                            <td><?= $row['receiver_address'] ?></td>
                            <td><?= $row['receiver_city'] ?></td>
                            <td><?= date('d-M-Y', strtotime($row['date'])) ?></td>
                            <td><a style="text-decoration: none;"
                                    href="cargo-details.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>">See
                                    Full Details</a> <a style="text-decoration: none;"
                                    href="manage-cargo.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">Manage
                                    Cargo</a> <a style="text-decoration: none;"
                                    href="book-driver.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">BookDriver</a>
                            </td>

                        </tr>

                        <?php 
                                    
                                } ?> 
                                
                        <!-- new table row -->
                        <?php 
                                
                                $result = mysqli_query($connect, "SELECT * FROM `cargo` WHERE ( `sender_city` = 'Nairobi' OR `sender_city` = 'Machakos') AND ( `receiver_city` = 'Nairobi' OR `receiver_city` = 'Machakos' ) AND `status` = 1 ");

                                while($row = mysqli_fetch_assoc($result)){

                                ?>
                        <tr>
                            <td>Nairobi - Machakos Cargo Books</td>
                            <td><?= $row['tracking_id'] ?></td>
                            <td><?= $row['sender_name'] ?></td>
                            <td><?= $row['sender_contact'] ?></td>
                            <td><?= $row['sender_address'] ?></td>
                            <td><?= $row['sender_city'] ?></td>
                            <td><?= $row['receiver_name'] ?></td>
                            <td><?= $row['receiver_contact'] ?></td>
                            <td><?= $row['receiver_address'] ?></td>
                            <td><?= $row['receiver_city'] ?></td>
                            <td><?= date('d-M-Y', strtotime($row['date'])) ?></td>
                            <td><a style="text-decoration: none;"
                                    href="cargo-details.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>">See
                                    Full Details</a> <a style="text-decoration: none;"
                                    href="manage-cargo.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">Manage
                                    Cargo</a> <a style="text-decoration: none;"
                                    href="book-driver.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">BookDriver</a>
                            </td>

                        </tr>

                        <?php 
                                    
                                } ?> 
                                
                        <!-- new table row -->
                        <?php 
                                
                                $result = mysqli_query($connect, "SELECT * FROM `cargo` WHERE ( `sender_city` = 'Nairobi' OR `sender_city` = 'Nanyuki') AND ( `receiver_city` = 'Nairobi' OR `receiver_city` = 'Nanyuki' ) AND `status` = 1 ");

                                while($row = mysqli_fetch_assoc($result)){

                                ?>
                        <tr>
                            <td>Nairobi - Nanyuki Cargo Books</td>
                            <td><?= $row['tracking_id'] ?></td>
                            <td><?= $row['sender_name'] ?></td>
                            <td><?= $row['sender_contact'] ?></td>
                            <td><?= $row['sender_address'] ?></td>
                            <td><?= $row['sender_city'] ?></td>
                            <td><?= $row['receiver_name'] ?></td>
                            <td><?= $row['receiver_contact'] ?></td>
                            <td><?= $row['receiver_address'] ?></td>
                            <td><?= $row['receiver_city'] ?></td>
                            <td><?= date('d-M-Y', strtotime($row['date'])) ?></td>
                            <td><a style="text-decoration: none;"
                                    href="cargo-details.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>">See
                                    Full Details</a> <a style="text-decoration: none;"
                                    href="manage-cargo.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">Manage
                                    Cargo</a> <a style="text-decoration: none;"
                                    href="book-driver.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">BookDriver</a>
                            </td>

                        </tr>

                        <?php 
                                    
                                } ?>                    

                        <!-- new table row -->
                        <?php 
                                
                                $result = mysqli_query($connect, "SELECT * FROM `cargo` WHERE ( `sender_city` = 'Nairobi' OR `sender_city` = 'Lamu') AND ( `receiver_city` = 'Nairobi' OR `receiver_city` = 'Lamu' ) AND `status` = 1 ");

                                while($row = mysqli_fetch_assoc($result)){

                                ?>
                        <tr>
                            <td>Nairobi - Lamu Cargo Books</td>
                            <td><?= $row['tracking_id'] ?></td>
                            <td><?= $row['sender_name'] ?></td>
                            <td><?= $row['sender_contact'] ?></td>
                            <td><?= $row['sender_address'] ?></td>
                            <td><?= $row['sender_city'] ?></td>
                            <td><?= $row['receiver_name'] ?></td>
                            <td><?= $row['receiver_contact'] ?></td>
                            <td><?= $row['receiver_address'] ?></td>
                            <td><?= $row['receiver_city'] ?></td>
                            <td><?= date('d-M-Y', strtotime($row['date'])) ?></td>
                            <td><a style="text-decoration: none;"
                                    href="cargo-details.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>">See
                                    Full Details</a> <a style="text-decoration: none;"
                                    href="manage-cargo.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">Manage
                                    Cargo</a> <a style="text-decoration: none;"
                                    href="book-driver.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">BookDriver</a>
                            </td>

                        </tr>

                        <?php 
                                    
                                } ?>                    
                        <!-- new table row -->
                        <?php 
                                
                                $result = mysqli_query($connect, "SELECT * FROM `cargo` WHERE ( `sender_city` = 'Busia' OR `sender_city` = 'Nairobi') AND ( `receiver_city` = 'Busia' OR `receiver_city` = 'Nairobi' ) AND `status` = 1 ");

                                while($row = mysqli_fetch_assoc($result)){

                                ?>
                        <tr>
                            <td>Busia - Nairobi Cargo Books</td>
                            <td><?= $row['tracking_id'] ?></td>
                            <td><?= $row['sender_name'] ?></td>
                            <td><?= $row['sender_contact'] ?></td>
                            <td><?= $row['sender_address'] ?></td>
                            <td><?= $row['sender_city'] ?></td>
                            <td><?= $row['receiver_name'] ?></td>
                            <td><?= $row['receiver_contact'] ?></td>
                            <td><?= $row['receiver_address'] ?></td>
                            <td><?= $row['receiver_city'] ?></td>
                            <td><?= date('d-M-Y', strtotime($row['date'])) ?></td>
                            <td><a style="text-decoration: none;"
                                    href="cargo-details.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>">See
                                    Full Details</a> <a style="text-decoration: none;"
                                    href="manage-cargo.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">Manage
                                    Cargo</a> <a style="text-decoration: none;"
                                    href="book-driver.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">BookDriver</a>
                            </td>

                        </tr>

                        <?php 
                                    
                                } ?>   
                        <!-- new table row -->
                        <?php 
                                
                                $result = mysqli_query($connect, "SELECT * FROM `cargo` WHERE ( `sender_city` = 'Nairobi' OR `sender_city` = 'Busia') AND ( `receiver_city` = 'Nairobi' OR `receiver_city` = 'Busia' ) AND `status` = 1 ");

                                while($row = mysqli_fetch_assoc($result)){

                                ?>
                        <tr>
                            <td>Nairobi - Busia Cargo Books</td>
                            <td><?= $row['tracking_id'] ?></td>
                            <td><?= $row['sender_name'] ?></td>
                            <td><?= $row['sender_contact'] ?></td>
                            <td><?= $row['sender_address'] ?></td>
                            <td><?= $row['sender_city'] ?></td>
                            <td><?= $row['receiver_name'] ?></td>
                            <td><?= $row['receiver_contact'] ?></td>
                            <td><?= $row['receiver_address'] ?></td>
                            <td><?= $row['receiver_city'] ?></td>
                            <td><?= date('d-M-Y', strtotime($row['date'])) ?></td>
                            <td><a style="text-decoration: none;"
                                    href="cargo-details.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>">See
                                    Full Details</a> <a style="text-decoration: none;"
                                    href="manage-cargo.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">Manage
                                    Cargo</a> <a style="text-decoration: none;"
                                    href="book-driver.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">BookDriver</a>
                            </td>

                        </tr>

                        <?php 
                                    
                                } ?>   

                        <!-- new table row -->
                        <?php 
                                
                                $result = mysqli_query($connect, "SELECT * FROM `cargo` WHERE ( `sender_city` = 'Mombasa' OR `sender_city` = 'Nairobi') AND ( `receiver_city` = 'Mombasa' OR `receiver_city` = 'Nairobi' ) AND `status` = 1 ");

                                while($row = mysqli_fetch_assoc($result)){

                                ?>
                        <tr>
                            <td>Mombasa - Nairobi Cargo Books</td>
                            <td><?= $row['tracking_id'] ?></td>
                            <td><?= $row['sender_name'] ?></td>
                            <td><?= $row['sender_contact'] ?></td>
                            <td><?= $row['sender_address'] ?></td>
                            <td><?= $row['sender_city'] ?></td>
                            <td><?= $row['receiver_name'] ?></td>
                            <td><?= $row['receiver_contact'] ?></td>
                            <td><?= $row['receiver_address'] ?></td>
                            <td><?= $row['receiver_city'] ?></td>
                            <td><?= date('d-M-Y', strtotime($row['date'])) ?></td>
                            <td><a style="text-decoration: none;"
                                    href="cargo-details.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>">See
                                    Full Details</a> <a style="text-decoration: none;"
                                    href="manage-cargo.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">Manage
                                    Cargo</a> <a style="text-decoration: none;"
                                    href="book-driver.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">BookDriver</a>
                            </td>

                        </tr>

                        <?php 
                                    
                                } ?>  

                        <!-- new table row -->
                        <?php 
                                
                                $result = mysqli_query($connect, "SELECT * FROM `cargo` WHERE ( `sender_city` = 'Kisumu' OR `sender_city` = 'Nairobi') AND ( `receiver_city` = 'Kisumu' OR `receiver_city` = 'Nairobi' ) AND `status` = 1 ");

                                while($row = mysqli_fetch_assoc($result)){

                                ?>
                        <tr>
                            <td>Kisumu - Nairobi Cargo Books</td>
                            <td><?= $row['tracking_id'] ?></td>
                            <td><?= $row['sender_name'] ?></td>
                            <td><?= $row['sender_contact'] ?></td>
                            <td><?= $row['sender_address'] ?></td>
                            <td><?= $row['sender_city'] ?></td>
                            <td><?= $row['receiver_name'] ?></td>
                            <td><?= $row['receiver_contact'] ?></td>
                            <td><?= $row['receiver_address'] ?></td>
                            <td><?= $row['receiver_city'] ?></td>
                            <td><?= date('d-M-Y', strtotime($row['date'])) ?></td>
                            <td><a style="text-decoration: none;"
                                    href="cargo-details.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>">See
                                    Full Details</a> <a style="text-decoration: none;"
                                    href="manage-cargo.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">Manage
                                    Cargo</a> <a style="text-decoration: none;"
                                    href="book-driver.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">BookDriver</a>
                            </td>

                        </tr>

                        <?php 
                                    
                                } ?>   

                        <!-- new table row -->
                        <?php 
                                
                                $result = mysqli_query($connect, "SELECT * FROM `cargo` WHERE ( `sender_city` = 'Mandera' OR `sender_city` = 'Mandera') AND ( `receiver_city` = 'Nairobi' OR `receiver_city` = 'Nairobi' ) AND `status` = 1 ");

                                while($row = mysqli_fetch_assoc($result)){

                                ?>
                        <tr>
                            <td>Mandera - Nairobi Cargo Books</td>
                            <td><?= $row['tracking_id'] ?></td>
                            <td><?= $row['sender_name'] ?></td>
                            <td><?= $row['sender_contact'] ?></td>
                            <td><?= $row['sender_address'] ?></td>
                            <td><?= $row['sender_city'] ?></td>
                            <td><?= $row['receiver_name'] ?></td>
                            <td><?= $row['receiver_contact'] ?></td>
                            <td><?= $row['receiver_address'] ?></td>
                            <td><?= $row['receiver_city'] ?></td>
                            <td><?= date('d-M-Y', strtotime($row['date'])) ?></td>
                            <td><a style="text-decoration: none;"
                                    href="cargo-details.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>">See
                                    Full Details</a> <a style="text-decoration: none;"
                                    href="manage-cargo.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">Manage
                                    Cargo</a> <a style="text-decoration: none;"
                                    href="book-driver.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">BookDriver</a>
                            </td>

                        </tr>

                        <?php 
                                    
                                } ?>   

                        <!-- new table row -->
                        <?php 
                                
                                $result = mysqli_query($connect, "SELECT * FROM `cargo` WHERE ( `sender_city` = 'Nairobi' OR `sender_city` = 'Voi') AND ( `receiver_city` = 'Nairobi' OR `receiver_city` = 'Voi' ) AND `status` = 1 ");

                                while($row = mysqli_fetch_assoc($result)){

                                ?>
                        <tr>
                            <td> Nairobi - Voi Cargo Books</td>
                            <td><?= $row['tracking_id'] ?></td>
                            <td><?= $row['sender_name'] ?></td>
                            <td><?= $row['sender_contact'] ?></td>
                            <td><?= $row['sender_address'] ?></td>
                            <td><?= $row['sender_city'] ?></td>
                            <td><?= $row['receiver_name'] ?></td>
                            <td><?= $row['receiver_contact'] ?></td>
                            <td><?= $row['receiver_address'] ?></td>
                            <td><?= $row['receiver_city'] ?></td>
                            <td><?= date('d-M-Y', strtotime($row['date'])) ?></td>
                            <td><a style="text-decoration: none;"
                                    href="cargo-details.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>">See
                                    Full Details</a> <a style="text-decoration: none;"
                                    href="manage-cargo.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">Manage
                                    Cargo</a> <a style="text-decoration: none;"
                                    href="book-driver.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">BookDriver</a>
                            </td>

                        </tr>

                        <?php 
                                    
                                } ?>   

                        <!-- new table row -->
                        <?php 
                                
                                $result = mysqli_query($connect, "SELECT * FROM `cargo` WHERE ( `sender_city` = 'Kiambu' OR `sender_city` = 'Nairobi') AND ( `receiver_city` = 'Kiambu' OR `receiver_city` = 'Nairobi' ) AND `status` = 1 ");

                                while($row = mysqli_fetch_assoc($result)){

                                ?>
                        <tr>
                            <td> Kiambu - Nairobi Cargo Books</td>
                            <td><?= $row['tracking_id'] ?></td>
                            <td><?= $row['sender_name'] ?></td>
                            <td><?= $row['sender_contact'] ?></td>
                            <td><?= $row['sender_address'] ?></td>
                            <td><?= $row['sender_city'] ?></td>
                            <td><?= $row['receiver_name'] ?></td>
                            <td><?= $row['receiver_contact'] ?></td>
                            <td><?= $row['receiver_address'] ?></td>
                            <td><?= $row['receiver_city'] ?></td>
                            <td><?= date('d-M-Y', strtotime($row['date'])) ?></td>
                            <td><a style="text-decoration: none;"
                                    href="cargo-details.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>">See
                                    Full Details</a> <a style="text-decoration: none;"
                                    href="manage-cargo.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">Manage
                                    Cargo</a> <a style="text-decoration: none;"
                                    href="book-driver.php?cargo-id=<?= base64_encode($row['id']) ?>&user-id=<?= base64_encode($row['user_id']) ?>&driver-id=<?= base64_encode($row['driver_id']) ?>">BookDriver</a>
                            </td> 

                        </tr>

                        <?php 
                                    
                                } ?>                    

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<script src="../js/bootstrap.bundle.min.js"></script>

</body>

</html>