<?php

echo get_ol($images, $gallery_id);

function get_ol ($array, $gallery_id) {
    $str = '';

    if (count($array)) {
        $str .= '<ul class="thumbnails">';

        foreach ($array as $item) {
            $str .= '<li class="span3" id="list_' . $item['id'] . '">';
            $str .= '<div class="thumbnail">';
            $str .= '<a href="#" class="thumbnail">';
            $str .= '<img src="' . site_url() . $item['thumbnail_url'] .'" alt="">';
            $str .= '</a>';
            $str .= btn_delete('admin/gallery/delete_image/' . $gallery_id . '/' . $item['id']);
            $str .= '</div>';
            $str .= '</li>' . PHP_EOL;
        }

        $str .= '</ol>' . PHP_EOL;
    }

    return $str;

}

?>

<script>
    $(document).ready(function(){

        $('.thumbnails').nestedSortable({
            listType: 'ul',
            handle: 'img',
            items: 'li',
            maxLevels: 1
        });

    });
</script>

