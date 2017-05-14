<div class="table-responsive">
    <table style="width: 100%; border: 1px solid #dddddd; border-collapse: collapse;" class="table table-hover table-striped">
        <thead>
        <tr style="background: #f9f9f9;">
            <th style="padding: 8px; border: 1px solid #dddddd;">სახეობა</th>
            <th style="padding: 8px; border: 1px solid #dddddd;">რაოდენობა</th>
            <th style="padding: 8px; border: 1px solid #dddddd;">ფასი</th>
            <th style="padding: 8px; border: 1px solid #dddddd;">ჯამი</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($session['cart'] as $id => $item): ?>
            <tr>
                <td style="padding: 8px; border: 1px solid #dddddd;"><?= $item['name']?></td>
                <td style="padding: 8px; border: 1px solid #dddddd;"><?= $item['qty']?></td>
                <td style="padding: 8px; border: 1px solid #dddddd;"><?= $item['price']?></td>
                <td style="padding: 8px; border: 1px solid #dddddd;"><?= $item['qty'] * $item['price']?></td>
            </tr>
        <?php endforeach?>
        <tr>
            <td colspan="3" style="padding: 8px; border: 1px solid #dddddd;">სულ: </td>
            <td style="padding: 8px; border: 1px solid #dddddd;"><?= $session['cart.qty']?></td>
        </tr>
        <tr>
            <td colspan="3" style="padding: 8px; border: 1px solid #dddddd;">სულ თანხა: </td>
            <td style="padding: 8px; border: 1px solid #dddddd;"><?= $session['cart.sum']?></td>
        </tr>
        </tbody>
    </table>
</div>