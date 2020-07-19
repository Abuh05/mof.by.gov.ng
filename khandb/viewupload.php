
<?php include 'filesLogic.php';?>
 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                               <th>ID</th>
                  <th>Filename</th>
                  <th>size (in mb)</th>
                  <th>Downloads</th>
                  <th>Action</th>
              </thead>
              <tbody>
                <?php foreach ($files as $file): ?>
                  <tr>
                    <td><?php echo $file['id']; ?></td>
                    <td><?php echo $file['name']; ?></td>
                    <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
                    <td><?php echo $file['downloads']; ?></td>
                    <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
                  </tr>
                <?php endforeach;?>
              </tbody>

            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>