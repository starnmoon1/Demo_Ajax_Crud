<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Tên hàng</th>
        <th scope="col">Loại hàng</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach($products as $key=> $product ):?>
        <tr>
            <td scope="row"><?php echo ++$key ?></td>
            <td><?php echo $products->getNameProduct() ?></td>
            <td><?php echo $products->getTypeProduct() ?></td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>