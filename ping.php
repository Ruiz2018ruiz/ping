<?php

/*
    //ping 1 ip address
    $ip = "172.21.68.213";
    $ping = exec("ping -n 1 $ip", $output, $status);
    echo $status; //0:Soccessful, 1:Unsuccessful
*/
/*
    //ping multe ip address
    $iplist = ["1722.21.68.101","172.21.68.202"];
    $i = count($iplist);

    for($j=0;$j<$i;$j++){
        $ip = $iplist[$j];
        $ping = exec("ping -n 1 $ip", $output, $status);
        echo $status; //0:Soccessful, 1:Unsuccessful
        echo '<br/>';
    }

*/


/*
    //Add description of the IP/URL
    $iplist = array(
        array ("172.21.68.101","BD PGSQL 01"),
        array ("172.21.68.202","BD PGSQL 02")       
    );

    $i = count($iplist);

    for($j=0;$j<$i;$j++){
        $ip = $iplist[$j][0];
        $ping = exec("ping -n 1 $ip", $output, $status);
        echo "ping ".$iplist[$j][0].$iplist[$j][1];
        echo $status; //0:Soccessful, 1:Unsuccessful
        echo '<br/>';
    }
*/


    //Create a table showing the results
    $iplist = array(
        array ("172.21.68.101","BD PGSQL 01"),
        array ("172.21.68.102","BD PGSQL 02"),
        array ("172.21.68.202","BD PGSQL 02"),       
        array ("172.21.68.32","BD BI"), 
        array ("172.21.68.36","BD OSTICKET"),
        array("172.21.68.20","proxmox"),
        array("172.21.68.21","novedades"),
        array("172.21.68.22","sispe web"),
        array("172.21.68.23","wordpress"),
        array("172.21.68.33","desarrollo proxmox"),
        array("172.21.68.36","osticket"),
        array("172.21.68.58","SrvBD proxmox"),
        array("172.21.68.56","100 app-apolo"),
        array("172.21.68.57","101 app-debian"),
        array("172.21.68.58","102 inventario"),
        array("172.21.68.196","103 reportsapp"),
        array("172.21.68.33","desarrollo proxmox"),
        array("172.21.68.36","osticket"),
        array("172.21.68.55","SrvBD proxmox"),
        array("172.21.68.56","100 app-apolo"),
        array("172.21.68.57","101 app-debian"),
        array("172.21.68.58","102 inventario"),
        array("172.21.68.12","103 reportsapp"),
        array("172.21.68.200","soa1 proxmox"),
        array("172.21.68.210","200 app-emision"),
        array("172.21.68.212","202 ldap"),
        array("172.21.68.213","203 app-perfil"),
        array("172.21.68.214","204 app-auditoria"),
        array("172.21.68.215","300 wsq"),
        array("172.21.68.204","500 munin"),
        array("172.21.68.201","soa2 proxmox"),
        array("172.21.68.216","100 ws-antecedentes"),
        array("172.21.68.217","101 ws-capturas"),
        array("172.21.68.220","104 app-orca"),
        array("172.21.68.203","dgpnc proxmox"),
        array("172.21.68.218","100 app-localizador"),
        array("172.21.68.219","101 app-gestion"),
        array("172.21.68.13","102 git"),
        array("172.21.68.211","103 ws-renap"),
        array("172.21.68.59","104 bancos"),
        array("172.21.68.205","soa3 proxmox"),
        array("172.21.68.222","ws-transito"),
        array("172.21.68.223","ws-rvr"),
        array("172.21.68.224","app-rvr"),
        array("172.21.68.225","app-sui"),
        array("172.21.68.226","app-novedades"),
        array("172.21.68.227","pncmovil"),
        array("172.21.68.34","cancelaciones"),
        array("10.10.30.2","proxmox"),
        array("10.10.30.3","web-dmz"),
        array("10.10.30.5","pagina oficial pnc"),
        array("10.10.30.4","cache"),
        array("172.21.68.51","localhost mi3"),
        array("172.21.68.40","srv mi3"),
        array("172.21.68.41","BD mi3"),
        array("172.21.68.72","sigepve"),
        array("172.21.68.211","SERVICIO RENAP"),
        array("172.21.68.216","SERVICIO ANTECEDENTES"),
        array("172.21.68.217","SERVICIO ORDENES CAPTURA"),
        array("172.21.68.181","SERVICIO VEHICULOS ROBADOS-RVR"),
        array("172.21.68.182","SERVICIO VEHICULOS -SAT"),
        array("172.21.68.184","SERVICIO VEHICULOS ROBADOS HISTORICOS"),
        array("172.21.68.185","SERVICIO VEHICULOS ROBADOS POSTGRESQL"),
        array("172.21.68.186","SERVICIO VEHICULOS -SAT-PRUEBAS"),
        array("172.21.68.188","SERVICIO VERHICULOS ROBADOS HISTORIO2"),
        array("172.21.68.189","SERVICIO CATALOGOS RVR"),
        array("172.21.68.190","SERVICIO LICENCIAS"),
        array("172.21.68.191","SERVICIO MULTAS PNC."),        
    );

    $i = count($iplist);

    $results = [];

    for($j=0;$j<$i;$j++){
        $ip = $iplist[$j][0];
        $ping = exec("ping -n 1 $ip", $output, $status);
        $results[] = $status;
    }
    //Table
    echo '<font face=Courier New>';

    echo "<table border=1 style=border-collapse:collapse>
    <th colspan=4> Ping Monitoring</th>
    <tr>
        <td aling=right width=20>#</td>
        <td width=100>Ip</td>
        <td width=100>Status</td>
        <td width=250>Descripsion</td>
    </tr>";
foreach($results as $item =>$k){
    echo '<tr>';
        echo '<td aling=right>'.$item.'</td>';
        echo '<td>'.$iplist[$item][0].'</td>';
        if($results[$item]==0){
            echo '<td style=color:green>Online</td>'; 
        }
        else{
            echo '<td style=color:red>Offline</td>'; 
        }
        echo '<td>'.$iplist[$item][1].'</td>';
    echo '/tr>';
}
    echo "</table>";
    echo '</font>'
?>
