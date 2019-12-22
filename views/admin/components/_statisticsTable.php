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

<table class="table table-borderless">
  <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; foreach($contents as $content): ?>
    <tr>
        <th scope="row"><?= $i ?></th>
        <td><?= $content->title ?></td>
        <?php foreach ($content->links as  $link) {
            echo "<td>$link->name ($link->clicks)</td>";
        } ?>
    </tr>
    <?php $i++; endforeach ?>
  </tbody>
</table>