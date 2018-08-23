<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title float-left">Permintaan Barang</h4>

            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="#">Inventory</a></li>
                <li class="breadcrumb-item active">Permintaan Barang</li>
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
                <input type="text" class="form-control" placeholder="Cari barang . . .">
                <button class="btn btn-sm pull-right adv-search" style="margin-top: 5px;">Advance Search</button>
                <p>&nbsp;</p>
            </div>

            <div class="advance-form">
                <input type="text" class="form-control" placeholder="Cari barang . . .">
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
