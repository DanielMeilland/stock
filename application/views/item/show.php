<div class="container">
    <div class="row">
        <li class="list-group-item"><?= $item->item_id; ?></li>
        <li class="list-group-item"><?= $item->name; ?></li>
        <li class="list-group-item"><?= $item->description; ?></li>
        <li class="list-group-item"><?= $item->supplier_id; ?></li>
        <li class="list-group-item"><?= $item->supplier_ref; ?></li>
        <li class="list-group-item"><?= $item->buying_price; ?></li>
        <li class="list-group-item"><?= $item->buying_date; ?></li>
        <li class="list-group-item"><?= $item->warranty_duration; ?></li>
        <li class="list-group-item"><?= $item->file_number; ?></li>
        <li class="list-group-item"><?= $item->serial_number; ?></li>
        <li class="list-group-item"><?= $item->remarks; ?></li>
        <li class="list-group-item"><?= $item->image; ?></li>
        <li class="list-group-item"><?= $item->created_by_user_id; ?></li>
        <li class="list-group-item"><?= $item->created_date; ?></li>
        <li class="list-group-item"><?= $item->modified_by_user_id; ?></li>
        <li class="list-group-item"><?= $item->modified_date; ?></li>
        <li class="list-group-item"><?= $item->control_by_user_id; ?></li>
        <li class="list-group-item"><?= $item->control_date; ?></li>
        <li class="list-group-item"><?= $item->stocking_place_id; ?></li>
        <li class="list-group-item"><?= $item->item_state_id; ?></li>
        <li class="list-group-item"><?= $item->supplier->supplier_id; ?></li>
        <li class="list-group-item"><?= $item->supplier->name; ?></li>
        <li class="list-group-item"><?= $item->supplier->address_line1; ?></li>
        <li class="list-group-item"><?= $item->supplier->address_line2; ?></li>
        <li class="list-group-item"><?= $item->supplier->zip; ?></li>
        <li class="list-group-item"><?= $item->supplier->city; ?></li>
        <li class="list-group-item"><?= $item->supplier->country; ?></li>
        <li class="list-group-item"><?= $item->supplier->tel; ?></li>
        <li class="list-group-item"><?= $item->supplier->email; ?></li>
        <li class="list-group-item"><?= $item->stocking_place->stocking_place_id; ?></li>
        <li class="list-group-item"><?= $item->stocking_place->name; ?></li>
        <li class="list-group-item"><?= $item->stocking_place->short; ?></li>
    </div>
</div>

<?php var_dump($item); ?>