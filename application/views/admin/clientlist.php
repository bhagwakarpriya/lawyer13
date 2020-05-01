<?php $this->load->view('admin/header'); ?>
<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="client_list">
    <thead>
        <tr>
            <th> Name </th>
            <th> Email </th>
            <th> Mobile </th>
            <th> City </th>
            <th> gender </th>
            <th> Status </th>
            <th> Action </th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($client as $l) {
            echo "<tr>";
            echo "<td>" . $l['name']['first_name'] . " " . $l['name']['last_name'] . "</td>";
            echo "<td>" . $l['email'] . "</td>";
            echo "<td>" . $l['phone_no'] . "</td>";
            echo "<td>" . $l['city'] . "</td>";
            echo "<td>" . $l['gender'] . "</td>";
            if ($l['is_active'] == 'false') {
                echo '<td><center><a href="#deactiveModel" data-toggle="modal" data-id="' . $l['_id'] . '" class="link-black text-sm deactiveclient" data-original-title="Delete"><span class="label btn-success">Active</span></a></center></td>';
            } else {
                echo '<td><center><a href="#activeModel" data-toggle="modal" data-id="' . $l['_id'] . '" class="link-black text-sm activeclient" data-original-title="Delete"><span class="label btn-info">Deactive</span></a></center></td>';
            }
            echo '<td><center><a href='.base_url('admin/Client/caseDetail/').$l['_id'].'>View Case</a>';
            echo '&nbsp;&nbsp;<a href="#deleteClient" data-toggle="modal" data-id="' . $l['_id'] . '" class="fa fa-trash-o btn btn-danger delete"></a><center></td>';
            echo "</tr>";
       
        }
        ?>
    </tbody>
</table>
</div>
</div>
</div>
<div id="deleteClient" class="modal fade" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12"><h3 class="m-t-none m-b">Delete Record</h3>
                        <b>Are You sure want to delete Lawyer.</b><br/>
                        <form role="form">
                            <div>
                                <button class="btn btn-sm btn-primary pull-right m-l" data-dismiss="modal">Cancel</button>
                                <button class="btn btn-sm btn-danger pull-right yes-sure-client m-l" type="button"><strong><i class="fa fa-trash"></i> Delete </strong></button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('admin/footer'); ?>