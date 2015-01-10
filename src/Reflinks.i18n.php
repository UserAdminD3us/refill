<?php
/**
 * Interface messages for Reflinks.
 *
 * @toolowner Zhaofeng Li
 */
 
$url = '//tools.wmflabs.org/fengtools/reflinks/';

$messages = array();

/**
 * English
 * @author Zhaofeng Li
 */
$messages['en'] = array(
	'appname' => 'Reflinks',
	'tagline' => 'Expand bare references with ease',
	
	// Headings
	'heading-fetchfromwiki' => 'Fetch content from a Wiki',
	'heading-rawwikitext' => 'Enter Wiki markup',
	'heading-options' => 'Options',
	'heading-citegen' => 'Generate a reference',
	'heading-result' => 'Result',
	'heading-newwikitext' => 'New Wiki markup',
	'heading-error' => 'Error',
	
	// Input placeholders
	'placeholder-pagename' => 'Page name',
	
	// Labels
	'label-fixpage' => 'Fix page',
	'label-fixwikitext' => 'Fix wikitext',
	'label-toggleadv' => 'Toggle advanced input',
	'label-manual' => 'Manual',
	'label-sourcecode' => 'Source',
	'label-acknowledgements' => 'Acknowledgements',
	'label-reportbugs' => 'Report bugs',
	'label-switchlang' => 'Languages',
	'label-save' => 'Preview / Save on Wiki',
	
	// General messages
	'fixed' => '$1 reference(s) fixed!',
	'nofixed' => 'No references fixed.',
	'skipped' => 'The following reference(s) could not be filled:',
	'responsibility' => 'You are responsible for every edit you make.',
	'pleasedoublecheck' => 'Please double-check the edit before saving!',
	'noaccessdate' => 'Note: Dates of access are omitted in the result. Please verify whether the references still support the statements, and add the dates where appropriate.',
	'chancetoreview' => 'You will have a chance to review the edit before it\'s saved.',
	'colourlegend' => 'Colours:',
	'colour-insert' => 'Blue',
	'colour-delete' => 'Orange',
	'diff-insert' => 'Added',
	'diff-delete' => 'Removed',
	
	// Misc.
	'comingsoon' => 'Coming soon',
	'uhoh' => 'Uh-oh!',
	'developedby' => 'by $1',
	
	// Options
	'option-plainlink' => 'Use plain formatting instead of {{cite web}}',
	'option-plainlink-description' => 'If selected, bare references will be expanded without using {{cite web}}. This is discouraged since cite templates provide a consistent citation style and enable easy parsing by programs.',
	'option-nofixuplain' => 'Do not expand bare URLs surrounded with [ ]',
	'option-nofixcplain' => 'Do not expand references with a captioned external link only',
	'option-nofixcplain-description' => 'If selected, references consisting of a captioned external link only will not be expanded.',
	'option-noremovetag' => 'Do not remove link rot tags',
	'option-noremovetag-description' => 'If selected, link rot tags will be kept even if no reference is skipped unexpectedly during the process.',
	'option-nofixutemplate' => 'Do not fix {{cite web}} templates with a URL only',
	'option-nowatch' => 'Do not watch the page when using Wiki as the source',
	'option-nowatch-description' => 'If selected, the \'Watch this page\' checkbox on the on-wiki editing interface will be unticked by default.',
	'option-addblankmetadata' => 'Add blank metadata fields when the information is unavailable',
	'option-noaccessdate' => 'Do not add access dates',
	'option-noaccessdate-description' => 'If selected, dates of access will be omitted in the result.',
	'option-usedomainaswork' => 'Use the base domain name as work when this information cannot be parsed',
	
	// Labs-specific (i.e. not used on the vanilla version on GitHub)
	'wmflabs-thankyoutest' => 'Thank you for testing the experimental version of Reflinks. Please report the bugs you encounter.',
	'wmflabs-latestcommit' => 'Latest commit: ',
	'wmflabs-poweredby' => 'Powered by Wikimedia Labs',
);

$messages['zh-hans'] = array(
	'appname' => '来源扩充',
	'tagline' => '轻松填充裸露来源链接',
	
	// 题头
	'heading-fetchfromwiki' => '从维基获取页面',
	'heading-rawwikitext' => '输入维基代码',
	'heading-options' => '选项',
	'heading-citegen' => '生成来源',
	'heading-result' => '结果',
	'heading-newwikitext' => '新维基代码',
	'heading-error' => '错误',
	
	// 输入提示
	'placeholder-pagename' => '页面名称',
	
	// 标签
	'label-fixpage' => '修复页面',
	'label-fixwikitext' => '修复维基代码',
	'label-toggleadv' => '显示高级选项',
	'label-manual' => '帮助',
	'label-sourcecode' => '源代码',
	'label-acknowledgements' => '致谢',
	'label-reportbugs' => '报告错误',
	'label-switchlang' => '切换语言',
	'label-save' => '在维基上预览/保存',
	
	// 一般信息
	'fixed' => '扩展了 $1 个引证！',
	'nofixed' => '没有修复引证。',
	'skipped' => '下列引证无法被扩充：',
	'responsibility' => '你对自己作出的每一个编辑负责。',
	'pleasedoublecheck' => '请在保存前再三检查！',
	'noaccessdate' => '注：在结果中没有添加存取日期。请确认提供的来源还能支持页面中的论述，并补充存取日期。',
	'chancetoreview' => '你在保存前将有机会再次检查修改。',
	'colourlegend' => '颜色：',
	'colour-insert' => '蓝色',
	'colour-delete' => '橙色',
	'diff-insert' => '增加',
	'diff-delete' => '删除',
	
	// 其他
	'comingsoon' => '敬请期待',
	'uhoh' => '噢，不！',
	'developedby' => '由 $1 开发',
	
	// 选项
	'option-plainlink' => '手工实现格式而不使用 {{cite web}}',
	
	// 仅供 Labs (不被GitHub上的原版本使用)
	'wmflabs-thankyoutest' => '感谢你帮助测试Reflinks。请报告你遇到的错误，谢谢。',
	'wmflabs-latestcommit' => '最新提交：',
	'wmflabs-poweredby' => '由维基媒体实验室驱动',
);