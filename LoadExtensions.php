<?php
# 扩展
wfLoadExtension( 'Gadgets', "/www/wwwroot/mw-utils/YsArchives-Extensions/Gadgets/extension.json" );
wfLoadExtension( 'Matomo', "/www/wwwroot/mw-utils/YsArchives-Extensions/Matomo/extension.json" );
// Matomo访问信息收集
require_once "/www/wwwroot/mw-utils/YsArchives-Settings/MatomoSettings.php";

wfLoadExtension( 'AbuseFilter', "/www/wwwroot/mw-utils/YsArchives-Extensions/AbuseFilter/extension.json" );
wfLoadExtension( 'CategoryTree', "/www/wwwroot/mw-utils/YsArchives-Extensions/CategoryTree/extension.json" );
wfLoadExtension( 'Cite', "/www/wwwroot/mw-utils/YsArchives-Extensions/Cite/extension.json" );
wfLoadExtension( 'CiteThisPage', "/www/wwwroot/mw-utils/YsArchives-Extensions/CiteThisPage/extension.json" );
wfLoadExtension( 'ConfirmEdit', "/www/wwwroot/mw-utils/YsArchives-Extensions/ConfirmEdit/extension.json" );
wfLoadExtension( 'ConfirmEdit/hCaptcha', "/www/wwwroot/mw-utils/YsArchives-Extensions/ConfirmEdit/hCaptcha/extension.json" );
require_once "/www/wwwroot/mw-utils/YsArchives-Settings/hCaptchaKeys.php";
$wgCaptchaTriggers['edit'] = true;
$wgCaptchaTriggers['create'] = true;
$wgCaptchaTriggers['createtalk'] = true;
$wgCaptchaTriggers['addurl'] = true;
$wgCaptchaTriggers['createaccount'] = true;
$wgCaptchaTriggers['badlogin'] = true;

wfLoadExtension( 'BetaFeatures', "/www/wwwroot/mw-utils/YsArchives-Extensions/BetaFeatures/extension.json" );
wfLoadExtension( 'ImageMap', "/www/wwwroot/mw-utils/YsArchives-Extensions/ImageMap/extension.json" );
wfLoadExtension( 'InputBox', "/www/wwwroot/mw-utils/YsArchives-Extensions/InputBox/extension.json" );
wfLoadExtension( 'Interwiki', "/www/wwwroot/mw-utils/YsArchives-Extensions/Interwiki/extension.json" );
wfLoadExtension( 'MultimediaViewer', "/www/wwwroot/mw-utils/YsArchives-Extensions/MultimediaViewer/extension.json" );
wfLoadExtension( 'Nuke', "/www/wwwroot/mw-utils/YsArchives-Extensions/Nuke/extension.json" );
wfLoadExtension( 'OATHAuth', "/www/wwwroot/mw-utils/YsArchives-Extensions/OATHAuth/extension.json" );
wfLoadExtension( 'PageImages', "/www/wwwroot/mw-utils/YsArchives-Extensions/PageImages/extension.json" );
$wgPageImagesExpandOpenSearchXml = true;

wfLoadExtension( 'ParserFunctions', "/www/wwwroot/mw-utils/YsArchives-Extensions/ParserFunctions/extension.json" );
wfLoadExtension( 'PdfHandler', "/www/wwwroot/mw-utils/YsArchives-Extensions/PdfHandler/extension.json" );
wfLoadExtension( 'Poem', "/www/wwwroot/mw-utils/YsArchives-Extensions/Poem/extension.json" );
wfLoadExtension( 'Renameuser', "/www/wwwroot/mw-utils/YsArchives-Extensions/Renameuser/extension.json" );
wfLoadExtension( 'ReplaceText', "/www/wwwroot/mw-utils/YsArchives-Extensions/ReplaceText/extension.json" );
wfLoadExtension( 'SecureLinkFixer', "/www/wwwroot/mw-utils/YsArchives-Extensions/SecureLinkFixer/extension.json" );
wfLoadExtension( 'SpamBlacklist', "/www/wwwroot/mw-utils/YsArchives-Extensions/SpamBlacklist/extension.json" );
wfLoadExtension( 'TemplateData', "/www/wwwroot/mw-utils/YsArchives-Extensions/TemplateData/extension.json" );
wfLoadExtension( 'TextExtracts', "/www/wwwroot/mw-utils/YsArchives-Extensions/TextExtracts/extension.json" );
wfLoadExtension( 'TitleBlacklist', "/www/wwwroot/mw-utils/YsArchives-Extensions/TitleBlacklist/extension.json" );
wfLoadExtension( 'VisualEditor', "/www/wwwroot/mw-utils/YsArchives-Extensions/VisualEditor/extension.json" );
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

wfLoadExtension( 'WikiEditor', "/www/wwwroot/mw-utils/YsArchives-Extensions/WikiEditor/extension.json" );
$wgWikiEditorRealtimePreview = true;
$wgDefaultUserOptions['usebetatoolbar'] = 1; // user option provided by WikiEditor extension

wfLoadExtension( 'Popups', "/www/wwwroot/mw-utils/YsArchives-Extensions/Popups/extension.json" );
$wgPopupsHideOptInOnPreferencesPage = true;
$wgPopupsReferencePreviewsBetaFeature = false;

wfLoadExtension( 'FileImporter', "/www/wwwroot/mw-utils/YsArchives-Extensions/FileImporter/extension.json" );
wfLoadExtension( 'MassMessage', "/www/wwwroot/mw-utils/YsArchives-Extensions/MassMessage/extension.json" );
wfLoadExtension( 'Elastica', "/www/wwwroot/mw-utils/YsArchives-Extensions/Elastica/extension.json" );
wfLoadExtension( 'CirrusSearch', "/www/wwwroot/mw-utils/YsArchives-Extensions/CirrusSearch/extension.json" );
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

wfLoadExtension( 'AdvancedSearch', "/www/wwwroot/mw-utils/YsArchives-Extensions/AdvancedSearch/extension.json" );
##$wgAdvancedSearchHighlighting = true;

wfLoadExtension( 'MediaSearch', "/www/wwwroot/mw-utils/YsArchives-Extensions/MediaSearch/extension.json" );
wfLoadExtension( 'CodeMirror', "/www/wwwroot/mw-utils/YsArchives-Extensions/CodeMirror/extension.json" );
wfLoadExtension( 'ParserFunctions', "/www/wwwroot/mw-utils/YsArchives-Extensions/ParserFunctions/extension.json" );
wfLoadExtension( 'CodeEditor', "/www/wwwroot/mw-utils/YsArchives-Extensions/CodeEditor/extension.json" );
wfLoadExtension( 'Linter', "/www/wwwroot/mw-utils/YsArchives-Extensions/Linter/extension.json" );
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

wfLoadExtension( 'DiscussionTools', "/www/wwwroot/mw-utils/YsArchives-Extensions/DiscussionTools/extension.json" );
$wgDiscussionToolsEnable = true;
$wgDiscussionToolsEnablePermalinksBackend = true;

wfLoadExtension( 'InterwikiExtracts', "/www/wwwroot/mw-utils/YsArchives-Extensions/InterwikiExtracts/extension.json" );
wfLoadExtension( 'CheckUser', "/www/wwwroot/mw-utils/YsArchives-Extensions/CheckUser/extension.json" );
$wgCheckUserEnableSpecialInvestigate = true;

wfLoadExtension( 'SandboxLink', "/www/wwwroot/mw-utils/YsArchives-Extensions/SandboxLink/extension.json" );
wfLoadExtension( 'TemplateStyles', "/www/wwwroot/mw-utils/YsArchives-Extensions/TemplateStyles/extension.json" );
wfLoadExtension( 'TemplateStylesExtender', "/www/wwwroot/mw-utils/YsArchives-Extensions/TemplateStylesExtender/extension.json" );
wfLoadExtension( 'SyntaxHighlight_GeSHi', "/www/wwwroot/mw-utils/YsArchives-Extensions/SyntaxHighlight_GeSHi/extension.json" );
wfLoadExtension( 'Citoid', "/www/wwwroot/mw-utils/YsArchives-Extensions/Citoid/extension.json" );
wfLoadExtension( 'LabeledSectionTransclusion', "/www/wwwroot/mw-utils/YsArchives-Extensions/LabeledSectionTransclusion/extension.json" );
wfLoadExtension( 'RevisionSlider', "/www/wwwroot/mw-utils/YsArchives-Extensions/RevisionSlider/extension.json" );
wfLoadExtension( 'EventLogging', "/www/wwwroot/mw-utils/YsArchives-Extensions/EventLogging/extension.json" );
$wgEventLoggingBaseUri = '/beacon/event';
#$wgEventLoggingServiceUri = '/beacon/intake-analytics';
$wgEventLoggingStreamNames = true;

wfLoadExtension( 'Scribunto', "/www/wwwroot/mw-utils/YsArchives-Extensions/Scribunto/extension.json" );
$wgScribuntoDefaultEngine = 'luasandbox';
$wgScribuntoUseGeSHi = true;
$wgScribuntoUseCodeEditor = true;

wfLoadExtension( 'Echo', "/www/wwwroot/mw-utils/YsArchives-Extensions/Echo/extension.json" );
// Echo增强设置
$wgEchoEmailFooterAddress = '有兽档案馆，开放的有兽焉wiki';

wfLoadExtension( 'MassEditRegex', "/www/wwwroot/mw-utils/YsArchives-Extensions/MassEditRegex/extension.json" );
wfLoadExtension( 'TemplateSandbox', "/www/wwwroot/mw-utils/YsArchives-Extensions/TemplateSandbox/extension.json" );
wfLoadExtension( 'TwoColConflict', "/www/wwwroot/mw-utils/YsArchives-Extensions/TwoColConflict/extension.json" );
$wgTwoColConflictUseInline = false;

wfLoadExtension( 'EmbedVideo', "/www/wwwroot/mw-utils/YsArchives-Extensions/EmbedVideo/extension.json" );
wfLoadExtension( 'WikiSEO', "/www/wwwroot/mw-utils/YsArchives-Extensions/WikiSEO/extension.json" );
# SEO配置
#$wgWikiSeoDefaultLanguage = 'zh';
$wgWikiSeoEnableAutoDescription = true;

wfLoadExtension( 'UploadWizard', "/www/wwwroot/mw-utils/YsArchives-Extensions/UploadWizard/extension.json" );
wfLoadExtension( 'Disambiguator', "/www/wwwroot/mw-utils/YsArchives-Extensions/Disambiguator/extension.json" );
wfLoadExtension( 'WikiLove', "/www/wwwroot/mw-utils/YsArchives-Extensions/WikiLove/extension.json" );
$wgWikiLoveGlobal = true;

wfLoadExtension( 'Thanks', "/www/wwwroot/mw-utils/YsArchives-Extensions/Thanks/extension.json" );
wfLoadExtension( 'AJAXPoll', "/www/wwwroot/mw-utils/YsArchives-Extensions/AJAXPoll/extension.json" );
wfLoadExtension( 'LabeledSectionTransclusion', "/www/wwwroot/mw-utils/YsArchives-Extensions/LabeledSectionTransclusion/extension.json" );
wfLoadExtension( 'cldr', "/www/wwwroot/mw-utils/YsArchives-Extensions/cldr/extension.json" );
wfLoadExtension( 'OAuth', "/www/wwwroot/mw-utils/YsArchives-Extensions/OAuth/extension.json" );
// Oauth 秘钥
$wgMWOAuthSecureTokenTransfer = true;
$wgOAuth2PrivateKey = "/www/wwwroot/mw-utils/YsArchives-OauthKeys/private.key";
$wgOAuth2PublicKey = "/www/wwwroot/mw-utils/YsArchives-OauthKeys/public.key";

wfLoadExtension( 'OrphanedTalkPages', "/www/wwwroot/mw-utils/YsArchives-Extensions/OrphanedTalkPages/extension.json" );
wfLoadExtension( 'NewSignupPage', "/www/wwwroot/mw-utils/YsArchives-Extensions/NewSignupPage/extension.json" );
wfLoadExtension( 'AntiSpoof', "/www/wwwroot/mw-utils/YsArchives-Extensions/AntiSpoof/extension.json" );
wfLoadExtension( 'CommonsMetadata', "/www/wwwroot/mw-utils/YsArchives-Extensions/CommonsMetadata/extension.json" );
wfLoadExtension( 'PageForms', "/www/wwwroot/mw-utils/YsArchives-Extensions/PageForms/extension.json" );
# Page Forms 设置
$wgPageFormsMaxLocalAutocompleteValues = 500;
$wgPageFormsRedLinksCheckOnlyLocalProps = true;

wfLoadExtension( 'RegexFunctions', "/www/wwwroot/mw-utils/YsArchives-Extensions/RegexFunctions/extension.json" );
wfLoadExtension( 'Lockdown', "/www/wwwroot/mw-utils/YsArchives-Extensions/Lockdown/extension.json" );
require_once "/www/wwwroot/mw-utils/YsArchives-Settings/Lockdowns.php";

wfLoadExtension( 'UserMerge', "/www/wwwroot/mw-utils/YsArchives-Extensions/UserMerge/extension.json" );
$wgUserMergeProtectedGroups = [ 'sysop', 'steward' ];

wfLoadExtension( 'LoginNotify', "/www/wwwroot/mw-utils/YsArchives-Extensions/LoginNotify/extension.json" );
// 登录告警
$wgLoginNotifyAttemptsKnownIP = 5;
$wgLoginNotifyAttemptsNewIP = 3;

wfLoadExtension( 'TabberNeue', "/www/wwwroot/mw-utils/YsArchives-Extensions/TabberNeue/extension.json" );
$wgTabberNeueEnableAnimation = true;
$wgTabberNeueUpdateLocationOnTabChange = true;

wfLoadExtension( 'ContributionScores', "/www/wwwroot/mw-utils/YsArchives-Extensions/ContributionScores/extension.json" );
// 贡献分数
$wgContribScoreIgnoreBots = true;
$wgContribScoreIgnoreBlockedUsers = true;
$wgContribScoreIgnoreUsernames = [];
$wgContribScoresUseRealName = false;

wfLoadExtension( 'PinyinSort', "/www/wwwroot/mw-utils/YsArchives-Extensions/PinyinSort/extension.json" );
// 拼音分类
$wgCategoryCollation = 'pinyin-noprefix';

wfLoadExtension( 'DarkMode', "/www/wwwroot/mw-utils/YsArchives-Extensions/DarkMode/extension.json" );
wfLoadExtension( 'CollapsibleSidebar', "/www/wwwroot/mw-utils/YsArchives-Extensions/CollapsibleSidebar/extension.json" );
wfLoadExtension( 'Avatar', "/www/wwwroot/mw-utils/YsArchives-Extensions/Avatar/extension.json" );
//Avatar插件配置
$wgDefaultAvatar = 'https://youshou.wiki/images/avatars/default/default.gif';
$wgMaxAvatarResolution = 512;
$wgDefaultAvatarRes = 256;

wfLoadExtension( 'FileImporter', "/www/wwwroot/mw-utils/YsArchives-Extensions/FileImporter/extension.json" );
// FileImporter
$wgFileImporterShowInputScreen = true;
$wgFileImporterRequiredRight = 'import';

wfLoadExtension( 'MultiBoilerplate', "/www/wwwroot/mw-utils/YsArchives-Extensions/MultiBoilerplate/extension.json" );
wfLoadExtension( 'NewUserMessage', "/www/wwwroot/mw-utils/YsArchives-Extensions/NewUserMessage/extension.json" );
wfLoadExtension( 'CreateUserPage', "/www/wwwroot/mw-utils/YsArchives-Extensions/CreateUserPage/extension.json" );
$wgCreateUserPage_AutoCreateUser = 'New user page';
$wgCreateUserPage_PageContent ='{{用户页}}';

wfLoadExtension( 'Widgets', "/www/wwwroot/mw-utils/YsArchives-Extensions/Widgets/extension.json" );
$wgExtensionFunctions[] = function() use ( &$wgGroupPermissions ) {
    unset( $wgGroupPermissions['widgeteditor'] );
};

#wfLoadExtension( 'NativeSvgHandler', "/www/wwwroot/mw-utils/YsArchives-Extensions/NativeSvgHandler/extension.json" );
wfLoadExtension( 'TemplateWizard', "/www/wwwroot/mw-utils/YsArchives-Extensions/TemplateWizard/extension.json" );
#wfLoadExtension( 'GrowthExperiments', "/www/wwwroot/mw-utils/YsArchives-Extensions/GrowthExperiments/extension.json" );
#wfLoadExtension( 'PageViewInfo', "/www/wwwroot/mw-utils/YsArchives-Extensions/PageViewInfo/extension.json" );
wfLoadExtension( 'RNRSHook', "/www/wwwroot/mw-utils/YsArchives-Extensions/RNRSHook/extension.json" );
wfLoadExtension( 'FeaturedFeeds', "/www/wwwroot/mw-utils/YsArchives-Extensions/FeaturedFeeds/extension.json" );
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
wfLoadExtension( 'SemanticMediaWiki', "/www/wwwroot/mw-utils/YsArchives-Extensions/SemanticMediaWiki/extension.json" );
enableSemantics();
$wgExtensionFunctions[] = function() use ( &$wgGroupPermissions ) {
    unset( $wgGroupPermissions['smwadministrator'] );
    unset( $wgGroupPermissions['smwcurator'] );
};
wfLoadExtension( 'SemanticScribunto', "/www/wwwroot/mw-utils/YsArchives-Extensions/SemanticScribunto/extension.json" );
wfLoadExtension( 'SemanticDrilldown', "/www/wwwroot/mw-utils/YsArchives-Extensions/SemanticDrilldown/extension.json" );
wfLoadExtension( 'SemanticResultFormats', "/www/wwwroot/mw-utils/YsArchives-Extensions/SemanticResultFormats/extension.json" );
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

wfLoadExtension( 'HeaderTabs', "/www/wwwroot/mw-utils/YsArchives-Extensions/HeaderTabs/extension.json" );