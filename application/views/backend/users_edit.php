<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Users Edit</h1>
			</div>
		</div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Form Users
                    </div>
                    <?php 
                    echo form_open(base_url('main/users_update'));
                    foreach($users_data as $u){ 
                    ?>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="hidden" name="id" value="<?php echo $u['id']; ?>">
                                    <input class="form-control" disabled value="<?php echo $u['username']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input class="form-control" name="fname" value="<?php echo $u['first_name']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>นามสกุล</label>
                                    <input class="form-control" name="lname" value="<?php echo $u['last_name']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Role</label>
                                    <select class="form-control" name="role">
                                        <?php 
                                        foreach($selectRole as $r){
                                            echo '<option value="'.$r['id'].'" '.($r['id'] == $u['role_id'] ? "selected" : "").'>'.$r['role_name'].'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div> 
                        </div>
                        <div class="form-group" style=" text-align: right; ">  
                            <button type="reset" class="btn btn-default" onclick="window.location.href = '<?php echo base_url('main/manage_users')?>'">ย้อนกลับ</button>
                            <button type="submit" class="btn btn-primary">บันทึก</button>
                        </div>  
                    </div>
                    <?php 
                    }
                    echo form_close(); 
                    ?>
                </div>
            </div>
        </div>
	</div>
    <script src="<?php echo base_url();?>js/jquery/jquery.dataTables.min.js"></script>
    
