<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Search</title>
	<link href="css/multiColumnTemplate.css" rel="stylesheet" type="text/css">
	
</head>

<body>
	<div class="container">
	<header>
    <div class="primary_header">
      <a href="ayan.html"><h1 class="title"> Wajid Pedi Account</h1></a>
    </div>
    <nav class="secondary_header" id="menu">
      <div class="navbar">
  
  <div class="dropdown">
    <button class="dropbtn">Master 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
		 <i class="fa fa-caret-down"></i>
      <a href="dukaandar.html">Add Dukandar</a>
      <a href="#">Add Bepari</a>
      <a href="#">Add Gawal</a>
    </div>
	  
  </div> 
		  <a href="balance.php">Balance</a>
  <a href="#news">Reports</a>
<a href="search.php">Search</a>
  <a href="#amount">Amount</a>
</div>
		
    </nav>
  </header>
	
	
	
	<div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
	
		<br>
		
		<div class="col-ls-7">
                <div class="card mt-5">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                    <th>FirstName&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                    <th>LastName&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                    <th>Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                    <th>Balance&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                </tr>
							</thead>
							<tbody>
								<?php 
                                    $conn = mysqli_connect("localhost","root","","ayan");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM register WHERE CONCAT(firstname,lastname, phone, balance) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $items['id']; ?></td>
                                                    <td><?= $items['firstname']; ?></td>
                                                    <td><?= $items['lastname']; ?></td>
                                                    <td><?= $items['phone']; ?></td>
                                                    <td><?= $items['balance']; ?></td>
                                                </tr>
                                               <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
							</tbody>
                        </table>
                    </div>
                </div>
            </div>
		</div>
		</div>
</body>
</html>