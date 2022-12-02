<?php 

    require_once 'header.php';

    $email = $_SESSION['user_login'];
    $data_id = mysqli_query($connect, "SELECT `id` FROM `users` WHERE `email` = '$email'");
    $user_id;
    while($rowdata = mysqli_fetch_array($data_id)){
        $user_id = $rowdata['id'];
    }



    $total_price = 0;

    $result = mysqli_query($connect, "SELECT * FROM `price` WHERE `user_id` = '$user_id' AND `total_price` = '' ");

    while($row = mysqli_fetch_assoc($result)){

        $total_price = (int) $row['basic_price'] + (int) $row['weight_price'] + (int) $row['volume_price'];

    }

    if(isset($_POST['amount-submit'])){

        $amount = $_POST['amount'];

        if($amount == $total_price){
            
            $cargo_result = mysqli_query($connect, "SELECT `id` FROM `cargo` WHERE `user_id` = '$user_id' AND `status` = 0");
            $cargo_id;
            while($rowdata = mysqli_fetch_array($cargo_result)){
                $cargo_id = $rowdata['id'];
            }
            
            $result = mysqli_query($connect, "UPDATE `price` SET `total_price`= '$total_price' WHERE `user_id` = '$user_id' AND `cargo_id` = '$cargo_id' ");

            if($result){

                $cargo_status = mysqli_query($connect, "UPDATE `cargo` SET `status`= 1 WHERE `id` = '$cargo_id' AND `user_id` = '$user_id'");

                if($cargo_status){

                    $total_price = 0;
                    $success = "Thank You For Your Payment!";

                } else {

                    $error = "Something Went Wrong!";                    

                }

            } else{
                $error = "Something Went Wrong!";
            }

        } else{

            $error = "Please Pay Given Amount!";

        }

    }


?>


<!-- cargo's form -->
<section class="cargo-form mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="lg-offset-2 col-lg-8 col-md-12">

                <?php 
                                if(isset($success)){
                                    ?>
                <div class="alert alert-success alert-dismissible fade show mt-3 " role="alert">
                    <?= $success ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                                }
                            ?>

                <?php 
                                if(isset($error)){
                                    ?>
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert"><?= $error ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                                }
                            ?>

                <div class="sender-details mt-5 p-5" style="background-color: whitesmoke;">

                    <form method="POST" action="">

                        <h5 style="font-weight: bold;" class="text-center mb-5">Please Make Payment of
                            <?= $total_price ?>KSH</h5>

                        <div class="form-outline mb-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-label" for="form4Example1">Enter The Given Amount:</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" id="form4Example1" class="form-control" name="amount"
                                        placeholder="Enter The Given Amount" required />
                                </div>
                            </div>
                        </div>

                        <div class="button-sub text-center">
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-dark btn-block mt-4" name="amount-submit">Give
                                Payment</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="payment-method">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="payment-title text-center mt-5">
                    <h5>Other Payment Method Coming Soon!</h5>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5 mb-5">
            <div class="col-md-3 col-sm-6">
                <div class="pay-img text-center">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtgf7n4tD8l7js2YzexXnbYK7FRtB9ETn-mCZ5u7ISSFzZOKF8c1rvpev3OSkoceLAPH4&usqp=CAU" class="img-fluid" alt="visa card">
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="pay-img text-center">
                    <img src="https://kenyanmagazine.co.ke/wp-content/uploads/2021/02/images-6.jpeg" class="img-fluid" alt="mpesa">
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="pay-img text-center">
                    <img src="https://i.pcmag.com/imagery/reviews/068BjcjwBw0snwHIq0KNo5m-15..v1602794215.png" class="img-fluid" alt="paypal">
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="pay-img text-center">
                    <img src="https://www.pngall.com/wp-content/uploads/2016/07/Mastercard-Download-PNG.png" class="img-fluid" alt="master card">
                </div>
            </div>
        </div>
    </div>
</section>


<script src="../js/bootstrap.bundle.min.js"></script>

</body>

</html>


<!-- alternative.
1. visa card - https://cdn-icons-png.flaticon.com/512/217/217425.png
2. master card - https://cdn-icons-png.flaticon.com/512/329/329865.png
3. paypal - https://cdn-icons-png.flaticon.com/512/196/196565.png -->