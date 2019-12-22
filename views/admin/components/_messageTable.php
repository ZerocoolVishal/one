<h1>Messages <span class="badge badge-success"></span></h1>
<!-- Pagination -->
<nav>
  <ul class="pagination justify-content-end">
    <li class="page-item <?= ($page == 0)? "disabled" : "" ?>">
      <a class="page-link" href="?page=<?= $page - 1 ?>">Previous</a>
    </li>
    <?php for($i = 0; $i < $count; $i++): ?>
        <?php if($page == $i): ?>
        <li class="page-item active">
        <a class="page-link" href="?page=<?= $i ?>"><?= $i + 1 ?> <span class="sr-only">(current)</span></a>
        </li>
        <?php else: ?>
        <li class="page-item"><a class="page-link" href="?page=<?= $i ?>"><?= $i + 1 ?></a></li>
        <?php endif; ?>
    <?php endfor; ?>
    <li class="page-item <?= ($page == $count - 1)? "disabled" : "" ?>">
      <a class="page-link" href="?page=<?= $page + 1 ?>">Next</a>
    </li>
  </ul>
</nav>

<!-- Table -->
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">Time</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; foreach($messages as $message): ?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><?= $message->email ?></td>
      <td><?= $message->message ?></td>
      <td><?= $message->timeStamp ?></td>
    </tr>
    <?php $i++; endforeach; ?>
  </tbody>
</table>