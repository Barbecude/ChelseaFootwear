<!DOCTYPE html>
<html>
    <section class="content-header">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url()?>Dashboard"><i class="fa fa-gears"></i> klien</a></li>
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
                    <div class="box-body">
                        <div class="row space">
                            <div class="col-md-2"><label class="control-label" for="judul">Judul</label></div>
                            <div class="col-md-10">
                                <input type="text" name="judul" id="judul" class="form-control" required autocomplete="off">
                            </div>
                            <br/><br/>
                            <div class="col-md-2"><label class="control-label" for="subjudul_1">SubJudul_1</label></div>
                            <div class="col-md-10">
                                <input type="text" name="subjudul_1" id="subjudul_1" class="form-control" required autocomplete="off">
                            </div>
                            <br/><br/>
                            <div class="col-md-2"><label class="control-label" for="subjudul_2">SubJudul_2</label></div>
                            <div class="col-md-10">
                                <input type="text" name="subjudul_2" id="subjudul_2" class="form-control" required autocomplete="off">
                            </div>
                            <br/><br/>
                            <div class="col-md-2"><label class="control-label" for="subjudul_3">SubJudul_3</label></div>
                            <div class="col-md-10">
                                <input type="text" name="subjudul_3" id="subjudul_3" class="form-control" required autocomplete="off">
                            </div>
                            <br/><br/>
                            <div class="col-md-2"><label class="control-label" for="subjudul_4">SubJudul_4</label></div>
                            <div class="col-md-10">
                                <input type="text" name="subjudul_4" id="subjudul_4" class="form-control" required autocomplete="off">
                            </div>
                            <br/><br/>
                            <div class="col-md-2"><label class="control-label" for="teks_1">Text_1</label></div>
                            <div class="col-md-10">
                                <input type="text" name="teks_1" id="teks_1" class="form-control" required autocomplete="off">
                            </div>
                            <br/><br/>
                            <div class="col-md-2"><label class="control-label" for="teks_2">Text_2</label></div>
                            <div class="col-md-10">
                                <input type="text" name="teks_2" id="teks_2" class="form-control" required autocomplete="off">
                            </div>
                            <br/><br/>
                            <div class="col-md-2"><label class="control-label" for="teks_3">Text_3</label></div>
                            <div class="col-md-10">
                                <input type="text" name="teks_3" id="teks_3" class="form-control" required autocomplete="off">
                            </div>
                            <br/><br/>
                            <div class="col-md-2"><label class="control-label" for="teks_4">Text_4</label></div>
                            <div class="col-md-10">
                                <input type="text" name="teks_4" id="teks_4" class="form-control" required autocomplete="off">
                            </div>
                            <br/><br/>
                            <div class="col-md-2"><label class="control-label" for="gambar_1">Gambar 1</label></div>
                            <div class="col-md-10">
                                <input type="file" name="gambar_1" id="gambar_1" class="form-control" autocomplete="off" size="20" width="20px">
                            </div>
                            <br/><br/>
                            <div class="col-md-2"><label class="control-label" for="gambar_2">Gambar 2</label></div>
                            <div class="col-md-10">
                                <input type="file" name="gambar_2" id="gambar_2" class="form-control" autocomplete="off" size="20" width="20px">
                            </div>
                            <br/><br/>
                            <div class="col-md-2"><label class="control-label" for="gambar_3">Gambar 3</label></div>
                            <div class="col-md-10">
                                <input type="file" name="gambar_3" id="gambar_3" class="form-control" autocomplete="off" size="20" width="20px">
                            </div>
                            <br/><br/>
                            <div class="col-md-2"><label class="control-label" for="gambar_4">Gambar 4</label></div>
                            <div class="col-md-10">
                                <input type="file" name="gambar_4" id="gambar_4" class="form-control" autocomplete="off" size="20" width="20px">
                            </div>
                            <br/><br/>
                            <div class="row text-center">
                                <button class="btn btn-success" type="submit"><i class="fa fa-download">&nbsp&nbsp</i>Simpan</button>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url()?>Klien/index" class="btn btn-warning"><i class="fa fa-angle-left">&nbsp&nbsp</i>Kembali</a>
                            </div>
                        </div>
                    </form>
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
        var a = $('#password').val();
        var b = $('#confirm').val();

        if(a!=b){
            alert('Confirmasi Password Tidak Sesuai');
        }else{
            e.preventDefault(); 
                $.ajax({
                    url:'<?php echo base_url();?>Klien/klien_create',
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
                        window.location.replace("<?php echo base_url('klien/index')?>");
                    }
                });
        }
        
        
    });
    });
</script>