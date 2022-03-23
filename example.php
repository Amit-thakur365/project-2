 <?php
echo("<h4>Example 1:</h4>");

$arr = array(1,2,3,4,5);
foreach($arr as $val){
    echo ($val);
}

echo("<h4>Example 2:</h4>");

$abc = array(
    array(12,34,56,78,90),
    array(1,3,6,8,9));

foreach($abc as $value){
    foreach($value as $val){
        echo (" ".$val);
    }
    echo nl2br("\n");
}

echo("<h4>Example 3:</h4>");
$xyz = Array(
    Array('[id]' => 1,'[firstname]' => 'Amit','[lastname]' => 'Kumar'),
    Array('[id]' => 2,'[firstname]' => 'Mohit','[lastname]' => 'Tyagi'),
    Array('[id]' => 3,'[firstname]' => 'Puneet','[lastname]' => 'Gupta')
);

foreach($xyz as $x){
    foreach($x as $y){
        echo(" ".$y);
    }
    echo('<br>');
}

echo("<h4>Example 4:</h4>");
$cars = array (
    array("Volvo",220,1800000),
    array("BMW",170,13000000),
    array("Audi",250,3500000),
    array("Land Rover",270,15000000)
  );

?>

<table border="1px">
    <tr>
    <th>Car Name</th>
    <th>Speed</th>
    <th>Price</th>
</tr>
<tr>
@foreach($cars as $cc)
@foreach($cc as $c)
<td>@php echo($c) @endphp</td>
@endforeach
<td>@php echo nl2br("\n") @endphp</td>
</tr>
@endforeach
</table><br>

<!-- To Get the Values of an asscoiative Array -->
@php
$arr = array ('one' => 1, 'two' => 2, 'three'=>3 );
foreach($arr as $a){
    echo(" ".$a);
}
@endphp
<br><br>

<!-- To Get the Keys and Values of an asscoiative Array -->
@php
$arr = array ('one' => 1, 'two' => 2, 'three'=>3);
foreach($arr as $key=>$value){
    echo($key."=>".$value);
    echo nl2br("\n");
}
@endphp

<!-- To Get the Keys only -->
@php
$arr = array ('one' => 1, 'two' => 2, 'three'=>3);
foreach($arr as $key=>$value){
    echo($key);
    echo nl2br("\n");
}
@endphp


<?php
$arr=array(array(array(10,20,20),array(30,50,10),array(20,20,10),array(10,52,41)));
$sum=0;
foreach($arr as $a){
    foreach($a as $val){
        foreach($val as $v){
        echo(" ".$v);
        $sum = $sum+$v;        
        }
        echo nl2br("\n");
    } 
}
echo("Sum is = ".$sum);
echo "<br>";


$arr=array(array(array(10,20,20),array(30,50,10),array(20,20,10),array(10,52,41)));
foreach($arr as $key=>$val){
    // echo($key);     //0
    // print_r($val);die;
    echo($val[0][0]);
    echo($val[0][1]);
    echo($val[0][2]);
    echo('<br>');
    echo($val[1][0]);
    echo($val[1][1]);
    echo($val[1][2]);
    echo('<br>');
    echo($val[2][0]);
    echo($val[2][1]);
    echo($val[2][2]);
    echo('<br>');
}


echo("<h4>Example :</h4>");
$arr=array(array(array(array(10,20,20),array(30,50,10),array(20,20,10),array(10,52,41))));
foreach($arr as $arr1){
    foreach($arr1 as $arr2){
        foreach($arr2 as $arr3){
            foreach($arr3 as $a){
                echo(" ".$a);
            }
            echo nl2br("\n");
        }
    }
}

echo("<h4>Example :</h4>");
$arr=array(array(array(array(10,20,20),array(30,50,10),array(20,20,10),array(10,52,41))));
foreach($arr as $key=>$abc){
// print_r($abc);

echo($abc[0][0][0]);
echo($abc[0][0][1]);
echo($abc[0][0][2]);

echo($abc[0][1][0]);
echo($abc[0][1][1]);
echo($abc[0][1][2]);

echo($abc[0][2][0]);
echo($abc[0][2][1]);
echo($abc[0][2][2]);

echo($abc[0][3][0]);
echo($abc[0][3][1]);
echo($abc[0][3][2]);

}


$movies = array(
    array(
      "title" => "Rear Window",
      "director" => "Alfred Hitchcock",
      "year" => 1954
    ),
    array(
      "title" => "Full Metal Jacket",
      "director" => "Stanley Kubrick",
      "year" => 1987
    ),
    array(
      "title" => "Mean Streets",
      "director" => "Martin Scorsese",
      "year" => 1973
    )
  );
  
foreach($movies as $abc){
    foreach($abc as $key=>$ab){
        echo($key."=>".$ab." | ");
    }
    echo nl2br("\n");
}



$movies = array(
    array(
      "title" => "Rear Window",
      "director" => "Alfred Hitchcock",
      "year" => 1954
    ),
    array(
      "title" => "Full Metal Jacket",
      "director" => "Stanley Kubrick",
      "year" => 1987
    ),
    array(
      "title" => "Mean Streets",
      "director" => "Martin Scorsese",
      "year" => 1973
    )
  );
  
foreach($movies as $key=>$value){
    // print_r($value); 
    echo($value['title']." ");
    echo($value['director']." ");
    echo($value['year']." ");
    echo("<br>");
}


$superheroes = array(
    "spider-man" => array(
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
    ),
    "super-man" => array(
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
    ),
    "iron-man" => array(
        "name" => "Harry Potter",
        "email" => "harrypotter@mail.com",
    )
);
echo("<pre>");
// print_r($superheroes);die;
// echo($superheroes['spider-man']['name']);

foreach($superheroes as $key => $val){
    echo($val['name']);
    echo($val['email']);
    echo nl2br("\n");
}


// for Loop
$arr = array(10,20,30,40,50);
$j = count($arr);
for($i=0;$i<$j;$i++){
echo($arr[$i]);
}
echo('<br>');


//using for loop:
$arr=array(array(10,10,10),array(10,10,10),array(10,10,10));
$p = count($arr);
for($i=0;$i<$p;$i++){
	for($j=0;$j<$p;$j++){
	echo($arr[$i][$j]." ");
	}
	echo "<br>";
}



$arr=array(array(array(10,20,20),array(30,50,10),array(20,20,10),array(10,52,41)),
    array(array(20,20,20),array(30,30,30),array(40,40,40),array(50,50,50)));
foreach($arr as $key=>$val){
    // echo($key);     //0 1
    // print_r($val);
    echo($val[0][0]);
    echo($val[0][1]);
    echo($val[0][2]);
	echo "<br>";
    echo($val[1][0]);
    echo($val[1][1]);
    echo($val[1][2]);
	echo "<br>";
    echo($val[2][0]);
    echo($val[2][1]);
    echo($val[2][2]);
	echo "<br>";
    echo($val[3][0]);
    echo($val[3][1]);
    echo($val[3][2]);
	echo "<br>";

}


$arr=array(
    array(
        array(10,20,20),
        array(30,50,10),
        array(20,20,10),
        array(10,52,41)),
    array(
        array(20,20,20),
        array(30,30,30),
        array(40,40,40),
        array(50,50,50)),
    array(
        array(20,20,20),
        array(30,30,30),
        array(40,40,40),
        array(50,50,50))
    );

foreach($arr as $val1){
    foreach($val1 as $val2){
        foreach($val2 as $val3){
            print_r($val3." ");
        }
        echo('<br>');
    }
}
   




$movies = array(array(
    array(
      "title" => "Rear Window",
      "director" => "Alfred Hitchcock",
      "year" => 1954
    ),
    array(
      "title" => "Full Metal Jacket",
      "director" => "Stanley Kubrick",
      "year" => 1987
    ),
    array(
      "title" => "Mean Streets",
      "director" => "Martin Scorsese",
      "year" => 1973
      'test' =>array(1,2,3,4)
    )
  ));
  
foreach($movies as $key=>$value){
    // print_r($value); 
    echo($value['title']." ");
    echo($value['director']." ");
    echo($value['year']." ");
    echo("<br>");
}




?>