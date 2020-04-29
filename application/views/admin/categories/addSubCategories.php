<?php $this->load->view('admin/header');
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card card-topline-green"> 
            <div class="card-head">
                <header><h4>Add Sub Categories</h4></header>
            </div>
            <div tag ="post" method="post" action="<?php echo basr_url('admin/post');?>">
                <div>echo</div>
                <div>echo</div>
                <div>echo</div>
            </div>
            <div class="card-body">
                <form class="form-horizontal" id="addcategories" name="addcategories" method="post" enctype="multipart/form-data">
                    <div class = "form-group">
                        <label class = "col-sm-2   control-label">Categories</label>
                        <div class = "col-sm-8">
                            <input type = "text" name = "categories_name" class = "form-control input-height" value="<?php echo $name;?>" />
                        </div>
                    </div>
                    <div class = "form-group">
                        <label class = "col-sm-2   control-label">Subcategories identifire : </label>
                        <div class = "col-sm-8">
                            <input type = "text" name = "subcategories_name" class = "form-control input-height" />
                        </div>
                    </div>

                    <div class = "form-group">
                        <div class = "col-sm-4 col-sm-offset-2">
                            <button type = "reset" class = "btn btn-info">Cancel</button>
                            <button class = "btn btn-primary" type = "submit">Add Categories</button>
                        </div>
                    </div>

                </form>
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
<?php $this->load->view('admin/footer');
?>
