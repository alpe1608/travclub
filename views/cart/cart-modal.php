<?php if (!empty($session['cart'])): ?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>ფოტო</th>
                <th>პროდუქტის დასახელება</th>
                <th>რაოდენობა</th>
                <th>ფასი</th>
                <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($session['cart'] as $id => $item): ?>
                <tr>
                    <td style="text-align: center;"><?= \yii\helpers\Html::img($item['img'], ['alt' => $item['name'], 'height' => 50, 'width' => 70]) ?></td>
                    <td><?= $item['name']?></td>
                    <td><?= $item['qty']?></td>
                    <td><?= $item['price']?></td>
                    <td><span data-id="<?= $id?>" class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"></span></td>
                </tr>
            <?php endforeach?>
            <tr>
                <td colspan="4">სულ: </td>
                <td><?= $session['cart.qty']?></td>
            </tr>
            <tr>
                <td colspan="4">სულ თანხა: </td>
                <td><?= $session['cart.sum']?></td>
            </tr>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <h3>კალათა ცარიელია</h3>
<?php endif;?>