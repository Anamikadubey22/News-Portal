<nav class="navbar fixed-top navbar-expand-lg navbar-dark fixed-top" style="background-color:green;">
  <div class="container">
    <a class="navbar-brand" href="index.php" style="margin-right: 20px;">
      <img src="images/Logo.jpg" height="50" width= "90px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Categories -->
    
    
    <ul class="navbar-nav ml-auto d-flex align-items-center">        
      <li class="nav-item">
          <div class="col-md-4">
            <!-- Search Bar -->
            <!-- search-form.php -->

                <form action="search.php" method="GET" class="form-inline my-2 my-lg-0" style="width:300px">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search Title" name="searchtitle" value="<?php echo isset($_GET['searchtitle']) ? $_GET['searchtitle'] : ''; ?>">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
            
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <div class="collapse navbar-collapse" id="navbarResponsive">
    <?php
        $query = mysqli_query($con, "SELECT id, CategoryName FROM tblcategory LIMIT 7");
        while ($row = mysqli_fetch_array($query)) {
          ?>
          <!-- <li class="nav-item"> -->
            <a class="nav-link" href="category.php?catid=<?php echo htmlentities($row['id']) ?>">
            <?php echo htmlentities($row['CategoryName']); ?></a>
          <!-- </li> -->
        <?php } ?>
      
      <li class="nav-item">
          <a class="nav-link" href="about-us.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact-us.php" style="width:130px">Contact us</a>
        </li>
    </ul>
    </div>
  </div>
</nav>
<!-- 

    -->