<div class="events">
	Id: <?php echo $event['Event']['id']?> <br/>
    Name: <?php echo h($event['Event']['ename'])?><br/>
    Host: <?php echo h($event['Event']['user_id'])?><br/>
    Address: <?php echo h($event['Event']['address'])?><br/>
    Date:  <?php echo $event['Event']['date']?><br/>
    Text:  <?php echo h($event['Event']['text'])?><br/>
    Price per Guest:  <?php echo h($event['Event']['price_per_guest'])?><br/>
    Min guests Number:  <?php echo h($event['Event']['min_guests'])?><br/>
    Max guests Number:  <?php echo h($event['Event']['max_guests'])?><br/>
    Cuisine:  <?php echo h($event['Cuisine'][0]['name'])?><br/>
    <p><?php $this->Html->link('Edit', array('action' => 'edit', $event['Event']['id'])); ?></p>
	<p><?php $this->Html->link('Delete', array('action' => 'delete', $event['Event']['id'])); ?></p>
</div>
<div class="comments">
	Comments	
	<?php foreach ($event['Comment'] as $comment): ?>
		<div style="padding: 10px;border-bottom: 1px solid;">
			<p>Author: <?php echo $comment['user_id']; ?></p>
			<p>Text: <?php echo $comment['text']; ?></p>
			<p>Time: <?php echo $comment['time']; ?></p>		
		</div>
	<?php endforeach; ?>
</div>