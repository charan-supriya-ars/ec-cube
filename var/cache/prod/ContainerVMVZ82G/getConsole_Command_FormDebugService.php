<?php

namespace ContainerVMVZ82G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_FormDebugService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DebugCommand.php';

        $container->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($container->privates['form.registry'] ?? $container->load('getForm_RegistryService')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'Eccube\\Form\\Type', 2 => 'Eccube\\Form\\Type\\Admin', 3 => 'Eccube\\Form\\Type\\Front', 4 => 'Eccube\\Form\\Type\\Install', 5 => 'Eccube\\Form\\Type\\Master', 6 => 'Eccube\\Form\\Type\\Shopping', 7 => 'Symfony\\Bridge\\Doctrine\\Form\\Type'], [0 => 'Eccube\\Form\\Type\\AddCartType', 1 => 'Eccube\\Form\\Type\\AddressType', 2 => 'Eccube\\Form\\Type\\Admin\\AuthenticationType', 3 => 'Eccube\\Form\\Type\\Admin\\AuthorityRoleType', 4 => 'Eccube\\Form\\Type\\Admin\\BlockType', 5 => 'Eccube\\Form\\Type\\Admin\\CalendarType', 6 => 'Eccube\\Form\\Type\\Admin\\CategoryType', 7 => 'Eccube\\Form\\Type\\Admin\\ChangePasswordType', 8 => 'Eccube\\Form\\Type\\Admin\\ClassCategoryType', 9 => 'Eccube\\Form\\Type\\Admin\\ClassNameType', 10 => 'Eccube\\Form\\Type\\Admin\\CsvImportType', 11 => 'Eccube\\Form\\Type\\Admin\\CustomerType', 12 => 'Eccube\\Form\\Type\\Admin\\DeliveryFeeType', 13 => 'Eccube\\Form\\Type\\Admin\\DeliveryTimeType', 14 => 'Eccube\\Form\\Type\\Admin\\DeliveryType', 15 => 'Eccube\\Form\\Type\\Admin\\LayoutType', 16 => 'Eccube\\Form\\Type\\Admin\\LogType', 17 => 'Eccube\\Form\\Type\\Admin\\LoginType', 18 => 'Eccube\\Form\\Type\\Admin\\MailType', 19 => 'Eccube\\Form\\Type\\Admin\\MainEditType', 20 => 'Eccube\\Form\\Type\\Admin\\MasterdataDataType', 21 => 'Eccube\\Form\\Type\\Admin\\MasterdataEditType', 22 => 'Eccube\\Form\\Type\\Admin\\MasterdataType', 23 => 'Eccube\\Form\\Type\\Admin\\MemberType', 24 => 'Eccube\\Form\\Type\\Admin\\NewsType', 25 => 'Eccube\\Form\\Type\\Admin\\OrderItemType', 26 => 'Eccube\\Form\\Type\\Admin\\OrderMailType', 27 => 'Eccube\\Form\\Type\\Admin\\OrderPdfType', 28 => 'Eccube\\Form\\Type\\Admin\\OrderStatusSettingType', 29 => 'Eccube\\Form\\Type\\Admin\\OrderType', 30 => 'Eccube\\Form\\Type\\Admin\\PageType', 31 => 'Eccube\\Form\\Type\\Admin\\PaymentRegisterType', 32 => 'Eccube\\Form\\Type\\Admin\\PluginLocalInstallType', 33 => 'Eccube\\Form\\Type\\Admin\\PluginManagementType', 34 => 'Eccube\\Form\\Type\\Admin\\ProductClassEditType', 35 => 'Eccube\\Form\\Type\\Admin\\ProductClassMatrixType', 36 => 'Eccube\\Form\\Type\\Admin\\ProductClassType', 37 => 'Eccube\\Form\\Type\\Admin\\ProductTag', 38 => 'Eccube\\Form\\Type\\Admin\\ProductType', 39 => 'Eccube\\Form\\Type\\Admin\\SearchCustomerType', 40 => 'Eccube\\Form\\Type\\Admin\\SearchLoginHistoryType', 41 => 'Eccube\\Form\\Type\\Admin\\SearchOrderType', 42 => 'Eccube\\Form\\Type\\Admin\\SearchPluginApiType', 43 => 'Eccube\\Form\\Type\\Admin\\SearchProductType', 44 => 'Eccube\\Form\\Type\\Admin\\SecurityType', 45 => 'Eccube\\Form\\Type\\Admin\\ShippingType', 46 => 'Eccube\\Form\\Type\\Admin\\ShopMasterType', 47 => 'Eccube\\Form\\Type\\Admin\\TagType', 48 => 'Eccube\\Form\\Type\\Admin\\TaxRuleType', 49 => 'Eccube\\Form\\Type\\Admin\\TemplateType', 50 => 'Eccube\\Form\\Type\\Admin\\TradeLawType', 51 => 'Eccube\\Form\\Type\\Admin\\TwoFactorAuthType', 52 => 'Eccube\\Form\\Type\\Front\\ContactType', 53 => 'Eccube\\Form\\Type\\Front\\CustomerAddressType', 54 => 'Eccube\\Form\\Type\\Front\\CustomerLoginType', 55 => 'Eccube\\Form\\Type\\Front\\EntryType', 56 => 'Eccube\\Form\\Type\\Front\\ForgotType', 57 => 'Eccube\\Form\\Type\\Front\\NonMemberType', 58 => 'Eccube\\Form\\Type\\Front\\PasswordResetType', 59 => 'Eccube\\Form\\Type\\Front\\ShoppingShippingType', 60 => 'Eccube\\Form\\Type\\Install\\Step1Type', 61 => 'Eccube\\Form\\Type\\Install\\Step3Type', 62 => 'Eccube\\Form\\Type\\Install\\Step4Type', 63 => 'Eccube\\Form\\Type\\Install\\Step5Type', 64 => 'Eccube\\Form\\Type\\KanaType', 65 => 'Eccube\\Form\\Type\\MasterType', 66 => 'Eccube\\Form\\Type\\Master\\CategoryType', 67 => 'Eccube\\Form\\Type\\Master\\CsvType', 68 => 'Eccube\\Form\\Type\\Master\\CustomerStatusType', 69 => 'Eccube\\Form\\Type\\Master\\DeliveryDurationType', 70 => 'Eccube\\Form\\Type\\Master\\DeviceTypeType', 71 => 'Eccube\\Form\\Type\\Master\\JobType', 72 => 'Eccube\\Form\\Type\\Master\\LoginHistoryStatusType', 73 => 'Eccube\\Form\\Type\\Master\\MailTemplateType', 74 => 'Eccube\\Form\\Type\\Master\\OrderStatusType', 75 => 'Eccube\\Form\\Type\\Master\\PageMaxType', 76 => 'Eccube\\Form\\Type\\Master\\PaymentType', 77 => 'Eccube\\Form\\Type\\Master\\PrefType', 78 => 'Eccube\\Form\\Type\\Master\\ProductListMaxType', 79 => 'Eccube\\Form\\Type\\Master\\ProductListOrderByType', 80 => 'Eccube\\Form\\Type\\Master\\ProductStatusType', 81 => 'Eccube\\Form\\Type\\Master\\RoundingTypeType', 82 => 'Eccube\\Form\\Type\\Master\\SaleTypeType', 83 => 'Eccube\\Form\\Type\\Master\\SexType', 84 => 'Eccube\\Form\\Type\\NameType', 85 => 'Eccube\\Form\\Type\\PhoneNumberType', 86 => 'Eccube\\Form\\Type\\PostalType', 87 => 'Eccube\\Form\\Type\\PriceType', 88 => 'Eccube\\Form\\Type\\RepeatedEmailType', 89 => 'Eccube\\Form\\Type\\RepeatedPasswordType', 90 => 'Eccube\\Form\\Type\\SearchProductBlockType', 91 => 'Eccube\\Form\\Type\\SearchProductType', 92 => 'Eccube\\Form\\Type\\ShippingMultipleItemType', 93 => 'Eccube\\Form\\Type\\ShippingMultipleType', 94 => 'Eccube\\Form\\Type\\ShoppingMultipleType', 95 => 'Eccube\\Form\\Type\\Shopping\\CustomerAddressType', 96 => 'Eccube\\Form\\Type\\Shopping\\OrderItemType', 97 => 'Eccube\\Form\\Type\\Shopping\\OrderType', 98 => 'Eccube\\Form\\Type\\Shopping\\ShippingType', 99 => 'Eccube\\Form\\Type\\ToggleSwitchType', 100 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 101 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 102 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 103 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType', 104 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType'], [0 => 'Eccube\\Form\\Extension\\DoctrineOrmExtension', 1 => 'Eccube\\Form\\Extension\\HelpTypeExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 3 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 7 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 8 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 9 => 'Exercise\\HTMLPurifierBundle\\Form\\TypeExtension\\HTMLPurifierTextTypeExtension', 10 => 'Eccube\\Form\\Extension\\HTMLPurifierTextTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($container->privates['debug.file_link_formatter'] ?? ($container->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:form');
        $instance->setDescription('Display form type information');

        return $instance;
    }
}
