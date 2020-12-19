<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<style>
    .card1{
        /* margin-left:70px; */
         font-weight:bold;
         background-color: pink;
         padding:20px 0:
    }
</style>

<body>

<?php
$products = array(
    "Electronics" => array(
                        "Television" => array(
                                            array(
                                                "id" => "PR001", 
                                                "name" => "MAX-001",
                                                "brand" => "Samsung",
                                                "img" => "images/tv1.png"
                                            ),
                                            array(
                                                "id" => "PR002", 
                                                "name" => "BIG-301",
                                                "brand" => "Bravia",
                                                "img" => "images/tv1.png"
                                            ),
                                            array(
                                                "id" => "PR003", 
                                                "name" => "APL-02",
                                                "brand" => "Apple",
                                                "img" => "images/tv1.png"
                                            )
                                        ),
                        "Mobile" => array(
                                            array(
                                                "id" => "PR005", 
                                                "name" => "GT-1980",
                                                "brand" => "Samsung",
                                                "img" => "images/mob1.jpg"
                                            ),
                                            array(
                                                "id" => "PR006", 
                                                "name" => "IG-5467",
                                                "brand" => "Motorola",
                                                "img" => "images/mob1.jpg"
                                            ),
                                            array(
                                                "id" => "PR007", 
                                                "name" => "IP-8930",
                                                "brand" => "Apple",
                                                "img" => "images/mob1.jpg"
                                            )
                                           
                                        )
                    ),
    "Jewelry" => array(
                        "Earrings" => array(
                                            array(
                                                "id" => "PR009", 
                                                "name" => "ER-001",
                                                "brand" => "Chopard",
                                                "img" => "images/ear.jpg"
                                            ),
                                            array(
                                                "id" => "PR010", 
                                                "name" => "ER-002",
                                                "brand" => "Mikimoto",
                                                "img" => "images/ear.jpg"
                                            ),
                                            array(
                                                "id" => "PR011", 
                                                "name" => "ER-003",
                                                "brand" => "Bvlgari",
                                                "img" => "images/ear.jpg"
                                            )
                                           
                                        ),
                        "Necklaces" => array(
                                            array(
                                                "id" => "PR013", 
                                                "name" => "NK-001",
                                                "brand" => "Piaget",
                                                "img" => "images/neck.jpg"
                                            ),
                                            array(
                                                "id" => "PR013", 
                                                "name" => "NK-002",
                                                "brand" => "Graff",
                                                "img" => "images/neck.jpg"
                                            ),
                                            array(
                                                "id" => "PR013", 
                                                "name" => "NK-003",
                                                "brand" => "Tiffany",
                                                "img" => "images/neck.jpg"
                                            )
                                           
                                        )				
                )
  );
?>

<div class="container ">
    <div class="row">

<?php 
foreach($products as $key=>$value){
    foreach($value as $key1=>$value1){
        ?>        
       <div class="card1"> <span style=" font-size:22px"><?php echo $key;?>></span> <span style="font-size:18px"><?php echo $key1;?></span> </div>
 <?php                
        foreach($value1 as $key2=>$value2){                
?>          
    <div class=" col-sm-4 text-center mt-4 mb-4 ">
           <img src=<?php echo $value2['img'];?> alt="" class="img-fluid">
           <h5>ID:<?php echo $value2['id'];?></h5>
           <h5> Name:<?php echo $value2['name'];?></h5>
           <h5>Brand:<?php echo $value2['brand'];?></h5>
        </div>
<?php
        }
    }
} 
?>    
    </div>
</div>

</body>

</html>