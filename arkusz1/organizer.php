<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sierpniowy kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>

<body>

    <section class="baner" id="pierwszy">
        <h1>Organizer: SIERPIEŃ</h1>
    </section>
    <section class="baner" id="drugi">
        <form action="" method="post">
            Zapisz wydarzenie: <input type="text" name="wyd">
            <input type="submit" value="OK">
        </form>
        <?php 
       if (!empty($_POST["wyd"])) {
        
       $conn = mysqli_connect("localhost","root","","kalendarz");
       $wyd=$_POST["wyd"];
       $sql="UPDATE zadania SET wpis='$wyd' WHERE dataZadania='2020-08-09'";
       mysqli_query($conn,$sql);
mysqli_close($conn);       
       }
       ?>
    </section>
    <section class="baner" id="trzeci"><img src="logo2.png" alt="sierpień"></section>

    
        <?php


$conn = mysqli_connect("localhost","root","","kalendarz");
$sql="SELECT dataZadania,wpis FROM zadania WHERE miesiac='sierpien'";
$result=mysqli_query($conn,$sql);

while($row = mysqli_fetch_row($result))
{
    echo "<main><h5>". $row[0]."</h5><p>".$row[1]."</p></main>";
   
}
mysqli_close($conn);

?>
    <footer>
        <p>Stronę wykonał: Kamil Życiński</p>
    </footer>
    
</body>

</html>