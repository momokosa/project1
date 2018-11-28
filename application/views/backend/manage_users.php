	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Manage Users</h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
		<div class="row">
			
		</div>
		<!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <table id="table_users" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Username</th>
                            <th>Fist Name</th>
                            <th>Last Name</th>
                            <th>Employee Id</th>
                            <th>User Roles</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($users_data->result_array() as $row){
                            echo "<tr>";
                            echo "<td>".$row['id']."</td>";
                            echo "<td>".$row['username']."</td>";
                            echo "<td>".$row['first_name']."</td>";
                            echo "<td>".$row['last_name']."</td>";
                            echo "<td>".$row['employee_id']."</td>";
                            echo "<td>".$row['role_name']."</td>";
                            echo "<td><a href='#' class='btn btn-primary a-btn-slide-text'>
                                            <span class='glyphicon glyphicon-edit' aria-hidden='true'></span><span><strong>Edit</strong></span>            
                                            </a></td>";                                
                                echo "</tr>";
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Username</th>
                            <th>Fist Name</th>
                            <th>Last Name</th>
                            <th>Employee Id</th>
                            <th>User Roles</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
	</div>
	<!-- /#page-wrapper -->

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>js/jquery/jquery.dataTables.min.js"></script>
    <script >
        $(document).ready(function() {
            $('#table_users').DataTable( {
                "dom": '<"toolbar">frtip'
            } );

            $("div.toolbar").html('<b>Custom tool bar! Text/images etc.</b>');
        } );
	</script>
