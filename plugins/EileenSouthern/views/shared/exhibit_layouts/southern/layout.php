<?php
$position = isset($options['file-position'])
    ? html_escape($options['file-position'])
    : 'left';
$size = isset($options['file-size'])
    ? html_escape($options['file-size'])
    : 'fullsize';
$captionPosition = isset($options['captions-position'])
    ? html_escape($options['captions-position'])
    : 'center';
?>
<div class="exhibit-items <?php echo $position; ?> <?php echo $size; ?> captions-<?php echo $captionPosition; ?> video-container single-pub-page aos-init aos-animate" data-aos="fade-up"">
    <?php 
    // Need something like this:
    //<div class="video-container aos-init aos-animate" style="padding:56.25% 0 0 0;position:relative;" data-aos="fade-up">
    //  <iframe src="https://www.youtube.com/embed/LxAkpZHUHzw" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
    //</div>
    //<div class="vid-info-container">
    //  <p class="vid-title">This is a Title for the Video</p>
    //  <p class="vid-caption">Short caption for the video</p>
    //</div>
    foreach ($attachments as $attachment): 
        //$item = get_record_by_id('Item',$attachment->item_id);
        $item = $attachment->getItem();
        $title = metadata($item, array('Dublin Core', 'Title'));
        $permalink = metadata($item, 'permalink');
        $caption = $attachment->caption;
        $file = $attachment->getFile();

        // echo $this->exhibitAttachment($attachment, array('imageSize' => $size));
        if (!isset($fileOptions['linkAttributes']['href'])) {
            $fileOptions['linkAttributes']['href'] = exhibit_builder_exhibit_item_uri($item);
        }
        $html = file_markup($file, $fileOptions, null);
        $output = apply_filters('exhibit_attachment_markup', $html,
            compact('attachment')//, 'fileOptions') //, 'linkProps', 'forceImage')
        );
        echo $output;
     endforeach; ?>
</div>
<div class="vid-info-container">
    <a href="<?php echo $permalink; ?>"><p class="vid-title"><?php echo $title; ?></p></a>
    <p class="vid-caption"><?php echo $caption; ?></p>
</div>
