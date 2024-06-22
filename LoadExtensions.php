<?php
# 扩展
wfLoadExtension( 'Gadgets' );
wfLoadExtension( 'Matomo' );
// Matomo访问信息收集
require_once "$IP/ysarxiv-settings/MatomoSettings.php";

wfLoadExtension( 'AbuseFilter' );
wfLoadExtension( 'CategoryTree' );
wfLoadExtension( 'Cite' );
wfLoadExtension( 'CiteThisPage' );
wfLoadExtensions([ 'ConfirmEdit', 'ConfirmEdit/hCaptcha' ]);
require_once "$IP/ysarxiv-settings/hCaptchaKeys.php";
$wgCaptchaTriggers['edit'] = true;
$wgCaptchaTriggers['create'] = true;
$wgCaptchaTriggers['createtalk'] = true;
$wgCaptchaTriggers['addurl'] = true;
$wgCaptchaTriggers['createaccount'] = true;
$wgCaptchaTriggers['badlogin'] = true;

wfLoadExtension( 'BetaFeatures' );
wfLoadExtension( 'ImageMap' );
wfLoadExtension( 'InputBox' );
wfLoadExtension( 'Interwiki' );
wfLoadExtension( 'MultimediaViewer' );
wfLoadExtension( 'Nuke' );
wfLoadExtension( 'OATHAuth' );
wfLoadExtension( 'PageImages' );
$wgPageImagesExpandOpenSearchXml = true;

wfLoadExtension( 'ParserFunctions' );
wfLoadExtension( 'PdfHandler' );
wfLoadExtension( 'Poem' );
wfLoadExtension( 'Renameuser' );
wfLoadExtension( 'ReplaceText' );
wfLoadExtension( 'SecureLinkFixer' );
wfLoadExtension( 'SpamBlacklist' );
wfLoadExtension( 'TemplateData' );
wfLoadExtension( 'TextExtracts' );
wfLoadExtension( 'TitleBlacklist' );
wfLoadExtension( 'VisualEditor' );
$wgVisualEditorEnableBetaFeature = true;
$wgVisualEditorEnableDiffPageBetaFeature = true;
$wgVisualEditorTabPosition = 'after';
$wgVisualEditorAvailableNamespaces = [
    'File' => false,
    'Extra' => true,
    'Project' => true,
    'Help' => true,
    'Draft' => true,
    'Fanmade' => true,
    'Talk' => true,
    'Category' => false,
];
$wgVisualEditorDisableForAnons = true;
$wgVisualEditorSerializationCacheTimeout = 30;

wfLoadExtension( 'WikiEditor' );
wfLoadExtension( 'Popups' );
wfLoadExtension( 'FileImporter' );
wfLoadExtension( 'MassMessage' );
wfLoadExtension( 'Elastica' );
wfLoadExtension( 'CirrusSearch' );
$wgSearchType = 'CirrusSearch';
$wgCirrusSearchUseCompletionSuggester = 'yes';
$wgCirrusSearchPhraseSuggestUseText = true;
$wgCirrusSearchPhraseSuggestUseOpeningText = true;
$wgCirrusSearchPrefixSearchStartsWithAnyWord = true;
$wgCirrusSearchMoreLikeThisAllowedFields = [
        'title',
        'text',
        'auxiliary_text',
        'opening_text',
        'headings',
        'all'
    ];

wfLoadExtension( 'AdvancedSearch' );
##$wgAdvancedSearchHighlighting = true;

wfLoadExtension( 'MediaSearch' );
wfLoadExtension( 'CodeMirror' );
wfLoadExtension( 'ParserFunctions' );
wfLoadExtension( 'CodeEditor' );
wfLoadExtension( 'Linter' );
# 为了使linter工作，使Parsoid作为扩展加载，添加接入点
wfLoadExtension( 'Parsoid', "$IP/vendor/wikimedia/parsoid/extension.json" );
$wgParsoidSettings = [
    'useSelser' => true,
    'linting' => true,
];
$wgVisualEditorParsoidAutoConfig = false; #(for Linter, to make work)
$wgVirtualRestConfig = [
	'paths' => [],
	'modules' => [
		'parsoid' => [
			'url' => 'https://youshou.wiki/rest.php',
			'domain' => 'youshou.wiki',
			'forwardCookies' => true,
			'restbaseCompat' => false,
			'timeout' => 30,
		],
	],
	'global' => [
		'timeout' => 360,
		'forwardCookies' => false,
		'HTTPProxy' => null,
	],
];

wfLoadExtension( 'DiscussionTools' );
$wgDiscussionToolsEnable = true;
$wgDiscussionToolsEnablePermalinksBackend = true;

wfLoadExtension( 'InterwikiExtracts' );
wfLoadExtension( 'CheckUser' );
wfLoadExtension( 'SandboxLink' );
wfLoadExtension( 'TemplateStyles' );
wfLoadExtension( 'TemplateStylesExtender' );
wfLoadExtension( 'SyntaxHighlight_GeSHi' );
wfLoadExtension( 'Citoid' );
wfLoadExtension( 'LabeledSectionTransclusion' );
wfLoadExtension( 'RevisionSlider' );
wfLoadExtension( 'EventLogging' );
wfLoadExtension( 'Scribunto' );
$wgScribuntoDefaultEngine = 'luasandbox';
$wgScribuntoUseGeSHi = true;
$wgScribuntoUseCodeEditor = true;

wfLoadExtension( 'Echo' );
wfLoadExtension( 'MassEditRegex' );
wfLoadExtension( 'TemplateSandbox' );
wfLoadExtension( 'TwoColConflict' );
wfLoadExtension( 'EmbedVideo' );
wfLoadExtension( 'WikiSEO' );
# SEO配置
#$wgWikiSeoDefaultLanguage = 'zh';
$wgWikiSeoEnableAutoDescription = true;

wfLoadExtension( 'UploadWizard' );
wfLoadExtension( 'Disambiguator' );
wfLoadExtension( 'WikiLove' );
wfLoadExtension( 'Thanks' );
wfLoadExtension( 'AJAXPoll' );
wfLoadExtension( 'LabeledSectionTransclusion' );
wfLoadExtension( 'cldr' );
wfLoadExtension( 'OAuth' );
// Oauth 秘钥
$wgMWOAuthSecureTokenTransfer = true;
$wgOAuth2PrivateKey = __DIR__ . "/oauthkeys/private.key";
$wgOAuth2PublicKey = __DIR__ . "/oauthkeys/public.key";

wfLoadExtension( 'OrphanedTalkPages' );
wfLoadExtension( 'NewSignupPage' );
wfLoadExtension( 'AntiSpoof' );
wfLoadExtension( 'CommonsMetadata' );
wfLoadExtension( 'PageForms' );
# Page Forms 设置
$wgPageFormsMaxLocalAutocompleteValues = 500;
$wgPageFormsRedLinksCheckOnlyLocalProps = true;

wfLoadExtension( 'RegexFunctions' );
wfLoadExtension( 'Lockdown' );
require_once "$IP/ysarxiv-settings/Lockdowns.php";

wfLoadExtension( 'UserMerge' );
$wgUserMergeProtectedGroups = [ 'sysop', 'steward' ];

wfLoadExtension( 'LoginNotify' );
wfLoadExtension( 'TabberNeue' );
$wgTabberNeueEnableAnimation = true;

wfLoadExtension( 'ContributionScores' );
wfLoadExtension( 'PinyinSort' );
wfLoadExtension( 'DarkMode' );
wfLoadExtension( 'CollapsibleSidebar' );
wfLoadExtension( 'Avatar' );
//Avatar插件配置
$wgDefaultAvatar = 'https://youshou.wiki/images/avatars/default/default.gif';
$wgMaxAvatarResolution = 512;
$wgDefaultAvatarRes = 256;

wfLoadExtension( 'FileImporter' );
wfLoadExtension( 'MultiBoilerplate' );
wfLoadExtension( 'NewUserMessage' );
wfLoadExtension( 'CreateUserPage' );
$wgCreateUserPage_AutoCreateUser = 'New user page';
$wgCreateUserPage_PageContent ='{{用户页}}';

wfLoadExtension( 'Widgets' );
$wgExtensionFunctions[] = function() use ( &$wgGroupPermissions ) {
    unset( $wgGroupPermissions['widgeteditor'] );
};

#wfLoadExtension( 'NativeSvgHandler' );
wfLoadExtension( 'TemplateWizard' );
#wfLoadExtension( 'GrowthExperiments' );
#wfLoadExtension( 'PageViewInfo' );
wfLoadExtension( 'RNRSHook' );
wfLoadExtension( 'FeaturedFeeds' );
$wgFeaturedFeeds['ysarchives-biweekly'] = [
	'page' => 'Ffeed-ysarchives-biweekly-page',
	'title' => 'Ffeed-ysarchives-biweekly-title',
	'description' => 'Ffeed-ysarchives-biweekly-desc',
	'short-title' => 'Ffeed-ysarchives-biweekly-short-title',
	'entryName' => 'Ffeed-ysarchives-biweekly-entry',
];
$wgFeaturedFeedsDefaults = [
'limit' => 5,
'inUserLanguage' => false,
];
$wgDisplayFeedsInSidebar = false;

# Add more configuration options below.

// 语义维基配置及插件配置
wfLoadExtension( 'SemanticMediaWiki' );
enableSemantics();
$wgExtensionFunctions[] = function() use ( &$wgGroupPermissions ) {
    unset( $wgGroupPermissions['smwadministrator'] );
    unset( $wgGroupPermissions['smwcurator'] );
};
wfLoadExtension( 'SemanticScribunto' );
wfLoadExtension( 'SemanticDrilldown' );
wfLoadExtension( 'SemanticResultFormats' );
// $smwgEnabledFulltextSearch = true;
# 语义维基调优
$smwgQMaxLimit = 1000;
$smwgQEqualitySupport = SMW_EQ_NONE;
$smwgQueryResultCacheType = CACHE_ACCEL;
$smwgQMaxSize = 9;
$wgDefaultUserOptions['smw-prefs-general-options-show-entity-issue-panel'] = false;
$smwgMaintenanceLanguage = 'zh';

// NewUserMessage
require_once('extensions/NewUserMessage/includes/NewUserMessage.php');
