<?php 
    $count = count($products);
    $count_row = ceil($count/4);
    $item = 0;
?>

<?php for($i = 0; $i<$count_row; $i++):?>
<ul class="thumbnails">
    <?php for($m = 0; $m < 4; $m++):?>
        <li class="span3">
            <div class="thumbnail">
                <img src="<?php echo Yii::app()->baseUrl; ?>/images/products/<?php echo $products[$item]['photo'];?>" alt="" />
                <h5><?php echo $products[$item]['name']; ?></h5>
                <div class="row-fluid">
                    <?php
                        //цена в магазине
                        $ship_price = (($products[$item]['price']+$products[$item]['delivery_price'])/100)*$products[$item]['margin']+$products[$item]['price'];
                        //цена со скидкой
                        $ship_discount = $ship_price - ($ship_price/100)*$products[$item]['discount'];
                    ?>
                    <div class="span12">
                        <p><span class="muted"><?php echo Yii::t('main', 'Статус: '); ?></span><?php echo $status[$products[$item]['status_id']]; ?></p>
                        <p><span class="muted"><?php echo Yii::t('main', 'Цена: '); ?></span><?php echo $products[$item]['price']; ?><?php echo $default_currency->short_name; ?></p>
                    </div>
                </div>
            </div>
        </li>
        <?php 
            if($item == $count-1) break;
            $item++;
        ?>
    <?php endfor; ?>
</ul>
<?php if($item == $count-1) break; ?>
<?php endfor; ?>