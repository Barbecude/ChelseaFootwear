
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<?php
$keranjang  = ($this->cart->contents());
$jml_item = 0;
foreach ($keranjang as $key => $value){
     $jml_item += $value['qty'];
}

$query_mysql = mysqli_query(mysqli_connect("localhost","root",'',"website_pandawa"), "SELECT * FROM produk");
?>

<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6">Keranjang</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php while($produk = mysqli_fetch_array($query_mysql)){ 
            // Check if the current product is in the cart
            $product_in_cart = null;
            foreach ($keranjang as $item) {
                if ($item['id'] == $produk['id']) { // Assuming 'id' is the product identifier
                    $product_in_cart = $item;
                    break;
                }
            }
        ?>

        <div class="border rounded-lg shadow-lg overflow-hidden">
            <img src="<?php echo base_url()?>assets/img/produk/<?php echo $produk['gambar_satu'] ?>" alt="<?= $produk['nama_produk']?>" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold mb-2"><?= $produk['nama_produk']?></h3>
                <p class="text-gray-600 mb-4">Rp <?= number_format($produk['harga'], 0) ?></p>

                <?php if ($product_in_cart): ?>
                <p class="text-sm text-gray-500"><?= $product_in_cart['qty'] ?> x Rp <?= number_format($product_in_cart['price'], 0) ?></p>
                <p class="text-sm text-gray-900 font-bold">Subtotal: Rp <?= $this->cart->format_number($product_in_cart['subtotal']); ?></p>
                <?php else: ?>
                <p class="text-sm text-gray-500">Item not in cart</p>
                <?php endif; ?>
            </div>
        </div>

        <?php } ?>
    </div>

    <div class="mt-6">
        <h3 class="text-xl font-bold">Total: Rp <?= $this->cart->format_number($this->cart->total()); ?></h3>
    </div>
</div>
</body>
</html>


