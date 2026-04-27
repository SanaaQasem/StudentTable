<?php 
$students = array (
    array ("name" => "Anas" , "grade" => "98" ,"age" => 15 ,"status" => ""),
    array ("name" => "Abdullah" , "grade" => "88" ,"age" => 18 ,"status" => ""),
    array ("name" => "Sanaa" , "grade" => "93" ,"age" => 17 , "status" => ""),
    array ("name" => "Naya" , "grade" => "70" ,"age" => 15 , "status" => ""),
    array ("name" => "Ebrahim" , "grade" => "60" ,"age" => 14 ,"status" => ""),
    array ("name" => "Sozan" , "grade" => "65" ,"age" => 15 ,"status" => ""),
    array ("name" => "Mohammed" , "grade" => "40" ,"age" => 16 ,"status" => "")
);



   function calculateStatus($grade){
 
    if($grade>0 && $grade<=100){
        if($grade >= 90){
            echo "Excellent";
        }else if ($grade >= 80){
            echo "Very Good";
        }else if($grade >= 70){
            echo "Good";
        }else if($grade >= 60){
            echo "Acceptable";
        }else{
            echo "Fail";
        }
    }
  }

  
  function highestDegree($students){
    $max = 0 ;
     foreach($students as $student){
        if($student["grade"] > $max ){
            $max = $student["grade"];
        }
        
     }
            return $max ;
    
  }


  function lowestDegree($students){
    $min = 101 ;
     foreach($students as $student){
        if($student["grade"] < $min ){
            $min = $student["grade"];
        }
     
        
     }
            return $min ;
  
  }

  function averageDegrees($students){
    $sum = 0;
    $count = 0;
    foreach($students as $student){
        $sum += $student["grade"];
        $count ++ ;
    }
    return $sum / $count ;

  }
 
  function studentsNum($students){
    $count =0 ;
    foreach($students as $student){
        if($student["grade"] >= 60){
            $count ++ ;
        }
    }
    return $count ;
  }



?>
<html>
<head>
    <title>Student</title>
</head>
<body>
    <h1>Student Table</h1>
    <div class="content">
    <table border="2px">
    <tr>
        <th>Name</th>
        <th>Grade</th>
        <th>Age</th>
        <th>Status</th>
    </tr>   
    <?php 

     foreach($students as $student){?>
        <tr>
            <td><?php echo $student["name"] ?></td>
            <td><?php echo $student["grade"] ?></td>
            <td><?php echo $student["age"] ?></td>
            <td><?php $student["status"] = calculateStatus($student["grade"])?></td>
        </tr>

     <?php
     }
    
      ?>

</table>     
<div class = "aaa">
<?php

  echo "أعلى درجة : ";                                                                                  
  echo highestDegree($students);
  echo "<br>";
  echo "أقل درجة : ";
  echo lowestDegree($students);
  echo "<br>";
  echo "مجموع الدرجات : ";
  echo averageDegrees($students);
  echo "<br>";
  echo "عدد الطلاب الناجحين : ";
  echo studentsNum($students);
  ?>
</div>
</div>
</body>


</html>

  <style>
        body {
            font-family: Arial;
            background-color: #f5f5f5;
        }
        .content{
            margin-top:100px;
        }
       h1{
        margin-bottom:20px;
        text-align : center;
        align-item : center;
        margin-left :570px;

        
       }

        table {
            width: 60%;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            text-align:center;
            align-item:center;
            margin-left :250px;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

      

        tr:nth-child(even){
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        h1 {
            position: absolute;
            top: 20px;
        }
        .aaa{
            margin-top:50px;
             text-align : center ;
           align-item : center;
        


        }
     
        </style>