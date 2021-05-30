<table class="table table-bordered table-striped table-scrollable table-xs mt-1">
    <tr>
        <td width="1px"><b>QTY</b></td>
        <td><b>BARANG</b></td>
        <td><b>HARGA</b></td>
        <td width="1px"></td>
    </tr>
    <?php $t = 0;
    foreach ($cart->result_array() as $n => $k) : ?>
        <tr>
            <td align="center"><?= $k['jumlah'] ?></td>
            <td><?= $k['nama_barang'] ?></td>
            <td><?= rupiah($k['harga_barang']) ?></td>
            <td>
                <span class="badge badge-danger"><i class="icon-trash"></i></span>
            </td>
        </tr>
    <?php $t += $k['jumlah'] * $k['harga_barang'];
    endforeach; ?>
    <tr>
        <td colspan="2" align="right"><b>TOTAL</b></td>
        <td colspan="2"><?= rupiah($t) ?></td>
    </tr>
</table>
<button class="btn btn-sm btn-block mt-1 mb-1 bg-primary">BAYAR</button>