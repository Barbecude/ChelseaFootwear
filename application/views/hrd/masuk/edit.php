<!DOCTYPE html>
<html>
    <section class="content-header">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url()?>Dashboard"><i class="fa fa-gears"></i> Produk</a></li>
            <li class="active"><?php echo $breadcum; ?></li>
        </ol>
    </section>
    <hr/>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <form class="form-horizontal" id="submit" enctype="multipart/form-data">
                        <div class="col-md-12"><label for="absen". for="absen">absensi</label>
                            <div class="form-group"> 
                                <div class="box">
                                    <input type="hidden" name="id_person" id="id_person" value="<?= $this->session->u_id; ?>">
                                        <div class="box-body">
                                            <div class="col-md-12">
                                                <th>tanggal</th>
                                                <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?= $person['tanggal'] ?>">
                                            </div><br><br><br>
                                            <div class="col-md-12">
                                                <th>jam masuk</th><br>
                                                <input type="time" name="jam_masuk" id="jam_masuk" class="form-control" value<?= $person['jam_masuk'] ?>>
                                            </div><br><br><br>
                                            <div class="col-md-12">
                                                <th>jam keluar</th><br>
                                                <input type="time" name="jam_keluar" id="jam_keluar" class="form-control">
                                            </div><br><br><br>
                                            <div class="col-md-12">
                                                <th>task kerja</th><br>
                                                <input type="text" name="task_kerja" id="task_kerja" class="form-control">
                                            </div><br><br><br>
                                            <div class="col-md-12">
                                                <th>masuk</th><br>
                                            <select name="masuk" id="masuk" class="form-control" value<?= $person['masuk'] ?>>
                                                <option value="WFH">WFH</option>
                                                <option value="WFO">WFO</option>
                                                <option value="IZIN">IZIN</option>
                                            </select>
                                        </div><br><br><br>
                                        <center><input type="submit" value="login"></center>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--  -->
                </div>
            </div>
        </div>
    </section>
</html>

<script src="<?php echo base_url('assets/js/plugins/jQuery/jQuery-2.1.3.min.js'); ?>"></script>
<script type="text/javascript">
$(document).ready(function(){
    $(".preloader").fadeOut();
    $('#submit').submit(function(e){
        $(".preloader").fadeIn();
        e.preventDefault(); 
                $.ajax({
                    url:'<?php echo base_url();?>hrd/add_edit',
                    type:"post",
                    data:new FormData(this),
                    processData:false,
                    contentType:false,
                    cache:false,
                    async:false,
                    success: function(data){
                        console.log(data)
                        alert("Data Berhasil Disimpan");
                        $(".preloader").fadeOut();
                        window.location.replace("<?php echo base_url('hrd/masuk/index')?>");
                    }
                });
        
        
    });
    });
    
</script>