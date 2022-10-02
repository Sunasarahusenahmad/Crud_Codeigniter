<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="my-3 pb-4 text-center">
                    <h4>CRUD Operation in Codeigniter 4
                        <hr class="text-danger">
                    </h4>
                </div>

                <?php
                if (session()->getFlashdata('status')) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php
                        echo "<center>" . session()->getFlashdata('status') . "</center>";
                        ?>
                    </div>
                <?php
                }
                ?>

                <div class="card rounded">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-8">
                                <a href="<?= base_url('insert') ?>" class="btn btn-primary  mb-2">Add Data</a>
                            </div>
                            <div class="col-sm-4">
                                <div class="text-sm-end">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search Records" name='q' value='' aria-describedby="button-addon2">
                                        <button class="btn btn-primary" type="Submit" id="button-addon2">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-centered mb-0">
                                <thead>
                                    <tr>
                                        <th style="min-width: 10px">#</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th class="text-center" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($user as $row) {
                                    ?>

                                        <tr>
                                            <td><?= $row['id']; ?></td>
                                            <td><?= $row['name']; ?></td>
                                            <td><?= $row['contact']; ?></td>
                                            <td><?= $row['email']; ?></td>
                                            <td class="text-center">
                                                <a href="<?= base_url('edit/'.$row['id']) ?>" class="btn btn-primary  mx-1">Edit</a>
                                                <a href="<?= base_url('delete/'.$row['id']) ?>" class="btn btn-danger  mx-1">Delete</a>
                                            </td>
                                        </tr>

                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>