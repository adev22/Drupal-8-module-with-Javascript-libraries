<?php

namespace Drupal\mymodule\Controller;

use Drupal\Core\Controller\ControllerBase;

Class MymoduleController extends ControllerBase{

		public function content() {
			$attachments['content'] = array(
					'#type' => 'markup',
					'#markup' => '<div class="btn">'.$this->t('Javascript Alert'),
			);

			$attachments['#attached']['library'][] = 'mymodule/global-script';

			return $attachments;
		}
	}