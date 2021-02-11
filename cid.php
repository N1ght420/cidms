<?php

$token = Array('VElnZExQUDV4ZnVLWmJnN3NpVzJoSGVjREZqYWdZallEZHNKN1dJMVIwVT0',
                'UnRVa01DNCtOV0M4d1pORjJ4U3h5Ny9FMUlXQjBpV0JldmhIdnY1c0FlMD0',
                'L3B2NkhuZUlTVnVoc2VTdVMyYXRIeDJpRzA4Sk9NVTdPU0hjMGYrR2Z6QT0');
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