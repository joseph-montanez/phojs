<?php
class Phojs {
	public static $phpjs_functions = array(
		'array', 'array_change_key_case', 'array_chunk', 'array_combine',
		'array_count_values', 'array_diff', 'array_diff_assoc', 'array_diff_key',
		'array_diff_uassoc', 'array_diff_ukey', 'array_fill', 'array_fill_keys',
		'array_filter', 'array_flip', 'array_intersect', 'array_intersect_assoc',
		'array_intersect_key', 'array_intersect_uassoc', 'array_intersect_ukey',
		'array_key_exists', 'array_keys', 'array_map', 'array_merge',
		'array_merge_recursive', 'array_multisort', 'array_pad', 'array_pop',
		'array_product', 'array_push', 'array_rand', 'array_reduce', 'array_replace',
		'array_replace_recursive', 'array_reverse', 'array_search', 'array_shift',
		'array_slice', 'array_splice', 'array_sum', 'array_udiff', 'array_udiff_assoc',
		'array_udiff_uassoc', 'array_uintersect', 'array_uintersect_assoc',
		'array_uintersect_uassoc', 'array_unique', 'array_unshift', 'array_values',
		'array_walk', 'array_walk_recursive', 'arsort', 'asort', 'compact', 'count',
		'current', 'each', 'end', 'extract', 'in_array', 'key', 'krsort', 'ksort',
		'natcasesort', 'natsort', 'next', 'pos', 'prev', 'range', 'reset', 'rsort', 'shuffle',
		'sizeof', 'sort', 'uasort', 'uksort', 'usort', 'bcadd', 'bccomp', 'bcdiv', 'bcmul',
		'bcround', 'bcscale', 'bcsub', 'ctype_alnum', 'ctype_alpha', 'ctype_cntrl',
		'ctype_digit', 'ctype_graph', 'ctype_lower', 'ctype_print', 'ctype_punct',
		'ctype_space', 'ctype_upper', 'ctype_xdigit', 'class_alias', 'class_exists',
		'get_class', 'get_class_methods', 'get_class_vars', 'get_declared_classes',
		'get_object_vars', 'method_exists', 'property_exists', 'classkit_import',
		'classkit_method_add', 'classkit_method_copy', 'classkit_method_redefine',
		'classkit_method_remove', 'classkit_method_rename', 'checkdate', 'date',
		'date_default_timezone_get', 'date_default_timezone_set', 'date_parse',
		'getdate', 'gettimeofday', 'gmdate', 'gmmktime', 'gmstrftime', 'idate',
		'localtime', 'microtime', 'mktime', 'strftime', 'strptime', 'strtotime', 'time',
		'timezone_abbreviations_list', 'timezone_identifiers_list',
		'error_get_last', 'error_reporting', 'trigger_error', 'user_error', 'basename',
		'dirname', 'fclose', 'feof', 'fgetc', 'fgetcsv', 'fgets', 'fgetss', 'file',
		'file_exists', 'file_get_contents', 'filemtime', 'filesize', 'fopen',
		'fpassthru', 'fread', 'fscanf', 'fseek', 'ftell', 'pathinfo', 'pclose', 'popen',
		'readfile', 'realpath', 'rewind', 'call_user_func', 'call_user_func_array',
		'create_function', 'forward_static_call', 'forward_static_call_array',
		'func_get_arg', 'func_get_args', 'func_num_args', 'function_exists',
		'get_defined_functions', 'register_shutdown_function', 'json_decode',
		'json_encode', 'json_last_error', 'include', 'include_once', 'require',
		'require_once', 'mail', 'abs', 'acos', 'acosh', 'asin', 'asinh', 'atan', 'atan2',
		'atanh', 'base_convert', 'bindec', 'ceil', 'cos', 'cosh', 'decbin', 'dechex', 'decoct',
		'deg2rad', 'exp', 'expm1', 'floor', 'fmod', 'getrandmax', 'hexdec', 'hypot',
		'is_finite', 'is_infinite', 'is_nan', 'lcg_value', 'log', 'log10', 'log1p', 'max',
		'min', 'mt_getrandmax', 'mt_rand', 'octdec', 'pi', 'pow', 'rad2deg', 'rand', 'round',
		'sin', 'sinh', 'sqrt', 'tan', 'tanh', 'constant', 'define', 'defined', 'pack',
		'php_strip_whitespace', 'time_sleep_until', 'uniqid', 'gopher_parsedir',
		'inet_ntop', 'inet_pton', 'ip2long', 'long2ip', 'setcookie', 'setrawcookie',
		'aggregate', 'aggregate_info', 'aggregate_methods',
		'aggregate_methods_by_list', 'aggregate_methods_by_regexp',
		'aggregate_properties', 'aggregate_properties_by_list',
		'aggregate_properties_by_regexp', 'aggregation_info', 'deaggregate',
		'ob_clean', 'ob_end_clean', 'ob_end_flush', 'ob_flush', 'ob_get_clean',
		'ob_get_contents', 'ob_get_flush', 'ob_get_length', 'ob_get_level',
		'ob_get_status', 'ob_list_handlers', 'ob_start', 'assert', 'assert_options',
		'get_cfg_var', 'get_defined_constants', 'get_extension_funcs',
		'get_include_path', 'get_included_files', 'get_required_files', 'getenv',
		'getlastmod', 'ini_alter', 'ini_get', 'ini_get_all', 'ini_restore', 'ini_set',
		'php_ini_loaded_file', 'php_ini_scanned_files', 'phpversion', 'putenv',
		'restore_include_path', 'set_include_path', 'set_time_limit',
		'version_compare', 'escapeshellarg', 'preg_grep', 'preg_quote', 'sql_regcase',
		'stream_context_create', 'stream_context_get_default',
		'stream_context_get_options', 'stream_context_get_params',
		'stream_context_set_default', 'stream_context_set_option',
		'stream_context_set_params', 'stream_get_contents', 'stream_get_line',
		'stream_is_local', 'addcslashes', 'addslashes', 'bin2hex', 'chop', 'chr',
		'chunk_split', 'convert_cyr_string', 'convert_uuencode', 'count_chars',
		'crc32', 'echo', 'explode', 'get_html_translation_table', 'html_entity_decode',
		'htmlentities', 'htmlspecialchars', 'htmlspecialchars_decode', 'implode',
		'join', 'lcfirst', 'levenshtein', 'localeconv', 'ltrim', 'md5', 'md5_file',
		'metaphone', 'money_format', 'nl2br', 'nl_langinfo', 'number_format', 'ord',
		'parse_str', 'printf', 'quoted_printable_decode', 'quoted_printable_encode',
		'quotemeta', 'rtrim', 'setlocale', 'sha1', 'sha1_file', 'similar_text', 'soundex',
		'split', 'sprintf', 'sscanf', 'str_getcsv', 'str_ireplace', 'str_pad',
		'str_repeat', 'str_replace', 'str_rot13', 'str_shuffle', 'str_split',
		'str_word_count', 'strcasecmp', 'strchr', 'strcmp', 'strcoll', 'strcspn',
		'strip_tags', 'stripos', 'stripslashes', 'stristr', 'strlen', 'strnatcasecmp',
		'strnatcmp', 'strncasecmp', 'strncmp', 'strpbrk', 'strpos', 'strrchr', 'strrev',
		'strripos', 'strrpos', 'strspn', 'strstr', 'strtok', 'strtolower', 'strtoupper',
		'strtr', 'substr', 'substr_compare', 'substr_count', 'substr_replace', 'trim',
		'ucfirst', 'ucwords', 'vprintf', 'vsprintf', 'wordwrap', 'base64_decode',
		'base64_encode', 'get_headers', 'get_meta_tags', 'http_build_query',
		'parse_url', 'rawurldecode', 'rawurlencode', 'urldecode', 'urlencode',
		'doubleval', 'empty', 'floatval', 'get_defined_vars', 'get_resource_type',
		'gettype', 'import_request_variables', 'intval', 'is_array', 'is_binary',
		'is_bool', 'is_buffer', 'is_callable', 'is_double', 'is_float', 'is_int',
		'is_integer', 'is_long', 'is_null', 'is_numeric', 'is_object', 'is_real',
		'is_resource', 'is_scalar', 'is_string', 'is_unicode', 'isset', 'print_r',
		'serialize', 'settype', 'strval', 'unserialize', 'var_dump', 'var_export',
		'utf8_decode', 'utf8_encode', '_phpjs_shared_bc', 'i18n_loc_get_default',
		'i18n_loc_set_default', 'runkit_class_adopt', 'runkit_class_emancipate',
		'runkit_function_add', 'runkit_function_copy', 'runkit_function_redefine',
		'runkit_function_remove', 'runkit_function_rename', 'runkit_import',
		'runkit_method_add', 'runkit_method_copy', 'runkit_method_redefine',
		'runkit_method_remove', 'runkit_method_rename', 'runkit_superglobals',
		'xdiff_string_diff', 'xdiff_string_patch'
	);
	public static $used_phpjs_functions = array();
	public $js_functions = array();
	public $cache_folder = 'data';
	public $dir_functions = '';
	public $dir_compile   = '';
	
	public function __construct($filenames = null, $use_cache = true) {
		foreach ((array) $filenames as $filename) {
			$this->addFile($filename, $use_cache);
		}
		$this->dir_functions = realpath(__DIR__ . '/../../../kvz/phpjs/functions');
		$this->dir_compile   = realpath(__DIR__ . '/data');
	}
	
	public function __toString() {
		return $this->render(true, true);
	}

	public function toCoffee($fn, $code, $wrap = false) {
		$code = str_replace(array('<? ', '<?='), array('<?php ', '<?php echo '), $code);
		
		$parser = new PHPParser_Parser(new PHPParser_Lexer);
		
		try {
			$stmts = $parser->parse($code);
			$out = '';
			$scope = array(
				'level' => 0, 
				//-- used for phpjs compiler
				'native' => array(), 
				'vars' => array(
					'_GET' => 0,
					'_POST' => 0,
					'_SERVER' => 0,
					'_REQUEST' => 0,
					'data' => 0,
					'js_rs' => 0
				),
				'innerscope' => array(), 
				'outterscope' => null
			);
			self::resolve($stmts, $out, $wrap ? 1 : 0, $scope,  $wrap ? 'js_rs.push' : 'console.log');
			$out = str_replace('@.', '@', $out);
			$out = rtrim($out, PHP_EOL);
		} catch (PHPParser_Error $e) {
			echo 'Parse Error: ', $e->getMessage();
		}
		
		if ($wrap) {
			$coffee = 
				"phojs = phojs || {}". PHP_EOL .
				"phojs['{$fn}'] = (data) -> " . PHP_EOL .
				"\tjs_rs = []" . PHP_EOL .
				"{$out}" . PHP_EOL .
				"\tjs_rs.join('')" . PHP_EOL;
		} else {
			$coffee = $out;
		}

		return $coffee;
	}

	public function toJavascript($code, $phpjs = false) {
		CoffeeScript\Init::load();

		$output = '';

		$output .= PHP_EOL . '/* ' . PHP_EOL . $code . PHP_EOL . ' */'. PHP_EOL;

		if ($phpjs) {
			$output .= $this->compilePhpJs() . PHP_EOL;
		}

		$descriptorspec = array(
			0 => array("pipe", "r"),
			1 => array("pipe", "w"),
			2 => array("pipe", "w")
		);

		$process = proc_open('coffee -bsp', $descriptorspec, $pipes);

		if (is_resource($process)) {
			fwrite($pipes[0], $code);
			fclose($pipes[0]);

			$output .= stream_get_contents($pipes[1]);
			fclose($pipes[1]);

			$output .= stream_get_contents($pipes[2]);
			fclose($pipes[2]);

			$return_value = proc_close($process);
		}
		/* TODO: convert a new version
		$js = CoffeeScript\Compiler::compile($code, array('header' => false));
		$js = '  ' . trim(substr($js, 13, -15)) . PHP_EOL;
		$output .= $js;
		*/

		return $output;
	}

	public function parse($fn, $code, $wrap = false, $phpjs = false) {
		return $this->toJavascript($this->toCoffee($fn, $code, $wrap), $phpjs);
	}

	public function addString($fn, $code) {
		$md5 = md5($code);
		$cached_filepath = $this->cache_folder . '/' . $fn . '.js';
		$function = $this->toJavascript($this->toCoffee($fn, $code, false));
		$this->js_functions[$fn] = $function;
	}
	
	public function addFile($filepath, $use_cache = false){
		if (is_file($filepath)) {
			$code = file_get_contents($filepath);
		} else {
			throw new Exception('File does not exist.');
		}
		$md5 = md5($code);
		
		$info = new SplFileInfo($filepath);
		$fn = $info->getBasename('.php');
		$cached_filepath = $this->cache_folder . '/' . $fn . '.js';
		
		//-- check for cached code
		if ($use_cache) {
			$cached_code = @file_get_contents($cached_filepath);
			if($cached_code){
				list($old_md5, $old_js_code) = explode(PHP_EOL, $cached_code, 2);
				$old_md5 = str_replace('//', '', $old_md5);
				
				//-- the code has not changed, give the cache
				if($old_md5 == $md5){
					$this->js_functions[$fn] = $old_js_code;
					return true;
				}
			}
		}
		
		$function = $this->parse($fn, $code, false);    //$phpjs == false because it's done later, not per parse call
		$this->js_functions[$fn] = $function;
		
		//-- cache the code
		if ($use_cache) {
			file_put_contents($cached_filepath, '//' . $md5 . PHP_EOL . $function); 
		}
	}

	public function compilePhpJs($use_phpjs_cache = true) {
		if (empty(self::$used_phpjs_functions)) {
			return '';
		}
		
		//-- Sort and Unique
		self::$used_phpjs_functions = array_keys(self::$used_phpjs_functions);
		sort(self::$used_phpjs_functions);
		$cached_filepath = $this->cache_folder . '/phpjs-' . md5(implode('-', self::$used_phpjs_functions)) . '.js';
		
		if($use_phpjs_cache){
			$cached_code = @file_get_contents($cached_filepath);
			if($cached_code){
				return $cached_code;
			}
		}
		
		$PHPJS_Compiler_Shell = new PHPJS_Library_Compiler_Shell($this->dir_functions, $this->dir_compile);
		foreach (self::$used_phpjs_functions as $phpjs_function) {
			$PHPJS_Compiler_Shell->addToSelection('function::' . $phpjs_function);
		}
		$flags = 0;
		$flags = $flags | PHPJS_Library_Compiler::COMPILE_MINFIED;
		$code = $PHPJS_Compiler_Shell->compile($flags);
		
		$fi = new SplFileInfo($cached_filepath);
		if (!is_dir($fi->getPath())) {
			mkdir($fi->getPath(), 0777, true);
		}

		//-- Cache the code
		file_put_contents($cached_filepath, $code);
		
		return $code;
	}
	
	public function render($phpjs = true, $use_phpjs_cache = true){
		$str = "<script type=\"text/javascript\">" . PHP_EOL .
			"var phojs = [];" . PHP_EOL .
			"
var namespace,
  __slice = [].slice;

namespace = function(target, name, block) {
  var item, top, _i, _len, _ref, _ref1;
  if (arguments.length < 3) {
    _ref = [(typeof exports !== 'undefined' ? exports : window)].concat(__slice.call(arguments)), target = _ref[0], name = _ref[1], block = _ref[2];
  }
  top = target;
  _ref1 = name.split('.');
  for (_i = 0, _len = _ref1.length; _i < _len; _i++) {
    item = _ref1[_i];
    target = target[item] || (target[item] = {});
  }
  return block(target, top);
};" . PHP_EOL;
		
		if($phpjs){
			$str .= $this->compilePhpJs($use_phpjs_cache) . PHP_EOL;
		}

		foreach($this->js_functions as $function){
			$str .= $function;
		}
		
		$str .= "</script>" . PHP_EOL;
		
		return $str;
	}

	public static function resolve($stmts, &$str, $level = 0, &$scope, $print_type = 'js_rs.push') {
		$substr = '';
		if (is_array($stmts)) {
			$tab = str_repeat("\t", $level);
			foreach ($stmts as $i => $stmt) {
				if (!is_object($stmt)) {
					continue;
				}
				$type = $stmt->getType();
				$subs = $stmt->getIterator();

				if ($type === 'Expr_Assign') {
					$var_str = '';
					$expression = '';
					self::resolve(array($stmt->var), $var_str, 0, $scope, $print_type);
					self::resolve(array($stmt->expr), $expression, $level + 1, $scope, $print_type);

					$expression = trim($expression);

					if ($stmt->var->getType() === 'Expr_ArrayDimFetch') {
						self::$used_phpjs_functions['array_push'] = 0;
						$str .= $tab . "array_push({$var_str}, {$expression})" . PHP_EOL;
					} else {
						$var_key = $var_str;
						if (substr($var_key, 0, 5) === 'data.') {
							$var_key = substr($var_key, 5, strlen($var_key));
						}
						if (isset($scope['vars'][$var_key]) === false) {
							$scope['vars'][$var_key] = 0;
							$var_str = $var_key;
						}
						$str .= $tab . rtrim("{$var_str} = {$expression}") . PHP_EOL;
						
					}
				}
				else if ($type === 'Expr_Array') {
					$elements = '';
					self::resolve($stmt->items, $elements, 0, $scope, $print_type);
					$str .= '({' . $elements . '})';
				}
				else if ($type === 'Arg') {
					$value_str = '';
					self::resolve(array($stmt->value), $value_str, $level, $scope, $print_type);
					$value_str = trim($value_str);
					if ($stmt->value->getType() === 'Expr_Closure') {
						$value_str .= PHP_EOL . $tab;
					}
					$value_str .= ', ';
					$str .= "$value_str";
				}
				else if ($type === 'Name') {
					$str .= implode('.', $stmt->parts);
				}
				else if ($type === 'Expr_ArrayItem') {
					$key = $i;
					if ($stmt->key !== null) {
						$key = '';
						self::resolve(array($stmt->key), $key, 0, $scope, $print_type);
					}
					$value = '';
					self::resolve(array($stmt->value), $value, 0, $scope, $print_type);
					$value = rtrim($value, PHP_EOL);

					if (is_object($key)) {
						$key_str = '';
						self::resolve(array($key->value), $key_str, $level, $scope, $print_type);
						$key = $key_str;
					}
					$str .= "{$key}:{$value}";

					if ($i < count($stmts) - 1) {
						$str .= ",";
					}
				}
				else if ($type === 'Expr_Variable') {
					$name = $stmt->name;
					if (isset($scope['vars'][$name]) === false) {
						if ($name === 'this') {
							$name = '@';
						} else {
							$name = 'data.' . $name;
						}
					}
					$str .= $name;
				}
				else if ($type === 'Expr_FuncCall') {
					$name_str = '';
					self::resolve(array($stmt->name), $name_str, $level + 1, $scope, $print_type);
					if (in_array($name_str, self::$phpjs_functions)) {
						//$scope['native'][] = $name_str;
						self::$used_phpjs_functions[$name_str] = 0;
					}
					$args_str = '';
					$args_arr = array();
					foreach($stmt->args as $arg) {
						$arg_str = '';
						self::resolve(array($arg), $arg_str, $level + 1, $scope, $print_type);
						$arg_str = rtrim($arg_str, ', ');
						/*
						$arg_str = trim($arg_str);
						$arg_str = ltrim($arg_str);
						*/

						$args_arr []= $arg_str;
					}
					$args_str = implode(', ', $args_arr);
					$args_str = rtrim($args_str, ', ');
					$args_str = rtrim($args_str, PHP_EOL);
					$str .= $tab . "{$name_str}({$args_str})" . PHP_EOL;
				}
				else if ($type === 'Expr_Closure') {
					$closure_str = '';
					$params_str = '';
					if (!empty($stmt->params)) {
						self::resolve($stmt->params, $params_str, $level + 1, $scope, $print_type);
						$params_str = rtrim($params_str, ', ');
						$params_str = trim($params_str);
					}
					self::resolve($stmt->stmts, $closure_str, $level + 1, $scope, $print_type);
					$str .= 
						$tab . "({$params_str}) ->" . PHP_EOL .
							rtrim($closure_str) . PHP_EOL;
					continue;
				}
				else if ($type === 'Expr_ArrayDimFetch') {
					$iter = next($stmts);

					$key_str = ''; 
					self::resolve(array($stmt->var), $key_str, 0, $scope, $print_type);
					$dim_str = '';
					if ($stmt->dim) {
						self::resolve(array($stmt->dim), $dim_str, 0, $scope, $print_type);
					}
					$str .= "{$key_str}";
					if (strlen($dim_str) > 0) {
						$str .= "[{$dim_str}]";
					}
				}
				else if ($type === 'Expr_PropertyFetch') {
					$var_str = '';
					self::resolve(array($stmt->var), $var_str, $level + 1, $scope, $print_type);
					$str .= "{$var_str}.{$stmt->name}";
				}
				else if ($type === 'Expr_Smaller') {
					$left_str = '';
					$right_str = '';

					self::resolve(array($stmt->left), $left_str, 0, $scope, $print_type);
					self::resolve(array($stmt->right), $right_str, 0, $scope, $print_type);

					$left_str = rtrim($left_str, PHP_EOL);
					$right_str = rtrim($right_str, PHP_EOL);

					$str .= "{$left_str} < {$right_str}";
				}
				else if ($type === 'Expr_Greater') {
					$left_str = '';
					$right_str = '';

					self::resolve(array($stmt->left), $left_str, 0, $scope, $print_type);
					self::resolve(array($stmt->right), $right_str, 0, $scope, $print_type);

					$left_str = rtrim($left_str, PHP_EOL);
					$right_str = rtrim($right_str, PHP_EOL);

					$str .= "{$left_str} > {$right_str}";
				}
				else if ($type === 'Expr_Equal') {
					$left_str = '';
					$right_str = '';
					self::resolve(array($stmt->left), $left_str, 0, $scope, $print_type);
					self::resolve(array($stmt->right), $right_str, 0, $scope, $print_type);

					$left_str = rtrim($left_str, PHP_EOL);
					$right_str = rtrim($right_str, PHP_EOL);

					$str .= "{$left_str} == {$right_str}";
				}
				else if ($type === 'Expr_GreaterOrEqual') {
					$left_str = '';
					$right_str = '';
					self::resolve(array($stmt->left), $left_str, 0, $scope, $print_type);
					self::resolve(array($stmt->right), $right_str, 0, $scope, $print_type);
					$str .= "{$left_str} >= {$right_str}";
				}
				else if ($type === 'Expr_SmallerOrEqual') {
					$left_str = '';
					$right_str = '';
					self::resolve(array($stmt->left), $left_str, 0, $scope, $print_type);
					self::resolve(array($stmt->right), $right_str, 0, $scope, $print_type);
					$str .= "{$left_str} <= {$right_str}";
				}
				else if ($type === 'Expr_Ternary') {
					$if_str = '';
					$else_str = '';
					$cond_str = '';

					self::resolve(array($stmt->cond), $cond_str, $level, $scope, $print_type);
					self::resolve(array($stmt->if), $if_str, $level, $scope, $print_type);
					self::resolve(array($stmt->else), $else_str, $level, $scope, $print_type);

					$if_str = trim($if_str);
					$else_str = trim($else_str);
					$cond_str = trim($cond_str);

					if (empty($if_str)) {
						//-- support for ?: in php 5.3
						$if_str = $cond_str;
					}

					$str .= "if {$cond_str} then {$if_str} else {$else_str}";
				}
				else if ($type === 'Expr_PostInc') {
					$var_str = '';
					self::resolve(array($stmt->var), $var_str, 0, $scope, $print_type);
					$str .= $tab . "{$var_str}++;" . PHP_EOL;
				}
				else if ($type === 'Expr_PostDec') {
					$var_str = '';
					self::resolve(array($stmt->var), $var_str, 0, $scope, $print_type);
					$str .= $tab . "{$var_str}--;" . PHP_EOL;
				}
				else if ($type === 'Stmt_Foreach') {
					$key = 'key_' . substr(uniqid(), -2);
					if ($stmt->keyVar !== null) {
						$key = $stmt->keyVar->name;
					}
					$scope['vars'][$key] = 0;
					$scope['vars'][$stmt->valueVar->name] = 0;

					$expression = '';
					self::resolve(array($stmt->expr), $expression, 0, $scope, $print_type);
					$foreach_str = '';
					self::resolve($stmt->stmts, $foreach_str, $level + 1, $scope, $print_type);
					//-- Assign to temp of there is an expression in the loop
					if ($stmt->expr->getType() !== 'Expr_Variable') {
						$express_var = 'expr_' . substr(uniqid(), -2);
						$str .= $tab . "{$express_var} = {$expression}" . PHP_EOL;
						$expression = $express_var;
					}
					$str .=
						$tab . "for {$key}, {$stmt->valueVar->name} of {$expression}" . PHP_EOL .
						trim($foreach_str, PHP_EOL) . PHP_EOL;
					continue;
				}
				else if ($type === 'Stmt_For') {
					//-- Coffeescript does not support for loops it has while
					//-- but scope is not shared
					$init_str = '';
					$cond_str = '';
					$loop_str = '';
					$for_str = '';
					self::resolve($stmt->init, $init_str, 0, $scope, $print_type);
					self::resolve($stmt->cond, $cond_str, 0, $scope, $print_type);
					self::resolve($stmt->loop, $loop_str, 0, $scope, $print_type);
					self::resolve($stmt->stmts, $for_str, $level, $scope, $print_type);
					$loop_str = rtrim($loop_str, ';');
					$cond_str = rtrim($cond_str, ';');
					$init_str = rtrim($init_str, ';');
					$loop_str = trim($loop_str);
					$cond_str = trim($cond_str);
					$init_str = trim($init_str);
					$str .=
						$tab . "`for ({$init_str}; {$cond_str}; {$loop_str}) {`" . PHP_EOL .
						$for_str . PHP_EOL .
						$tab . "`}`" . PHP_EOL;
					continue;
				}
				else if ($type === 'Stmt_If') {
					$if_str = '';
					$cond_str = '';
					self::resolve($stmt->stmts, $if_str, $level + 1, $scope, $print_type);
					self::resolve(array($stmt->cond), $cond_str, 0, $scope, $print_type);
					$str .= 
						$tab . "if {$cond_str}" . PHP_EOL .
							rtrim("{$if_str}", PHP_EOL) . PHP_EOL;
					if (count($stmt->elseifs)) {
						$elseifs_str = '';
						self::resolve($stmt->elseifs, $elseifs_str, $level, $scope, $print_type);
						$str .= $elseifs_str;
					}
					if ($stmt->else !== null) {
						$else_str = '';
						self::resolve(array($stmt->else), $else_str, $level, $scope, $print_type);
						$str .= 
							$tab . "else" . PHP_EOL .
								rtrim("{$else_str}", PHP_EOL) . PHP_EOL .
							$tab . "" . PHP_EOL;
					}
					continue;
				}
				else if ($type === 'Stmt_Else') {
					$else_str = '';
					self::resolve($stmt->stmts, $else_str, $level + 1, $scope, $print_type);
					$str .= $else_str;
					continue;
				}
				else if ($type === 'Stmt_ElseIf') {
					$elseif_str = '';
					$cond_str = '';
					self::resolve($stmt->stmts, $elseif_str, $level + 1, $scope, $print_type);
					self::resolve(array($stmt->cond), $cond_str, 0, $scope, $print_type);
					$str .= 
						$tab . "else if ({$cond_str})" . PHP_EOL .
						$tab . "{$elseif_str}" . PHP_EOL;
					continue;
				}
				else if ($type === 'Stmt_While') {
					//-- TODO: uh... scope issues
				}

				else if ($type === 'Stmt_Function') {
					$function_str = '';
					$params_str = '';
					$trans_str = self::resolve($stmt->params, $params_str, $level + 1, $scope, $print_type);
					foreach($stmt->params as $param) {
						$scope['vars'][$param->name] = 0;
					}
					self::resolve($stmt->stmts, $function_str, $level + 1, $scope, $print_type);
					$function_str = $trans_str . '' . $function_str;
					$str .= 
						$tab . "$stmt->name = ({$params_str}) ->" . PHP_EOL .
						"{$function_str}" . PHP_EOL;
					continue;
				}
				else if ($type === 'Param') {
					$name = $stmt->name;
					if ($name === 'var') {
						$start_line = $stmt->getAttribute('startLine');
						throw new Exception("On line {$start_line} 'var' is a reserved keyword in JavaScript.");
					}
					$scope['vars'][$name] = 0;

					if ($stmt->default !== null) {
						$default_str = '';
						self::resolve(array($stmt->default), $default_str, $level + 1, $scope, $print_type);
						$str .= "{$stmt->name} = {$default_str}";
					} else {
						$str .= "{$name}";
					}
					if ($i < count($stmts) - 1) {
						$str .= ",";
					}
				}
				else if ($type === 'Stmt_InlineHTML') {
					$val = $stmt->value;
					$val = addcslashes($val, "'");
					$vals = explode("\n", str_replace("\r\n", "\n", $val));
					$vals = implode("')" . PHP_EOL . $tab . $print_type . "('\\n", $vals);
					$vals = $tab . $print_type . "('{$vals}')" . PHP_EOL;
					$str .= $vals;
				}
				else if ($type === 'Stmt_Echo') {
					$exprs_arr = array();
					foreach ($stmt->exprs as $expr) {
						$exprs_str = '';
						self::resolve(array($expr), $exprs_str, 0, $scope, $print_type);
						$exprs_arr []= $exprs_str;
					}
					$exprs_str = implode(',', $exprs_arr);
					$exprs_str = rtrim($exprs_str, PHP_EOL);
					$str .= $tab . $print_type . "({$exprs_str})" . PHP_EOL;
				}
				else if ($type === 'Stmt_Return') {
					$expr_str = '';
					self::resolve(array($stmt->expr), $expr_str, $level + 1, $scope, $print_type);
					$expr_str = trim($expr_str);
					$str .= $tab . "return {$expr_str}" . PHP_EOL;
				}
				else if ($type === 'Scalar_LNumber') {
					$str .= $stmt->value;
				}
				else if ($type === 'Scalar_String') {
					$value = $stmt->value;
					$value = str_replace("\t", '\t', $value);
					$value = str_replace("\n", '\n', $value);
					$value = str_replace("\r", '\r', $value);
					$value = str_replace("\\", '\\\\', $value);
					$value = addcslashes($value, "'");
					$str .= "'{$value}'";
				}
				else if ($type === 'Scalar_DNumber') {
					$str .= $stmt->value;
				}
				else if ($type === 'Scalar_Encapsed') {
					$str .= '"';
					foreach ($stmt->parts as $part) {
						if (is_string($part)) {
							$value = $part;
							$value = str_replace("\\", '\\\\', $value);
							$value = str_replace("\t", '\t', $value);
							$value = str_replace("\r", '\r', $value);
							$value = str_replace("\n", '\n', $value);
							$value = addcslashes($value, "'");
							$str .= $value;
						} else {
							$var_str = '';
							self::resolve(array($part), $var_str, 0, $scope, $print_type);
							$var_str = rtrim($var_str, PHP_EOL);
							$str .= '#{' . $var_str . '}';
						}
					}
					$str .= '"';
				}
				else if ($type === 'Expr_Plus') {
					//-- If
					$left_str = '';
					$right_str = '';
					self::resolve(array($stmt->left), $left_str, 0, $scope, $print_type);
					self::resolve(array($stmt->right), $right_str, 0, $scope, $print_type);
					self::$used_phpjs_functions['floatval'] = 0;

					$left_str = rtrim($left_str, PHP_EOL);
					$right_str = rtrim($right_str, PHP_EOL);

					$str .= $tab . "{$left_str} + {$right_str}";
				}
				else if ($type === 'Expr_Minus') {
					//-- If
					$left_str = '';
					$right_str = '';
					self::resolve(array($stmt->left), $left_str, 0, $scope, $print_type);
					self::resolve(array($stmt->right), $right_str, 0, $scope, $print_type);
					self::$used_phpjs_functions['floatval'] = 0;

					$left_str = rtrim($left_str, PHP_EOL);
					$right_str = rtrim($right_str, PHP_EOL);

					$str .= $tab . "{$left_str} - {$right_str}";
				}
				else if ($type === 'Expr_Identical') {
					$left_str = '';
					$right_str = '';
					self::resolve(array($stmt->left), $left_str, 0, $scope, $print_type);
					self::resolve(array($stmt->right), $right_str, 0, $scope, $print_type);

					$left_str = trim($left_str);
					$right_str = trim($right_str);

					$str .= $tab . "{$left_str} == {$right_str}";
				}
				else if ($type === 'Expr_NotIdentical') {
					$left_str = '';
					$right_str = '';
					self::resolve(array($stmt->left), $left_str, 0, $scope, $print_type);
					self::resolve(array($stmt->right), $right_str, 0, $scope, $print_type);

					$left_str = trim($left_str);
					$right_str = trim($right_str);

					$str .= $tab . "{$left_str} != {$right_str}";
				}
				else if ($type === 'Expr_Mul') {
					$left_str = '';
					$right_str = '';
					self::resolve(array($stmt->left), $left_str, 0, $scope, $print_type);
					self::resolve(array($stmt->right), $right_str, 0, $scope, $print_type);
					$str .= $tab . "{$left_str} * {$right_str}";
				}
				else if ($type === 'Expr_Mod') {
					$left_str = '';
					$right_str = '';
					self::resolve(array($stmt->left), $left_str, 0, $scope, $print_type);
					self::resolve(array($stmt->right), $right_str, 0, $scope, $print_type);

					$left_str = rtrim($left_str, PHP_EOL);
					$right_str = rtrim($right_str, PHP_EOL);

					$str .= $tab . "{$left_str} % {$right_str}";
				}
				else if ($type === 'Expr_Empty') {
					$empty_str = '';
					self::resolve(array($stmt->expr), $empty_str, 0, $scope, $print_type);
					self::$used_phpjs_functions['empty'] = 0;
					$str .= $tab . "empty({$empty_str})";
				}
				else if ($type === 'Expr_Concat') {
					$left_str = '';
					$right_str = '';
					self::resolve(array($stmt->left), $left_str, 0, $scope, $print_type);
					self::resolve(array($stmt->right), $right_str, 0, $scope, $print_type);

					$left_str = rtrim($left_str, PHP_EOL);
					$right_str = rtrim($right_str, PHP_EOL);

					$str .= $tab . "{$left_str} + {$right_str}";
				}
				else if ($type === 'Expr_ConstFetch') {
					$const_str = '';
					self::resolve(array($stmt->name), $const_str, 0, $scope, $print_type);
					if (in_array(strtolower($const_str), array('true', 'false', 'null'))) {
						$str .= $tab . strtolower($const_str);
					} else {
						self::$used_phpjs_functions['constant'] = 0;
						$str .= $tab . "constant('{$const_str}')";
					}
				}
				else if ($type === 'Expr_Include') {
					$include_str = '';
					self::resolve(array($stmt->expr), $include_str, 0, $scope, $print_type);
					self::$used_phpjs_functions['include'] = 0;
					$str .= $tab . "include({$include_str})" . PHP_EOL;
				}
				else if ($type === 'Expr_StaticCall') {
					$class_str = '';
					$name = $stmt->name;
					$args_str = '';
					self::resolve(array($stmt->class), $class_str, 0, $scope, $print_type);
					self::resolve($stmt->args, $args_str, 0, $scope, $print_type);
					$args_str = rtrim($args_str, ', ');
					$str .= $tab . "{$class_str}.{$name}({$args_str});" . PHP_EOL;
				}
				else if ($type === 'Expr_BooleanNot') {
					$boolnot_str = '';
					self::resolve(array($stmt->expr), $boolnot_str, 0, $scope, $print_type);
					$str .= $tab . "not {$boolnot_str}";
				}
				else if ($type === 'Expr_BooleanAnd') {
					$left_str = '';
					$right_str = '';
					self::resolve(array($stmt->left), $left_str, 0, $scope, $print_type);
					self::resolve(array($stmt->right), $right_str, 0, $scope, $print_type);
					$left_str = trim($left_str);
					$right_str = trim($right_str);
					$str .= $tab . "{$left_str} and {$right_str}";
				}
				else if ($type === 'Expr_BooleanOr') {
					$left_str = '';
					$right_str = '';
					self::resolve(array($stmt->left), $left_str, 0, $scope, $print_type);
					self::resolve(array($stmt->right), $right_str, 0, $scope, $print_type);
					$left_str = trim($left_str);
					$right_str = trim($right_str);
					$str .= $tab . "{$left_str} or {$right_str}";
				}
				else if ($type === 'Expr_LogicalOr') {
					$left_str = '';
					$right_str = '';
					self::resolve(array($stmt->left), $left_str, 0, $scope, $print_type);
					self::resolve(array($stmt->right), $right_str, 0, $scope, $print_type);
					$str .= $tab . "{$left_str} or {$right_str}";
				}
				else if ($type === 'Expr_Isset') {
					$isset_str = '';
					self::resolve($stmt->vars, $isset_str, 0, $scope, $print_type);
					self::$used_phpjs_functions['isset'] = 0;
					$str .= $tab . "isset({$isset_str})";
				}
				else if ($type === 'Stmt_Unset') {
					//-- There is delete, but its to one variale, unset allows 
					// many...
				}
				else if ($type === 'Expr_Cast_Array') {
					$cast_str = '';
					self::resolve(array($stmt->expr), $cast_str, 0, $scope, $print_type);
					self::$used_phpjs_functions['array'] = 0;
					$str .= $tab . "array({$cast_str})";
				}
				else if ($type === 'Expr_Cast_Int') {
					$cast_str = '';
					self::resolve(array($stmt->expr), $cast_str, 0, $scope, $print_type);
					self::$used_phpjs_functions['intval'] = 0;
					$str .= $tab . "intval({$cast_str})";
				}
				else if ($type === 'Expr_Cast_String') {
					$cast_str = '';
					self::resolve(array($stmt->expr), $cast_str, 0, $scope, $print_type);
					self::$used_phpjs_functions['strval'] = 0;
					$str .= $tab . "strval({$cast_str})";
				}
				else if ($type === 'Expr_AssignPlus') {
					$var_str = '';
					$expression = '';
					self::resolve(array($stmt->var), $var_str, 0, $scope, $print_type);
					self::resolve(array($stmt->expr), $expression, 0, $scope, $print_type);
					$var_key = $var_str;
					if (substr($var_key, 0, 5) === 'data.') {
						$var_key = substr($var_key, 5, strlen($var_key));
					}
					if (isset($scope['vars'][$var_key]) === false) {
						$scope['vars'][$var_key] = 0;
						$var_str = $var_key;
					}
					$str .= $tab . rtrim("{$var_str} += {$expression}", PHP_EOL) . PHP_EOL;
				}
				else if ($type === 'Expr_ErrorSuppress') {
					$suppress_str = '';
					self::resolve(array($stmt->expr), $suppress_str, $level + 1, $scope, $print_type);
					$str .= $tab . "try" . PHP_EOL 
						. "" . $suppress_str . PHP_EOL 
						. $tab . "catch error" . PHP_EOL
						. $tab . "\t\"Error: #{error}\"" . PHP_EOL;
				}
				else if ($type === 'Stmt_Global') {
					//-- Javascript does not support global statements
					//-- TODO: use for scope!

					foreach ($stmt->vars as $expr) {
						$scope['vars'][$expr->name] = 0;
						$str .= $tab . "`{$expr->name} = {$expr->name} || null`" . PHP_EOL;
					}
					continue;
				}
				else if ($type === 'Expr_Exit') {
					//-- Javascript does not support global statements
					//-- TODO: use for scope!

					$str .= $tab . 'return 0';
				}

				//--------------------------------------------------------------
				//-- OOP
				//--------------------------------------------------------------
				else if ($type === 'Stmt_Class') {
					$class_str = '';
					self::resolve($stmt->stmts, $class_str, $level + 1, $scope, $print_type);
					$str .= $tab . "class {$stmt->name}";
					if ($stmt->extends !== null) {
						$extends_str = '';
						self::resolve(array($stmt->extends), $extends_str, 0, $scope, $print_type);
						$str .= " extends {$extends_str}" . PHP_EOL;
					}
					$str .= PHP_EOL;
					$str .= "{$class_str}" . PHP_EOL;
					continue;
				}
				else if ($type === 'Stmt_ClassConst') {
					//-- TODO:
				}
				else if ($type === 'Stmt_Property') {
					//-- Cannot support private
					$props_str = '';
					self::resolve($stmt->props, $props_str, $level, $scope, $print_type);
					$str .= "{$props_str}" . PHP_EOL;
				}
				else if ($type === 'Stmt_PropertyProperty') {
					$name_str = $stmt->name;
					$default_str = '';
					if ($stmt->default === null) {
						$default_str = 'null';
					} else {
						self::resolve(array($stmt->default), $default_str, 0, $scope, $print_type);
					}
					$str .= $tab . "\"{$name_str}\": {$default_str}" . PHP_EOL;
				}
				else if ($type === 'Stmt_ClassMethod') {
					$name = $stmt->name;
					if ($name === '__construct') {
						$name = 'constructor';
					}

					$params_str = '';
					if (!empty($stmt->params)) {
						self::resolve($stmt->params, $params_str, $level + 1, $scope, $print_type);
						$params_str = rtrim($params_str, ', ');
						$params_str = trim($params_str);
					}

					$method_str = '';
					self::resolve($stmt->stmts, $method_str, $level + 1, $scope, $print_type);

					$str .= $tab . "{$name}: ({$params_str}) ->" . PHP_EOL;
					$str .= "{$method_str}" . PHP_EOL;
					continue;
				}
				else if ($type === 'Expr_MethodCall') {
					$name = $stmt->name;

					$var_str = '';
					self::resolve(array($stmt->var), $var_str, 0, $scope, $print_type);

					$args_str = '';
					self::resolve($stmt->args, $args_str, $level + 1, $scope, $print_type);
					$args_str = trim($args_str);
					$args_str = rtrim($args_str, ', ');
					$args_str = rtrim($args_str, PHP_EOL);
					$str .= $tab . "{$var_str}.{$name}({$args_str})" . PHP_EOL;
				}
				else if ($type === 'Expr_ClassConstFetch') {
					//-- TODO:
				}
				else if ($type === 'Expr_StaticPropertyFetch') {
					//-- TODO:
				}
				else if ($type === 'Name_FullyQualified') {
					//-- TODO:
					$str .= str_replace('\\', '.', $stmt->toString());
				}

				else if ($type === 'Expr_New') {
					$class_str = '';
					self::resolve(array($stmt->class), $class_str, $level, $scope, $print_type);
					$str .= $tab . "new {$class_str}()" . PHP_EOL;
				}
				else if ($type === 'Expr_List') {
					//-- TODO: List expressions
					//[a, b] = obj
					$vars_str = '';
					self::resolve($stmt->vars, $elements, 0, $scope, $print_type);
					$str .= '(' . $vars_str . ')';
				}
				else if ($type === 'Expr_UnaryMinus') {
					$str .= '-';
				}
				else if ($type === 'Stmt_Namespace') {
					//-- TODO: support namespaces
					$str .= $tab . "namespace '{$stmt->name}', (exports) ->" .  PHP_EOL;
					foreach ($stmt->stmts as $namespaced_stmt) {
						$namespace_str = '';
						self::resolve(array($namespaced_stmt), $namespace_str, $level + 1, $scope, $print_type);
						$replace_str = $tab . "\t" . 'class ';
						$replace_len = strlen($replace_str);
						$mappable = substr($namespace_str, 0, $replace_len);
						if ($mappable === $replace_str) {
							$namespace_str = $replace_str . 'exports.' . substr($namespace_str, $replace_len);
						}
						$str .= $namespace_str;
					}
					continue;
				}



				else {
					echo "Unknown Token<br /><pre>";
					var_dump($stmt->getType());
					var_dump($stmt);
					exit;
				}


				if (!empty($stmt->stmts)) {
					self::resolve($stmt->stmts, $str, $level, $scope, $print_type);
				}
			}
		}
		return $substr;
	}
}
?>
