<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">New Customer</h1>
			</div>
		</div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Form Customers
                    </div>
                    <?php 
                    echo form_open(base_url('main/add_customer'));
                    ?>
                    <div class="panel-body">
                        <div class="row">
                            <!-- <div class="col-lg-4">
                                <label>รูป</label>
                            </div>
                            <div class="col-lg-8"><label>&nbsp;</label></div> -->
                            <div class="col-lg-4">
                                <div class="text-center">
                                    <img src="<?php echo base_url()."asset/avatar_holder.jpg";?>" alt="avatar" style="width: 200px;">                                
                                    <input type="file" class="form-control" style=" margin-top: 47px; margin-bottom: 20px; ">
                                </div>
                                <div class="form-group">
                                    <label>Blacklist status</label>
                                    <select class="form-control" name="BW" <?php if($user_role == 'Sale') echo "disabled";?> >
                                        <?php 
                                        foreach($selectBlacklist as $b){
											echo '<option value="'.$b['id'].'" '.($b['id'] == '1' ? "selected" : "").'>'.$b['status_name'].'</option>';
											// echo '<option value="'.$b['id'].'" >'.$b['status_name'].'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                        <label>เลขบัตรประชาชน</label>
                                        <input class="form-control" name="idcard" value="" <?php if($user_role == 'Sale') echo "disabled";?> >
                                </div>
                                <div class="col-lg-4" style="padding-left: 0px; padding-right: 0px;">
                                    <label>คำนำหน้า</label>
                                    <input class="form-control" name="titlename" value="" <?php if($user_role == 'Sale') echo "disabled";?> >
                                </div>
                                <div class="col-lg-8" style="padding-left: 15px; padding-right: 0px;">
                                    <label>ชื่อ</label>
                                    <input class="form-control" name="fname" value="" <?php if($user_role == 'Sale') echo "disabled";?> >
                                </div>
                                <div class="col-lg-4" style="padding-left: 0px; padding-right: 0px;">
                                    <label style=" margin-top: 15px; " >ชื่อเล่น</label>
                                    <input class="form-control" name="nname" value="" <?php if($user_role == 'Sale') echo "disabled";?> >
                                </div>
                                <div class="col-lg-8" style="padding-left: 15px; padding-right: 0px;">
                                    <label style=" margin-top: 15px; " >เพศ</label>
                                    <select class="form-control" name="gender" <?php if($user_role == 'Sale') echo "disabled";?> >
                                        <?php 
                                        foreach($selectGender as $g){
                                            echo '<option value="'.$g['id'].'" '.($g['id'] == '1' ? "selected" : "").'>'.$g['gender_name'].'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label style=" margin-top: 15px; " >ศาสนา</label>
                                    <select class="form-control" name="religion" <?php if($user_role == 'Sale') echo "disabled";?> >
                                        <?php 
                                        foreach($selectReligion as $r){
                                            echo '<option value="'.$r['id'].'" '.($r['id'] == '1' ? "selected" : "").'>'.$r['religion_name'].'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group" style="visibility: hidden;">
                                            <label>xxx</label>
                                            <input class="form-control">
                                </div>
                                 <div class="form-group">
                                    <label>นามสกุล</label>
                                    <input class="form-control" name="lname" value="" <?php if($user_role == 'Sale') echo "disabled";?> >
                                </div>
                                <div class="form-group">
                                    <label>วันเกิด</label>
                                    <input class="form-control" name="birthday" value="" placeholder="yyyy-mm-dd" <?php if($user_role == 'Sale') echo "disabled";?> >
                                </div>
                                <div class="form-group">
                                    <label>ที่อยู่</label>
                                    <textarea class="form-control" name="address" <?php if($user_role == 'Sale') echo "disabled";?> ></textarea>
                                </div>
                            </div> 
                        </div>
                        <div class="form-group" style=" text-align: right; ">  
                            <button type="reset" class="btn btn-default" onclick="window.location.href = '<?php echo base_url('main/manage_customers/2')?>'">ย้อนกลับ</button>
                            <?php if($user_role != 'Sale'){
                                echo '<button type="submit" class="btn btn-primary">บันทึก</button>';
                            }?>                            
                        </div>  
                    </div>
                    <?php 
                    echo form_close(); 
                    ?>
                </div>
            </div>
        </div>
	</div>
    <script src="<?php echo base_url();?>js/jquery/jquery.dataTables.min.js"></script>
    
