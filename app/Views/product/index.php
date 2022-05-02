<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="w3-container w3-black w3-center">
    <h2 class="w3-wide w3-center"><?= session('name') ?></h2>
    <table class="w3-content w3-center table table-light table-hover table-borderless">
        <?php $no = 0; ?>
        <?php foreach ($products as $item): ?>
        <tr>
            <td>
                <div class="col-12 text-center">
                    <img src="/photos/<?= $item['photo'] ?>" alt="" width=200 height=300>
                </div>
                <div class="col-12 text-center">
                    <div>
                        <h6><?= $item['name'] ?></h6>
                    </div>
                    <div><?= $item['deskripsi'] ?></div>
                </div>

        </tr>
        <td>
            <div class="btn-group " role="group " aria-label="Basic example ">
                <form action="/product/<?= $item['id'] ?>" method="POST" onsubmit="return confirm(`Are you sure?`)">
                    <input type="hidden" name="_method" value="DELETE" />
                    <button class="btn btn-light text-dark" type="submit">
                        <i class='bx bx-trash'></i>
                    </button>
                </form>
            </div>
            <?php endforeach ?>
            </tbody>
    </table>
</div>
<div class="col-12">
    <?= $pager->links('products', 'custom_pagination') ?>
</div>
</div>
</div>
<?= $this->endSection() ?>