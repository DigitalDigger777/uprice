<div class="span12">
    <div class="container">
        <form action="<?php echo $this->createUrl('order/save');?>" method="POST">
            <fieldset>
                <legend>Персональная информация</legend>
                <label for="full_name">ФИО</label>
                <input type="text" name="full_name" id="full_name" />
                <label for="mobile_phone">Мобильный телефон</label>
                <input type="text" name="mobile_phone" id="cell-phone" />
                <label for="email">E-mail</label>
                <input type="text" name="email" id="email" />
            </fieldset>
            <input type="submit" value="Подтвердить заказ" class="btn btn-primary"/>
        </form>
    </div>
</div>