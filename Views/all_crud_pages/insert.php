<div class="container my-5">

    <h2 class="text-center text-primary pt-5 pb-5">Add Your Information</h2>

    <div class="row">
        <div class="col-12">
            <div class="card w-50 mx-auto">

                <div class="card-body">
                    <div class="">
                        <div class="container">
                            <form action="<?= base_url('userstore') ?>" method="POST">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name <span class="text-danger">
                                                    *</span>
                                            </label>
                                            <input type="text" name="name" class="form-control" value="" required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="contact" class="form-label">Contact <span class="text-danger">
                                                    *</span>
                                            </label>
                                            <input type="text" maxlength="10" name="contact" class="form-control" value="" required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email <span class="text-danger">
                                                    *</span>
                                            </label>
                                            <input type="email" name=" email" class="form-control" value="" required>
                                        </div>
                                    </div>


                                    <div class="">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="<?= base_url('/') ?>" class="btn btn-danger  w-100 mx-auto"> Back </a>
                                            </div>

                                            <div class="col-sm-6">
                                                <button class="btn btn-primary w-100 mx-atuo" type="submit" name="submit">Submit</button>
                                            </div>
                                            <div class="col-sm-4">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>