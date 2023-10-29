<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopfront</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>

    <header>
        <h1>My New Shop</h1>
	<h1>line added by git repository</h1>
    </header>
    <nav>
    	<ul>
    		<li><a href="#">Home</a></li>
    		<li><a href="#">Product</a></li>
    		<li><a href="#">Contact</a></li>
    	</ul>
    </nav>
    <?php
    	$products=null;
    	$servername="localhost";
    	$username="root";
    	$password="";
    	$result=null;
    	$statement='select * from products';
    	  	
    	try{
    	$conn = new PDO("mysql:host=$servername;dbname=shopfront", $username, $password);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	 echo "Connected successfully";
    	$result=$conn->query($statement);
    	
    	}catch(PDOException $e) {
 	 echo "Connection failed: ";
  	  }	
    ?>
    <section>
    	<?php
    		foreach($result as $product){
    	?>
    	
        <div class="product">
              
            <img src="product1.jpg" alt="Product 1">
            <h2><?php echo $product['name']; ?></h2>
            <p>Price: $<?php echo $product['price']; ?></p>
            <p>Description: <?php echo $product['description']; ?></p>
            <button>Add to Cart</button>
        </div>
	<?php
    		}
    	?>

        <!-- Add more product divs as needed -->

    </section>

    <footer>
        &copy; 2023 My Shop. All rights reserved.
    </footer>
    <?php
    	$conn->close();
    ?>

</body>
</html>

