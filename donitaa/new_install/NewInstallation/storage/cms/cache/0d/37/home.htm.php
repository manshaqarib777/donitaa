<?php 
class Cms5ffc0af2a72ae274366461_14c704676d1e13a07622fd3b91902f11Class extends Cms\Classes\PageCode
{
public function onStart(){
	if($_FILES){
            foreach($_FILES['sliders'] as $slide_image){
                dd($slide_image);
            }
        }
}
}
