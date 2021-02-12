<?php

$token = Array('VElnZExQUDV4ZnVLWmJnN3NpVzJoSGVjREZqYWdZallEZHNKN1dJMVIwVT0',
                'UnRVa01DNCtOV0M4d1pORjJ4U3h5Ny9FMUlXQjBpV0JldmhIdnY1c0FlMD0',
                'L3B2NkhuZUlTVnVoc2VTdVMyYXRIeDJpRzA4Sk9NVTdPU0hjMGYrR2Z6QT0',
                'UnJ0ZHRhWUxRaGRsR2FoRzlsdGh4R0dYV21OSXo1dzJPdldUMlFYVjVMQT0',
                'MWQ5b0VJVHhLTHR4bUI2emx6cEVrcUJkZ0ZHZmxxcW9vUVIzZXJPd0hpaz0',
                'd0JZNGVkOGNRRnlrUEVFUlNyUGhEcnRCRGlBdGFURWdmSkhVS3MvSXJJMD0',
                'd1RaMHB0cHhrbnZGMW0yTmQyWGFlRFFuYWdUTXRKNmlLdGFsSUZPSWtZUT0',
                'TzVGazI3T3NkcXloS1NVUWJVRXRZTnpMNDFoeUMyV28zY1BiNXU5OGpQYz0',
                'eTVKM0tXS2pYNk1QNU05WC9rUzRsWWtlcWU0ekFJZXdaOUZGLy8xc3hyQT0',
                'bVo4UHBRMDBPbkg0N0pJZEMzRlNWMTFJdnNrZkduYm1BejFjcy9hWXFJWT0',
                'eVI1c25GMFRQMXl5U2UvcWpQL0F1YngrQ1phSDdSOUQ1R01mL3J1NHpqZz0',
                'cnIzSzlTOE5ySnVkajVHUEhmQitKeTYvaFloUFNlcFRUSmxWVGRmUzI3RT0',
                'NnE3Y2ZRcDN3SUxabnh2emtiSk1nT1FMbG9FM3pjOE1EK1E5dXRFcDVIbz0',
                'anVXMkI0c3R4RXVaMEtRREV3b0puelVhTVlaUmVoK1g3ZTdBNE9aZVZvOD0',
                'SUMySm5ZTHJkOVJWR2xxUkRRSXduM2IrbVFHVlRnWnBBa0FYNThKak5Zcz0',
                'SzNIS05DNjBwZGZTWXk2ckdtRDVlbDZsMDVDbWJMRE42dUNsd2hycDhRST0',
                'Rmk0dnNIcHpyZ1hYQm1PMjQvYnFZM3B0d2xWejJCTDNKb0cvcksxb0I2Zz0',
                'TFp6WmFSQ2lvcmk1YnVZcGN3RzVwY0VZSGZLQkE2SCthb2ZsRlREM3dVRT0',
                'ZWdZWjZTaGoxZWhnLzFjMW12L3lqWWRTNmtpZ3ZRc0J0aGhvV0F5SXhCOD0',
                'RlBtVTVqdCtVT2NQTVJuNUI3ZExBQUpFNUJvQWdwRjJtSHZxVlg0bFl2dz0');
$token = $token[array_rand($token)];

@system(clear);
print "   _       _--\"\"--_   \n";
print "     \" --\"\"   |    |    ____ ___ ____  __  __ ____  \n";
print "   \" . _|     |    |   / ___|_ _|  _ \|  \/  / ___| \n";
print "   _    |  _--\"\"--_|  | |    | || | | | |\/| \___ \ \n";
print "     \" --\"\"   |    |  | |___ | || |_| | |  | |___) |\n";
print "   \" . _|     |    |   \____|___|____/|_|  |_|____/ \n";
print "   _    |  _--\"\"--_|  \n";
print "     \" --\"\"           \n\n";

print "  Installation ID : ";
$iid = trim(fgets(STDIN));
$iid = str_replace(' ','',$iid);
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL,"https://kichhoat24h.com/public-api/get-cid?iid=$iid&token=$token");
$result=curl_exec($ch);
curl_close($ch);
if ($result == "Invalid syntax or token!" OR $result == "Invalid IID Length!" OR $result == "Wrong IID."){
    print "  Invalid ID, please check your Installation ID again\n\n";
} else {
    $split = str_split($result, 6);
    print "  Confirmation ID : $result\n\n";
    print "    A        B        C        D        E        F        G        H    \n";
    print "  $split[0] - $split[1] - $split[2] - $split[3] - $split[4] - $split[5] - $split[6] - $split[7]\n\n";
}

?>
