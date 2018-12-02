<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Manage Customers</h1>
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
                            <th>id</th>
                            <th>เลขบัตรประชาชน</th>
                            <th>ชื่อ - นามสกุล</th>
                            <th>ชื่อเล่น</th>
                            <th>เพศ</th>
                            <th>ศาสนา</th>
                            <th style="width: 100px;">วันเกิด</th>                            
                            <th>ที่อยู่</th>
                            <th>B&W</th>
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
                                echo "<td>".$row['id']."</td>";
                                echo "<td>".$row['national_id_card']."</td>";
                                echo "<td>".$row['name_title'].$row['first_name']." ".$row['middle_name']." ".$row['last_name']."</td>";
                                echo "<td>".$row['nick_name']."</td>";                            
                                echo "<td>".$row['gender_name']."</td>";
                                echo "<td>".$row['religion_name']."</td>";
                                echo "<td>".$row['birthdate']."</td>";
                                echo "<td>".$row['address']."</td>";
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
	<!-- /#page-wrapper -->

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>js/jquery/jquery.dataTables.min.js"></script>
    <script >
        $(document).ready(function() {
            $('#table_users').DataTable( {
                "dom": '<"toolbar">frtip'
            } );

            $("div.toolbar").html('<b hidden>Custom tool bar! Text/images etc.</b>');
        } );
	</script>
