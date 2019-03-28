<body bgcolor = "#ffffff">
	<center>
	<form method="post" action="table.php">
    <input type="submit"  value="Parse" name="buttonParse">
    <input type="submit"  value="Show" name="buttonShow">
</form>
		</center>
    <table border="0"  width="750" align="justify">
        <?php
        $read = file_get_contents('https://iextrading.com/api/1.0/stock/market/collection/list?collectionName=in-focus');
        //считай дейсон из апиай
        $read = json_decode($read, true);
        if(@$_REQUEST['buttonParse']){
            global $read;
            $read = file_get_contents('https://iextrading.com/api/1.0/stock/market/collection/list?collectionName=in-focus');
            //считай дейсон из апиай
            $read = json_decode($read, true);
        }
            //декодировал в массив
            if(@$_REQUEST['buttonShow']){
            global $read;
            foreach($read as $elem) {
            ?>
        <tr height = "25" border = "1">
            <td width="35%" ><?php echo $elem['companyName'];?></td>
            <td width="65%" align="right"> <?php echo $elem['latestPrice']." $"; }}?></td>
        </tr>

    </table>


</body>