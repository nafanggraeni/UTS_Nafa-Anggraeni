<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Update Status <?= $data['name'] ?></h5>

            <form action="/product/<?= $data['id'] ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="put" />
                <input type="hidden" name="oldphoto" value= "<?=$data['photo']?>" />

                <div class="form-group">
                    <label for="example-product-name">Name</label>
                    <input type="text" class="form-control" id="example-product-name" aria-describedby="emailHelp" 
                        placeholder="Enter product name" required name="name" value="<?= $data['name'] ?>">
                </div>

                <div class="form-group">
                    <label for="example-product-deskripsi">deskripsi</label>
                    <input type="text" class="form-control" id="example-product-deskripsi" aria-describedby="emailHelp" 
                        placeholder="Enter deskripsi " required name="deskripsi" value="<?= $data['deskripsi'] ?>">
                </div>
            
                <div class="form-group">
                    <label for="example-product-photo">Photo</label>
                    <input type="file" class="form-control" id="example-product-photo" aria-describedby="photoHelp" name="photo">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>