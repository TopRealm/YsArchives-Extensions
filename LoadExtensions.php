<?php
# 扩展
wfLoadExtension( 'Gadgets', "/www/wwwroot/mw-utils/YsArchives-Extensions/Gadgets" );
wfLoadExtension( 'Matomo', "/www/wwwroot/mw-utils/YsArchives-Extensions/Matomo" );
// Matomo访问信息收集
require_once "$IP/ysarxiv-settings/MatomoSettings.php";

wfLoadExtension( 'AbuseFilter', "/www/wwwroot/mw-utils/YsArchives-Extensions/AbuseFilter" );
wfLoadExtension( 'CategoryTree', "/www/wwwroot/mw-utils/YsArchives-Extensions/CategoryTree" );
wfLoadExtension( 'Cite', "/www/wwwroot/mw-utils/YsArchives-Extensions/Cite" );
wfLoadExtension( 'CiteThisPage', "/www/wwwroot/mw-utils/YsArchives-Extensions/CiteThisPage" );
wfLoadExtensions([ 'ConfirmEdit', 'ConfirmEdit/hCaptcha', "/www/wwwroot/mw-utils/YsArchives-Extensions/ConfirmEdit" ]);
require_once "$IP/ysarxiv-settings/hCaptchaKeys.php";
$wgCaptchaTriggers['edit'] = true;
$wgCaptchaTriggers['create'] = true;
$wgCaptchaTriggers['createtalk'] = true;
$wgCaptchaTriggers['addurl'] = true;
$wgCaptchaTriggers['createaccount'] = true;
$wgCaptchaTriggers['badlogin'] = true;

wfLoadExtension( 'BetaFeatures', "/www/wwwroot/mw-utils/YsArchives-Extensions/BetaFeatures" );
wfLoadExtension( 'ImageMap', "/www/wwwroot/mw-utils/YsArchives-Extensions/ImageMap" );
wfLoadExtension( 'InputBox', "/www/wwwroot/mw-utils/YsArchives-Extensions/InputBox" );
wfLoadExtension( 'Interwiki', "/www/wwwroot/mw-utils/YsArchives-Extensions/Interwiki" );
wfLoadExtension( 'MultimediaViewer', "/www/wwwroot/mw-utils/YsArchives-Extensions/MultimediaViewer" );
wfLoadExtension( 'Nuke', "/www/wwwroot/mw-utils/YsArchives-Extensions/Nuke" );
wfLoadExtension( 'OATHAuth', "/www/wwwroot/mw-utils/YsArchives-Extensions/OATHAuth" );
wfLoadExtension( 'PageImages', "/www/wwwroot/mw-utils/YsArchives-Extensions/PageImages" );
$wgPageImagesExpandOpenSearchXml = true;

wfLoadExtension( 'ParserFunctions', "/www/wwwroot/mw-utils/YsArchives-Extensions/ParserFunctions" );
wfLoadExtension( 'PdfHandler', "/www/wwwroot/mw-utils/YsArchives-Extensions/PdfHandler" );
wfLoadExtension( 'Poem', "/www/wwwroot/mw-utils/YsArchives-Extensions/Poem" );
wfLoadExtension( 'Renameuser', "/www/wwwroot/mw-utils/YsArchives-Extensions/Renameuser" );
wfLoadExtension( 'ReplaceText', "/www/wwwroot/mw-utils/YsArchives-Extensions/ReplaceText" );
wfLoadExtension( 'SecureLinkFixer', "/www/wwwroot/mw-utils/YsArchives-Extensions/SecureLinkFixer" );
wfLoadExtension( 'SpamBlacklist', "/www/wwwroot/mw-utils/YsArchives-Extensions/SpamBlacklist" );
wfLoadExtension( 'TemplateData', "/www/wwwroot/mw-utils/YsArchives-Extensions/TemplateData" );
wfLoadExtension( 'TextExtracts', "/www/wwwroot/mw-utils/YsArchives-Extensions/TextExtracts" );
wfLoadExtension( 'TitleBlacklist', "/www/wwwroot/mw-utils/YsArchives-Extensions/TitleBlacklist" );
wfLoadExtension( 'VisualEditor', "/www/wwwroot/mw-utils/YsArchives-Extensions/VisualEditor" );
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

wfLoadExtension( 'WikiEditor', "/www/wwwroot/mw-utils/YsArchives-Extensions/WikiEditor" );
$wgWikiEditorRealtimePreview = true;
$wgDefaultUserOptions['usebetatoolbar'] = 1; // user option provided by WikiEditor extension

wfLoadExtension( 'Popups', "/www/wwwroot/mw-utils/YsArchives-Extensions/Popups" );
$wgPopupsHideOptInOnPreferencesPage = true;
$wgPopupsReferencePreviewsBetaFeature = false;

wfLoadExtension( 'FileImporter', "/www/wwwroot/mw-utils/YsArchives-Extensions/FileImporter" );
wfLoadExtension( 'MassMessage', "/www/wwwroot/mw-utils/YsArchives-Extensions/MassMessage" );
wfLoadExtension( 'Elastica', "/www/wwwroot/mw-utils/YsArchives-Extensions/Elastica" );
wfLoadExtension( 'CirrusSearch', "/www/wwwroot/mw-utils/YsArchives-Extensions/CirrusSearch" );
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

wfLoadExtension( 'AdvancedSearch', "/www/wwwroot/mw-utils/YsArchives-Extensions/AdvancedSearch" );
##$wgAdvancedSearchHighlighting = true;

wfLoadExtension( 'MediaSearch', "/www/wwwroot/mw-utils/YsArchives-Extensions/MediaSearch" );
wfLoadExtension( 'CodeMirror', "/www/wwwroot/mw-utils/YsArchives-Extensions/CodeMirror" );
wfLoadExtension( 'ParserFunctions', "/www/wwwroot/mw-utils/YsArchives-Extensions/ParserFunctions" );
wfLoadExtension( 'CodeEditor', "/www/wwwroot/mw-utils/YsArchives-Extensions/CodeEditor" );
wfLoadExtension( 'Linter', "/www/wwwroot/mw-utils/YsArchives-Extensions/Linter" );
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

wfLoadExtension( 'DiscussionTools', "/www/wwwroot/mw-utils/YsArchives-Extensions/DiscussionTools" );
$wgDiscussionToolsEnable = true;
$wgDiscussionToolsEnablePermalinksBackend = true;

wfLoadExtension( 'InterwikiExtracts', "/www/wwwroot/mw-utils/YsArchives-Extensions/InterwikiExtracts" );
wfLoadExtension( 'CheckUser', "/www/wwwroot/mw-utils/YsArchives-Extensions/CheckUser" );
$wgCheckUserEnableSpecialInvestigate = true;

wfLoadExtension( 'SandboxLink', "/www/wwwroot/mw-utils/YsArchives-Extensions/SandboxLink" );
wfLoadExtension( 'TemplateStyles', "/www/wwwroot/mw-utils/YsArchives-Extensions/TemplateStyles" );
wfLoadExtension( 'TemplateStylesExtender', "/www/wwwroot/mw-utils/YsArchives-Extensions/TemplateStylesExtender" );
wfLoadExtension( 'SyntaxHighlight_GeSHi', "/www/wwwroot/mw-utils/YsArchives-Extensions/SyntaxHighlight_GeSHi" );
wfLoadExtension( 'Citoid', "/www/wwwroot/mw-utils/YsArchives-Extensions/Citoid" );
wfLoadExtension( 'LabeledSectionTransclusion', "/www/wwwroot/mw-utils/YsArchives-Extensions/LabeledSectionTransclusion" );
wfLoadExtension( 'RevisionSlider', "/www/wwwroot/mw-utils/YsArchives-Extensions/RevisionSlider" );
wfLoadExtension( 'EventLogging', "/www/wwwroot/mw-utils/YsArchives-Extensions/EventLogging" );
$wgEventLoggingBaseUri = '/beacon/event';
#$wgEventLoggingServiceUri = '/beacon/intake-analytics';
$wgEventLoggingStreamNames = true;

wfLoadExtension( 'Scribunto', "/www/wwwroot/mw-utils/YsArchives-Extensions/Scribunto" );
$wgScribuntoDefaultEngine = 'luasandbox';
$wgScribuntoUseGeSHi = true;
$wgScribuntoUseCodeEditor = true;

wfLoadExtension( 'Echo', "/www/wwwroot/mw-utils/YsArchives-Extensions/Echo" );
// Echo增强设置
$wgEchoEmailFooterAddress = '有兽档案馆，开放的有兽焉wiki';

wfLoadExtension( 'MassEditRegex', "/www/wwwroot/mw-utils/YsArchives-Extensions/MassEditRegex" );
wfLoadExtension( 'TemplateSandbox', "/www/wwwroot/mw-utils/YsArchives-Extensions/TemplateSandbox" );
wfLoadExtension( 'TwoColConflict', "/www/wwwroot/mw-utils/YsArchives-Extensions/TwoColConflict" );
$wgTwoColConflictUseInline = false;

wfLoadExtension( 'EmbedVideo', "/www/wwwroot/mw-utils/YsArchives-Extensions/EmbedVideo" );
wfLoadExtension( 'WikiSEO', "/www/wwwroot/mw-utils/YsArchives-Extensions/WikiSEO" );
# SEO配置
#$wgWikiSeoDefaultLanguage = 'zh';
$wgWikiSeoEnableAutoDescription = true;

wfLoadExtension( 'UploadWizard', "/www/wwwroot/mw-utils/YsArchives-Extensions/UploadWizard" );
wfLoadExtension( 'Disambiguator', "/www/wwwroot/mw-utils/YsArchives-Extensions/Disambiguator" );
wfLoadExtension( 'WikiLove', "/www/wwwroot/mw-utils/YsArchives-Extensions/WikiLove" );
$wgWikiLoveGlobal = true;

wfLoadExtension( 'Thanks', "/www/wwwroot/mw-utils/YsArchives-Extensions/Thanks" );
wfLoadExtension( 'AJAXPoll', "/www/wwwroot/mw-utils/YsArchives-Extensions/AJAXPoll" );
wfLoadExtension( 'LabeledSectionTransclusion', "/www/wwwroot/mw-utils/YsArchives-Extensions/LabeledSectionTransclusion" );
wfLoadExtension( 'cldr', "/www/wwwroot/mw-utils/YsArchives-Extensions/cldr" );
wfLoadExtension( 'OAuth', "/www/wwwroot/mw-utils/YsArchives-Extensions/OAuth" );
// Oauth 秘钥
$wgMWOAuthSecureTokenTransfer = true;
$wgOAuth2PrivateKey = __DIR__ . "/oauthkeys/private.key";
$wgOAuth2PublicKey = __DIR__ . "/oauthkeys/public.key";

wfLoadExtension( 'OrphanedTalkPages', "/www/wwwroot/mw-utils/YsArchives-Extensions/OrphanedTalkPages" );
wfLoadExtension( 'NewSignupPage', "/www/wwwroot/mw-utils/YsArchives-Extensions/NewSignupPage" );
wfLoadExtension( 'AntiSpoof', "/www/wwwroot/mw-utils/YsArchives-Extensions/AntiSpoof" );
wfLoadExtension( 'CommonsMetadata', "/www/wwwroot/mw-utils/YsArchives-Extensions/CommonsMetadata" );
wfLoadExtension( 'PageForms', "/www/wwwroot/mw-utils/YsArchives-Extensions/PageForms" );
# Page Forms 设置
$wgPageFormsMaxLocalAutocompleteValues = 500;
$wgPageFormsRedLinksCheckOnlyLocalProps = true;

wfLoadExtension( 'RegexFunctions', "/www/wwwroot/mw-utils/YsArchives-Extensions/RegexFunctions" );
wfLoadExtension( 'Lockdown', "/www/wwwroot/mw-utils/YsArchives-Extensions/Lockdown" );
require_once "$IP/ysarxiv-settings/Lockdowns.php";

wfLoadExtension( 'UserMerge', "/www/wwwroot/mw-utils/YsArchives-Extensions/UserMerge" );
$wgUserMergeProtectedGroups = [ 'sysop', 'steward' ];

wfLoadExtension( 'LoginNotify', "/www/wwwroot/mw-utils/YsArchives-Extensions/LoginNotify" );
// 登录告警
$wgLoginNotifyAttemptsKnownIP = 5;
$wgLoginNotifyAttemptsNewIP = 3;

wfLoadExtension( 'TabberNeue', "/www/wwwroot/mw-utils/YsArchives-Extensions/TabberNeue" );
$wgTabberNeueEnableAnimation = true;

wfLoadExtension( 'ContributionScores', "/www/wwwroot/mw-utils/YsArchives-Extensions/ContributionScores" );
// 贡献分数
$wgContribScoreIgnoreBots = true;
$wgContribScoreIgnoreBlockedUsers = true;
$wgContribScoreIgnoreUsernames = [];
$wgContribScoresUseRealName = false;

wfLoadExtension( 'PinyinSort', "/www/wwwroot/mw-utils/YsArchives-Extensions/PinyinSort" );
// 拼音分类
$wgCategoryCollation = 'pinyin-noprefix';

wfLoadExtension( 'DarkMode', "/www/wwwroot/mw-utils/YsArchives-Extensions/DarkMode" );
wfLoadExtension( 'CollapsibleSidebar', "/www/wwwroot/mw-utils/YsArchives-Extensions/CollapsibleSidebar" );
wfLoadExtension( 'Avatar', "/www/wwwroot/mw-utils/YsArchives-Extensions/Avatar" );
//Avatar插件配置
$wgDefaultAvatar = 'https://youshou.wiki/images/avatars/default/default.gif';
$wgMaxAvatarResolution = 512;
$wgDefaultAvatarRes = 256;

wfLoadExtension( 'FileImporter', "/www/wwwroot/mw-utils/YsArchives-Extensions/FileImporter" );
// FileImporter
$wgFileImporterShowInputScreen = true;
$wgFileImporterRequiredRight = 'import';

wfLoadExtension( 'MultiBoilerplate', "/www/wwwroot/mw-utils/YsArchives-Extensions/MultiBoilerplate" );
wfLoadExtension( 'NewUserMessage', "/www/wwwroot/mw-utils/YsArchives-Extensions/NewUserMessage" );
wfLoadExtension( 'CreateUserPage', "/www/wwwroot/mw-utils/YsArchives-Extensions/CreateUserPage" );
$wgCreateUserPage_AutoCreateUser = 'New user page';
$wgCreateUserPage_PageContent ='{{用户页}}';

wfLoadExtension( 'Widgets', "/www/wwwroot/mw-utils/YsArchives-Extensions/Widgets" );
$wgExtensionFunctions[] = function() use ( &$wgGroupPermissions ) {
    unset( $wgGroupPermissions['widgeteditor'] );
};

#wfLoadExtension( 'NativeSvgHandler', "/www/wwwroot/mw-utils/YsArchives-Extensions/NativeSvgHandler" );
wfLoadExtension( 'TemplateWizard', "/www/wwwroot/mw-utils/YsArchives-Extensions/TemplateWizard" );
#wfLoadExtension( 'GrowthExperiments', "/www/wwwroot/mw-utils/YsArchives-Extensions/GrowthExperiments" );
#wfLoadExtension( 'PageViewInfo', "/www/wwwroot/mw-utils/YsArchives-Extensions/PageViewInfo" );
wfLoadExtension( 'RNRSHook', "/www/wwwroot/mw-utils/YsArchives-Extensions/RNRSHook" );
wfLoadExtension( 'FeaturedFeeds', "/www/wwwroot/mw-utils/YsArchives-Extensions/FeaturedFeeds" );
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
wfLoadExtension( 'SemanticMediaWiki', "/www/wwwroot/mw-utils/YsArchives-Extensions/SemanticMediaWiki" );
enableSemantics();
$wgExtensionFunctions[] = function() use ( &$wgGroupPermissions ) {
    unset( $wgGroupPermissions['smwadministrator'] );
    unset( $wgGroupPermissions['smwcurator'] );
};
wfLoadExtension( 'SemanticScribunto', "/www/wwwroot/mw-utils/YsArchives-Extensions/SemanticScribunto" );
wfLoadExtension( 'SemanticDrilldown', "/www/wwwroot/mw-utils/YsArchives-Extensions/SemanticDrilldown" );
wfLoadExtension( 'SemanticResultFormats', "/www/wwwroot/mw-utils/YsArchives-Extensions/SemanticResultFormats" );
// $smwgEnabledFulltextSearch = true;
# 语义维基调优
$smwgQMaxLimit = 1000;
$smwgQEqualitySupport = SMW_EQ_NONE;
$smwgQueryResultCacheType = CACHE_ACCEL;
$smwgQMaxSize = 9;
$wgDefaultUserOptions['smw-prefs-general-options-show-entity-issue-panel'] = false;
$smwgMaintenanceLanguage = 'zh';

// NewUserMessage
require_once('/www/wwwroot/mw-utils/YsArchives-Extensions/NewUserMessage/includes/NewUserMessage.php');
