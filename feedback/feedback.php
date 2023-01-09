<?php include 'inc/header.php' ?>

<?php
  $sql = 'SELECT * FROM feedback';
  $result = mysqli_query($conn, $sql);
  $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

    <h2>Feedback</h2>

    <?php if (empty($feedback)): ?>
      <p>There is no feedback</p>
    <?php endif; ?>

    <?php foreach($feedback as $item): ?>
      <div class="card my-3">
      <div class="card-body my-3">
        <?php echo $item['name'] . '<br>' . $item['body'] . '<br>' . $item['date']; ?>
      </div>
    </div>
    <?php endforeach; ?>

<?php include 'inc/footer.php' ?>