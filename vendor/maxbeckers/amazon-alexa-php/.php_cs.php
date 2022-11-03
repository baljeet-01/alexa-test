<?php

$finder = PhpCsFixer\Finder::create()
    ->files()
    ->in(__DIR__ . '/src')
    ->in(__DIR__ . '/test')
    ->name('*.php');

$config = new PhpCsFixer\Config();
$config->setUsingCache(true);
$config->setRules([
    'binary_operator_spaces'                      => ['default' => 'align_single_space'],
    'blank_line_after_namespace'                  => true,
    'blank_line_after_opening_tag'                => true,
    'blank_line_before_statement'                 => ['statements' => ['return']],
    'braces'                                      => true,
    'cast_spaces'                                 => true,
    'class_definition'                            => true,
    'concat_space'                                => true,
    'declare_equal_normalize'                     => true,
    'elseif'                                      => true,
    'encoding'                                    => true,
    'no_extra_blank_lines'                        => true,
    'full_opening_tag'                            => true,
    'function_declaration'                        => true,
    'function_typehint_space'                     => true,
    'heredoc_to_nowdoc'                           => true,
    'include'                                     => true,
    'indentation_type'                            => true,
    'line_ending'                                 => true,
    'lowercase_cast'                              => true,
    'single_line_comment_style'                   => true,
    'lowercase_keywords'                          => true,
    'method_argument_space'                       => true,
    'multiline_whitespace_before_semicolons'      => true,
    'native_function_casing'                      => true,
    'new_with_braces'                             => true,
    'linebreak_after_opening_tag'                 => true,
    'no_alias_functions'                          => true,
    'no_blank_lines_after_class_opening'          => true,
    'no_blank_lines_after_phpdoc'                 => true,
    'no_closing_tag'                              => true,
    'no_empty_comment'                            => true,
    'no_empty_phpdoc'                             => true,
    'no_empty_statement'                          => true,
    'no_leading_import_slash'                     => true,
    'no_leading_namespace_whitespace'             => true,
    'no_mixed_echo_print'                         => true,
    'no_multiline_whitespace_around_double_arrow' => true,
    'no_short_bool_cast'                          => true,
    'no_singleline_whitespace_before_semicolons'  => true,
    'no_spaces_after_function_name'               => true,
    'no_spaces_around_offset'                     => true,
    'no_spaces_inside_parenthesis'                => true,
    'no_trailing_comma_in_list_call'              => true,
    'no_trailing_comma_in_singleline_array'       => true,
    'no_trailing_whitespace'                      => true,
    'no_trailing_whitespace_in_comment'           => true,
    'no_unneeded_control_parentheses'             => true,
    'no_unreachable_default_argument_value'       => true,
    'no_unused_imports'                           => true,
    'no_useless_else'                             => true,
    'no_useless_return'                           => true,
    'no_whitespace_before_comma_in_array'         => true,
    'no_whitespace_in_blank_line'                 => true,
    'normalize_index_brace'                       => true,
    'not_operator_with_space'                     => false,
    'not_operator_with_successor_space'           => false,
    'object_operator_without_whitespace'          => true,
    'ordered_class_elements'                      => false,
    'ordered_imports'                             => true,
    'php_unit_construct'                          => true,
    'php_unit_dedicate_assert'                    => true,
    'php_unit_fqcn_annotation'                    => true,
    'php_unit_strict'                             => false,
    'phpdoc_add_missing_param_annotation'         => true,
    'phpdoc_align'                                => true,
    'phpdoc_annotation_without_dot'               => true,
    'phpdoc_indent'                               => true,
    'general_phpdoc_tag_rename'                   => true,
    'phpdoc_inline_tag_normalizer'                => true,
    'phpdoc_tag_type'                             => true,
    'phpdoc_no_access'                            => true,
    'phpdoc_no_empty_return'                      => true,
    'phpdoc_no_package'                           => true,
    'phpdoc_order'                                => true,
    'phpdoc_scalar'                               => true,
    'phpdoc_separation'                           => true,
    'phpdoc_single_line_var_spacing'              => true,
    'phpdoc_summary'                              => true,
    'phpdoc_to_comment'                           => true,
    'phpdoc_trim'                                 => true,
    'phpdoc_no_alias_tag'                         => true,
    'phpdoc_types'                                => true,
    'phpdoc_var_without_name'                     => true,
    'pow_to_exponentiation'                       => true,
    'increment_style'                             => ['style' => 'pre'],
    'psr_autoloading'                             => true,
    'random_api_migration'                        => true,
    'return_type_declaration'                     => true,
    'self_accessor'                               => true,
    'semicolon_after_instruction'                 => true,
    'array_syntax'                                => [
        'syntax' => 'short',
    ],
    'short_scalar_cast'                           => true,
    'error_suppression'                           => true,
    'single_blank_line_at_eof'                    => true,
    'single_blank_line_before_namespace'          => true,
    'single_class_element_per_statement'          => true,
    'single_import_per_statement'                 => true,
    'single_line_after_imports'                   => true,
    'single_quote'                                => true,
    'space_after_semicolon'                       => true,
    'standardize_not_equals'                      => true,
    'strict_comparison'                           => true,
    'strict_param'                                => true,
    'switch_case_semicolon_to_colon'              => true,
    'switch_case_space'                           => true,
    'ternary_operator_spaces'                     => true,
    'trailing_comma_in_multiline'                 => ['elements' => ['arrays']],
    'trim_array_spaces'                           => true,
    'unary_operator_spaces'                       => true,
    'visibility_required'                         => true,
    'whitespace_after_comma_in_array'             => true,
    '@PSR1'                                       => true,
    '@PSR2'                                       => true,
]);
$config->setFinder($finder);

return $config;