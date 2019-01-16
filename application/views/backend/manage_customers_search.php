<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Manage Customers - Search</h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
		<div class="row" <?php if($user_role == 'Sale') echo "hidden";?> >
            <div style="float: right; margin-right: 15px; margin-bottom: 15px;">
                <a href="<?php echo base_url()."main/new_customer/"; ?>" ><button type="button" class="btn btn-info" style="background-color: #337ab7;">Add New Customer</button></a>
            </div>
		</div>
		<!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                            Search Option
                    </div>
                    <?php 
                    echo form_open(base_url('main/manage_customers_search'));
                    ?>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label>ค้นหาด้วย</label>
                                    <select class="form-control" name="search_type">
                                        <?php
                                        echo '<option value="1" '.($search_type == '1' || $search_type == '' || $search_type==null ? "selected" : "").'>เลขบัตรประชาชน</option>';
                                        echo '<option value="2" '.($search_type == '2' ? "selected" : "").'>ชื่อ-นามสกุล</option>';
                                        echo '<option value="3" '.($search_type == '3' ? "selected" : "").'>ที่อยู่</option>';
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>ค้นหา</label>
                                    <input class="form-control" name="search_input" value="<?php echo $search_input;?>" >
                                </div>
                            </div>
                            <div class="col-lg-1">
                            <label>&nbsp;</label>
                                <button type="submit" class="btn btn-primary">เริ่มค้นหา</button>
                            </div>
                        </div>
                    </div>
                    <?php 
                    echo form_close(); 
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                            รายชื่อ
                    </div>
                    <div class="panel-body">
                        <table id="table_users" class="display" style="width:100%">
                            <thead>
                                <tr>
                                <th>ID Card</th>
                                    <th>ชื่อ - นามสกุล</th>
                                    <th>ที่อยู่</th>
                                    <th>Contact</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($users_data->result_array() as $row){
                                    if($row['status_blacklist'] == '2'){
                                        echo "<tr style='color: ff0000'>";                                
                                    }else{
                                        echo "<tr>";
                                    }
                                        // echo "<tr>";
                                    // echo "<td>".$row['id']."</td>";
                                        echo "<td>".$row['national_id_card']."</td>";
                                        echo "<td>".$row['name_title'].$row['first_name']." ".$row['middle_name']." ".$row['last_name']."</td>";
                                        //echo "<td>".$row['nick_name']."</td>";                            
                                        //echo "<td>".$row['gender_name']."</td>";
                                        //echo "<td>".$row['religion_name']."</td>";
                                        //echo "<td>".$row['birthdate']."</td>";
                                        echo "<td>".$row['address']."</td>";
                                        echo "<td>".$row['nick_name']."</td>"; 
                                        echo "<td>".$row['status_name']."</td>";
                                        echo "<td><a href='".base_url()."main/customers_edit/".$row['id']."' class='btn btn-primary a-btn-slide-text'>
                                                    <span class='glyphicon glyphicon-eye-open' aria-hidden='true'></span><span><strong>View</strong></span>            
                                                    </a></td>";                                
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
	<!-- /#page-wrapper -->

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>js/jquery/jquery.dataTables.min.js"></script>
    <script >
        $(document).ready(function() {
            $('#table_users').DataTable( {
                "paging":   false,
                "ordering": false,
                "searching": false,
                "dom": '<"toolbar">frtip'
            } );

            // $("div.toolbar").html('<b>Custom tool bar! Text/images etc.</b>');
            // $("div.toolbar").html('<a href="<?php echo base_url()."main/manage_customers/2"; ?>" ><button type="button" class="btn btn-danger">Blacklist</button></a> <a href="<?php echo base_url()."main/manage_customers/1"; ?>" ><button type="button" class="btn btn-success">Whitelist</button></a> <a href="<?php echo base_url()."main/manage_customers/3"; ?>" ><button type="button" class="btn btn-warning">VIPlist</button></a> <a href="<?php echo base_url()."main/manage_customers/"; ?>" ><button type="button" class="btn btn-info">All</button></a>');
        } );
	</script>
