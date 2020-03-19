<?php $this->load->view('admin/header'); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="card card-topline-green"> 
            <div class="card-head">
                <header><h4>Categories</h4></header>
                <a href="<?= base_url() ?>admin/Categories/add"class="btn btn-primary pull-right" ><i class="fa fa-plus"> Add</i></a>
            </div>
            <div class="card-body " id="bar-parent1">
                <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="client_list">
                    <thead>
                        <tr>
                            <th> Name </th>
                            <th> Image </th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($specilization as $l) {
                            echo "<tr>";
                            echo "<td>" . $l['tag'] . "</td>";
                            echo '<td><center><img style="width:180px;height:80px" alt="image"  src="' . base_url() . 'backend/images/categories/' . $l['image'] . '" /></center></td>';
                            ?>
                        <td>
                            <button class="btn btn-primary btn-xs">
                                <a href="<?php echo base_url('admin/lawyer/edit/' . $l['_id']); ?>"> <i class="fa fa-pencil"></i></a>
                            </button>
                            <button class="btn btn-danger btn-xs">
                                <a href="<?php echo base_url('admin/lawyer/delete/' . $l['_id']) ?>" <i class="fa fa-trash-o "></i></a>
                            </button>
                        </td>
                        <?php
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<?php $this->load->view('admin/footer'); ?>
