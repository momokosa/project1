<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Customers Edit</h1>
			</div>
		</div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Form Customers
                    </div>
                    <?php 
                    echo form_open(base_url('main/customers_update'));
                    foreach($users_data as $m){ 
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
                                            echo '<option value="'.$b['id'].'" '.($b['id'] == $m['status_blacklist'] ? "selected" : "").'>'.$b['status_name'].'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                        <label>เลขบัตรประชาชน</label>
                                        <input class="form-control" name="idcard" value="<?php echo $m['national_id_card']; ?>" <?php if($user_role == 'Sale') echo "disabled";?> >
                                </div>
                                <div class="col-lg-4" style="padding-left: 0px; padding-right: 0px;">
                                    <label>คำนำหน้า</label>
                                    <input type="hidden" name="id" value="<?php echo $m['id']; ?>">
                                    <input class="form-control" name="titlename" value="<?php echo $m['name_title']; ?>" <?php if($user_role == 'Sale') echo "disabled";?> >
                                </div>
                                <div class="col-lg-8" style="padding-left: 15px; padding-right: 0px;">
                                    <label>ชื่อ</label>
                                    <input class="form-control" name="fname" value="<?php echo $m['first_name']; ?>" <?php if($user_role == 'Sale') echo "disabled";?> >
                                </div>
                                <div class="col-lg-4" style="padding-left: 0px; padding-right: 0px;">
                                    <label style=" margin-top: 15px; " >ชื่อเล่น</label>
                                    <input class="form-control" name="nname" value="<?php echo $m['nick_name']; ?>" <?php if($user_role == 'Sale') echo "disabled";?> >
                                </div>
                                <div class="col-lg-8" style="padding-left: 15px; padding-right: 0px;">
                                    <label style=" margin-top: 15px; " >เพศ</label>
                                    <select class="form-control" name="gender" <?php if($user_role == 'Sale') echo "disabled";?> >
                                        <?php 
                                        foreach($selectGender as $g){
                                            echo '<option value="'.$g['id'].'" '.($g['id'] == $m['gender_id'] ? "selected" : "").'>'.$g['gender_name'].'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label style=" margin-top: 15px; " >ศาสนา</label>
                                    <select class="form-control" name="religion" <?php if($user_role == 'Sale') echo "disabled";?> >
                                        <?php 
                                        foreach($selectReligion as $r){
                                            echo '<option value="'.$r['id'].'" '.($r['id'] == $m['religion_id'] ? "selected" : "").'>'.$r['religion_name'].'</option>';
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
                                    <input class="form-control" name="lname" value="<?php echo $m['last_name']; ?>" <?php if($user_role == 'Sale') echo "disabled";?> >
                                </div>
                                <div class="form-group">
                                    <label>วันเกิด</label>
                                    <input class="form-control" name="birthday" value="<?php echo $m['birthdate']; ?>" <?php if($user_role == 'Sale') echo "disabled";?> >
                                </div>
                                <div class="form-group">
                                    <label>ที่อยู่</label>
                                    <textarea class="form-control" name="address" <?php if($user_role == 'Sale') echo "disabled";?> ><?php echo $m['address']; ?></textarea>
                                </div>
                            </div> 
                        </div>
                        <div class="form-group" style=" text-align: right; ">  
                            <button type="reset" class="btn btn-default" onclick="window.location.href = '<?php echo base_url('main/manage_customers_search')?>'">ย้อนกลับ</button>
                            <?php if($user_role != 'Sale'){
                                echo '<button type="submit" class="btn btn-primary">บันทึก</button>';
                            }?>                            
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
    
