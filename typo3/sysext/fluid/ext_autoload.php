<?php
// DO NOT CHANGE THIS FILE! It is automatically generated by Tx_Extbase_Utility_Extension::createAutoloadRegistryForExtension.
// This file was generated on 2011-01-26 09:12

$extensionClassesPath = t3lib_extMgm::extPath('fluid') . 'Classes/';
return array(
	'tx_fluid_exception' => $extensionClassesPath . 'Exception.php',
	'tx_fluid_fluid' => $extensionClassesPath . 'Fluid.php',
	'tx_fluid_compatibility_docbookgeneratorservice' => $extensionClassesPath . 'Compatibility/DocbookGeneratorService.php',
	'tx_fluid_compatibility_templateparserbuilder' => $extensionClassesPath . 'Compatibility/TemplateParserBuilder.php',
	'tx_fluid_core_exception' => $extensionClassesPath . 'Core/Exception.php',
	'tx_fluid_core_parser_configuration' => $extensionClassesPath . 'Core/Parser/Configuration.php',
	'tx_fluid_core_parser_exception' => $extensionClassesPath . 'Core/Parser/Exception.php',
	'tx_fluid_core_parser_interceptorinterface' => $extensionClassesPath . 'Core/Parser/InterceptorInterface.php',
	'tx_fluid_core_parser_parsedtemplateinterface' => $extensionClassesPath . 'Core/Parser/ParsedTemplateInterface.php',
	'tx_fluid_core_parser_parsingstate' => $extensionClassesPath . 'Core/Parser/ParsingState.php',
	'tx_fluid_core_parser_templateparser' => $extensionClassesPath . 'Core/Parser/TemplateParser.php',
	'tx_fluid_core_parser_interceptor_escape' => $extensionClassesPath . 'Core/Parser/Interceptor/Escape.php',
	'tx_fluid_core_parser_syntaxtree_abstractnode' => $extensionClassesPath . 'Core/Parser/SyntaxTree/AbstractNode.php',
	'tx_fluid_core_parser_syntaxtree_arraynode' => $extensionClassesPath . 'Core/Parser/SyntaxTree/ArrayNode.php',
	'tx_fluid_core_parser_syntaxtree_nodeinterface' => $extensionClassesPath . 'Core/Parser/SyntaxTree/NodeInterface.php',
	'tx_fluid_core_parser_syntaxtree_objectaccessornode' => $extensionClassesPath . 'Core/Parser/SyntaxTree/ObjectAccessorNode.php',
	'tx_fluid_core_parser_syntaxtree_renderingcontextawareinterface' => $extensionClassesPath . 'Core/Parser/SyntaxTree/RenderingContextAwareInterface.php',
	'tx_fluid_core_parser_syntaxtree_rootnode' => $extensionClassesPath . 'Core/Parser/SyntaxTree/RootNode.php',
	'tx_fluid_core_parser_syntaxtree_textnode' => $extensionClassesPath . 'Core/Parser/SyntaxTree/TextNode.php',
	'tx_fluid_core_parser_syntaxtree_viewhelpernode' => $extensionClassesPath . 'Core/Parser/SyntaxTree/ViewHelperNode.php',
	'tx_fluid_core_rendering_renderingcontext' => $extensionClassesPath . 'Core/Rendering/RenderingContext.php',
	'tx_fluid_core_rendering_renderingcontextinterface' => $extensionClassesPath . 'Core/Rendering/RenderingContextInterface.php',
	'tx_fluid_core_viewhelper_abstractconditionviewhelper' => $extensionClassesPath . 'Core/ViewHelper/AbstractConditionViewHelper.php',
	'tx_fluid_core_viewhelper_abstracttagbasedviewhelper' => $extensionClassesPath . 'Core/ViewHelper/AbstractTagBasedViewHelper.php',
	'tx_fluid_core_viewhelper_abstractviewhelper' => $extensionClassesPath . 'Core/ViewHelper/AbstractViewHelper.php',
	'tx_fluid_core_viewhelper_argumentdefinition' => $extensionClassesPath . 'Core/ViewHelper/ArgumentDefinition.php',
	'tx_fluid_core_viewhelper_arguments' => $extensionClassesPath . 'Core/ViewHelper/Arguments.php',
	'tx_fluid_core_viewhelper_exception' => $extensionClassesPath . 'Core/ViewHelper/Exception.php',
	'tx_fluid_core_viewhelper_tagbasedviewhelper' => $extensionClassesPath . 'Core/ViewHelper/TagBasedViewHelper.php',
	'tx_fluid_core_viewhelper_tagbuilder' => $extensionClassesPath . 'Core/ViewHelper/TagBuilder.php',
	'tx_fluid_core_viewhelper_templatevariablecontainer' => $extensionClassesPath . 'Core/ViewHelper/TemplateVariableContainer.php',
	'tx_fluid_core_viewhelper_viewhelperinterface' => $extensionClassesPath . 'Core/ViewHelper/ViewHelperInterface.php',
	'tx_fluid_core_viewhelper_viewhelpervariablecontainer' => $extensionClassesPath . 'Core/ViewHelper/ViewHelperVariableContainer.php',
	'tx_fluid_core_viewhelper_exception_invalidvariableexception' => $extensionClassesPath . 'Core/ViewHelper/Exception/InvalidVariableException.php',
	'tx_fluid_core_viewhelper_exception_renderingcontextnotaccessibleexception' => $extensionClassesPath . 'Core/ViewHelper/Exception/RenderingContextNotAccessibleException.php',
	'tx_fluid_core_viewhelper_facets_childnodeaccessinterface' => $extensionClassesPath . 'Core/ViewHelper/Facets/ChildNodeAccessInterface.php',
	'tx_fluid_core_viewhelper_facets_postparseinterface' => $extensionClassesPath . 'Core/ViewHelper/Facets/PostParseInterface.php',
	'tx_fluid_core_widget_abstractwidgetcontroller' => $extensionClassesPath . 'Core/Widget/AbstractWidgetController.php',
	'tx_fluid_core_widget_ajaxwidgetcontextholder' => $extensionClassesPath . 'Core/Widget/AjaxWidgetContextHolder.php',
	'tx_fluid_core_widget_bootstrap' => $extensionClassesPath . 'Core/Widget/Bootstrap.php',
	'tx_fluid_core_widget_exception' => $extensionClassesPath . 'Core/Widget/Exception.php',
	'tx_fluid_core_widget_widgetcontext' => $extensionClassesPath . 'Core/Widget/WidgetContext.php',
	'tx_fluid_core_widget_widgetrequest' => $extensionClassesPath . 'Core/Widget/WidgetRequest.php',
	'tx_fluid_core_widget_widgetrequestbuilder' => $extensionClassesPath . 'Core/Widget/WidgetRequestBuilder.php',
	'tx_fluid_core_widget_widgetrequesthandler' => $extensionClassesPath . 'Core/Widget/WidgetRequestHandler.php',
	'tx_fluid_core_widget_exception_missingcontrollerexception' => $extensionClassesPath . 'Core/Widget/Exception/MissingControllerException.php',
	'tx_fluid_core_widget_exception_renderingcontextnotfoundexception' => $extensionClassesPath . 'Core/Widget/Exception/RenderingContextNotFoundException.php',
	'tx_fluid_core_widget_exception_widgetcontextnotfoundexception' => $extensionClassesPath . 'Core/Widget/Exception/WidgetContextNotFoundException.php',
	'tx_fluid_core_widget_exception_widgetrequestnotfoundexception' => $extensionClassesPath . 'Core/Widget/Exception/WidgetRequestNotFoundException.php',
	'tx_fluid_service_docbookgenerator' => $extensionClassesPath . 'Service/DocbookGenerator.php',
	'tx_fluid_view_abstracttemplateview' => $extensionClassesPath . 'View/AbstractTemplateView.php',
	'tx_fluid_view_exception' => $extensionClassesPath . 'View/Exception.php',
	'tx_fluid_view_standaloneview' => $extensionClassesPath . 'View/StandaloneView.php',
	'tx_fluid_view_templateview' => $extensionClassesPath . 'View/TemplateView.php',
	'tx_fluid_view_exception_invalidsectionexception' => $extensionClassesPath . 'View/Exception/InvalidSectionException.php',
	'tx_fluid_view_exception_invalidtemplateresourceexception' => $extensionClassesPath . 'View/Exception/InvalidTemplateResourceException.php',
	'tx_fluid_viewhelpers_aliasviewhelper' => $extensionClassesPath . 'ViewHelpers/AliasViewHelper.php',
	'tx_fluid_viewhelpers_baseviewhelper' => $extensionClassesPath . 'ViewHelpers/BaseViewHelper.php',
	'tx_fluid_viewhelpers_cobjectviewhelper' => $extensionClassesPath . 'ViewHelpers/CObjectViewHelper.php',
	'tx_fluid_viewhelpers_countviewhelper' => $extensionClassesPath . 'ViewHelpers/CountViewHelper.php',
	'tx_fluid_viewhelpers_cycleviewhelper' => $extensionClassesPath . 'ViewHelpers/CycleViewHelper.php',
	'tx_fluid_viewhelpers_debugviewhelper' => $extensionClassesPath . 'ViewHelpers/DebugViewHelper.php',
	'tx_fluid_viewhelpers_elseviewhelper' => $extensionClassesPath . 'ViewHelpers/ElseViewHelper.php',
	'tx_fluid_viewhelpers_escapeviewhelper' => $extensionClassesPath . 'ViewHelpers/EscapeViewHelper.php',
	'tx_fluid_viewhelpers_flashmessagesviewhelper' => $extensionClassesPath . 'ViewHelpers/FlashMessagesViewHelper.php',
	'tx_fluid_viewhelpers_forviewhelper' => $extensionClassesPath . 'ViewHelpers/ForViewHelper.php',
	'tx_fluid_viewhelpers_formviewhelper' => $extensionClassesPath . 'ViewHelpers/FormViewHelper.php',
	'tx_fluid_viewhelpers_groupedforviewhelper' => $extensionClassesPath . 'ViewHelpers/GroupedForViewHelper.php',
	'tx_fluid_viewhelpers_ifviewhelper' => $extensionClassesPath . 'ViewHelpers/IfViewHelper.php',
	'tx_fluid_viewhelpers_imageviewhelper' => $extensionClassesPath . 'ViewHelpers/ImageViewHelper.php',
	'tx_fluid_viewhelpers_layoutviewhelper' => $extensionClassesPath . 'ViewHelpers/LayoutViewHelper.php',
	'tx_fluid_viewhelpers_renderchildrenviewhelper' => $extensionClassesPath . 'ViewHelpers/RenderChildrenViewHelper.php',
	'tx_fluid_viewhelpers_renderflashmessagesviewhelper' => $extensionClassesPath . 'ViewHelpers/RenderFlashMessagesViewHelper.php',
	'tx_fluid_viewhelpers_renderviewhelper' => $extensionClassesPath . 'ViewHelpers/RenderViewHelper.php',
	'tx_fluid_viewhelpers_sectionviewhelper' => $extensionClassesPath . 'ViewHelpers/SectionViewHelper.php',
	'tx_fluid_viewhelpers_thenviewhelper' => $extensionClassesPath . 'ViewHelpers/ThenViewHelper.php',
	'tx_fluid_viewhelpers_translateviewhelper' => $extensionClassesPath . 'ViewHelpers/TranslateViewHelper.php',
	'tx_fluid_viewhelpers_be_abstractbackendviewhelper' => $extensionClassesPath . 'ViewHelpers/Be/AbstractBackendViewHelper.php',
	'tx_fluid_viewhelpers_be_containerviewhelper' => $extensionClassesPath . 'ViewHelpers/Be/ContainerViewHelper.php',
	'tx_fluid_viewhelpers_be_pageinfoviewhelper' => $extensionClassesPath . 'ViewHelpers/Be/PageInfoViewHelper.php',
	'tx_fluid_viewhelpers_be_pagepathviewhelper' => $extensionClassesPath . 'ViewHelpers/Be/PagePathViewHelper.php',
	'tx_fluid_viewhelpers_be_buttons_cshviewhelper' => $extensionClassesPath . 'ViewHelpers/Be/Buttons/CshViewHelper.php',
	'tx_fluid_viewhelpers_be_buttons_iconviewhelper' => $extensionClassesPath . 'ViewHelpers/Be/Buttons/IconViewHelper.php',
	'tx_fluid_viewhelpers_be_buttons_shortcutviewhelper' => $extensionClassesPath . 'ViewHelpers/Be/Buttons/ShortcutViewHelper.php',
	'tx_fluid_viewhelpers_be_menus_actionmenuitemviewhelper' => $extensionClassesPath . 'ViewHelpers/Be/Menus/ActionMenuItemViewHelper.php',
	'tx_fluid_viewhelpers_be_menus_actionmenuviewhelper' => $extensionClassesPath . 'ViewHelpers/Be/Menus/ActionMenuViewHelper.php',
	'tx_fluid_viewhelpers_be_security_ifauthenticatedviewhelper' => $extensionClassesPath . 'ViewHelpers/Be/Security/IfAuthenticatedViewHelper.php',
	'tx_fluid_viewhelpers_be_security_ifhasroleviewhelper' => $extensionClassesPath . 'ViewHelpers/Be/Security/IfHasRoleViewHelper.php',
	'tx_fluid_viewhelpers_form_abstractformfieldviewhelper' => $extensionClassesPath . 'ViewHelpers/Form/AbstractFormFieldViewHelper.php',
	'tx_fluid_viewhelpers_form_abstractformviewhelper' => $extensionClassesPath . 'ViewHelpers/Form/AbstractFormViewHelper.php',
	'tx_fluid_viewhelpers_form_checkboxviewhelper' => $extensionClassesPath . 'ViewHelpers/Form/CheckboxViewHelper.php',
	'tx_fluid_viewhelpers_form_errorsviewhelper' => $extensionClassesPath . 'ViewHelpers/Form/ErrorsViewHelper.php',
	'tx_fluid_viewhelpers_form_hiddenviewhelper' => $extensionClassesPath . 'ViewHelpers/Form/HiddenViewHelper.php',
	'tx_fluid_viewhelpers_form_passwordviewhelper' => $extensionClassesPath . 'ViewHelpers/Form/PasswordViewHelper.php',
	'tx_fluid_viewhelpers_form_radioviewhelper' => $extensionClassesPath . 'ViewHelpers/Form/RadioViewHelper.php',
	'tx_fluid_viewhelpers_form_selectviewhelper' => $extensionClassesPath . 'ViewHelpers/Form/SelectViewHelper.php',
	'tx_fluid_viewhelpers_form_submitviewhelper' => $extensionClassesPath . 'ViewHelpers/Form/SubmitViewHelper.php',
	'tx_fluid_viewhelpers_form_textareaviewhelper' => $extensionClassesPath . 'ViewHelpers/Form/TextareaViewHelper.php',
	'tx_fluid_viewhelpers_form_textboxviewhelper' => $extensionClassesPath . 'ViewHelpers/Form/TextboxViewHelper.php',
	'tx_fluid_viewhelpers_form_textfieldviewhelper' => $extensionClassesPath . 'ViewHelpers/Form/TextfieldViewHelper.php',
	'tx_fluid_viewhelpers_form_uploadviewhelper' => $extensionClassesPath . 'ViewHelpers/Form/UploadViewHelper.php',
	'tx_fluid_viewhelpers_format_cropviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/CropViewHelper.php',
	'tx_fluid_viewhelpers_format_currencyviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/CurrencyViewHelper.php',
	'tx_fluid_viewhelpers_format_dateviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/DateViewHelper.php',
	'tx_fluid_viewhelpers_format_htmlviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/HtmlViewHelper.php',
	'tx_fluid_viewhelpers_format_nl2brviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/Nl2brViewHelper.php',
	'tx_fluid_viewhelpers_format_numberviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/NumberViewHelper.php',
	'tx_fluid_viewhelpers_format_paddingviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/PaddingViewHelper.php',
	'tx_fluid_viewhelpers_format_printfviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/PrintfViewHelper.php',
	'tx_fluid_viewhelpers_link_actionviewhelper' => $extensionClassesPath . 'ViewHelpers/Link/ActionViewHelper.php',
	'tx_fluid_viewhelpers_link_emailviewhelper' => $extensionClassesPath . 'ViewHelpers/Link/EmailViewHelper.php',
	'tx_fluid_viewhelpers_link_externalviewhelper' => $extensionClassesPath . 'ViewHelpers/Link/ExternalViewHelper.php',
	'tx_fluid_viewhelpers_link_pageviewhelper' => $extensionClassesPath . 'ViewHelpers/Link/PageViewHelper.php',
	'tx_fluid_viewhelpers_security_ifauthenticatedviewhelper' => $extensionClassesPath . 'ViewHelpers/Security/IfAuthenticatedViewHelper.php',
	'tx_fluid_viewhelpers_security_ifhasroleviewhelper' => $extensionClassesPath . 'ViewHelpers/Security/IfHasRoleViewHelper.php',
	'tx_fluid_viewhelpers_uri_actionviewhelper' => $extensionClassesPath . 'ViewHelpers/Uri/ActionViewHelper.php',
	'tx_fluid_viewhelpers_uri_emailviewhelper' => $extensionClassesPath . 'ViewHelpers/Uri/EmailViewHelper.php',
	'tx_fluid_viewhelpers_uri_externalviewhelper' => $extensionClassesPath . 'ViewHelpers/Uri/ExternalViewHelper.php',
	'tx_fluid_viewhelpers_uri_imageviewhelper' => $extensionClassesPath . 'ViewHelpers/Uri/ImageViewHelper.php',
	'tx_fluid_viewhelpers_uri_pageviewhelper' => $extensionClassesPath . 'ViewHelpers/Uri/PageViewHelper.php',
	'tx_fluid_viewhelpers_uri_resourceviewhelper' => $extensionClassesPath . 'ViewHelpers/Uri/ResourceViewHelper.php',
	'tx_fluid_viewhelpers_widget_autocompleteviewhelper' => $extensionClassesPath . 'ViewHelpers/Widget/AutocompleteViewHelper.php',
	'tx_fluid_viewhelpers_widget_linkviewhelper' => $extensionClassesPath . 'ViewHelpers/Widget/LinkViewHelper.php',
	'tx_fluid_viewhelpers_widget_paginateviewhelper' => $extensionClassesPath . 'ViewHelpers/Widget/PaginateViewHelper.php',
	'tx_fluid_viewhelpers_widget_uriviewhelper' => $extensionClassesPath . 'ViewHelpers/Widget/UriViewHelper.php',
	'tx_fluid_viewhelpers_widget_controller_autocompletecontroller' => $extensionClassesPath . 'ViewHelpers/Widget/Controller/AutocompleteController.php',
	'tx_fluid_viewhelpers_widget_controller_paginatecontroller' => $extensionClassesPath . 'ViewHelpers/Widget/Controller/PaginateController.php',
);
?>