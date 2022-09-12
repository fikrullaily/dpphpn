<html>
<head>
</head>
<body>
<div class="content-wrapper pt-2">
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <section class="content">
                            <form id="outbound-form" action="<?php echo base_url("master/C_berita/savedata"); ?>" method="post">
                                <div class="box box-solid box-info">
                                    <div class="card card-info">
                                        <div class="card-header">
                                            <h3 class="card-title"><i class="fas fa-list"></i>INSERT BERITA</h3>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="isi_berita">ISI BERITA</label><br>
                                                <textarea id="isi_berita" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row" id="date">
                                            <div class="form-group col-md-6">
                                                <label>GAMBAR</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" size="30" id="start_date" placeholder="START DATE" name="start_date" autocomplete = "off" type="file" style = "background-color : white"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <button type="submit" style="width: 40%;" class="btn btn-block bg-gradient-info">DOWNLOAD</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <script type="text/javascript">
                                jQuery_1_12_4("#last_status").autocomplete({
                                    source: 'https://dashboard.wms.haistar.co.id/index.php?r=Custom/StatusName',
                                    select: function(event, ui) {
                                        if (ui.item.label == "No result found")
                                            event.preventDefault();
                                        else {
                                            $("#status_id").val(ui.item.status_id);
                                        }
                                    },
                                    focus: function(event, ui) {
                                        if (ui.item.label == "No result found")
                                            event.preventDefault();
                                    }
                                });
                            </script>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
</html>
<script type="text/javascript" src="<?= base_url() . 'assets/js/jquery-3.4.1.min.js' ?>"></script>
<script type="text/javascript" src="<?= base_url() . 'assets/js/jquery-ui.min.js' ?>"></script>