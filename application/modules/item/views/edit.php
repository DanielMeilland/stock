<div class="container">

    <?= form_open('item/edit/' . $item->item_id); ?>

    <?= form_input('item_id', set_value($item->item_id)); ?>

    <?= form_submit('editer', 'Editer', ['class' => 'btn btn-primary']); ?>

    <!-- Button vard_dump modal -->
    <?= form_button('var_dump', 'var_dump', ['class' => 'btn btn-warning', 'data-toggle' => 'modal', 'data-target' => '#myModal']); ?>

    <?= form_close(); ?>

</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <?php var_dump($item); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>