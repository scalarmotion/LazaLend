<?php 
    function no_image_selected($image_id) {      
        $html = '<div id = "image_'.$image_id.'">
                    <label for="loan_images_'.$image_id.'" class="loan-thumb">
                        <div class="loan-thumb-content">
                            <i class="far fa-image"></i>';
                            if($image_id == 1) $html .= '<span class = "loan-cover">Cover</span>';
                        $html.= '</div>
                    </label>
                </div>
                <input type="file" name="loan_images[]" id="loan_images_'.$image_id.'" class = "image_input hidden">';

        return $html;
    }

    function image_selected($image_id, $image_url) {
        $html = '
            <div class = "loan-thumb">
                <div class = "loan-thumb-content">
                    <img src = "'.$image_url.'">';
                    if($image_id == 1) $html .= '<span class = "loan-cover">Cover</span>';
                    $html .= '<button type = "button" class = "btn del-loan-images" id = "del_loan_image_'.$image_id.'" onclick="del_loan_image(this)"><i class="far fa-trash-alt"></i></button>
                </div>
            </div>
        ';

        return $html;
    }
?>