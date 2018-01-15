<div class="ibox-content">
    <table class="table table-striped table-bordered table-hover " id="editable">
        <thead>
            <tr>
                <th style="text-align: center;">ลำดับ</th>
                <th style="text-align: center;">ชื่อ-นามสกุล</th>
                <th style="text-align: center;">ชื่อผู้ใช้ระบบ</th>
                <th style="text-align: center;">สิทธิ์การใช้งาน</th>
                <th style="text-align: center;">อีเมล์</th>
            </tr>
        </thead>
        <tbody>
            <?php
                for($i=1;$i<=$num_search;$i++) {
                    $row_search = mssql_fetch_array($query_search);

                    $id = $row_search['id'];
                    $name = iconv('TIS-620','UTF-8',$row_search['fullname']);
                    $user = iconv('TIS-620','UTF-8',$row_search['users']);
                    $rule = iconv('TIS-620','UTF-8',$row_search['permission']);
                    $email = iconv('TIS-620','UTF-8',$row_search['email']);

                    if($rule == 1) {
                        $rule = 'ADMIN';
                    }
                    if($rule == 2) {
                        $rule = 'QC';
                    }
                    if($rule == 3) {
                        $rule = 'PM';
                    }
            ?>
            <tr>
                <td style="text-align: center;"><?php echo $i; ?></td>
                <td style="text-align: center;"><?php echo $name; ?></td>
                <td style="text-align: center;"><?php echo $user; ?></td>
                <td style="text-align: center;"><?php echo $rule; ?></td>
                <td style="text-align: center;"><?php echo $email; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>