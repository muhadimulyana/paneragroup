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
                                <th>Menu</th>
                                <th>Link/Url</th>
                                <th>Bahasa</th>
                                <th>Aktif</th>
                                <th>Dibuat</th>
                                <th width="5%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=0; foreach($menu as $row): $no++; ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= strtoupper($row->MENU); ?></td>
                                        <td>/<?= $row->URL == null || $row->URL == '' ? '#' : '<span class="text-success">' . $row->URL . '</span>'; ?></td>
                                        <td><?= ucfirst($row->LANG); ?></td>
                                        <td><?= $row->AKTIF == 1 ? '<span class="badge badge-success">Aktif</span>' : '<span class="badge badge-danger">Non-Aktif</span>'; ?></td>
                                        <td><?= date('d-M-Y', strtotime($row->DIBUAT)); ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <span data-toggle="tooltip" title="Edit">
                                                    <a href="#" data-id="<?= $row->ID_MENU; ?>" data-toggle="modal" data-target="#modalAdd" title="Edit" class="btn btn-success btn-xs btnEdit"><i class="fas fa-edit"></i></a>&nbsp;
                                                </span>
                                                <span data-toggle="tooltip" title="Hapus">
                                                    <a href="<?= site_url('users/del_user/' . $row->ID_MENU); ?>" title="Hapus" class="btn btn-danger btn-xs tombol-hapus"><i class="fas fa-trash"></i></a>
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
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title judul-add">Tambah Menu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formMenu">
                <div class="modal-body direct-chat-messages" style="height: auto; max-height: 430px;">
                    <div class="container">
                        <div class="border p-3 border-success mb-2">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Bahasa</label>
                                <select name="lang[]" id="lang1" class="form-control select2 lang" style="width: 100%;">
                                    <option value="" class="text-secondary">Pilih Bahasa</option>
                                    <option value="indonesia" class="text-secondary">Indonesia</option>
                                    <option value="english" class="text-secondary">English</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Menu</label>
                                <input type="text" name="menu[]" id="menu1" class="form-control" placeholder="Masukkan menu" autocomplete="off">
                            </div>
                        </div>
                        <div class="border p-3 border-success mb-1">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Bahasa</label>
                                <select name="lang[]" id="lang2" class="form-control select2 lang" style="width: 100%;">
                                    <option value="" class="text-secondary">Pilih Bahasa</option>
                                    <option value="indonesia" class="text-secondary">Indonesia</option>
                                    <option value="english" class="text-secondary">English</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Menu</label>
                                <input type="text" name="menu[]" id="menu2" class="form-control" placeholder="Masukkan menu" autocomplete="off">
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

        $("#lang1").on("change", function(){
            //e.preventDefault();
            var val = $(this).val();
            if(val == 'indonesia'){
                $("#lang2").val('english').change();
                $("#lang2 option[value=" + val + "]").attr('disabled','disabled');
                $("#lang2 option[value=english]").removeAttr('disabled');;
            } else if(val == 'english') {
                $("#lang2").val('indonesia').change();
                $("#lang2 option[value=" + val + "]").attr('disabled','disabled');
                $("#lang2 option[value=indonesia]").removeAttr('disabled');;
                //$("#lang2 option[value='english']").removeAttr('disabled');;
            }
        });



    });

</script>