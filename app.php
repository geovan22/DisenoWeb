<?php
    //var_dump($_POST);
    
    $n1=$_POST['numero1'];
    $n2=$_POST['numero2'];
    $op=$_POST['operacion'];
    $resultado=0;
    
    /*
    
    if($op=='s')
    {
        $resultado=$n1+$n2;
    }//end if
    
    else if($op=='r')
    {
        $resultado=$n1-$n2;
    }
    
    else if($op=='m')
    {
        $resultado=$n1*$n2;
    }
    
    else if($op=='d')
    {
        $resultado=$n1/$n2;
    }
    
    echo "<h3> el resultado es: ".$resultado."</h3>";
    
    
    for($x=$n1;$x<=$n2;$x=$x+2)//$x=$x+1
    {
        echo $x."<br>";
    }
    
    echo "<br>"."<br>"."<br>";
    
    $y=15;
    while($y<15)
    {
        echo $y."<br>";
        $y++;
    }
    echo "<br>"."<br>"."<br>";
   
    do
    {
        echo $y."<br>";
        $y++;
    }while($y<15);
    
    
    */
    
    
    echo "<br>"."<br>"."<br>";
    $arr=array(0,1,2,"hola",0.55,'x',"adios");
    
    var_dump($arr);
    
    for($x=0;$x<count($arr);$x++)
    {
        echo $arr[$x]."<br>";
    }
    
    echo "<br>"."<br>"."<br>";
    
    $frutas=array(
        "rojas"=>"manzana",
        "amarillas"=>"banano",
        "estado"=>true,
        array(
                0,1,2,3
        ),
        "otro"=>"adios"
    );
    
    //var_dump($frutas);
    
    //echo $frutas['amarillas'];
    
    $user=array(
        ["User"=>"Ana","Pass"=>123],
        ["User"=>"Pilar","Pass"=>321],
        ["User"=>"Andrea","Pass"=>654],
        ["User"=>"Renato","Pass"=>456]
    );
    
    var_dump($user);
    
    foreach ($user as $u )
    {
        echo $u["User"]."--".$u["Pass"]."<br />";
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
?>