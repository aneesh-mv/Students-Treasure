<!DOCTYPE html>
<html>
<head>
  <title> books info</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
 
</head>
<body style="background-color: yellow">
<h1 style="text-align: center; font-size: 35px"> WELCOME </h1>
<p style="text-align: center"> You can choose from the lists of books given below (subject to availability)<br> <br></p>
<div class="container">
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <?php
        $conn = mysqli_connect('localhost','root','');

        if(!$conn)
        {
          echo 'not connected to server';
        }

        if(!mysqli_select_db($conn,'software'))
        {
          echo ' e-commerce database not selected';
        }
        echo ' BOOK ID = 1 <br><br> ' ;
        echo ' IWP BOOK - 1 <br> ' ;
        echo ' Price = 500 <br>';
        $sql = "SELECT units FROM books WHERE book_id = 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc()) 
            {
                echo "quantity : " . $row["units"]. "<br><br>";
            }
        } 
        else 
        {
            echo "0 results";
        }
        echo '-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>';
        echo ' BOOK ID = 2 <br><br> ' ;
        echo ' IWP BOOK - 2 <br>' ;
        echo ' Price = 1000 <br>';
        $sql = "SELECT units FROM books WHERE book_id = 2";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc()) 
            {
                echo "quantity : " . $row["units"]. "<br><br>";
            }
        } 
        else 
        {
            echo "0 results";
        }
        echo '-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>';
        echo ' BOOK ID = 3 <br><br> ' ;
        echo ' IWP BOOK - 3 <br>' ;
        echo ' Price = 750 <br>';
        $sql = "SELECT units FROM books WHERE book_id = 3";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc()) 
            {
                echo "quantity : " . $row["units"]. "<br><br>";
            }
        } 
        else 
        {
            echo "0 results";
        }
        echo '-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>';
      ?>
 
<form method="post">
    <br>
  	<p style="text-align: center; font-weight: bold; size: 25px"> Enter the book id: </p>
  	<input name="book_id" type="text">
  	<br><br>
  	<input name="submit" type="submit" value="submit">
</form>
   </div>
   <div classs="col-md-2"></div>

  </div>
  </div>
<?php
$conn = mysqli_connect('localhost','root','');

if(!$conn)
{
	echo 'not connected to server';
}

if(!mysqli_select_db($conn,'software'))
{
	echo ' e-commerce database not selected';
}
if(isset($_POST['submit']))
{
    if ($_POST['book_id'] == 1 )
    {
                  $sql = "SELECT * FROM books WHERE book_id = 1";
            	     $result = $conn->query($sql);
            	  if ($result->num_rows > 0) 
            	 {
                	while($row = $result->fetch_assoc()) 
                	{
                    	$a = $row["units"];
                    	$b = $row["price"];
                    	$c = $row["name"];
                    	$d = $row["book_id"];
                    	$a=$a-1;
                    	$query_del= "DELETE FROM books WHERE book_id = 1";
                    	$query= "INSERT INTO books (name,price,units,book_id) values ( '$c' , '$b' , '$a' ,'$d')";

            		if (mysqli_query($conn, $query_del))
             		{
                		echo "record deleted successfully";
             		} 
             		else 
             		{
                		echo "Error: " . $query . "<br>" . mysqli_error($conn);
            		}

            		if (mysqli_query($conn, $query))
             		{
                		echo "New record created successfully";
             		} 
             		else 
             		{
                		echo "Error: " . $query . "<br>" . mysqli_error($conn);
            		}
             	}
            } 
    }

else if( $_POST['book_id'] == 2 )
{
              $sql = "SELECT * FROM books WHERE book_id = 2";
              $result = $conn->query($sql);
              if ($result->num_rows > 0 ) 
              {
                  while($row = $result->fetch_assoc()) 
                  {
                    $a = $row["units"];
                    $b = $row["price"];
                    $c = $row["name"];
                    $d = $row["book_id"];
                    $a=$a-1;
                    $query_del= "DELETE FROM books WHERE book_id = 2";
                    $query= "INSERT INTO books (name,price,units,book_id) values ( '$c' , '$b' , '$a' ,'$d')";

              if (mysqli_query($conn, $query_del))
              {
                  echo "record deleted successfully";
              } 
              else 
              {
                  echo "Error: " . $query . "<br>" . mysqli_error($conn);
              }

              if (mysqli_query($conn, $query))
              {
                  echo "New record created successfully";
              } 
              else 
              {
                  echo "Error: " . $query . "<br>" . mysqli_error($conn);
              }
            }
          }

} 
else if( $_POST['book_id'] == 3 )
{
              $sql = "SELECT * FROM books WHERE book_id = 3";
              $result = $conn->query($sql);
              if ($result->num_rows > 0 ) 
              {
                  while($row = $result->fetch_assoc()) 
                  {
                    $a = $row["units"];
                    $b = $row["price"];
                    $c = $row["name"];
                    $d = $row["book_id"];
                    $a=$a-1;
                    $query_del= "DELETE FROM books WHERE book_id = 3";
                    $query= "INSERT INTO books (name,price,units,book_id) values ( '$c' , '$b' , '$a' ,'$d')";

              if (mysqli_query($conn, $query_del))
              {
                  echo "record deleted successfully";
              } 
              else 
              {
                  echo "Error: " . $query . "<br>" . mysqli_error($conn);
              }

              if (mysqli_query($conn, $query))
              {
                  echo "New record created successfully";
              } 
              else 
              {
                  echo "Error: " . $query . "<br>" . mysqli_error($conn);
              }
            }
          }

} 
	else 
		{
    		echo "0 results";
		}
	}

?>

</body>
</html>