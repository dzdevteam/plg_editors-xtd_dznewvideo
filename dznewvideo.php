<?php
/**
 * @copyright   Copyright (C) 2013 DZ Studio
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

class PlgButtonDZNewVideo extends JPlugin
{
	/**
	 * Load the language file on instantiation.
	 *
	 * @var    boolean
	 * @since  3.1
	 */
	protected $autoloadLanguage = true;

	/**
	 * Display the button
	 *
	 * @return array A four element array of (article_id, article_title, category_id, object)
	 */
	public function onDisplay($name)
	{
		/*
		 * Javascript to insert the link
		 * View element calls jSelectArticle when an article is clicked
		 * jSelectArticle creates the link tag, sends it to the editor,
		 * and closes the select frame.
		 */
		$doc = JFactory::getDocument();
		/*
		 * Use the built-in element view to select the article.
		 * Currently uses blank class.
		 */
		$link = 'index.php?option=com_dzvideo&amp;view=video&amp;layout=edit';

		$button = new JObject;
		$button->modal = false;
		$button->link = $link;
		$button->class = 'btn';
		$button->text = JText::_('PLG_DZVIDEO_BUTTON_NEWVIDEO');
		$button->name = 'out';
		$button->onclick = "window.open(this.href, '_blank'); return false;";

		return $button;
	}
}
