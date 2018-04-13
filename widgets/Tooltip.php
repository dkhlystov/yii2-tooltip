<?php

namespace dkhlystov\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use dkhlystov\widgets\assets\TooltipAsset;

class Tooltip extends Widget
{

    public $tag = 'span';

    public $options = ['class' => 'glyphicon glyphicon-question-sign text-muted'];

    public $title = '';

    public $content = '';

    public function init()
    {
        parent::init();

        TooltipAsset::register($this->view);

        $options = $this->options;
        $options['title'] = $this->title;
        $options['data-toggle'] = 'tooltip';

        echo Html::beginTag($this->tag, $options);
    }

    public function run()
    {
        echo $this->content;
        echo Html::endTag($this->tag);
    }

}
