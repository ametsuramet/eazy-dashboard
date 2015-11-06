<?php
use Phalcon\Image\Adapter\GD as GD;
class MediaController extends MasterController
{

    public function indexAction()
    {
    	$this->setJsonResponse();
    	$output = [];
    	$items = [];
    	$dir = APP_PATH.'/public/images/'.$this->auth->id_reg;
    	$crop_dir = 'images/crops/'.$this->auth->id_reg.'/200-200';
    	// Open a directory, and read its contents
		if (is_dir($dir)){
		  if ($dh = opendir($dir)){
		    while (($file = readdir($dh)) !== false){
		    	if (!is_dir($dir.'/'.$file))
		    	{

		    		$this->createThumbnail($dir.'/'.$file);

		    		$thumbnail = $crop_dir.'/'.$file;
		      		$output[] =  ["filename"=>$file,"thumbnail"=>$thumbnail,"time"=>filemtime($dir.'/'.$file)];
		    	}
		    }
		    closedir($dh);
		  }
		}
		$last_page = ceil(count($output)/$this->params->limit);
		$offset = ($this->params->page-1)*$this->params->limit;
		$images_page = [
			"count" => count($output),
			"page" => $this->params->page,
			"limit" => $this->params->limit,
			"last_page" => $last_page,
			"prev_page" => $this->params->page==1?false:$this->params->page-1,
			"next_page" => $last_page==$this->params->page?false:$this->params->page+1,
			"items" => array_slice(array_reverse($output), $offset,$this->params->limit),
		];
		echo json_encode($images_page);
    }

    public function viewAction(){
		$this->view->disable();
    	 // echo $this->params->filename;

    	$image = new Phalcon\Image\Adapter\GD($this->params->filename);
    	$realWidth = $image->getWidth();
    	$realHeight = $image->getHeight();
		// $image->resize(100, 100)->rotate(90)->crop(100, 100);
		// echo $realWidth . "x". $realHeight;
		$cropSize = $realWidth;
		if ($realWidth > $realHeight)
			$cropSize = $realHeight;
		// echo $cropSize;
		
		if(!isset($this->params->width))
			$final_width = $realWidth;
		else
			$final_width = $this->params->width;

		if(!isset($this->params->height))
			$final_height = $realHeight;
		else
			$final_height = $this->params->height;


		if(!isset($this->params->crop_mode))
			$crop_mode = "default";
		else
			$crop_mode = $this->params->crop_mode;

		if(!isset($this->params->crop) and $crop_mode !="default")
		{
			$final_width = 100;
			$final_height = 100;
		}
		elseif(isset($this->params->crop) and $crop_mode !="default")
		{
			$final_width = $this->params->crop;
			$final_height = $this->params->crop;
		}
		else
		{
		}

		switch ($crop_mode) {
			case 'center':
				$offset_x = $final_width/4;
				$offset_y = $final_height/4;
				break;
			case 'left':
				$offset_x = 0;
				$offset_y = $final_width/4;
				break;
			case 'right':
				$offset_x = $final_width/2;
				$offset_y = $final_height/4;
				break;
			case 'top':
				$offset_x = 0;
				$offset_y = $final_height/4;
				break;
			case 'bottom':
				$offset_x = $final_width/2;
				$offset_y = $final_height/4;
				break;
			case 'top-left':
				$offset_x = 0;
				$offset_y = 0;
				break;
			case 'top-right':
				$offset_x = $final_width/2;
				$offset_y = 0;
				break;
			case 'bottom-left':
				$offset_x = $final_width/2;
				$offset_y = 0;
				break;
			case 'bottom-right':
				$offset_x = $final_width/2;
				$offset_y = $final_height/2;
				break;
			
			default:
				$offset_x = 0;
				$offset_y = 0;
				break;
		}

		if(!isset($this->params->mode))
			$mode = "preview";
		else
			$mode = $this->params->mode;
		if($mode=="thumbnail")
			$image->crop($cropSize, $cropSize,$offset_x,$offset_y)->resize($final_width, $final_height);

		$this->response->setContentType('image/jpeg');
		echo $image->render();
		// echo "CROP MODE: ".$crop_mode."=>".$offset_x ."x". $offset_y. " - ".$final_width."x".$final_height;
    }

}

