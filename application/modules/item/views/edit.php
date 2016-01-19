<div class="container">

    <?php var_dump($item); ?>

    <?= form_open('item/edit/' . $item->item_id); ?>

    <?= form_input('item_id', set_value($item->item_id)); ?>

    <?= form_submit('editer', 'Editer', ['class' => 'btn btn-primary']); ?>

    <?= form_close(); ?>

</div>