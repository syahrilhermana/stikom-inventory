<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title float-left">Sample Using Model</h4>

            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="#">Inventory</a></li>
                <li class="breadcrumb-item active">Sample Using Model</li>
            </ol>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title">Striped rows</h4>
            <p class="text-muted font-14 m-b-20">
                Use <code>.table-striped</code> to add zebra-striping to any table row
                within the <code>&lt;tbody&gt;</code>.
            </p>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>UID</th>
                    <th>Department</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <th scope="row">1</th>
                    <td><?php echo $user->uid ?></td>
                    <td><?php echo $user->department ?></td>
                    <td><?php echo $user->status ?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

