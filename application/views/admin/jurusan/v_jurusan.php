<div class="row">
    <div class="col-xs-12">
        <h3 class="header smaller lighter blue">jQuery dataTables</h3>

        <div class="clearfix">
            <div class="pull-left">
                <?php echo anchor(site_url('admin/jurusan/tambah'), 'Create', 'class="btn btn-white btn-warning"'); ?>
            </div>
            <div class="pull-right tableTools-container"></div>
        </div>
        <div class="table-header">
            Results for "Latest Registered Domains"
        </div>

                                        <!-- div.table-responsive -->

                                        <!-- div.dataTables_borderWrap -->
        <div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="center">
                            <label class="pos-rel">
                                <input type="checkbox" class="ace" />
                                <span class="lbl"></span>
                            </label>
                        </th>
                        <th>ID Jurusan</th>
                        <th>Nama</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        foreach ($jurusan as $j) {
                    ?>
                    <tr>
                        <td class="center">
                            <label class="pos-rel">
                                <input type="checkbox" class="ace" />
                                <span class="lbl"></span>
                            </label>
                        </td>
                        <td><?php echo $j->id_jurusan ?></td>
                        <td><?php echo $j->nama_jurusan ?></td>
                        <td>
                            <div class="hidden-sm hidden-xs action-buttons">
                                <a class="blue" href="#">
                                    <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                </a>

                                <a class="green" href="<?php echo site_url('admin/jurusan/edit/'.$j->id_jurusan);?>">
                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                </a>

                                <a class="red" href="<?php echo site_url('admin/jurusan/hapus/'.$j->id_jurusan);?>">
                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                </a>
                            </div>

                            <div class="hidden-md hidden-lg">
                                <div class="inline pos-rel">
                                    <button class="btn btn-minier btn-blue dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                        <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                        <li>
                                            <a href="<?php echo site_url('admin/jurusan/edit/'.$j->id_jurusan);?>" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                <span class="green">
                                                    <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                </span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="<?php echo site_url('admin/jurusan/hapus/'.$j->id_jurusan);?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                <span class="red">
                                                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php
                      }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>