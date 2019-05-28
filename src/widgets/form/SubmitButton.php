<?php
/**
 * @link https://github.com/alvarolordelo/yii2-materializecss
 * @copyright Copyright (c) 2016 ... alvarolordelo for pluspunkt coding
 * @license https://github.com/alvarolordelo/yii2-materializecss/blob/master/LICENSE
 */

namespace alvarolordelo\yii2materialize\widgets\form;

use alvarolordelo\yii2materialize\widgets\Button;

/**
 * SubmitButton renders an HTML submit button.
 *
 * For details on how buttons are being created, see [[Button]].
 *
 * @see https://materializecss.com/buttons.html#submit
 * @author Christoph Erdmann <yii2-materializecss@pluspunkt-coding.de>
 * @package widgets
 * @subpackage form
 * @since 1.0.8
 */
class SubmitButton extends Button
{
    /**
     * @var string the label on the button. If you do not want a label text to be rendered, set this options to "false".
     */
    public $label = 'Submit';

    /**
     * Initializes the widget.
     */
    public function init()
    {
        $this->tagName = 'button';
        $this->options['type'] = 'submit';
        parent::init();
    }

    /**
     * Executes the widget.
     *
     * @return string the rendered markup.
     */
    public function run()
    {
        return parent::run();
    }
}
