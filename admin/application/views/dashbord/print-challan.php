<style>
    .center {
        margin: 0 auto;
        width: 60%;
        font-size: 18px;
    }
</style>

<div class="center">
<?php
    //display( $challan );
    if (true == valArr($challan) && true == isset($_GET['challan_id']) && true == $_GET['challan_id']) {
        $intTotalClothItems = 0;
        foreach ($challan as $intItemCounter => $objChallan) {
            $intTotalClothItems += $objChallan->total_item_count;
        }
        
        for ($intItemCounter=0; $intItemCounter<$intTotalClothItems; $intItemCounter++) {
            echo $_GET['challan_id']  . '/' .  $intTotalClothItems  . '/' .  ($intItemCounter+1)  . '<br/>';
        }
    }
?>
</div>

<script>
    window.print();
</script>