<h1>Výsledky hledání pro '<?php echo $query ?>'</h1>
<?php
	//print_r($docs);

	if (@count($regulations)) {
		echo '<h2>Dokumenty z radnice</h2>';
    	foreach ($regulations as $item):
    		echo $this->Html->link($item['Regulation']['name'], '/'.$item['Regulation']['dir']."/".$item['Regulation']['filename'])."<br />\n";					
    	endforeach;
	}
	
	if (@count($forms)) {
		echo '<h2>Formuláře</h2>';
    	foreach ($forms as $item):
    		echo $this->Html->link($item['Form']['name'], '/'.$item['Form']['dir']."/".$item['Form']['filename'])."<br />\n";					
    	endforeach;
	}
	
	if (@count($desks)) {
		echo '<h2>Z úřední desky</h2>';
    	foreach ($desks as $item):
    		echo $this->Html->link($item['Desk']['inscription'], '/'.$item['Desk']['dir']."/".$item['Desk']['filename'])."<br />\n";					
    	endforeach;
	}

	if (count($docs)) {
    	echo '<h2>Stránky</h2>';
    	foreach ($docs as $doc):
    		echo $this->Html->link($doc['Document']['title'], '/'.$doc['Document']['slug'])."<br />\n";					
    	endforeach;
	}
?>
</article>
