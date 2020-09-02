<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1><?= $page_menu; ?></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <?= $maps; ?>
            </ol>
        </div>
    </div>
    </div>
</section>
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-success card-outline">
                    <div class="card-header">
                    <h3 class="card-title"><?= $page_menu; ?></h3>
                        <div class ="btn-list text-right">
                            <button class="btn btn-primary btn-xs btnAdd" data-toggle="modal" data-target="#modalAdd"><i class="fas fa-plus-circle"></i>&nbsp;Tambah</button>
                        </div> 
                    </div>
                    <div class="card-body table-responsive">
                        <table id="table1" class="table table-bordered table-hover" style="width:100%;">
                            <thead>
                                <tr>
                                <th width="5%">No</th>
                                <th>Username</th>
                                <th>Nama Lengkap</th>
                                <th>Aktif</th>
                                <th>Level</th>
                                <th>Dibuat</th>
                                <th width="5%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=0; foreach($users as $row): $no++; ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $row->USERNAME; ?></td>
                                        <td><?= $row->NAMA_LENGKAP; ?></td>
                                        <td><?= $row->AKTIF == 1 ? '<span class="badge badge-success">Aktif</span>' : '<span class="badge badge-danger">Non-Aktif</span>'; ?></td>
                                        <td><?= $row->LEVEL == 1 ? '<span class="badge bg-gradient-cyan badge-pill">Super Admin</span>' : '<span class="badge badge-success badge-pill">Admin</span>'; ?></td>
                                        <td><?= date('d-M-Y', strtotime($row->DIBUAT)); ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <span data-toggle="tooltip" title="Edit">
                                                    <a href="#" data-id="<?= $row->ID_USER; ?>" data-toggle="modal" data-target="#modalAdd" title="Edit" class="btn btn-success btn-xs btnEdit"><i class="fas fa-edit"></i></a>&nbsp;
                                                </span>
                                                <span data-toggle="tooltip" title="Hapus">
                                                    <a href="<?= site_url('users/del_user/' . $row->ID_USER); ?>" title="Hapus" class="btn btn-danger btn-xs tombol-hapus"><i class="fas fa-trash"></i></a>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalAdd">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header bg-success">
            <h4 class="modal-title judul-add">Tambah User</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form id="formUser">
        <div class="modal-body direct-chat-messages" style="height: auto; max-height: 420px;">
            <div class="container">
            
                <div class="form-group">
                    <label for="exampleInputPassword1">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama lengkap" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Level</label>
                    <select name="level" id="level" class="form-control select2 level" style="width: 100%;">
                        <option value="" class="text-secondary">Pilih Level</option>
                        <option value="1" class="text-secondary">Super Admin</option>
                        <option value="2" class="text-secondary">Admin</option>
                    </select>
                </div>
                <div class="group-aktif mb-2" style="display:none;">
                    <label for="exampleInputPassword1">Status Aktif</label><br>
                        <div class="icheck-success d-inline mr-3">
                            <input type="radio" class="aktif" id="aktif1" value="1" name="aktif">
                            <label style="font-weight: lighter;" for="aktif1">
                            Aktif
                            </label>
                        </div>
                        <div class="icheck-danger d-inline mr-3">
                            <input type="radio" class="aktif" id="aktif0" value="0" name="aktif">
                            <label style="font-weight: lighter;" for="aktif0">
                            Non-Aktif
                            </label>
                        </div>
                    </label>
                </div>
                <div class="group-ubah-pass mb-2 mt-3" style="display:none;">
                    <div class="icheck-primary d-inline mr-3">
                        <input type="checkbox" class="check-ubah" id="checkubah" name="ubahpass">
                        <label for="checkubah">
                        Ubah Password (Jika Ingin Diubah)
                        </label>
                    </div>
                    <hr>
                </div>
                <div class="group-pass" style="display:none;">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Konfirmasi Password</label>
                        <input type="password" name="password2" id="password2" class="form-control" placeholder="Konfirmasi password" autocomplete="off">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <input type="hidden" name="id" id="id">
            <input type="hidden" id="csrf" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>&nbsp;Simpan</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        </div>
        </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <script>
    $(function(){

        var form = $("#formUser")

        $(".btnAdd").on("click", function(){
            $(".judul-add").html('Tambah User');
            $("#modalAdd").modal('show');
            $(".group-pass").show();
            form[0].reset();
            form.attr("action", "<?= site_url('users/add_user'); ?>")
            $("#level").val('').change();
        });

        $(".btnEdit").on("click", function(){
            $(".judul-add").html('Ubah User');
            $("#modalAdd").modal('show');
            $(".group-pass").hide();
            form[0].reset();
            form.attr("action", "<?= site_url('users/update_user'); ?>")
            $("#level").val('').change();
            $(".group-aktif").show();
            $(".group-ubah-pass").show();

            var id = $(this).data('id');
            var csrfName = $("#csrfuser").attr("name");
            var csrfHash = $("#csrfuser").val();

            $.ajax({
                url: "<?= site_url('users/det_user'); ?>",
                data: {[csrfName]: csrfHash, id: id},
                type: "GET",
                dataType:"JSON",
                success: function(data){

                    $("#username").val(data.USERNAME);
                    $("#nama").val(data.NAMA_LENGKAP);
                    $("#level").val(data.LEVEL).change();
                    if(data.AKTIF == 1){
                        $("#aktif1").attr("checked", true);
                    } else {
                        $("#aktif0").attr("checked", true);
                    }
                    $("#id").val(id);

                }
            });

        });

        $("#checkubah").on("click", function(){
            //e.preventDefault();
            if($(this).prop("checked") == true){
                $(".group-pass").show();
            } else {
                $(".group-pass").hide();
            }
        });


        form.submit(function(e){
            e.preventDefault();
            $.ajax({
                url: form.attr("action"),
                data: form.serialize(),
                type: "POST",
                dataType: "JSON",
                success: function(response){
                    if (response.success == true) {
                        window.location.href = "<?= site_url('users'); ?>";
                        //console.log(success);
                        $('.form-group').removeClass('has-error')
                                .removeClass('has-success');
                        $('.text-danger').remove();
                        // reset the form
                        form[0].reset();
                    }
                    else {
                        $.each(response.messages, function(key, value) {
                            var element = $('#' + key);
                            element.closest('div.form-group')
                            .removeClass('has-error')
                            .addClass(value.length > 0 ? 'has-error' : 'has-success')
                            .find('.text-danger')
                            .remove();
                            element.after(value);
                            //console.log(element);
                            $('.badge-danger').delay(2000).hide(10, function() {
                            $('.badge-danger').remove();
                            });
                        });
                    }
                }
            });
        });

    });
  </script>