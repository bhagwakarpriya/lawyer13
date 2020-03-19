<?php $this->load->view('admin/header'); ?>
<link href="<?php echo base_url(); ?>admin_assests/js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="lawyer_list">
    <thead>
        <tr>
            <th> Name </th>
            <th> Email </th>
            <th> Mobile </th>
            <th> City </th>
            <th> Status </th>
            <th> Action </th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($lawyers as $l) {
            echo "<tr>";
            echo "<td>" . $l['name']['first_name'] . " " . $l['name']['last_name'] . "</td>";
            echo "<td>" . $l['email'] . "</td>";
            echo "<td>" . $l['phone_no'] . "</td>";
            echo "<td>" . $l['city'] . "</td>";
            if ($l['is_active'] == 'false') {
                echo '<td><center><a href="#deactiveModel" data-toggle="modal" data-id="' . $l['_id'] . '" class="link-black text-sm deactivelawyer" data-original-title="Delete"><span class="label btn-success">Active</span></a></center></td>';
            } else {
                echo '<td><center><a href="#activeModel" data-toggle="modal" data-id="' . $l['_id'] . '" class="link-black text-sm activelawyer" data-original-title="Delete"><span class="label btn-info">Deactive</span></a></center></td>';
            }
            echo '<td><center><a href="" data-toggle="modal" data-id="' . $l['_id'] . '">View</a>';
            echo '&nbsp;&nbsp;<a href="#deleteLawyer" data-toggle="modal" data-id="' . $l['_id'] . '" class="fa fa-trash-o btn btn-danger delete"></a><center></td>';
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
</div>
</div>
</div>
<div id="deleteLawyer" class="modal fade" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12"><h3 class="m-t-none m-b">Delete Record</h3>
                        <b>Are You sure want to delete Lawyer.</b><br/>
                        <form role="form">
                            <div>
                                <button class="btn btn-sm btn-primary pull-right m-l" data-dismiss="modal">Cancel</button>
                                <button class="btn btn-sm btn-danger pull-right yes-sure-lawyer m-l" type="button"><strong><i class="fa fa-trash"></i> Delete </strong></button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#lawyer_list').DataTable();
    });
</script>
<?php $this->load->view('admin/footer'); ?>
