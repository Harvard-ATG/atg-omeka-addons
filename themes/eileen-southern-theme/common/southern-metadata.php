<?php foreach ($elementsForDisplay as $setName => $setElements): ?>
<div class="element-set">
    <?php if ($showElementSetHeadings): ?>
    <h2><?php echo html_escape(__($setName)); ?></h2>
    <?php endif; ?>

    <?php foreach ($setElements as $elementName => $elementInfo): ?>
    <?php 
        $ignoreElements = array("Title", "Description", "iframe", "Timeline Description");
        if (!in_array($elementName, $ignoreElements)): 
    ?>
    <div id="<?php echo text_to_id(html_escape("$setName $elementName")); ?>" class="element">
        <div class="field two columns alpha">
            <label class="data-title"><?php echo html_escape(__($elementName)); ?></label>
        </div>
        <?php $i = 0; ?>
        <?php foreach ($elementInfo['texts'] as $text):
        $i++;
        if( $i == 1): ?>
            <div class="element-text five columns omega"><p class="data-info"><?php echo $text; ?></p></div>
        <?php else: ?>
            <div class="element-text five columns offset-by-two"><p class="data-info"><?php echo $text; ?></p></div>
        <?php endif; ?>
        <?php endforeach; ?>
    </div><!-- end element -->
    <?php endif; ?>
    <?php endforeach; ?>
</div><!-- end element-set -->
<?php endforeach; ?>
