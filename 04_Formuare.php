<?php
 
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {

 $name = $jahrgang= $beschreibung = $winzer = $land =$region = $preis ="";
 $erroName = $errorJahrgang= $errorBeschreibung = $errorWinzer = $errorLand =$errorRegion = $errorPreis ="";
 if (empty($_POST["name"])) {
    $erroName = "Name is required";
  } 
  else if (isset($_POST["name"])){
    $erroName = " Das Name passt! ";
    $name = $_POST["name"];
}
  else {
    $name = validateInput($_POST["name"]);
  }
 if (empty($_POST["name"])) {
     $erroName = "Name is required";
   } 
   else if (isset($_POST["name"])){
     $erroName = " Das Name passt! ";
     $name = $_POST["name"];
 }
   else {
     $name = validateInput($_POST["name"]);
   }
   if (empty($_POST["jahrgang"])) {
       $errorJahrgang = "Jahrgang is required";
     } 
     else if (isset($_POST["jahrgang"])){
         $errorJahrgang = " Das Jahrgang passt! ";
         $jahrgang = $_POST["jahrgang"];
     }
     else
     {
       $jahrgang = validateInput($_POST["jahrgang"]);
     }
     if (empty($_POST["winzer"])) {
         $errorWinzer = "Winzer is required";
       } 
       else if (isset($_POST["winzer"])){
           $errorWinzer = " Winzer passt! ";
           $winzer = $_POST["winzer"];
       }
       else
       {
         $winzer = validateInput($_POST["winzer"]);
       }
       if (empty($_POST["region"])) {
         $errorRegion = "Region is required";
       } 
       else if (isset($_POST["region"])){
           $errorRegion = " Region passt! ";
           $region = $_POST["region"];
       }
       else{
         $region = validateInput($_POST["region"]);
       } 
       if (empty($_POST["land"])) {
         $errorLand = "Land is required";
       } 
       else if (isset($_POST["land"])){
           $errorLand = " Land passt! ";
           $land = $_POST["land"];
       }
       else{
         $land = validateInput($_POST["land"]);
       }
       if (empty($_POST["preis"])) {
         $errorPreis = "Preis is required";
       } 
       else if (isset($_POST["preis"])){
           $errorPreis = " Preis passt! ";
           $preis = $_POST["preis"];
       }
       else{
         $preis = validateInput($_POST["preis"]);
       }

 }
?>
<!DOCTYPE HTML>
<html>
<head><title> Haallo Formular </title>
    <style>

        td {
            width: 100px;
            text-align: center;
            height: 50px;
            border: 2px solid #1902c7;
        }

        html {
            background-color: #dedede;
        }

        .border {
            margin-left: 35%;
        }

        .sh1 {
            margin-left: 45%;
        } 

        .sh2 {
            text-align: center;
        }
        </style>
</head>
<body>
<h1 class = "sh1">ADD WINE</h1>
    <div class="border"> 
    <form action="04_Formuare.php" method="POST">
        <table>
            <thead>
                <th></th>
                <th></th>
                <th>Ergebniss</th>
            </thead>
                <tbody>
                <tr>
                    <td>
                    <label for="name:">Name:</label>
                    </td>
                    <td>
                    <input type="text" placeholder="name" name="name">
                    </td>
                    <td>
                    <span class="error" id = "name"><?php  echo $erroName; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="jahrgang">Jahrgang</label> 
                    </td>
                    <td>
                    <input type="number" min=1800 max=2021 placeholder="Jahrgang" name="jahrgang" > 
                    </td>
                    <td>
                    <span class="error"> <?php  
     echo $errorJahrgang; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="Beschreibung" id="label">Beschreibung</label>
                    </td>
                    <td>
                    <textarea  cols="30" rows="4" placeholder="Beschreibung" name="beschreibung" ></textarea>
                    </td>
                    <td>
                    <span class="error"><?php    
     echo $errorBeschreibung; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="Winzer">Winzer</label>
                    </td>
                    <td>
                    <input type="text" placeholder="Winzer" name="winzer"  >
                    </td>
                    <td>
                    <span class="error"><?php  
    echo $errorWinzer; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="land">Land</label> 
                    </td>
                    <td>
                    <input type="text" placeholder="Land" name="land" >
                    </td>
                    <td>
                    <span class="error"><?php 
     echo $errorLand; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="region">Region</label>
                    </td>
                    <td>
                    <input type="text" placeholder="Region"     name="region"  >
                    </td>
                    <td>
                    <span class="error"><?php 
    echo $errorRegion; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="preis">Preis ($)</label>
                    </td>
                    <td>
                    <input type="number" min=20 max=2000 placeholder="Preis" name="preis"  >
                    </td>
                    <td>
                    <span class="error"><?php   
    echo $errorPreis; ?></span>
                    </td>
                </tr>
                <tr>
                    <td colspan = "3">
                    <input type="submit" value="Submit">
                    </td>
                </tr>
                <tr>
                    <td colspan = "3">
                    <a href="http://arbzha17.htl-projekt.com/MED3/viewWines.php"> View Wines</a>
                    </td>
                </tr>
            </tbody>
        </table>

    
    </div>
    </form>
    <div class = "sh2">
    <?php
    echo "<h1>"."Die gegebende Daten sind:"."</h1>";
    if(isset($_POST["name"])){
        echo "<p>"."Name: ". $_POST["name"]. "</p>";
    }
    if(isset($_POST["jahrgang"])){
        echo "<p>"."Jahrgang: ". $_POST["jahrgang"]. "</p>";
    }
    if(isset($_POST["beschreibung"])){
        echo "<p>"."Beschreibung: ". $_POST["beschreibung"]. "</p>";
    }
    if(isset($_POST["winzer"])){
        echo "<p>"."Winzer: ". $_POST["winzer"]. "</p>";
    }
    if(isset($_POST["land"])){
        echo "<p>"."Land: ". $_POST["land"]. "</p>";
    }
    if(isset($_POST["region"])){
        echo "<p>"."Region: ". $_POST["region"]. "</p>";
    }
    if(isset($_POST["preis"])){
        echo "<p>"."Preis: ". $_POST["preis"]. "</p>";
    }


    if(!$error){
        require_once "connection.php";


        $sql = "INSERT INTO Wine (name, jahrgang, beschreibung, land, region, winzer, preis) value (:name, :jahrgang, :land, :beschreibung, :region, :winzer, :preis);";
       $stmt = $con->prepare($sql);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":jahrgang", $jahrgang);
        $stmt->bindParam(":beschreibung", $beschreibung);
        $stmt->bindParam(":land", $land);
        $stmt->bindParam(":region", $region);
        $stmt->bindParam(":winzer", $winzer);
        $stmt->bindParam(":preis", $preis);

        $stmt->execute();
        exit();


    }

 ?>
    </div>
</body>
</html>