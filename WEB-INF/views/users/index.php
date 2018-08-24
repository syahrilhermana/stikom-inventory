<link href="<?php echo $config->base_url() ?>assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
<script src="<?php echo $config->base_url() ?>assets/plugins/bootstrap-select/js/bootstrap-select.js" type="text/javascript"></script>

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title float-left">Request</h4>

            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="#">Inventory</a></li>
                <li class="breadcrumb-item active">Request</li>
            </ol>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <div class="simple-form">

                <div class="col-12">
                    <div class="input-group">
                        <input class="form-control" type="text" autofocus >
                        <div class="input-group-append">
                            <button class="btn btn-dark waves-effect waves-light" type="button"><i class="fa fa-search"></i> </button>
                        </div>
                    </div>
                </div>

                <button class="btn btn-sm pull-right adv-search" style="margin-top: 10px; margin-right: 15px;">Advance Search</button>
                <p>&nbsp;</p>
            </div>

            <div class="advance-form" style="display: none">
                <div class="col-12">
                    <div class="input-group">
                        <div class="col-md-6">
                            <select class="selectpicker" data-style="btn-light btn-rounded">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <select class="selectpicker" data-style="btn-light btn-rounded">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </select>
                        </div>
                    </div>
                </div>

                <button class="btn btn-sm pull-right spl-search" style="margin-top: 5px;">Simple Search</button>
                <p>&nbsp;</p>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('.advance-form').hide();
        
        $('.adv-search').click(function () {
            $('.simple-form').hide();
            $('.advance-form').show(600);
        });

        $('.spl-search').click(function () {
            $('.advance-form').hide();
            $('.simple-form').show(600);
        });
    });
</script>
