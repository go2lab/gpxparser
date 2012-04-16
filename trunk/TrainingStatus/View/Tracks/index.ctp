<!-- File: /app/View/Posts/index.ctp -->

<h1>Blog posts</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Path</th>
        <th>Created</th>
        <th>Type</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($tracks as $track): ?>
    <tr>
        <td><?php echo $track['Track']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($track['Track']['name'],
array('controller' => 'tracks', 'action' => 'sample', $track['Track']['id'])); ?>
        </td>
        <td>
            <?php echo $track['Track']['path']; ?>
        </td>
        <td><?php echo $track['Track']['date']; ?></td>
        <td><?php echo $track['Track']['type_id']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>