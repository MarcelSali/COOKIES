<html>    
       
       <body>
    <h1>ANDA SUDAH TERDAFTAR SEBAGAI PESERTA SEMINAR</h1>  
        <table border="1">
            <tr>
                <td>No Induk</td>
                <td><?php echo $_COOKIE["NoInduk"];?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><?php echo $_COOKIE["Nama"];?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><?php echo $_COOKIE["Status"];?></td>
            </tr>
            <tr>
                <td>Minat</td>
                <td>
                <?php 
                echo $_COOKIE["Minat"];

                    // foreach($minats as $suka){
                    //     echo $suka.",";
                    // var_dump($minats);
                    // }
                ?></td>
            </tr>
        </table>
        </body>  
        <head>         
    </head>
   
</html>