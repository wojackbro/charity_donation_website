<?php
session_start();

	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);



	?>


<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Easy Charity </title>
  </head>
  <body>
		<head>
 <title>Welcome to Easy Charity!</title>
 <style type="text/css">
  h1 { text-align: center}
 </style>
<body>
 <h1> <font size="+2"> Donor's Donation History/ Notifications </font></H1>

	 <style type="text/css">
	  h1 { text-align: center}
	 </style>


		 <font size="1">Hello <?php echo $user_data['user_name'] ?></font><br>
		 <br>
		 <a href="msg_query.php"> Send a message</a> <br><br>
		 <a href="inbox.php">View inbox</a> <br><br>

				Your donation activity log: (From oldest to newest)
				<br>
				<?php
        // $ID= $user_data['user_id'];
				// $sql= "SELECT receiver_name,amount, acc_num FROM donation WHERE donor_id='$ID'";
				// $res=mysqli_query($con, $sql);
				// echo "<table border='1'>";
				// echo "<tr><td>Donated To</td><td>Amount Donated </td><td>Acc_num Donated to</td></tr>";
				// while ($row= mysqli_fetch_assoc($res)){

				// 	echo "<tr><td>{$row["receiver_name"]}</td><td>{$row["amount"]}</td><td>{$row["acc_num"]}</td></tr>";
				// }

				// echo "</table>";
?>

<br><br>

 <a href="donor_index.php">Go back</a><br>
	<a href="logout.php">Logout</a><br>
	 <a href="signup.php">Signup as donor/receiver</a><br>

	</body> -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>donation_history</title>
  </head>
  <body>
		<!-- navbar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarScroll"
          aria-controls="navbarScroll"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarScroll"
        >
          <ul
            class="navbar-nav me-2 my-2 my-lg-0 navbar-nav-scroll"
            style="--bs-scroll-height: 100px"
          >
            <li class="nav-item nav-text">
              <a href="receiver.php" class="btn" role="button">Home</a>
            </li>

            <li class="nav-item nav-text">
              <a href="msg_query.php" class="btn" role="button">Send Message</a>
            </li>

						<li class="nav-item nav-text">
              <a href="inbox.php" class="btn" role="button">Inbox</a>
            </li>

            <!-- <li class="nav-item nav-text">
              <a href="donation_history.php" class="btn" role="button"
                >Donation history</a
              >
            </li> -->

            <li class="nav-item">
              <a href="logout.php" class="btn btn-warning" role="button"
                >Log Out</a
              >
            </li>
          </ul>

        </div>
      </div>
    </nav>
    <h3 class="text-center">Receivers's Donation Received History/ Notifications</h3>
		<br>
		<div class="container">
      <p>Your received activity log: (From oldest to newest): </p>
      <br>
      <table class="table table-striped table-primary" >
          <thead>
            <tr >

              <th scope="col " class="text-center">Donated From</th>

              <th scope="col " class="text-center">Amount Donated</th>

              <th scope="col " class="text-center">Acc_num Donated From</th>

            </tr>
          </thead>
          <tbody>
            <tr class="td-text">
            <?php
              $ID= $user_data['user_id'];
							$sql= "SELECT donor_name,amount, acc_num FROM donation WHERE receiver_id='$ID'";
							$res=mysqli_query($con, $sql);

							while ($row= mysqli_fetch_assoc($res)){

								echo "<tr><td>{$row["donor_name"]}</td><td>{$row["amount"]}</td><td>{$row["acc_num"]}</td></tr>";
							}

							echo "</table>";
            ?>

            </tr>

          </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>
