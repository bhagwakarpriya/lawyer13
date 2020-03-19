<?php $this->load->view('admin/header'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card card-topline-green"> 
            <div class="card-head">
                <header><h4>Add Categories</h4></header>
            </div>
            <div class="card-body">
                <form class="form-horizontal" id="addcategories" name="addcategories" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-sm-2   control-label">Categories Name : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="categories_name" id="categories_name" placeholder="Enter Categorie">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2   control-label">Categories Image : </label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">                                        
                            <button class="btn btn-primary" type="submit">Add Categories</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<?php $this->load->view('admin/footer'); ?>
