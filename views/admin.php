
<h1><?php
if(empty($nb)){
    echo"Get the fuck out of here";
}else{
        while($hi=$recup_util->fetch(PDO::FETCH_ASSOC)){
            echo 'Bienvenu, '.$hi['lenom'];

        }
    }
    ?></h1>
