# PHP RFC: Consistent Function Names

Userland implementation of [PHP RFC: Consistent Function Names](https://wiki.php.net/rfc/consistent_function_names). It
creates aliases with more consistent names.

There are many functions that named before naming standard in [CODING_STANDARDS](https://github.com/php/php-src/blob/master/CODING_STANDARDS).
Therefore, PHP has function names like `phpversion()` and `htmlspecialchars()`.

We have many function names that comply [IEEE 1003.1](http://pubs.opengroup.org/onlinepubs/9699919799/idx/is.html)
standard names. IEEE 1003.1 is also well established names, but it has different naming. IEEE 1003.1 names can be use as
aliases.

Without cleanups, PHP may have inconsistent API names even if PHP has new APIs for the same purpose because we care
compatibility a lot. Unless we have standard confirming function names at some point, we may keep inconsistent function
names forever and never have consistent function names.

Please read the RCF for more information: https://wiki.php.net/rfc/consistent_function_names

## Installation

    composer require jasny/php-consistent-function-names

## Functions

### Functions other than Standard module

<http://php.net/manual/en/book.bc.php>
-   bc_add ← bcadd
-   bc_comp ← bccomp
-   bc_div ← bcdiv
-   bc_mod ← bcmod
-   bc_mul ← bcmul
-   bc_pow ← bcpow
-   bc_pow_mod ← bcpowmod
-   bc_scale ← bcscale
-   bc_sqrt ← bcsqrt
-   bc_sub ← bcsub

<http://php.net/manual/en/book.gettext.php>
-   gettext_bind_text_domain_codeset ← bind_textdomain_codeset
-   gettext_bind_text_domain ← bindtextdomain
-   **gettext_dc** ← dcgettext
-   **gettext_dcn** ← dcngettext
-   **gettext_d** ← dgettext
-   **gettext_dn** ← dngettext
-   **gettext_n** ← ngettext
-   gettext_text_domain ← textdomain

<http://php.net/manual/en/book.bzip2.php>
-   bz_close ← bzclose
-   bz_compress ← bzcompress
-   bz_decompress ← bzdecompress
-   bz_errno ← bzerrno
-   bz_error ← bzerror
-   bz_errstr ← bzerrstr
-   bz_flush ← bzflush
-   bz_open ← bzopen
-   bz_read ← bzread
-   bz_write ← bzwrite

<http://php.net/manual/en/book.zlib.php>
-   gz_close ← gzclose
-   gz_compress ← gzcompress
-   gz_decode ← gzdecode
-   gz_deflate ← gzdeflate
-   gz_encode ← gzencode
-   gz_eof ← gzeof
-   gz_file ← gzfile
-   gz_getc ← gzgetc
-   gz_gets ← gzgets
-   gz_getss ← gzgetss
-   gz_inflate ← gzinflate
-   gz_open ← gzopen
-   gz_passthru ← gzpassthru
-   gz_puts ← gzputs
-   gz_read ← gzread
-   gz_rewind ← gzrewind
-   gz_seek ← gzseek
-   gz_tell ← gztell
-   gz_uncompress ← gzuncompress
-   gz_write ← gzwrite
-   **gz_read_file** ← readgzfile

<http://php.net/manual/en/book.image.php>
-   **gd_image_size** ← getimagesize
-   **gd_image_size_from_string** ← getimagesizefromstring
-   gd_type_to_extension ← image_type_to_extension
-   gd_type_to_mime_type ← image_type_to_mime_type
-   gd_2wbmp ← image2wbmp
-   gd_affine ← imageaffine
-   gd_affine_matrix_concat ← imageaffinematrixconcat
-   gd_affine_matrix_get ← imageaffinematrixget
-   gd_alpha_blending ← imagealphablending
-   gd_antialias ← imageantialias
-   gd_arc ← imagearc
-   gd_char ← imagechar
-   gd_charup ← imagecharup
-   gd_color_allocate ← imagecolorallocate
-   gd_color_allocate_alpha ← imagecolorallocatealpha
-   gd_color_at ← imagecolorat
-   gd_color_closest ← imagecolorclosest
-   gd_color_closest_alpha ← imagecolorclosestalpha
-   gd_color_closest_hwb ← imagecolorclosesthwb
-   gd_color_deallocate ← imagecolordeallocate
-   gd_color_exact ← imagecolorexact
-   gd_color_exact_alpha ← imagecolorexactalpha
-   gd_color_match ← imagecolormatch
-   gd_color_resolve ← imagecolorresolve
-   gd_color_resolve_alpha ← imagecolorresolvealpha
-   gd_color_set ← imagecolorset
-   gd_colors_for_index ← imagecolorsforindex
-   gd_colors_total ← imagecolorstotal
-   gd_color_transparent ← imagecolortransparent
-   gd_convolution ← imageconvolution
-   gd_copy ← imagecopy
-   gd_copy_merge ← imagecopymerge
-   gd_copy_merge_gray ← imagecopymergegray
-   gd_copy_resampled ← imagecopyresampled
-   gd_copy_resized ← imagecopyresized
-   gd_create ← imagecreate
-   gd_create_from_gd2 ← imagecreatefromgd2
-   gd_create_from_gd2_part ← imagecreatefromgd2part
-   gd_create_from_gd ← imagecreatefromgd
-   gd_create_from_gif ← imagecreatefromgif
-   gd_create_from_jpeg ← imagecreatefromjpeg
-   gd_create_from_png ← imagecreatefrompng
-   gd_create_from_string ← imagecreatefromstring
-   gd_create_from_wbmp ← imagecreatefromwbmp
-   gd_create_from_webp ← imagecreatefromwebp
-   gd_create_from_xbm ← imagecreatefromxbm
-   gd_create_from_xpm ← imagecreatefromxpm
-   gd_create_true_color ← imagecreatetruecolor
-   gd_crop ← imagecrop
-   gd_crop_auto ← imagecropauto
-   gd_dashed_line ← imagedashedline
-   gd_destroy ← imagedestroy
-   gd_ellipse ← imageellipse
-   gd_fill ← imagefill
-   gd_filled_arc ← imagefilledarc
-   gd_filled_ellipse ← imagefilledellipse
-   gd_filled_polygon ← imagefilledpolygon
-   gd_filled_rectangle ← imagefilledrectangle
-   gd_fill_to_border ← imagefilltoborder
-   gd_filter ← imagefilter
-   gd_flip ← imageflip
-   gd_font_height ← imagefontheight
-   gd_font_width ← imagefontwidth
-   gd_ft_bbox ← imageftbbox
-   gd_ft_text ← imagefttext
-   gd_gamma_correct ← imagegammacorrect
-   gd_raw2 ← imagegd2
-   gd_raw ← imagegd
-   gd_gif ← imagegif
-   gd_grab_screen ← imagegrabscreen
-   gd_grab_window ← imagegrabwindow
-   gd_interlace ← imageinterlace
-   gd_is_true_color ← imageistruecolor
-   gd_jpeg ← imagejpeg
-   gd_layer_effect ← imagelayereffect
-   gd_line ← imageline
-   gd_load_font ← imageloadfont
-   gd_palette_copy ← imagepalettecopy
-   gd_palette_to_true_color ← imagepalettetotruecolor
-   gd_png ← imagepng
-   gd_polygon ← imagepolygon
-   gd_ps_bbox ← imagepsbbox
-   gd_ps_encode_font ← imagepsencodefont
-   gd_ps_extend_font ← imagepsextendfont
-   gd_ps_free_font ← imagepsfreefont
-   gd_ps_load_font ← imagepsloadfont
-   gd_ps_slant_font ← imagepsslantfont
-   gd_ps_text ← imagepstext
-   gd_rectangle ← imagerectangle
-   gd_rotate ← imagerotate
-   gd_save_alpha ← imagesavealpha
-   gd_scale ← imagescale
-   gd_set_brush ← imagesetbrush
-   gd_set_interpolation ← imagesetinterpolation
-   gd_set_pixel ← imagesetpixel
-   gd_set_style ← imagesetstyle
-   gd_set_thickness ← imagesetthickness
-   gd_set_tile ← imagesettile
-   gd_string ← imagestring
-   gd_string_up ← imagestringup
-   **gd_width** ← imagesx
-   **gd_height** ← imagesy
-   gd_true_color_to_palette ← imagetruecolortopalette
-   gd_ttf_bbox ← imagettfbbox
-   gd_ttf_text ← imagettftext
-   gd_types ← imagetypes
-   gd_wbmp ← imagewbmp
-   gd_webp ← imagewebp
-   gd_xbm ← imagexbm
-   gd_iptc_embed ← iptcembed
-   gd_iptc_parse ← iptcparse
-   gd_jpeg2wbmp ← jpeg2wbmp
-   gd_png2wbmp ← png2wbmp

<http://php.net/manual/en/book.exif.php>
-   exif_image_type ← exif_imagetype
-   exif_tag_name ← exif_tagname

<http://php.net/manual/en/book.ctype.php>
-   ctype modules functions are IEEE functions. Add "ctype_" prefixed IEEE aliases.
-   ctype_alnum ← **ctype_isalnum** (IEEE)
-   ctype_alpha ← **ctype_isalpha** (IEEE)
-   ctype_cntrl ← **ctype_iscntrl** (IEEE)
-   ctype_digit ← **ctype_isdigit** (IEEE)
-   ctype_graph ← **ctype_isgraph** (IEEE)
-   ctype_lower ← **ctype_islower** (IEEE)
-   ctype_print ← **ctype_isprint** (IEEE)
-   ctype_punct ← **ctype_ispunct** (IEEE)
-   ctype_space ← **ctype_isspace** (IEEE)
-   ctype_upper ← **ctype_isupper** (IEEE)
-   ctype_xdigit ← **ctype_isxdigit** (IEEE)

<http://php.net/manual/en/book.mbstring.php>
-   mb_decode_mime_header ← mb_decode_mimeheader
-   mb_decode_numeric_entity ← mb_decode_numericentity
-   mb_encode_mime_header ← mb_encode_mimeheader
-   mb_encode_numeric_entity ← mb_encode_numericentity
-   **mb_mail** ← mb_send_mail (There is mail() as standard function)

### Socket Functions
<http://php.net/manual/en/book.sockets.php>
-   IEEE names are prefixed by "socket_".
-   socket_get_peer_name ← socket_getpeername (IEEE)
-   socket_get_sock_name ← socket_getsockname (IEEE)
-   socket_recv_from ← socket_recvfrom (IEEE)
-   socket_recv_msg ← socket_recvmsg (IEEE)
-   socket_send_msg ← socket_sendmsg (IEEE)
-   socket_send_to ← socket_sendto (IEEE)
-   **socket_errstr** ← socket_strerror (**need more consideration. strerror() is IEEE name** Adjust to accord with other names. errstr/errno abbreviations are used by various functions/classes. e.g. bz_errstr(), MySQLi::$errno.)

<http://php.net/manual/en/book.apache.php>
-   **sapi_request_headers** ← getallheaders (Categorized as apache function, but available for CLI and FCGI also)
-   **apache_virtual** ← virtual
-   apache_get_env ← apache_getenv
-   apache_set_env ← apache_setenv

### Date/Time Functions
<http://php.net/manual/en/book.datetime.php>
-   **date_format** ← date (Return formatted date string of timestamp)(IEEE)
-   **date_get** ← getdate (Return array date)(IEEE)
-   **date_check** ← checkdate
-   **time_part** ← idate (Retrieve part of date information as int according to format)
-   **time_make** ← mktime (Return timestamp from number of int parameters)(IEEE)
-   **time_format** ← strftime (Return local time string according to format/locale)(IEEE)
-   **time_utc** ← gmdate (Return array GMT/UTC timestamp)
-   **time_utc_make** ← gmmktime (Return GMT/UTC timestamp from array)
-   **time_utc_format** ← gmstrftime (Return GMT/UTC time string according to format/locale)
-   **time_get** ← gettimeofday (Return array time of day)(IEEE)
-   **time_local** ← localtime (Return localtime() result array. More info than time_get/gettimeofday)(IEEE)
-   **time_micro** ← microtime (Return microtime resolution time)(IEEE)
-   **time_parse** ← strptime (Parse time string generated by time_format/strftime. Return timestamp) (IEEE)
-   **time_from_string** ← strtotime (Parse string time and return timestamp. Return timestamp)

### Directory Related Functions
Directory related : Prefixed by "dir_" It's supposed to be named as "dir module". Note: These functions changes "directory entry" information.
-   dir_rename ← rename (Rename is actually a directory operation. e.g File deletion/rename is controlled by current dir permission)(IEEE)
-   **dir_delete** ← rmdir (IEEE)
-   **dir_create** ← mkdir (IEEE)
-   dir_chown← chown (IEEE)
-   dir_chmod ← chmod (IEEE)
-   dir_chgrp ← chgrp(IEEE)
-   dir_name ← dirname (IEEE)
-   dir_glob ← glob (IEEE)

<http://php.net/manual/en/ref.dir.php>
-   **dir_set** ← chdir(IEEE)
-   dir_chroot ← chroot (IEEE)
-   **dir_get** ← getcwd(IEEE)
-   **dir_open** ← opendir (IEEE)
-   **dir_close** ← closedir (IEEE)
-   **dir_read** ← readdir(IEEE)
-   **dir_rewind** ← rewinddir(IEEE)
-   **dir_scan** ← scandir (IEEE)

### Function Handling Functions
<http://php.net/manual/en/ref.funchand.php> - All of function handling functions are prefixed by "function_" by these.
-   **function_declared** ← get_defined_functions (There are get_defined_constants()/get_defined_vars(), but class/interface/trait use get_declared_classes/interfaces/traits())
-   **function_create** ← create_function (There is function_exists())
-   **function_arg** ← func_get_arg
-   **function_args** ← func_get_args
-   function_num_args ← func_num_args
-   **function_call_user** ← call_user_func
-   **function_call_user_array** ← call_user_func_array
-   **function_shutdown_register** ← register_shutdown_function
-   **function_tick_register** ← register_tick_function
-   **function_tick_unregister** ← unregister_tick_function
-   **function_static_call_array** ← forward_static_call_array
-   **function_static_call** ← forward_static_call

### Command Execution Functions
<http://php.net/manual/en/ref.exec.php>
-   **exec_passthru** ← passthru (Named after exec())
-   **exec_shell** ← shell_exec
-   **exec_system** ← system (IEEE)
-   **exec_escape_arg** ← escapeshellarg
-   **exec_escape_cmd** ← escapeshellcmd

### String Related Functions
<http://php.net/ref.strings>
HTML related:
-   html_entities ← htmlentities
-   **html_escape** ← htmlspecialchars (Rename it with real meaning)
-   **html_escape_decode** ← htmlspecialchars_decode
-   **html_nl2br** ← nl2br
-   **html_strip_tags** ← strip_tags
-   **html_translation_table** ← get_html_translation_table

Locate related:
-   locale_conv ← localeconv (IEEE)
-   **locale_set** ← setlocale (IEEE)
-   **locale_info** ← nl_langinfo (IEEE)

"string" function but no "str_" prefix
-   **str_cslashes** ← addcslashes
-   **str_cslashes_strip** ← stripcslashes
-   **str_slashes** ← addslashes
-   **str_slashes_strip** ← stripslashes
-   str_chop ← chop
-   str_count_chars ← count_chars
-   str_chunk_split ← chunk_split
-   str_explode ← explode
-   str_implode ← implode
-   str_money_format ← money_format
-   str_number_format ← number_format
-   str_levenshtein ← levenshtein
-   str_metaphone ← metaphone
-   **str_parse** ← parse_str
-   str_quote_meta ← quotemeta
-   str_similar_text ← similar_text
-   str_soundex ← soundex
-   str_sscanf ← sscanf (IEEE)
-   str_rtrim ← rtrim
-   str_trim ← trim
-   str_ltrim ← ltrim
-   str_lc_first ← lcfirst
-   str_uc_first ← ucfirst
-   str_uc_words ← ucwords
-   str_word_wrap ← wordwrap

Comparison:
-   str_cmp ← strcmp (IEEE)
-   str_ncmp ← strncmp (IEEE)
-   str_case_cmp ← strcasecmp (IEEE)
-   str_ncase_cmp ← strncasecmp (IEEE)
-   str_nat_cmp ← strnatcmp (IEEE)
-   str_nat_case_cmp ← strnatcasecmp (IEEE)

Conversion:
-   str_to_lower ← strtolower, **tolower** (IEEE)
-   str_to_upper ← strtoupper, **toupper** (IEEE)

Misc:
-   str_get_csv ← str_getcsv

Named after libc:
-   str_chr ← strchr (IEEE)
-   str_cmp ← strcmp (IEEE)
-   str_coll ← strcoll (IEEE)
-   str_cspn ← strcspn (IEEE)
-   str_ipos ← stripos
-   str_istr ← stristr
-   str_len ← strlen (IEEE)
-   str_pbrk ← strpbrk (IEEE)
-   str_pos ← strpos
-   str_rchr ← strrchr
-   str_rev ← strrev
-   str_ripos ← strripos
-   str_rpos ← strrpos
-   str_spn ← strspn (IEEE)
-   str_str ← strstr (IEEE)
-   str_tok ← strtok (IEEE)
-   str_tr ← strtr

<http://php.net/manual/en/book.mbstring.php>
IEEE names are prefixed by "mb_"
-   mb_str_cut ← mb_strcut
-   **mb_str_trim_width** ← mb_strimwidth
-   mb_str_ipos ← mb_stripos
-   mb_str_istr ← mb_stristr
-   mb_str_len ← mb_strlen (IEEE)
-   mb_str_pos ← mb_strpos
-   mb_str_rchr ← mb_strrchr
-   mb_str_richr ← mb_strrichr
-   mb_str_ripos ← mb_strripos
-   mb_str_rpos ← mb_strrpos
-   mb_str_str ← mb_strstr (IEEE)
-   mb_str_to_lower ← mb_strtolower, **mb_tolower** (IEEE)
-   mb_str_to_upper ← mb_strtoupper, **mb_toupper** (IEEE)
-   mb_str_width ← mb_strwidth

<http://php.net/manual/en/book.iconv.php>
IEEE names are prefixed by "iconv_"
-   iconv_str_len ← iconv_strlen (IEEE)
-   iconv_str_pos ← iconv_strpos
-   iconv_str_rpos ← iconv_strrpos

<http://php.net/manual/en/book.intl.php>
IEEE names are prefixed by "grapheme_"
-   grapheme_str_ipos ← grapheme_stripos
-   grapheme_str_istr ← grapheme_stristr
-   grapheme_str_len ← grapheme_strlen (IEEE)
-   grapheme_str_pos ← grapheme_strpos
-   grapheme_str_ripos ← grapheme_strripos
-   grapheme_str_rpos ← grapheme_strrpos
-   grapheme_str_str ← grapheme_strstr (IEEE)

### Array Related Functions
<http://php.net/manual/en/ref.array.php>
-   array_sort ← sort (Sort values)
-   **array_sort_reverse** ← rsort (Reverse sort values)
-   **array_usort** ← usort (User sort values)
-   **array_sort_assoc** ← asort (Keep key and sort)
-   **array_sort_assoc_reverse** ← arsort (Keep key and reverse sort)
-   **array_sort_uassoc** ← uasort (Keep key and user sort)
-   **array_sort_key** ← ksort (Sort keys)
-   **array_sort_key_reverse** ← krsort (Reverse sort keys)
-   **array_sort_ukey** ← uksort (User key sort)
-   **array_sort_natural** ← natsort (Natural sort)
-   **array_sort_natural_case** ← natcasesort (Natural sort without case)
-   **array_in** ← in_array
-   array_range ← range (Create array of range)
-   array_shuffle ← shuffle (Randomize values)
-   **array_in** ← bool in_array ( mixed $needle , array $haystack [, bool $strict ] )
-   **array_find** ← mixed array_search ( mixed $needle , array $haystack [, bool $strict ]
-   **array_key_find** ← bool array_key_exists ( mixed $key , array $array )

### File Related Functions
<http://php.net/manual/en/ref.filesystem.php>
-   link_info ← linkinfo
-   **link_stat** ← lstat (IEEE)
-   **link_chown** ← lchown (IEEE)
-   **link_chgrp** ← lchgrp (IEEE)
-   **link_read** ← readlink (IEEE)
-   **link_symbolic** ← symlink (IEEE)
-   **path_base_name** ← basename
-   path_info ← pathinfo
-   file_read ← readfile (This could be file_read() or file_passthru(). If rename fopen()/etc with "file_" prefix, file_read() may conflict with fread() file_passthru() may conflict with fpassthru().)
-   **pipe_close** ← pclose (IEEE)
-   **pipe_open** ← popen (IEEE)
-   file_atime ← fileatime
-   file_ctime ← filectime
-   file_group ← filegroup
-   file_inode ← fileinode
-   file_mtime ← filemtime
-   file_owner ← fileowner
-   file_perms ← fileperms
-   file_size ← filesize
-   file_type ← filetype
-   **file_name_match** ← fnmatch (IEEE)
-   **file_temp_name** ← tempnam (IEEE)
-   file_copy ← copy (IEEE)
-   file_stat ← stat (IEEE)
-   **file_stat_clear_cache** ← clearstatcache
-   **file_move_uploaded** ← move_upload_file
-   **file_delete** ← unlink (There is dummy "delete()" function entry for unlink(). Unlink is a directory operation in fact, but made it as file_delete(). There will be dir_delete())
-   **file_rename** ← rename

f*() : Examples are fopen(), fread(). These functions are for file(stream) resource. "f" prefix functions are kept, there should be "ftemp(tmpfile)","frewind(rewind)" because these operates with file(stream) resource.
-   fget_csv ← fgetcsv (IEEE)
-   fput_csv ← fputcsv
-   **frewind** ← rewind (This one is exception that does not have "f" prefix, but operates with file handle)
-   **ftemp** ← tmpfile (This one is exception that does not have "f" prefix, but returns file handle) (IEEE)

### Other Standard Functions
<http://php.net/manual/en/book.misc.php>
-   time_sleep ← sleep (IEEE)
-   time_nano_sleep ← time_nanosleep, **nanosleep** (IEEE)
-   **time_micro_sleep** ← usleep (IEEE)
-   time_unique_id ← uniqid (uniqid() is microtime() based)
-   sys_get_load_avg ← sys_getloadavg
-   php_strip_white_space ← php_strip_whitespace

<http://php.net/manual/en/book.url.php>
-   url_decode ← urldecode
-   url_encode ← urlencode
-   url_raw_decode ← rawurldecode
-   url_raw_encode ← rawurlencode
-   **url_parse** ← parse_url
-   **url_build_query** ← http_build_query (Make it URL function)
-   **url_meta_tags** ← get_meta_tags (Get meta tags from URL/file)
-   **url_headers** ← get_headers (Get headers from URL)

<http://php.net/manual/en/ref.info.php>
-   php_credits ← phpcredits
-   php_info ← phpinfo
-   php_version ← phpversion
-   get_opt ← getopt
-   get_env ← getenv (**This could be "env_get"**) (IEEE)
-   put_env ← putenv (**This could be "env_set"**) (IEEE)
-   Following get_() may be prefixed by "php_" rather than "get_".
-   get_last_mod ← getlastmod (Return **main** script timestamp.)
-   get_my_gid ← getmygid ("my_" prefix used because they return info about **current** script.)
-   get_my_inode ← getmyinode
-   get_my_pid ← getmypid
-   get_my_uid ← getmyuid
-   get_rusage ← getrusage

<http://php.net/manual/en/book.var.php>
-   bool_val ← boolval
-   double_val ← doubleval
-   float_val ← floatval
-   int_val ← intval
-   str_val ← strval
-   **type_get** ← gettype
-   **type_set** ← settype
-   **type_resource** ← get_resource_type (Get resource type)

<http://php.net/manual/en/book.var.php>
-   php_defined_vars ← get_defined_vars

<http://php.net/manual/en/ref.classobj.php> - Most of Class/interface/trait related functions are prefixed by "class_"/"interface_"/"trait_".
-   **class_called** ← get_called_class (Get late static binding class name. There are class_exists()/class_alias())
-   class_methods ← get_class_methods
-   class_vars ← get_class_vars (Get class property)
-   **class_get** ← get_class (Get class name of an object)
-   **class_parent** ← get_parent_class
-   class_object_vars ← get_object_vars (Get instance property)
-   **class_declared** ← get_declared_classes
-   **interface_declared** ← get_declared_interfaces (There is interface_exists())
-   **trait_declared** ← get_declared_traits (There is trait_exists())

<http://php.net/manual/en/book.info.php> - PHP related function are prefixed by "php_".
-   php_extension_loaded ← extension_loaded
-   **php_extension_loaded_all** ← get_loaded_extensions (Like ini_get_all())
-   **php_extension_functions** ← get_extension_funcs
-   php_dl ← dl
-   php_cfg_var ← get_cfg_var (Get value from configuration(INI) file including non-INI value)
-   php_current_user ← get_current_user (Owner of current PHP script file)
-   php_defined_constants ← get_defined_constants (There is [get_defined_vars()](http://php.net/manual/en/book.var.php "http://php.net/manual/en/book.var.php"))
-   **php_include_path_get** ← get_include_path (Like ini_get/set/restore(). ini_set/get/restore() can do the same. Deprecate all them? or only have php_include_path() does both get/set?)
-   **php_include_path_set** ← set_include_path
-   **php_include_path_restore** ← restore_include_path
-   php_included_files ← get_included_files
-   php_required_files ← get_required_files
-   **php_time_limit** ← set_time_limit ("_set" may be omitted. It changes "max_execution_time" INI. ini_set() can do the same. Deprecate?)
