<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3013873b56733fb84f9e534c2d8a9ac1
{
    public static $files = array (
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '9fef4034ed73e26a337d9856ea126f7f' => __DIR__ . '/..' . '/codeinwp/themeisle-sdk/load.php',
    );

    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'enshrined\\svgSanitize\\' => 22,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
        ),
        'O' => 
        array (
            'Optimole\\Sdk\\' => 13,
            'OptimoleWP\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'enshrined\\svgSanitize\\' => 
        array (
            0 => __DIR__ . '/..' . '/enshrined/svg-sanitize/src',
        ),
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Optimole\\Sdk\\' => 
        array (
            0 => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src',
        ),
        'OptimoleWP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc/v2',
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'OptimoleWP\\BgOptimizer\\Lazyload' => __DIR__ . '/../..' . '/inc/v2/BgOptimizer/Lazyload.php',
        'OptimoleWP\\Offload\\ImageEditor' => __DIR__ . '/../..' . '/inc/v2/Offload/ImageEditor.php',
        'OptimoleWP\\Offload\\Loader' => __DIR__ . '/../..' . '/inc/v2/Offload/Loader.php',
        'OptimoleWP\\PageProfiler\\Profile' => __DIR__ . '/../..' . '/inc/v2/PageProfiler/Profile.php',
        'OptimoleWP\\PageProfiler\\Storage\\Base' => __DIR__ . '/../..' . '/inc/v2/PageProfiler/Storage/Base.php',
        'OptimoleWP\\PageProfiler\\Storage\\ObjectCache' => __DIR__ . '/../..' . '/inc/v2/PageProfiler/Storage/ObjectCache.php',
        'OptimoleWP\\PageProfiler\\Storage\\Transients' => __DIR__ . '/../..' . '/inc/v2/PageProfiler/Storage/Transients.php',
        'OptimoleWP\\Preload\\Links' => __DIR__ . '/../..' . '/inc/v2/Preload/Links.php',
        'Optimole\\Sdk\\Exception\\BadMethodCallException' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Exception/BadMethodCallException.php',
        'Optimole\\Sdk\\Exception\\BadResponseException' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Exception/BadResponseException.php',
        'Optimole\\Sdk\\Exception\\DashboardApiException' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Exception/DashboardApiException.php',
        'Optimole\\Sdk\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Exception/ExceptionInterface.php',
        'Optimole\\Sdk\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Exception/InvalidArgumentException.php',
        'Optimole\\Sdk\\Exception\\InvalidDashboardApiResponseException' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Exception/InvalidDashboardApiResponseException.php',
        'Optimole\\Sdk\\Exception\\InvalidUploadApiResponseException' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Exception/InvalidUploadApiResponseException.php',
        'Optimole\\Sdk\\Exception\\RuntimeException' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Exception/RuntimeException.php',
        'Optimole\\Sdk\\Exception\\UploadApiException' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Exception/UploadApiException.php',
        'Optimole\\Sdk\\Exception\\UploadFailedException' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Exception/UploadFailedException.php',
        'Optimole\\Sdk\\Exception\\UploadLimitException' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Exception/UploadLimitException.php',
        'Optimole\\Sdk\\Http\\ClientInterface' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Http/ClientInterface.php',
        'Optimole\\Sdk\\Http\\GuzzleClient' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Http/GuzzleClient.php',
        'Optimole\\Sdk\\Http\\WordPressClient' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Http/WordPressClient.php',
        'Optimole\\Sdk\\Offload\\Manager' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Offload/Manager.php',
        'Optimole\\Sdk\\Optimole' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Optimole.php',
        'Optimole\\Sdk\\Resource\\AbstractResource' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Resource/AbstractResource.php',
        'Optimole\\Sdk\\Resource\\Asset' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Resource/Asset.php',
        'Optimole\\Sdk\\Resource\\AssetProperty\\MinifyProperty' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Resource/AssetProperty/MinifyProperty.php',
        'Optimole\\Sdk\\Resource\\AssetProperty\\TypeProperty' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Resource/AssetProperty/TypeProperty.php',
        'Optimole\\Sdk\\Resource\\CacheBusterProperty' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Resource/CacheBusterProperty.php',
        'Optimole\\Sdk\\Resource\\Image' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Resource/Image.php',
        'Optimole\\Sdk\\Resource\\ImageProperty\\DprProperty' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Resource/ImageProperty/DprProperty.php',
        'Optimole\\Sdk\\Resource\\ImageProperty\\EnlargeProperty' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Resource/ImageProperty/EnlargeProperty.php',
        'Optimole\\Sdk\\Resource\\ImageProperty\\FormatProperty' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Resource/ImageProperty/FormatProperty.php',
        'Optimole\\Sdk\\Resource\\ImageProperty\\GravityProperty' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Resource/ImageProperty/GravityProperty.php',
        'Optimole\\Sdk\\Resource\\ImageProperty\\HeightProperty' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Resource/ImageProperty/HeightProperty.php',
        'Optimole\\Sdk\\Resource\\ImageProperty\\IgnoreAvifProperty' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Resource/ImageProperty/IgnoreAvifProperty.php',
        'Optimole\\Sdk\\Resource\\ImageProperty\\KeepCopyrightProperty' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Resource/ImageProperty/KeepCopyrightProperty.php',
        'Optimole\\Sdk\\Resource\\ImageProperty\\QualityProperty' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Resource/ImageProperty/QualityProperty.php',
        'Optimole\\Sdk\\Resource\\ImageProperty\\ResizeTypeProperty' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Resource/ImageProperty/ResizeTypeProperty.php',
        'Optimole\\Sdk\\Resource\\ImageProperty\\StripMetadataProperty' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Resource/ImageProperty/StripMetadataProperty.php',
        'Optimole\\Sdk\\Resource\\ImageProperty\\WatermarkProperty' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Resource/ImageProperty/WatermarkProperty.php',
        'Optimole\\Sdk\\Resource\\ImageProperty\\WidthProperty' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Resource/ImageProperty/WidthProperty.php',
        'Optimole\\Sdk\\Resource\\PropertyInterface' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/Resource/PropertyInterface.php',
        'Optimole\\Sdk\\ValueObject\\OffloadUsage' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/ValueObject/OffloadUsage.php',
        'Optimole\\Sdk\\ValueObject\\Position' => __DIR__ . '/..' . '/codeinwp/optimole-sdk/src/ValueObject/Position.php',
        'PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'Symfony\\Polyfill\\Php80\\Php80' => __DIR__ . '/..' . '/symfony/polyfill-php80/Php80.php',
        'Symfony\\Polyfill\\Php80\\PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/PhpToken.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
        'enshrined\\svgSanitize\\ElementReference\\Resolver' => __DIR__ . '/..' . '/enshrined/svg-sanitize/src/ElementReference/Resolver.php',
        'enshrined\\svgSanitize\\ElementReference\\Subject' => __DIR__ . '/..' . '/enshrined/svg-sanitize/src/ElementReference/Subject.php',
        'enshrined\\svgSanitize\\ElementReference\\Usage' => __DIR__ . '/..' . '/enshrined/svg-sanitize/src/ElementReference/Usage.php',
        'enshrined\\svgSanitize\\Exceptions\\NestingException' => __DIR__ . '/..' . '/enshrined/svg-sanitize/src/Exceptions/NestingException.php',
        'enshrined\\svgSanitize\\Helper' => __DIR__ . '/..' . '/enshrined/svg-sanitize/src/Helper.php',
        'enshrined\\svgSanitize\\Sanitizer' => __DIR__ . '/..' . '/enshrined/svg-sanitize/src/Sanitizer.php',
        'enshrined\\svgSanitize\\data\\AllowedAttributes' => __DIR__ . '/..' . '/enshrined/svg-sanitize/src/data/AllowedAttributes.php',
        'enshrined\\svgSanitize\\data\\AllowedTags' => __DIR__ . '/..' . '/enshrined/svg-sanitize/src/data/AllowedTags.php',
        'enshrined\\svgSanitize\\data\\AttributeInterface' => __DIR__ . '/..' . '/enshrined/svg-sanitize/src/data/AttributeInterface.php',
        'enshrined\\svgSanitize\\data\\TagInterface' => __DIR__ . '/..' . '/enshrined/svg-sanitize/src/data/TagInterface.php',
        'enshrined\\svgSanitize\\data\\XPath' => __DIR__ . '/..' . '/enshrined/svg-sanitize/src/data/XPath.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3013873b56733fb84f9e534c2d8a9ac1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3013873b56733fb84f9e534c2d8a9ac1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3013873b56733fb84f9e534c2d8a9ac1::$classMap;

        }, null, ClassLoader::class);
    }
}
