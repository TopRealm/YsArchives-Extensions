<?php
if (!function_exists('wfLoadExtension')) {
    function wfLoadExtension($name, $path = null) {
        /// 伪定义，仅用于静态分析工具
    }
}

# 定义基础路径
$ysyExtensionsPath = "/www/wwwroot/mw-utils/YsArchives-Extensions";
$ysySettingsPath = "/www/wwwroot/mw-utils/YsArchives-Settings";

// A
wfLoadExtension( 'AbuseFilter', "$ysyExtensionsPath/AbuseFilter/extension.json" );
$wgAbuseFilterEnableBlockedExternalDomain = true;

wfLoadExtension( 'AddImgTag', "$ysyExtensionsPath/AddImgTag/extension.json" );
$wgAddImgTagBlacklist = true;
$wgAddImgTagBlacklistDomainsList = ['upload.wikimedia.org'];

wfLoadExtension( 'AdvancedSearch', "$ysyExtensionsPath/AdvancedSearch/extension.json" );
##$wgAdvancedSearchHighlighting = true;

wfLoadExtension( 'AJAXPoll', "$ysyExtensionsPath/AJAXPoll/extension.json" );

wfLoadExtension( 'AntiSpoof', "$ysyExtensionsPath/AntiSpoof/extension.json" );

wfLoadExtension( 'ArticleCreationWorkflow', "$ysyExtensionsPath/ArticleCreationWorkflow/extension.json" );
$wgArticleCreationLandingPage = '有兽档案馆:条目创建向导/navigate';

wfLoadExtension( 'ArticleMetaDescription', "$ysyExtensionsPath/ArticleMetaDescription/extension.json" );

wfLoadExtension( 'Avatar', "$ysyExtensionsPath/Avatar/extension.json" );
$wgDefaultAvatar = 'https://youshou.wiki/images/avatars/default/default.gif';
$wgMaxAvatarResolution = 512;
$wgDefaultAvatarRes = 256;
$wgAvatarEnableS3  = true;
require_once "$ysySettingsPath/AvatarS3Settings.php";

wfLoadExtension( 'AWS', "$ysyExtensionsPath/AWS/extension.json" );
require_once "$ysySettingsPath/AWSSettings.php";

// B
wfLoadExtension( 'BetaFeatures', "$ysyExtensionsPath/BetaFeatures/extension.json" );

// C
wfLoadExtension( 'CategoryTree', "$ysyExtensionsPath/CategoryTree/extension.json" );

wfLoadExtension( 'CheckUser', "$ysyExtensionsPath/CheckUser/extension.json" );
$wgCheckUserEnableSpecialInvestigate = true;

wfLoadExtension( 'CirrusSearch', "$ysyExtensionsPath/CirrusSearch/extension.json" );
/// CirrusSearch设置
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

wfLoadExtension( 'Cite', "$ysyExtensionsPath/Cite/extension.json" );

wfLoadExtension( 'CiteThisPage', "$ysyExtensionsPath/CiteThisPage/extension.json" );

wfLoadExtension( 'Citoid', "$ysyExtensionsPath/Citoid/extension.json" );

wfLoadExtension( 'cldr', "$ysyExtensionsPath/cldr/extension.json" );

wfLoadExtension( 'CodeEditor', "$ysyExtensionsPath/CodeEditor/extension.json" );

wfLoadExtension( 'CodeMirror', "$ysyExtensionsPath/CodeMirror/extension.json" );

wfLoadExtension( 'CollapsibleSidebar', "$ysyExtensionsPath/CollapsibleSidebar/extension.json" );

wfLoadExtension( 'CommonsMetadata', "$ysyExtensionsPath/CommonsMetadata/extension.json" );

wfLoadExtension( 'ConfirmEdit', "$ysyExtensionsPath/ConfirmEdit/extension.json" );

wfLoadExtension( 'ConfirmEdit/QuestyCaptcha', "$ysyExtensionsPath/ConfirmEdit/QuestyCaptcha/extension.json" );
#wfLoadExtension( 'ConfirmEdit/Turnstile', "$ysyExtensionsPath/ConfirmEdit/Turnstile/extension.json" );
require_once "$ysySettingsPath/CaptchaKeys.php";
$wgCaptchaTriggers['edit'] = true;
$wgCaptchaTriggers['create'] = true;
$wgCaptchaTriggers['createtalk'] = true;
$wgCaptchaTriggers['addurl'] = true;
$wgCaptchaTriggers['createaccount'] = true;
$wgCaptchaTriggers['badlogin'] = true;

wfLoadExtension( 'ContributionScores', "$ysyExtensionsPath/ContributionScores/extension.json" );
$wgContribScoreIgnoreBots = true;
$wgContribScoreIgnoreBlockedUsers = false;
$wgContribScoreIgnoreUsernames = [];
$wgContribScoresUseRealName = false;

wfLoadExtension( 'CreateUserPage', "$ysyExtensionsPath/CreateUserPage/extension.json" );
$wgCreateUserPage_AutoCreateUser = 'New user page';
$wgCreateUserPage_PageContent ='{{用户页}}';

// D
wfLoadExtension( 'DarkMode', "$ysyExtensionsPath/DarkMode/extension.json" );

wfLoadExtension( 'Disambiguator', "$ysyExtensionsPath/Disambiguator/extension.json" );

wfLoadExtension( 'DiscussionTools', "$ysyExtensionsPath/DiscussionTools/extension.json" );
$wgDiscussionToolsEnable = true;
$wgDiscussionToolsEnablePermalinksBackend = true;

wfLoadExtension( 'DynamicPageList3', "$ysyExtensionsPath/DynamicPageList3/extension.json" );

// E
wfLoadExtension( 'Elastica', "$ysyExtensionsPath/Elastica/extension.json" );

wfLoadExtension( 'Echo', "$ysyExtensionsPath/Echo/extension.json" );
/// Echo增强设置
$wgEchoEmailFooterAddress = '有兽档案馆，开放的有兽焉wiki';

#wfLoadExtension( 'EmbedVideo', "$ysyExtensionsPath/EmbedVideo/extension.json" );

wfLoadExtension( 'EventLogging', "$ysyExtensionsPath/EventLogging/extension.json" );
$wgEventLoggingBaseUri = '/beacon/event';
#$wgEventLoggingServiceUri = '/beacon/intake-analytics';
$wgEventLoggingStreamNames = true;

// F
wfLoadExtension( 'FeaturedFeeds', "$ysyExtensionsPath/FeaturedFeeds/extension.json" );
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

wfLoadExtension( 'FileImporter', "$ysyExtensionsPath/FileImporter/extension.json" );
/// FileImporter
$wgFileImporterShowInputScreen = true;
$wgFileImporterRequiredRight = 'import';

// G
wfLoadExtension( 'Gadgets', "$ysyExtensionsPath/Gadgets/extension.json" );

#wfLoadExtension( 'GrowthExperiments', "$ysyExtensionsPath/GrowthExperiments/extension.json" );

// H
wfLoadExtension( 'HeaderTabs', "$ysyExtensionsPath/HeaderTabs/extension.json" );

// I
wfLoadExtension( 'ImageMap', "$ysyExtensionsPath/ImageMap/extension.json" );

wfLoadExtension( 'InputBox', "$ysyExtensionsPath/InputBox/extension.json" );

wfLoadExtension( 'Interwiki', "$ysyExtensionsPath/Interwiki/extension.json" );

wfLoadExtension( 'InterwikiExtracts', "$ysyExtensionsPath/InterwikiExtracts/extension.json" );

// J

// K

// L
wfLoadExtension( 'LabeledSectionTransclusion', "$ysyExtensionsPath/LabeledSectionTransclusion/extension.json" );

wfLoadExtension( 'Linter', "$ysyExtensionsPath/Linter/extension.json" );

wfLoadExtension( 'Lockdown', "$ysyExtensionsPath/Lockdown/extension.json" );
require_once "$ysySettingsPath/Lockdowns.php";

wfLoadExtension( 'LoginNotify', "$ysyExtensionsPath/LoginNotify/extension.json" );
/// 登录告警
$wgLoginNotifyAttemptsKnownIP = 5;
$wgLoginNotifyAttemptsNewIP = 3;

// M
wfLoadExtension( 'Matomo', "$ysyExtensionsPath/Matomo/extension.json" );
/// Matomo访问信息收集
require_once "$ysySettingsPath/MatomoSettings.php";

wfLoadExtension( 'MassMessage', "$ysyExtensionsPath/MassMessage/extension.json" );

wfLoadExtension( 'MassEditRegex', "$ysyExtensionsPath/MassEditRegex/extension.json" );

wfLoadExtension( 'Math', "$ysyExtensionsPath/Math/extension.json" );
// Math
$wgDefaultUserOptions['math'] = 'mathjax';
$wgMathValidModes = ['mathjax'];

wfLoadExtension( 'MediaSearch', "$ysyExtensionsPath/MediaSearch/extension.json" );

wfLoadExtension( 'MultiBoilerplate', "$ysyExtensionsPath/MultiBoilerplate/extension.json" );

wfLoadExtension( 'MultimediaViewer', "$ysyExtensionsPath/MultimediaViewer/extension.json" );

// N
#wfLoadExtension( 'NativeSvgHandler', "$ysyExtensionsPath/NativeSvgHandler/extension.json" );

wfLoadExtension( 'NewSignupPage', "$ysyExtensionsPath/NewSignupPage/extension.json" );

wfLoadExtension( 'NewUserMessage', "$ysyExtensionsPath/NewUserMessage/extension.json" );

wfLoadExtension( 'Nuke', "$ysyExtensionsPath/Nuke/extension.json" );

// O
wfLoadExtension( 'OATHAuth', "$ysyExtensionsPath/OATHAuth/extension.json" );

wfLoadExtension( 'OAuth', "$ysyExtensionsPath/OAuth/extension.json" );
/// Oauth 秘钥
$wgMWOAuthSecureTokenTransfer = true;
$wgOAuth2PrivateKey = "/www/wwwroot/mw-utils/YsArchives-OauthKeys/private.key";
$wgOAuth2PublicKey = "/www/wwwroot/mw-utils/YsArchives-OauthKeys/public.key";

wfLoadExtension( 'OrphanedTalkPages', "$ysyExtensionsPath/OrphanedTalkPages/extension.json" );

// P
wfLoadExtension( 'PageImages', "$ysyExtensionsPath/PageImages/extension.json" );
$wgPageImagesExpandOpenSearchXml = true;
$wgPageImagesAPIDefaultLicense = 'any';

wfLoadExtension( 'PageForms', "$ysyExtensionsPath/PageForms/extension.json" );
# PageForms 设置
$wgPageFormsMaxLocalAutocompleteValues = 500;
$wgPageFormsRedLinksCheckOnlyLocalProps = true;

wfLoadExtension( 'ParserFunctions', "$ysyExtensionsPath/ParserFunctions/extension.json" );

/// 为了使linter工作，使Parsoid作为扩展加载，添加接入点
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

wfLoadExtension( 'PdfHandler', "$ysyExtensionsPath/PdfHandler/extension.json" );

wfLoadExtension( 'PinyinSort', "$ysyExtensionsPath/PinyinSort/extension.json" );
/// 拼音分类
$wgCategoryCollation = 'pinyin-noprefix';

wfLoadExtension( 'Poem', "$ysyExtensionsPath/Poem/extension.json" );

wfLoadExtension( 'Popups', "$ysyExtensionsPath/Popups/extension.json" );
$wgPopupsHideOptInOnPreferencesPage = true;
$wgPopupsReferencePreviewsBetaFeature = false;

// Q

// R
wfLoadExtension( 'Renameuser', "$ysyExtensionsPath/Renameuser/extension.json" );

wfLoadExtension( 'RegexFunctions', "$ysyExtensionsPath/RegexFunctions/extension.json" );

wfLoadExtension( 'ReplaceText', "$ysyExtensionsPath/ReplaceText/extension.json" );

wfLoadExtension( 'RevisionSlider', "$ysyExtensionsPath/RevisionSlider/extension.json" );

wfLoadExtension( 'RNRSHook', "$ysyExtensionsPath/RNRSHook/extension.json" );

// S
wfLoadExtension( 'SandboxLink', "$ysyExtensionsPath/SandboxLink/extension.json" );

wfLoadExtension( 'Scribunto', "$ysyExtensionsPath/Scribunto/extension.json" );
$wgScribuntoDefaultEngine = 'luasandbox';
$wgScribuntoUseGeSHi = true;
$wgScribuntoUseCodeEditor = true;

wfLoadExtension( 'SecureLinkFixer', "$ysyExtensionsPath/SecureLinkFixer/extension.json" );

wfLoadExtension( 'SemanticMediaWiki', "$ysyExtensionsPath/SemanticMediaWiki/extension.json" );
enableSemantics('youshou.wiki');
/// SMW语义维基配置及插件配置、调优
#$smwgEnabledFulltextSearch = true;
$smwgQMaxLimit = 5000;
$smwgQEqualitySupport = SMW_EQ_NONE;
$smwgQueryResultCacheType = CACHE_ANYTHING;
$smwgQMaxSize = 10;
$wgDefaultUserOptions['smw-prefs-general-options-show-entity-issue-panel'] = false;

$wgExtensionFunctions[] = function() use ( &$wgGroupPermissions ) {
    unset( $wgGroupPermissions['smwadministrator'] );
    unset( $wgGroupPermissions['smwcurator'] );
};
wfLoadExtension( 'SemanticScribunto', "$ysyExtensionsPath/SemanticScribunto/extension.json" );

wfLoadExtension( 'SemanticDrilldown', "$ysyExtensionsPath/SemanticDrilldown/extension.json" );

wfLoadExtension( 'SemanticResultFormats', "$ysyExtensionsPath/SemanticResultFormats/extension.json" );

wfLoadExtension( 'SemanticMetaTags', "$ysyExtensionsPath/SemanticMetaTags/extension.json" );

wfLoadExtension( 'ShortDescription', "$ysyExtensionsPath/ShortDescription/extension.json" );

wfLoadExtension( 'SpamBlacklist', "$ysyExtensionsPath/SpamBlacklist/extension.json" );

wfLoadExtension( 'SyntaxHighlight_GeSHi', "$ysyExtensionsPath/SyntaxHighlight_GeSHi/extension.json" );

// T
wfLoadExtension( 'TabberNeue', "$ysyExtensionsPath/TabberNeue/extension.json" );
$wgTabberNeueEnableAnimation = true;
$wgTabberNeueUpdateLocationOnTabChange = true;

wfLoadExtension( 'TemplateData', "$ysyExtensionsPath/TemplateData/extension.json" );

wfLoadExtension( 'TemplateSandbox', "$ysyExtensionsPath/TemplateSandbox/extension.json" );

wfLoadExtension( 'TemplateStyles', "$ysyExtensionsPath/TemplateStyles/extension.json" );

wfLoadExtension( 'TemplateStylesExtender', "$ysyExtensionsPath/TemplateStylesExtender/extension.json" );

wfLoadExtension( 'TemplateWizard', "$ysyExtensionsPath/TemplateWizard/extension.json" );

wfLoadExtension( 'TextExtracts', "$ysyExtensionsPath/TextExtracts/extension.json" );
$wgExtractsRemoveClasses = [
    'table',
    'div',
    'figure',
    'script',
    'input',
    'style',
    'ul.gallery',
    '.mw-editsection',
    'sup.reference',
    'ol.references',
    '.error',
    '.nomobile',
    '.noprint',
    '.noexcerpt',
    '.sortkey',
    '.metadata',
    'span.coordinates',
    'span.geo-multi-punct',
    'span.geo-nondefault',
    '#coordinates',
];

wfLoadExtension( 'Thanks', "$ysyExtensionsPath/Thanks/extension.json" );

wfLoadExtension( 'TimedMediaHandler', "$ysyExtensionsPath/TimedMediaHandler/extension.json" );
$wgFFmpegLocation = '/usr/bin/ffmpeg';
$wgMinimumVideoPlayerSize = 200;
$wgEnableTranscode = true;
$wgJobTypesExcludedFromDefaultQueue[] = 'webVideoTranscode';
$wgJobTypesExcludedFromDefaultQueue[] = 'webVideoTranscodePrioritized';
$wgTranscodeBackgroundTimeLimit = 3600 * 8;
$wgTranscodeBackgroundMemoryLimit = 1 * 1024 * 1024; // 2GB avconv, ffmpeg2theora mmap resources so virtual memory needs to be high enough
$wgTranscodeBackgroundSizeLimit = 4 * 1024 * 1024; // 4GB
$wgFFmpegThreads = 1;
$wgTimedTextNS = 710;
$wgTimedTextForeignNamespaces = [];
$wgEnabledTranscodeSet = [
    '160p.webm' => false,
    '240p.webm' => false,
    '360p.webm' => true,
    '480p.webm' => true,
    '720p.webm' => true,
    '1080p.webm' => true,
];
$wgEnabledAudioTranscodeSet = [
	'ogg' => true,   // ogg+vorbis
	'opus' => false, // ogg+opus
	'mp3' => true,   // raw mp3
	'm4a' => true,  // mp4+aac (mp4a.40.5)
];
// If mp3 source assets can be ingested:
$wgTmhEnableMp3Uploads = true;
// If mp4 source assets can be ingested:
$wgTmhEnableMp4Uploads = true;
// If you use ffmpeg 2, it can be set to true
$wgUseFFmpeg2 = false;

wfLoadExtension( 'TitleBlacklist', "$ysyExtensionsPath/TitleBlacklist/extension.json" );

wfLoadExtension( 'TwoColConflict', "$ysyExtensionsPath/TwoColConflict/extension.json" );
$wgTwoColConflictUseInline = false;

// U
wfLoadExtension( 'UploadsLink', "$ysyExtensionsPath/UploadsLink/extension.json" );

wfLoadExtension( 'UploadWizard', "$ysyExtensionsPath/UploadWizard/extension.json" );

wfLoadExtension( 'UserMerge', "$ysyExtensionsPath/UserMerge/extension.json" );
$wgUserMergeProtectedGroups = [ 'sysop', 'steward' ];

// V
wfLoadExtension( 'VisualEditor', "$ysyExtensionsPath/VisualEditor/extension.json" );
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

// W
wfLoadExtension( 'WebAuthn', "$ysyExtensionsPath/WebAuthn/extension.json" );

wfLoadExtension( 'Widgets', "$ysyExtensionsPath/Widgets/extension.json" );
$wgExtensionFunctions[] = function() use ( &$wgGroupPermissions ) {
    unset( $wgGroupPermissions['widgeteditor'] );
};

wfLoadExtension( 'WikiEditor', "$ysyExtensionsPath/WikiEditor/extension.json" );
$wgWikiEditorRealtimePreview = true;
$wgDefaultUserOptions['usebetatoolbar'] = 1; // user option provided by WikiEditor extension

wfLoadExtension( 'WikiLove', "$ysyExtensionsPath/WikiLove/extension.json" );
$wgWikiLoveGlobal = true;

#wfLoadExtension( 'WikiSEO', "$ysyExtensionsPath/WikiSEO/extension.json" );
# SEO配置
#$wgWikiSeoDefaultLanguage = 'zh';
#$wgWikiSeoEnableAutoDescription = false;
