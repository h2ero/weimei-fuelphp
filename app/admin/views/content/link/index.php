<div id="friend-link">
<table class="table table-condensed table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>站点名</th>
        <th>链接</th>
        <th>站点</th>
        <th>时间</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($links as $link){ ?>
      <tr> 
          <?php foreach($link as $l){ ?>
                  <td><?php echo $l; ?></td> 
          <?php } ?>
          <td>
          <?php echo Admin_helper::btn_group();?>
          </td>
      </tr>
    <?php } ?>
    </tbody>
</table>
</div>
