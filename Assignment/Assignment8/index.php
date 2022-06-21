<?php
$staff = [
    [
        "acedemic" =>
        [

            [
                "name" => "Ramesh Thapa",
                "address" => "Lamachaur",
                "mobile number" => [9835673833,9807654322],
                "subject" => ["PST","MFCS"]
            ],
            [
                "name" => "Sujan Tamrakar",
                "address" => "Mahendrapool",
                "mobile number" => [9887563452,9887365322],
                "subject" => ["C"]
            ],
            [
                "name" => "Nishal Gurung ",
                "address" => "Mustang Chock",
                "mobile number" => [9863753535,9887655432],
                "subject" => ["WT","Java"]
            ]
        ]
    ],
    [
        "nonacedemic" =>
        [

            [
                "name" => "sucess Chhantyal",
                "address" => "Matighumba",
                "mobile number" => [9887365673,9898673452],
                "subject" => ""
            ],
            [
                "name" => "Ujjwal neupane",
                "address" => "Lamachaur",
                "mobile number" => [9878635344,9876353333],

                "subject" => ""
            ],
        ] 
    ]
];

echo "<table border='2px ' cellspacing= '1px' cellpadding ='10px' width ='85%'>";

echo "<th>Name</th>";
echo "<th>Acedemic</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";
echo "<th>Subjects</th>";
echo "</tr>";
for($i=0;$i<=1;$i++){
    foreach($staff[$i] as $option => $content){
       if($i)
       {
            for($k = 0;$k <=1;$k++)
            {
                
                $temp = $content[$k]["name"];
                echo "<td>$temp</td>";
                $test = is_array($content[$k]["subject"])? $test = "true": $text = "false";
                echo "<td>$test</td>";
                $temp = " ";
                for($j=0;$j<count($content[$k]["mobile number"]);$j++){
                    $temp .= $content[$k]["mobile number"][$j]."</br>";
                }
                echo "<td>$temp</td>";
                $temp = $content[$k]["address"];
                echo "<td>$temp</td>";
               
                echo "<td></td>";
                
                echo "</tr>";

            }
        }
        else{
            for($k = 0;$k <3;$k++){
                
                $temp = $content[$k]["name"];
                echo "<td>$temp</td>";
                $test = is_array($content[$k]["subject"])? $test = "true": $text = "false";
                echo "<td>$test</td>";
                $temp = " ";
                for($j=0;$j<count($content[$k]["mobile number"]);$j++){
                    $temp .= $content[$k]["mobile number"][$j]."</br>";
                }
                echo "<td>$temp</td>";
                $temp = $content[$k]["address"];
                echo "<td>$temp</td>";
                $temp = " ";
                for($j=0;$j<2;$j++){
                    $temp .= $content[$k]["subject"][$j]."</br>";
                }
                echo "<td>$temp</td>";
                
                echo "</tr>";
            }
        }
    }    
}
echo "</table>";
?>