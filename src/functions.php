<?php

/**
 * Userland implementation of PHP RFC: Consistent Function Names
 * @see https://wiki.php.net/rfc/consistent_function_names
 *
 * There are many functions that named before naming standard in CODING_STANDARDS. Therefore, PHP has function names
 * like phpversion() and htmlspecialchars().
 *
 * We have many function names that comply IEEE 1003.1 standard names. IEEE 1003.1 is also well established names, but
 * it has different naming. IEEE 1003.1 names can be use as aliases.
 *
 * Without cleanups, PHP may have inconsistent API names even if PHP has new APIs for the same purpose because we care
 * compatibility a lot. Unless we have standard confirming function names at some point, we may keep inconsistent
 * function names forever and never have consistent function names.
 */

/**
 * Add two arbitrary precision numbers
 * @link http://php.net/manual/en/function.bcadd.php
 * @param string $left_operand <p>
 * The left operand, as a string.
 * </p>
 * @param string $right_operand <p>
 * The right operand, as a string.
 * </p>
 * @param int $scale [optional]
 * @return string The sum of the two operands, as a string.
 * @since 4.0
 * @since 5.0
 */
function bc_add ($left_operand, $right_operand, $scale = null)
{
    return bcadd($left_operand, $right_operand, $scale);
}

/**
 * Compare two arbitrary precision numbers
 * @link http://php.net/manual/en/function.bccomp.php
 * @param string $left_operand <p>
 * The left operand, as a string.
 * </p>
 * @param string $right_operand <p>
 * The right operand, as a string.
 * </p>
 * @param int $scale [optional] <p>
 * The optional <i>scale</i> parameter is used to set the
 * number of digits after the decimal place which will be used in the
 * comparison.
 * </p>
 * @return int 0 if the two operands are equal, 1 if the
 * <i>left_operand</i> is larger than the
 * <i>right_operand</i>, -1 otherwise.
 * @since 4.0
 * @since 5.0
 */
function bc_comp ($left_operand, $right_operand, $scale = null)
{
    return bccomp($left_operand, $right_operand, $scale);
}

/**
 * Divide two arbitrary precision numbers
 * @link http://php.net/manual/en/function.bcdiv.php
 * @param string $left_operand <p>
 * The left operand, as a string.
 * </p>
 * @param string $right_operand <p>
 * The right operand, as a string.
 * </p>
 * @param int $scale [optional]
 * @return string the result of the division as a string, or <b>NULL</b> if
 * <i>right_operand</i> is 0.
 * @since 4.0
 * @since 5.0
 */
function bc_div ($left_operand, $right_operand, $scale = null)
{
    return bcdiv($left_operand, $right_operand, $scale);
}

/**
 * Get modulus of an arbitrary precision number
 * @link http://php.net/manual/en/function.bcmod.php
 * @param string $left_operand <p>
 * The left operand, as a string.
 * </p>
 * @param string $modulus <p>
 * The modulus, as a string.
 * </p>
 * @return string the modulus as a string, or <b>NULL</b> if
 * <i>modulus</i> is 0.
 * @since 4.0
 * @since 5.0
 */
function bc_mod ($left_operand, $modulus)
{
    return bcmod($left_operand, $modulus);
}

/**
 * Multiply two arbitrary precision numbers
 * @link http://php.net/manual/en/function.bcmul.php
 * @param string $left_operand <p>
 * The left operand, as a string.
 * </p>
 * @param string $right_operand <p>
 * The right operand, as a string.
 * </p>
 * @param int $scale [optional]
 * @return string the result as a string.
 * @since 4.0
 * @since 5.0
 */
function bc_mul ($left_operand, $right_operand, $scale = null)
{
    return bcmul($left_operand, $right_operand, $scale);
}

/**
 * Raise an arbitrary precision number to another
 * @link http://php.net/manual/en/function.bcpow.php
 * @param string $left_operand <p>
 * The left operand, as a string.
 * </p>
 * @param string $right_operand <p>
 * The right operand, as a string.
 * </p>
 * @param int $scale [optional]
 * @return string the result as a string.
 * @since 4.0
 * @since 5.0
 */
function bc_pow ($left_operand, $right_operand, $scale = null)
{
    return bcpow($left_operand, $right_operand, $scale);
}

/**
 * Raise an arbitrary precision number to another, reduced by a specified modulus
 * @link http://php.net/manual/en/function.bcpowmod.php
 * @param string $left_operand <p>
 * The left operand, as a string.
 * </p>
 * @param string $right_operand <p>
 * The right operand, as a string.
 * </p>
 * @param string $modulus <p>
 * The modulus, as a string.
 * </p>
 * @param int $scale [optional]
 * @return string the result as a string, or <b>NULL</b> if <i>modulus</i>
 * is 0.
 * @since 5.0
 */
function bc_pow_mod ($left_operand, $right_operand, $modulus, $scale = null)
{
    return bcpowmod($left_operand, $right_operand, $modulus, $scale);
}

/**
 * Set default scale parameter for all bc math functions
 * @link http://php.net/manual/en/function.bcscale.php
 * @param int $scale <p>
 * The scale factor.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 * @since 4.0
 * @since 5.0
 */
function bc_scale ($scale)
{
    return bcscale($scale);
}

/**
 * Get the square root of an arbitrary precision number
 * @link http://php.net/manual/en/function.bcsqrt.php
 * @param string $operand <p>
 * The operand, as a string.
 * </p>
 * @param int $scale [optional]
 * @return string the square root as a string, or <b>NULL</b> if
 * <i>operand</i> is negative.
 * @since 4.0
 * @since 5.0
 */
function bc_sqrt ($operand, $scale = null)
{
    return bcsqrt($operand, $scale);
}

/**
 * Subtract one arbitrary precision number from another
 * @link http://php.net/manual/en/function.bcsub.php
 * @param string $left_operand <p>
 * The left operand, as a string.
 * </p>
 * @param string $right_operand <p>
 * The right operand, as a string.
 * </p>
 * @param int $scale [optional]
 * @return string The result of the subtraction, as a string.
 * @since 4.0
 * @since 5.0
 */
function bc_sub ($left_operand, $right_operand, $scale = null)
{
    return bcsub($left_operand, $right_operand, $scale);
}

/**
 * Specify the character encoding in which the messages from the DOMAIN message catalog will be returned
 * @link http://php.net/manual/en/function.bind-textdomain-codeset.php
 * @param string $domain <p>
 * The domain
 * </p>
 * @param string $codeset <p>
 * The code set
 * </p>
 * @return string A string on success.
 * @since 4.2.0
 * @since 5.0
 */
function gettext_bind_text_domain_codeset ($domain, $codeset)
{
    return bind_textdomain_codeset($domain, $codeset);
}

/**
 * Sets the path for a domain
 * @link http://php.net/manual/en/function.bindtextdomain.php
 * @param string $domain <p>
 * The domain
 * </p>
 * @param string $directory <p>
 * The directory path
 * </p>
 * @return string The full pathname for the <i>domain</i> currently being set.
 * @since 4.0
 * @since 5.0
 */
function gettext_bind_text_domain ($domain, $directory)
{
    return bindtextdomain($domain, $directory);
}

/**
 * Overrides the domain for a single lookup
 * @link http://php.net/manual/en/function.dcgettext.php
 * @param string $domain <p>
 * The domain
 * </p>
 * @param string $message <p>
 * The message
 * </p>
 * @param int $category <p>
 * The category
 * </p>
 * @return string A string on success.
 * @since 4.0
 * @since 5.0
 */
function gettext_dc ($domain, $message, $category)
{
    return dcgettext($domain, $message, $category);
}

/**
 * Plural version of dcgettext
 * @link http://php.net/manual/en/function.dcngettext.php
 * @param string $domain <p>
 * The domain
 * </p>
 * @param string $msgid1
 * @param string $msgid2
 * @param int $n
 * @param int $category
 * @return string A string on success.
 * @since 4.2.0
 * @since 5.0
 */
function gettext_dcn ($domain, $msgid1, $msgid2, $n, $category)
{
    return dcngettext($domain, $msgid1, $msgid2, $n, $category);
}

/**
 * Override the current domain
 * @link http://php.net/manual/en/function.dgettext.php
 * @param string $domain <p>
 * The domain
 * </p>
 * @param string $message <p>
 * The message
 * </p>
 * @return string A string on success.
 * @since 4.0
 * @since 5.0
 */
function gettext_d ($domain, $message)
{
    return dgettext($domain, $message);
}

/**
 * Plural version of dgettext
 * @link http://php.net/manual/en/function.dngettext.php
 * @param string $domain <p>
 * The domain
 * </p>
 * @param string $msgid1
 * @param string $msgid2
 * @param int $n
 * @return string A string on success.
 * @since 4.2.0
 * @since 5.0
 */
function gettext_dn ($domain, $msgid1, $msgid2, $n)
{
    return dngettext($domain, $msgid1, $msgid2, $n);
}

/**
 * Plural version of gettext
 * @link http://php.net/manual/en/function.ngettext.php
 * @param string $msgid1
 * @param string $msgid2
 * @param int $n
 * @return string correct plural form of message identified by
 * <i>msgid1</i> and <i>msgid2</i>
 * for count <i>n</i>.
 * @since 4.2.0
 * @since 5.0
 */
function gettext_n ($msgid1, $msgid2, $n)
{
    return ngettext($msgid1, $msgid2, $n);
}

/**
 * Sets the default domain
 * @link http://php.net/manual/en/function.textdomain.php
 * @param string $text_domain <p>
 * The new message domain, or <b>NULL</b> to get the current setting without
 * changing it
 * </p>
 * @return string If successful, this function returns the current message
 * domain, after possibly changing it.
 * @since 4.0
 * @since 5.0
 */
function gettext_text_domain ($text_domain)
{
    return textdomain($text_domain);
}

/**
 * Close a bzip2 file
 * @link http://php.net/manual/en/function.bzclose.php
 * @param resource $bz <p>
 * The file pointer. It must be valid and must point to a file
 * successfully opened by <b>bzopen</b>.
 * </p>
 * @return int <b>TRUE</b> on success or <b>FALSE</b> on failure.
 * @since 4.0.4
 * @since 5.0
 */
function bz_close ($bz)
{
    return bzclose($bz);
}

/**
 * Compress a string into bzip2 encoded data
 * @link http://php.net/manual/en/function.bzcompress.php
 * @param string $source <p>
 * The string to compress.
 * </p>
 * @param int $blocksize [optional] <p>
 * Specifies the blocksize used during compression and should be a number
 * from 1 to 9 with 9 giving the best compression, but using more
 * resources to do so.
 * </p>
 * @param int $workfactor [optional] <p>
 * Controls how the compression phase behaves when presented with worst
 * case, highly repetitive, input data. The value can be between 0 and
 * 250 with 0 being a special case.
 * </p>
 * <p>
 * Regardless of the <i>workfactor</i>, the generated
 * output is the same.
 * </p>
 * @return mixed The compressed string, or an error number if an error occurred.
 * @since 4.0.4
 * @since 5.0
 */
function bz_compress ($source, $blocksize = 4, $workfactor = 0)
{
    return bzcompress($source, $blocksize, $workfactor);
}

/**
 * Decompresses bzip2 encoded data
 * @link http://php.net/manual/en/function.bzdecompress.php
 * @param string $source <p>
 * The string to decompress.
 * </p>
 * @param int $small [optional] <p>
 * If <b>TRUE</b>, an alternative decompression algorithm will be used which
 * uses less memory (the maximum memory requirement drops to around 2300K)
 * but works at roughly half the speed.
 * </p>
 * <p>
 * See the bzip2 documentation for more
 * information about this feature.
 * </p>
 * @return mixed The decompressed string, or an error number if an error occurred.
 * @since 4.0.4
 * @since 5.0
 */
function bz_decompress ($source, $small = 0)
{
    return bzdecompress($source, $small);
}

/**
 * Returns a bzip2 error number
 * @link http://php.net/manual/en/function.bzerrno.php
 * @param resource $bz <p>
 * The file pointer. It must be valid and must point to a file
 * successfully opened by <b>bzopen</b>.
 * </p>
 * @return int the error number as an integer.
 * @since 4.0.4
 * @since 5.0
 */
function bz_errno ($bz)
{
    return bzerrno($bz);
}

/**
 * Returns the bzip2 error number and error string in an array
 * @link http://php.net/manual/en/function.bzerror.php
 * @param resource $bz <p>
 * The file pointer. It must be valid and must point to a file
 * successfully opened by <b>bzopen</b>.
 * </p>
 * @return array an associative array, with the error code in the
 * errno entry, and the error message in the
 * errstr entry.
 * @since 4.0.4
 * @since 5.0
 */
function bz_error ($bz)
{
    return bzerror($bz);
}

/**
 * Returns a bzip2 error string
 * @link http://php.net/manual/en/function.bzerrstr.php
 * @param resource $bz <p>
 * The file pointer. It must be valid and must point to a file
 * successfully opened by <b>bzopen</b>.
 * </p>
 * @return string a string containing the error message.
 * @since 4.0.4
 * @since 5.0
 */
function bz_errstr ($bz)
{
    return bzerrstr($bz);
}

/**
 * Force a write of all buffered data
 * @link http://php.net/manual/en/function.bzflush.php
 * @param resource $bz <p>
 * The file pointer. It must be valid and must point to a file
 * successfully opened by <b>bzopen</b>.
 * </p>
 * @return int <b>TRUE</b> on success or <b>FALSE</b> on failure.
 * @since 4.0.4
 * @since 5.0
 */
function bz_flush ($bz)
{
    return bzflush($bz);
}

/**
 * Opens a bzip2 compressed file
 * @link http://php.net/manual/en/function.bzopen.php
 * @param string $filename <p>
 * The name of the file to open, or an existing stream resource.
 * </p>
 * @param string $mode <p>
 * Similar to the <b>fopen</b> function, only 'r' (read)
 * and 'w' (write) are supported. Everything else will cause bzopen
 * to return <b>FALSE</b>.
 * </p>
 * @return resource If the open fails, <b>bzopen</b> returns <b>FALSE</b>, otherwise
 * it returns a pointer to the newly opened file.
 * @since 4.0.4
 * @since 5.0
 */
function bz_open ($filename, $mode)
{
    return bzopen($filename, $mode);
}

/**
 * Binary safe bzip2 file read
 * @link http://php.net/manual/en/function.bzread.php
 * @param resource $bz <p>
 * The file pointer. It must be valid and must point to a file
 * successfully opened by <b>bzopen</b>.
 * </p>
 * @param int $length [optional] <p>
 * If not specified, <b>bzread</b> will read 1024
 * (uncompressed) bytes at a time. A maximum of 8192
 * uncompressed bytes will be read at a time.
 * </p>
 * @return string the uncompressed data, or <b>FALSE</b> on error.
 * @since 4.0.4
 * @since 5.0
 */
function bz_read ($bz, $length = 1024)
{
    return bzread($bz, $length);
}

/**
 * Binary safe bzip2 file write
 * @link http://php.net/manual/en/function.bzwrite.php
 * @param resource $bz <p>
 * The file pointer. It must be valid and must point to a file
 * successfully opened by <b>bzopen</b>.
 * </p>
 * @param string $data <p>
 * The written data.
 * </p>
 * @param int $length [optional] <p>
 * If supplied, writing will stop after <i>length</i>
 * (uncompressed) bytes have been written or the end of
 * <i>data</i> is reached, whichever comes first.
 * </p>
 * @return int the number of bytes written, or <b>FALSE</b> on error.
 * @since 4.0.4
 * @since 5.0
 */
function bz_write ($bz, $data, $length = null)
{
    return bzwrite($bz, $data, $length);
}

/**
 * Close an open gz-file pointer
 * @link http://php.net/manual/en/function.gzclose.php
 * @param resource $zp <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <b>gzopen</b>.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 * @since 4.0
 * @since 5.0
 */
function gz_close ($zp)
{
    return gzclose($zp);
}

/**
 * Compress a string
 * @link http://php.net/manual/en/function.gzcompress.php
 * @param string $data <p>
 * The data to compress.
 * </p>
 * @param int $level [optional] <p>
 * The level of compression. Can be given as 0 for no compression up to 9
 * for maximum compression.
 * </p>
 * <p>
 * If -1 is used, the default compression of the zlib library is used which is 6.
 * </p>
 * @param int $encoding [optional] <p>
 * One of <b>ZLIB_ENCODING_*</b> constants.
 * </p>
 * @return string The compressed string or <b>FALSE</b> if an error occurred.
 * @since 4.0.1
 * @since 5.0
 */
function gz_compress ($data, $level = -1, $encoding = ZLIB_ENCODING_DEFLATE)
{
    return gzcompress($data, $level, $encoding);
}

/**
 * Decodes a gzip compressed string
 * @link http://php.net/manual/en/function.gzdecode.php
 * @param string $data <p>
 * The data to decode, encoded by <b>gzencode</b>.
 * </p>
 * @param int $length [optional] <p>
 * The maximum length of data to decode.
 * </p>
 * @return string The decoded string, or <b>FALSE</b> if an error occurred.
 * @since 5.4.0
 */
function gz_decode ($data, $length = null)
{
    return gzdecode($data, $length);
}

/**
 * Deflate a string
 * @link http://php.net/manual/en/function.gzdeflate.php
 * @param string $data <p>
 * The data to deflate.
 * </p>
 * @param int $level [optional] <p>
 * The level of compression. Can be given as 0 for no compression up to 9
 * for maximum compression. If not given, the default compression level will
 * be the default compression level of the zlib library.
 * </p>
 * @param int $encoding [optional] <p>
 * One of <b>ZLIB_ENCODING_*</b> constants.
 * </p>
 * @return string The deflated string or <b>FALSE</b> if an error occurred.
 * @since 4.0.4
 * @since 5.0
 */
function gz_deflate ($data, $level = -1, $encoding = ZLIB_ENCODING_RAW)
{
    return gzdeflate($data, $level, $encoding);
}

/**
 * Create a gzip compressed string
 * @link http://php.net/manual/en/function.gzencode.php
 * @param string $data <p>
 * The data to encode.
 * </p>
 * @param int $level [optional] <p>
 * The level of compression. Can be given as 0 for no compression up to 9
 * for maximum compression. If not given, the default compression level will
 * be the default compression level of the zlib library.
 * </p>
 * @param int $encoding_mode [optional] <p>
 * The encoding mode. Can be <b>FORCE_GZIP</b> (the default)
 * or <b>FORCE_DEFLATE</b>.
 * </p>
 * <p>
 * Prior to PHP 5.4.0, using <b>FORCE_DEFLATE</b> results in
 * a standard zlib deflated string (inclusive zlib headers) after a gzip
 * file header but without the trailing crc32 checksum.
 * </p>
 * <p>
 * In PHP 5.4.0 and later, <b>FORCE_DEFLATE</b> generates
 * RFC 1950 compliant output, consisting of a zlib header, the deflated
 * data, and an Adler checksum.
 * </p>
 * @return string The encoded string, or <b>FALSE</b> if an error occurred.
 * @since 4.0.4
 * @since 5.0
 */
function gz_encode ($data, $level = -1, $encoding_mode = FORCE_GZIP)
{
    return gzencode($data, $level, $encoding_mode);
}

/**
 * Test for EOF on a gz-file pointer
 * @link http://php.net/manual/en/function.gzeof.php
 * @param resource $zp <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <b>gzopen</b>.
 * </p>
 * @return int <b>TRUE</b> if the gz-file pointer is at EOF or an error occurs;
 * otherwise returns <b>FALSE</b>.
 * @since 4.0
 * @since 5.0
 */
function gz_eof ($zp)
{
    return gzeof($zp);
}

/**
 * Read entire gz-file into an array
 * @link http://php.net/manual/en/function.gzfile.php
 * @param string $filename <p>
 * The file name.
 * </p>
 * @param int $use_include_path [optional] <p>
 * You can set this optional parameter to 1, if you
 * want to search for the file in the include_path too.
 * </p>
 * @return array An array containing the file, one line per cell.
 * @since 4.0
 * @since 5.0
 */
function gz_file ($filename, $use_include_path = 0)
{
    return gzfile($filename, $use_include_path);
}

/**
 * Get character from gz-file pointer
 * @link http://php.net/manual/en/function.gzgetc.php
 * @param resource $zp <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <b>gzopen</b>.
 * </p>
 * @return string The uncompressed character or <b>FALSE</b> on EOF (unlike <b>gzeof</b>).
 * @since 4.0
 * @since 5.0
 */
function gz_getc ($zp)
{
    return gzgetc($zp);
}

/**
 * Get line from file pointer
 * @link http://php.net/manual/en/function.gzgets.php
 * @param resource $zp <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <b>gzopen</b>.
 * </p>
 * @param int $length [optional] <p>
 * The length of data to get.
 * </p>
 * @return string The uncompressed string, or <b>FALSE</b> on error.
 * @since 4.0
 * @since 5.0
 */
function gz_gets ($zp, $length)
{
    return gzgets($zp, $length);
}

/**
 * Get line from gz-file pointer and strip HTML tags
 * @link http://php.net/manual/en/function.gzgetss.php
 * @param resource $zp <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <b>gzopen</b>.
 * </p>
 * @param int $length <p>
 * The length of data to get.
 * </p>
 * @param string $allowable_tags [optional] <p>
 * You can use this optional parameter to specify tags which should not
 * be stripped.
 * </p>
 * @return string The uncompressed and striped string, or <b>FALSE</b> on error.
 * @since 4.0
 * @since 5.0
 */
function gz_getss ($zp, $length, $allowable_tags = null)
{
    return gzgetss($zp, $length, $allowable_tags);
}

/**
 * Inflate a deflated string
 * @link http://php.net/manual/en/function.gzinflate.php
 * @param string $data <p>
 * The data compressed by <b>gzdeflate</b>.
 * </p>
 * @param int $length [optional] <p>
 * The maximum length of data to decode.
 * </p>
 * @return string The original uncompressed data or <b>FALSE</b> on error.
 * </p>
 * <p>
 * The function will return an error if the uncompressed data is more than
 * 32768 times the length of the compressed input <i>data</i>
 * or more than the optional parameter <i>length</i>.
 * @since 4.0.4
 * @since 5.0
 */
function gz_inflate ($data, $length = 0)
{
    return gzinflate($data, $length);
}

/**
 * Open gz-file
 * @link http://php.net/manual/en/function.gzopen.php
 * @param string $filename <p>
 * The file name.
 * </p>
 * @param string $mode <p>
 * As in <b>fopen</b> (rb or
 * wb) but can also include a compression level
 * (wb9) or a strategy: f for
 * filtered data as in wb6f, h for
 * Huffman only compression as in wb1h.
 * (See the description of deflateInit2
 * in zlib.h for
 * more information about the strategy parameter.)
 * </p>
 * @param int $use_include_path [optional] <p>
 * You can set this optional parameter to 1, if you
 * want to search for the file in the include_path too.
 * </p>
 * @return resource a file pointer to the file opened, after that, everything you read
 * from this file descriptor will be transparently decompressed and what you
 * write gets compressed.
 * </p>
 * <p>
 * If the open fails, the function returns <b>FALSE</b>.
 * @since 4.0
 * @since 5.0
 */
function gz_open ($filename, $mode, $use_include_path = 0)
{
    return gzopen($filename, $mode, $use_include_path);
}

/**
 * Output all remaining data on a gz-file pointer
 * @link http://php.net/manual/en/function.gzpassthru.php
 * @param resource $zp <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <b>gzopen</b>.
 * </p>
 * @return int The number of uncompressed characters read from <i>gz</i>
 * and passed through to the input, or <b>FALSE</b> on error.
 * @since 4.0
 * @since 5.0
 */
function gz_passthru ($zp)
{
    return gzpassthru($zp);
}

/**
 * Alias of <b>gzwrite</b>
 * @link http://php.net/manual/en/function.gzputs.php
 * @param $fp
 * @param $str
 * @param $length [optional]
 * @since 4.0
 * @since 5.0
 */
function gz_puts ($fp, $str, $length)
{
    return gzputs($fp, $str, $length);
}

/**
 * Binary-safe gz-file read
 * @link http://php.net/manual/en/function.gzread.php
 * @param resource $zp <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <b>gzopen</b>.
 * </p>
 * @param int $length <p>
 * The number of bytes to read.
 * </p>
 * @return string The data that have been read.
 * @since 4.0
 * @since 5.0
 */
function gz_read ($zp, $length)
{
    return gzread($zp, $length);
}

/**
 * Rewind the position of a gz-file pointer
 * @link http://php.net/manual/en/function.gzrewind.php
 * @param resource $zp <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <b>gzopen</b>.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 * @since 4.0
 * @since 5.0
 */
function gz_rewind ($zp)
{
    return gzrewind($zp);
}

/**
 * Seek on a gz-file pointer
 * @link http://php.net/manual/en/function.gzseek.php
 * @param resource $zp <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <b>gzopen</b>.
 * </p>
 * @param int $offset <p>
 * The seeked offset.
 * </p>
 * @param int $whence [optional] <p>
 * <i>whence</i> values are:
 * <b>SEEK_SET</b> - Set position equal to <i>offset</i> bytes.
 * <b>SEEK_CUR</b> - Set position to current location plus <i>offset</i>.
 * </p>
 * <p>
 * If <i>whence</i> is not specified, it is assumed to be
 * <b>SEEK_SET</b>.
 * </p>
 * @return int Upon success, returns 0; otherwise, returns -1. Note that seeking
 * past EOF is not considered an error.
 * @since 4.0
 * @since 5.0
 */
function gz_seek ($zp, $offset, $whence = SEEK_SET)
{
    return gzseek($zp, $offset, $whence);
}

/**
 * Tell gz-file pointer read/write position
 * @link http://php.net/manual/en/function.gztell.php
 * @param resource $zp <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <b>gzopen</b>.
 * </p>
 * @return int The position of the file pointer or <b>FALSE</b> if an error occurs.
 * @since 4.0
 * @since 5.0
 */
function gz_tell ($zp)
{
    return gztell($zp);
}

/**
 * Uncompress a compressed string
 * @link http://php.net/manual/en/function.gzuncompress.php
 * @param string $data <p>
 * The data compressed by <b>gzcompress</b>.
 * </p>
 * @param int $length [optional] <p>
 * The maximum length of data to decode.
 * </p>
 * @return string The original uncompressed data or <b>FALSE</b> on error.
 * </p>
 * <p>
 * The function will return an error if the uncompressed data is more than
 * 32768 times the length of the compressed input <i>data</i>
 * or more than the optional parameter <i>length</i>.
 * @since 4.0.1
 * @since 5.0
 */
function gz_uncompress ($data, $length = 0)
{
    return gzuncompress($data, $length);
}

/**
 * Binary-safe gz-file write
 * @link http://php.net/manual/en/function.gzwrite.php
 * @param resource $zp <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by <b>gzopen</b>.
 * </p>
 * @param string $string <p>
 * The string to write.
 * </p>
 * @param int $length [optional] <p>
 * The number of uncompressed bytes to write. If supplied, writing will
 * stop after <i>length</i> (uncompressed) bytes have been
 * written or the end of <i>string</i> is reached,
 * whichever comes first.
 * </p>
 * <p>
 * Note that if the <i>length</i> argument is given,
 * then the magic_quotes_runtime
 * configuration option will be ignored and no slashes will be
 * stripped from <i>string</i>.
 * </p>
 * @return int the number of (uncompressed) bytes written to the given gz-file
 * stream.
 * @since 4.0
 * @since 5.0
 */
function gz_write ($zp, $string, $length = null)
{
    return gzwrite($zp, $string, $length);
}

/**
 * Output a gz-file
 * @link http://php.net/manual/en/function.readgzfile.php
 * @param string $filename <p>
 * The file name. This file will be opened from the filesystem and its
 * contents written to standard output.
 * </p>
 * @param int $use_include_path [optional] <p>
 * You can set this optional parameter to 1, if you
 * want to search for the file in the include_path too.
 * </p>
 * @return int the number of (uncompressed) bytes read from the file. If
 * an error occurs, <b>FALSE</b> is returned and unless the function was
 * called as @readgzfile, an error message is
 * printed.
 * @since 4.0
 * @since 5.0
 */
function gz_read_file ($filename, $use_include_path = 0)
{
    return readgzfile($filename, $use_include_path);
}

/**
 * Get the size of an image
 * @link http://php.net/manual/en/function.getimagesize.php
 * @param string $filename <p>
 * This parameter specifies the file you wish to retrieve information
 * about. It can reference a local file or (configuration permitting) a
 * remote file using one of the supported streams. 
 * </p>
 * @param array $imageinfo [optional] <p>
 * This optional parameter allows you to extract some extended
 * information from the image file. Currently, this will return the
 * different JPG APP markers as an associative array.
 * Some programs use these APP markers to embed text information in 
 * images. A very common one is to embed 
 * IPTC information in the APP13 marker.
 * You can use the iptcparse function to parse the
 * binary APP13 marker into something readable.
 * </p>
 * @return array|bool an array with 7 elements.
 * </p>
 * <p>
 * Index 0 and 1 contains respectively the width and the height of the image.
 * </p>
 * <p>
 * Some formats may contain no image or may contain multiple images. In these
 * cases, getimagesize might not be able to properly
 * determine the image size. getimagesize will return
 * zero for width and height in these cases.
 * </p>
 * <p>
 * Index 2 is one of the IMAGETYPE_XXX constants indicating 
 * the type of the image.
 * </p>
 * <p>
 * Index 3 is a text string with the correct 
 * height="yyy" width="xxx" string that can be used
 * directly in an IMG tag.
 * </p>
 * <p>
 * mime is the correspondant MIME type of the image.
 * This information can be used to deliver images with correct the HTTP 
 * Content-type header:
 * getimagesize and MIME types
 * ]]>
 * </p>
 * <p>
 * channels will be 3 for RGB pictures and 4 for CMYK
 * pictures.
 * </p>
 * <p>
 * bits is the number of bits for each color.
 * </p>
 * <p>
 * For some image types, the presence of channels and
 * bits values can be a bit
 * confusing. As an example, GIF always uses 3 channels
 * per pixel, but the number of bits per pixel cannot be calculated for an
 * animated GIF with a global color table.
 * </p>
 * <p>
 * On failure, false is returned.
 * @since 4.0
 * @since 5.0
 */
function gd_image_size ($filename, array &$imageinfo = null)
{
    return getimagesize($filename, $imageinfo);
}

/**
 * PHP > 5.4.0<br/>
 * Get the size of an image from a string.
 * @link http://www.php.net/manual/en/function.getimagesizefromstring.php
 * @param string $imagedata The image data, as a string.
 * @param array $imageinfo This optional parameter allows you to extract<br>
 * some extended information from the image file. Currently, this will <br>
 * return the different JPG APP markers as an associative array. <br>
 * Some programs use these APP markers to embed text information in images. <br>
 * A very common one is to embed » IPTC information in the APP13 marker. <br>
 * You can use the iptcparse() function to parse the binary APP13 marker into something readable.
 * @return array|bool Returns an array with 7 elements.<br>
 * Index 0 and 1 contains respectively the width and the height of the image.<br>
 * Index 2 is one of the <b>IMAGETYPE_XXX</b> constants indicating the type of the image.<br>
 * Index 3 is a text string with the correct <b>height="yyy" width="xxx"</b> string<br>
 * that can be used directly in an IMG tag.<br>
 * On failure, FALSE is returned.
 */
function gd_image_size_from_string ($imagedata , array &$imageinfo = null)
{
    return getimagesizefromstring($imagedata, $imageinfo);
}

/**
 * Get file extension for image type
 * @link http://php.net/manual/en/function.image-type-to-extension.php
 * @param int $imagetype <p>
 * One of the IMAGETYPE_XXX constant.
 * </p>
 * @param bool $include_dot [optional] <p>
 * Whether to prepend a dot to the extension or not. Default to true.
 * </p>
 * @return string A string with the extension corresponding to the given image type.
 * @since 5.0
 */
function gd_type_to_extension ($imagetype, $include_dot = null)
{
    return image_type_to_extension($imagetype, $include_dot);
}

/**
 * Output image to browser or file
 * @link http://php.net/manual/en/function.image2wbmp.php
 * @param resource $image 
 * @param string $filename [optional] <p>
 * Path to the saved file. If not given, the raw image stream will be
 * outputted directly.
 * </p>
 * @param int $threshold [optional] <p>
 * Threshold value, between 0 and 255 (inclusive).
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0.5
 * @since 5.0
 */
function gd_2wbmp ($image, $filename = null, $threshold = null)
{
    return image2wbmp($image, $filename, $threshold);
}

/**
 * Set the blending mode for an image
 * @link http://php.net/manual/en/function.imagealphablending.php
 * @param resource $image 
 * @param bool $blendmode <p>
 * Whether to enable the blending mode or not. On true color images 
 * the default value is true otherwise the default value is false
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0.6
 * @since 5.0
 */
function gd_alpha_blending ($image, $blendmode)
{
    return imagealphablending($image, $blendmode);
}

/**
 * Should antialias functions be used or not
 * @link http://php.net/manual/en/function.imageantialias.php
 * @param resource $image 
 * @param bool $enabled <p>
 * Whether to enable antialiasing or not.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.3.2
 * @since 5.0
 */
function gd_antialias ($image, $enabled)
{
    return imageantialias($image, $enabled);
}

/**
 * Draws an arc
 * @link http://php.net/manual/en/function.imagearc.php
 * @param resource $image 
 * @param int $cx <p>
 * x-coordinate of the center.
 * </p>
 * @param int $cy <p>
 * y-coordinate of the center.
 * </p>
 * @param int $width <p>
 * The arc width.
 * </p>
 * @param int $height <p>
 * The arc height.
 * </p>
 * @param int $start <p>
 * The arc start angle, in degrees.
 * </p>
 * @param int $end <p>
 * The arc end angle, in degrees.
 * 0° is located at the three-o'clock position, and the arc is drawn
 * clockwise.
 * </p>
 * @param int $color <p>
 * A color identifier created with 
 * <b>imagecolorallocate</b>.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 * @since 4.0
 * @since 5.0
 */
function gd_arc ($image, $cx, $cy, $width, $height, $start, $end, $color)
{
    return imagearc($image, $cx, $cy, $width, $height, $start, $end, $color);
}

/**
 * Draw a character horizontally
 * @link http://php.net/manual/en/function.imagechar.php
 * @param resource $image 
 * @param int $font 
 * @param int $x <p>
 * x-coordinate of the start.
 * </p>
 * @param int $y <p>
 * y-coordinate of the start.
 * </p>
 * @param string $c <p>
 * The character to draw.
 * </p>
 * @param int $color <p>
 * A color identifier created with 
 * <b>imagecolorallocate</b>.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 * @since 4.0
 * @since 5.0
 */
function gd_char ($image, $font, $x, $y, $c, $color)
{
    return imagechar($image, $font, $x, $y, $c, $color);
}

/**
 * Draw a character vertically
 * @link http://php.net/manual/en/function.imagecharup.php
 * @param resource $image 
 * @param int $font 
 * @param int $x <p>
 * x-coordinate of the start.
 * </p>
 * @param int $y <p>
 * y-coordinate of the start.
 * </p>
 * @param string $c <p>
 * The character to draw.
 * </p>
 * @param int $color <p>
 * A color identifier created with 
 * <b>imagecolorallocate</b>.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 * @since 4.0
 * @since 5.0
 */
function gd_charup ($image, $font, $x, $y, $c, $color)
{
    return imagecharup($image, $font, $x, $y, $c, $color);
}

/**
 * Allocate a color for an image
 * @link http://php.net/manual/en/function.imagecolorallocate.php
 * @param resource $image 
 * @param int $red <p>Value of red component.</p>
 * @param int $green <p>Value of green component.</p>
 * @param int $blue <p>Value of blue component.</p>
 * @return int A color identifier or <b>FALSE</b> if the allocation failed.
 * @since 4.0
 * @since 5.0
 */
function gd_color_allocate ($image, $red, $green, $blue)
{
    return imagecolorallocate($image, $red, $green, $blue);
}

/**
 * Allocate a color for an image
 * @link http://php.net/manual/en/function.imagecolorallocatealpha.php
 * @param resource $image 
 * @param int $red <p>
 * Value of red component.
 * </p>
 * @param int $green <p>
 * Value of green component.
 * </p>
 * @param int $blue <p>
 * Value of blue component.
 * </p>
 * @param int $alpha <p>
 * A value between 0 and 127.
 * 0 indicates completely opaque while 
 * 127 indicates completely transparent.
 * </p>
 * @return int A color identifier or false if the allocation failed.
 * @since 4.3.2
 * @since 5.0
 */
function gd_color_allocate_alpha ($image, $red, $green, $blue, $alpha)
{
    return imagecolorallocatealpha($image, $red, $green, $blue, $alpha);
}

/**
 * Get the index of the color of a pixel
 * @link http://php.net/manual/en/function.imagecolorat.php
 * @param resource $image 
 * @param int $x <p>
 * x-coordinate of the point.
 * </p>
 * @param int $y <p>
 * y-coordinate of the point.
 * </p>
 * @return int the index of the color.
 * @since 4.0
 * @since 5.0
 */
function gd_color_at ($image, $x, $y)
{
    return imagecolorat($image, $x, $y);
}

/**
 * Get the index of the closest color to the specified color
 * @link http://php.net/manual/en/function.imagecolorclosest.php
 * @param resource $image 
 * @param int $red <p>Value of red component.</p>
 * @param int $green <p>Value of green component.</p>
 * @param int $blue <p>Value of blue component.</p>
 * @return int the index of the closest color, in the palette of the image, to
 * the specified one
 * @since 4.0
 * @since 5.0
 */
function gd_color_closest ($image, $red, $green, $blue)
{
    return imagecolorclosest($image, $red, $green, $blue);
}

/**
 * Get the index of the closest color to the specified color + alpha
 * @link http://php.net/manual/en/function.imagecolorclosestalpha.php
 * @param resource $image 
 * @param int $red <p>
 * Value of red component.
 * </p>
 * @param int $green <p>
 * Value of green component.
 * </p>
 * @param int $blue <p>
 * Value of blue component.
 * </p>
 * @param int $alpha <p>
 * A value between 0 and 127.
 * 0 indicates completely opaque while 
 * 127 indicates completely transparent.
 * </p>
 * @return int the index of the closest color in the palette.
 * @since 4.0.6
 * @since 5.0
 */
function gd_color_closest_alpha ($image, $red, $green, $blue, $alpha)
{
    return imagecolorclosestalpha($image, $red, $green, $blue, $alpha);
}

/**
 * Get the index of the color which has the hue, white and blackness
 * @link http://php.net/manual/en/function.imagecolorclosesthwb.php
 * @param resource $image 
 * @param int $red <p>Value of red component.</p>
 * @param int $green <p>Value of green component.</p>
 * @param int $blue <p>Value of blue component.</p>
 * @return int an integer with the index of the color which has 
 * the hue, white and blackness nearest the given color.
 * @since 4.0.1
 * @since 5.0
 */
function gd_color_closest_hwb ($image, $red, $green, $blue)
{
    return imagecolorclosesthwb($image, $red, $green, $blue);
}

/**
 * De-allocate a color for an image
 * @link http://php.net/manual/en/function.imagecolordeallocate.php
 * @param resource $image 
 * @param int $color <p>
 * The color identifier.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 * @since 4.0
 * @since 5.0
 */
function gd_color_deallocate ($image, $color)
{
    return imagecolordeallocate($image, $color);
}

/**
 * Get the index of the specified color
 * @link http://php.net/manual/en/function.imagecolorexact.php
 * @param resource $image 
 * @param int $red <p>Value of red component.</p>
 * @param int $green <p>Value of green component.</p>
 * @param int $blue <p>Value of blue component.</p>
 * @return int the index of the specified color in the palette, or -1 if the
 * color does not exist.
 * @since 4.0
 * @since 5.0
 */
function gd_color_exact ($image, $red, $green, $blue)
{
    return imagecolorexact($image, $red, $green, $blue);
}

/**
 * Get the index of the specified color + alpha
 * @link http://php.net/manual/en/function.imagecolorexactalpha.php
 * @param resource $image 
 * @param int $red <p>
 * Value of red component.
 * </p>
 * @param int $green <p>
 * Value of green component.
 * </p>
 * @param int $blue <p>
 * Value of blue component.
 * </p>
 * @param int $alpha <p>
 * A value between 0 and 127.
 * 0 indicates completely opaque while 
 * 127 indicates completely transparent.
 * </p>
 * @return int the index of the specified color+alpha in the palette of the
 * image, or -1 if the color does not exist in the image's palette.
 * @since 4.0.6
 * @since 5.0
 */
function gd_color_exact_alpha ($image, $red, $green, $blue, $alpha)
{
    return imagecolorexactalpha($image, $red, $green, $blue, $alpha);
}

/**
 * Makes the colors of the palette version of an image more closely match the true color version
 * @link http://php.net/manual/en/function.imagecolormatch.php
 * @param $image1 resource <p>
 * A truecolor image link resource.
 * </p>
 * @param $image2 resource <p>
 * A palette image link resource pointing to an image that has the same
 * size as image1.
 * </p>
 * @return bool true on success or false on failure.
 */
function gd_color_match ($image1, $image2)
{
    return imagecolormatch($image1, $image2);
}

/**
 * Get the index of the specified color or its closest possible alternative
 * @link http://php.net/manual/en/function.imagecolorresolve.php
 * @param resource $image 
 * @param int $red <p>Value of red component.</p>
 * @param int $green <p>Value of green component.</p>
 * @param int $blue <p>Value of blue component.</p>
 * @return int a color index.
 * @since 4.0
 * @since 5.0
 */
function gd_color_resolve ($image, $red, $green, $blue)
{
    return imagecolorresolve($image, $red, $green, $blue);
}

/**
 * Get the index of the specified color + alpha or its closest possible alternative
 * @link http://php.net/manual/en/function.imagecolorresolvealpha.php
 * @param resource $image 
 * @param int $red <p>
 * Value of red component.
 * </p>
 * @param int $green <p>
 * Value of green component.
 * </p>
 * @param int $blue <p>
 * Value of blue component.
 * </p>
 * @param int $alpha <p>
 * A value between 0 and 127.
 * 0 indicates completely opaque while 
 * 127 indicates completely transparent.
 * </p>
 * @return int a color index.
 * @since 4.0.6
 * @since 5.0
 */
function gd_color_resolve_alpha ($image, $red, $green, $blue, $alpha)
{
    return imagecolorresolvealpha($image, $red, $green, $blue, $alpha);
}

/**
 * Set the color for the specified palette index
 * @link http://php.net/manual/en/function.imagecolorset.php
 * @param resource $image 
 * @param int $index <p>
 * An index in the palette.
 * </p>
 * @param int $red <p>Value of red component.</p>
 * @param int $green <p>Value of green component.</p>
 * @param int $blue <p>Value of blue component.</p>
 * @param int $alpha [optional] <p>
 * Value of alpha component.
 * </p>
 * @return void No value is returned.
 * @since 4.0
 * @since 5.0
 */
function gd_color_set ($image, $index, $red, $green, $blue, $alpha = 0)
{
    return imagecolorset($image, $index, $red, $green, $blue, $alpha);
}

/**
 * Get the colors for an index
 * @link http://php.net/manual/en/function.imagecolorsforindex.php
 * @param resource $image 
 * @param int $index <p>
 * The color index.
 * </p>
 * @return array an associative array with red, green, blue and alpha keys that
 * contain the appropriate values for the specified color index.
 * @since 4.0
 * @since 5.0
 */
function gd_colors_for_index ($image, $index)
{
    return imagecolorsforindex($image, $index);
}

/**
 * Find out the number of colors in an image's palette
 * @link http://php.net/manual/en/function.imagecolorstotal.php
 * @param resource $image <p>
 * An image resource, returned by one of the image creation functions, such
 * as <b>imagecreatefromgif</b>.
 * </p>
 * @return int the number of colors in the specified image's palette or 0 for
 * truecolor images.
 * @since 4.0
 * @since 5.0
 */
function gd_colors_total ($image)
{
    return imagecolorstotal($image);
}

/**
 * Define a color as transparent
 * @link http://php.net/manual/en/function.imagecolortransparent.php
 * @param resource $image 
 * @param int $color [optional] <p>
 * A color identifier created with 
 * <b>imagecolorallocate</b>.
 * </p>
 * @return int The identifier of the new (or current, if none is specified)
 * transparent color is returned. If <i>color</i>
 * is not specified, and the image has no transparent color, the
 * returned identifier will be -1.
 * @since 4.0
 * @since 5.0
 */
function gd_color_transparent ($image, $color = null)
{
    return imagecolortransparent($image, $color);
}

/**
 * Apply a 3x3 convolution matrix, using coefficient and offset
 * @link http://php.net/manual/en/function.imageconvolution.php
 * @param resource $image 
 * @param array $matrix <p>
 * A 3x3 matrix: an array of three arrays of three floats.
 * </p>
 * @param float $div <p>
 * The divisor of the result of the convolution, used for normalization.
 * </p>
 * @param float $offset <p>
 * Color offset.
 * </p>
 * @return bool true on success or false on failure.
 * @since 5.1.0
 */
function gd_convolution ($image, array $matrix, $div, $offset)
{
    return imageconvolution($image, $matrix, $div, $offset);
}

/**
 * Copy part of an image
 * @link http://php.net/manual/en/function.imagecopy.php
 * @param resource $dst_im <p>
 * Destination image link resource.
 * </p>
 * @param resource $src_im <p>
 * Source image link resource.
 * </p>
 * @param int $dst_x <p>
 * x-coordinate of destination point.
 * </p>
 * @param int $dst_y <p>
 * y-coordinate of destination point.
 * </p>
 * @param int $src_x <p>
 * x-coordinate of source point.
 * </p>
 * @param int $src_y <p>
 * y-coordinate of source point.
 * </p>
 * @param int $src_w <p>
 * Source width.
 * </p>
 * @param int $src_h <p>
 * Source height.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function gd_copy ($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h)
{
    return imagecopy($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h);
}

/**
 * Copy and merge part of an image
 * @link http://php.net/manual/en/function.imagecopymerge.php
 * @param resource $dst_im <p>
 * Destination image link resource.
 * </p>
 * @param resource $src_im <p>
 * Source image link resource.
 * </p>
 * @param int $dst_x <p>
 * x-coordinate of destination point.
 * </p>
 * @param int $dst_y <p>
 * y-coordinate of destination point.
 * </p>
 * @param int $src_x <p>
 * x-coordinate of source point.
 * </p>
 * @param int $src_y <p>
 * y-coordinate of source point.
 * </p>
 * @param int $src_w <p>
 * Source width.
 * </p>
 * @param int $src_h <p>
 * Source height.
 * </p>
 * @param int $pct <p>
 * The two images will be merged according to pct
 * which can range from 0 to 100. When pct = 0,
 * no action is taken, when 100 this function behaves identically
 * to imagecopy for pallete images, while it
 * implements alpha transparency for true colour images.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0.1
 * @since 5.0
 */
function gd_copy_merge ($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h, $pct)
{
    return imagecopymerge($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h, $pct);
}

/**
 * Copy and merge part of an image with gray scale
 * @link http://php.net/manual/en/function.imagecopymergegray.php
 * @param resource $dst_im <p>
 * Destination image link resource.
 * </p>
 * @param resource $src_im <p>
 * Source image link resource.
 * </p>
 * @param int $dst_x <p>
 * x-coordinate of destination point.
 * </p>
 * @param int $dst_y <p>
 * y-coordinate of destination point.
 * </p>
 * @param int $src_x <p>
 * x-coordinate of source point.
 * </p>
 * @param int $src_y <p>
 * y-coordinate of source point.
 * </p>
 * @param int $src_w <p>
 * Source width.
 * </p>
 * @param int $src_h <p>
 * Source height.
 * </p>
 * @param int $pct <p>
 * The src_im will be changed to grayscale according 
 * to pct where 0 is fully grayscale and 100 is 
 * unchanged. When pct = 100 this function behaves 
 * identically to imagecopy for pallete images, while 
 * it implements alpha transparency for true colour images.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0.6
 * @since 5.0
 */
function gd_copy_merge_gray ($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h, $pct)
{
    return imagecopymergegray($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h, $pct);
}

/**
 * Copy and resize part of an image with resampling
 * @link http://php.net/manual/en/function.imagecopyresampled.php
 * @param resource $dst_image 
 * @param resource $src_image 
 * @param int $dst_x <p>
 * x-coordinate of destination point.
 * </p>
 * @param int $dst_y <p>
 * y-coordinate of destination point.
 * </p>
 * @param int $src_x <p>
 * x-coordinate of source point.
 * </p>
 * @param int $src_y <p>
 * y-coordinate of source point.
 * </p>
 * @param int $dst_w <p>
 * Destination width.
 * </p>
 * @param int $dst_h <p>
 * Destination height.
 * </p>
 * @param int $src_w <p>
 * Source width.
 * </p>
 * @param int $src_h <p>
 * Source height.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0.6
 * @since 5.0
 */
function gd_copy_resampled ($dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h)
{
    return imagecopyresampled($dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h);
}

/**
 * Copy and resize part of an image
 * @link http://php.net/manual/en/function.imagecopyresized.php
 * @param resource $dst_image 
 * @param resource $src_image 
 * @param int $dst_x <p>
 * x-coordinate of destination point.
 * </p>
 * @param int $dst_y <p>
 * y-coordinate of destination point.
 * </p>
 * @param int $src_x <p>
 * x-coordinate of source point.
 * </p>
 * @param int $src_y <p>
 * y-coordinate of source point.
 * </p>
 * @param int $dst_w <p>
 * Destination width.
 * </p>
 * @param int $dst_h <p>
 * Destination height.
 * </p>
 * @param int $src_w <p>
 * Source width.
 * </p>
 * @param int $src_h <p>
 * Source height.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function gd_copy_resized ($dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h)
{
    return imagecopyresized($dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h);
}

/**
 * Create a new palette based image
 * @link http://php.net/manual/en/function.imagecreate.php
 * @param int $width <p>
 * The image width.
 * </p>
 * @param int $height <p>
 * The image height.
 * </p>
 * @return resource an image resource identifier on success, false on errors.
 * @since 4.0
 * @since 5.0
 */
function gd_create ($width, $height)
{
    return imagecreate($width, $height);
}

/**
 * Create a new image from GD2 file or URL
 * @link http://php.net/manual/en/function.imagecreatefromgd2.php
 * @param string $filename <p>
 * Path to the GD2 image.
 * </p>
 * @return resource an image resource identifier on success, false on errors.
 * @since 4.0.7
 * @since 5.0
 */
function gd_create_from_gd2 ($filename)
{
    return imagecreatefromgd2($filename);
}

/**
 * Create a new image from a given part of GD2 file or URL
 * @link http://php.net/manual/en/function.imagecreatefromgd2part.php
 * @param string $filename <p>
 * Path to the GD2 image.
 * </p>
 * @param int $srcX <p>
 * x-coordinate of source point.
 * </p>
 * @param int $srcY <p>
 * y-coordinate of source point.
 * </p>
 * @param int $width <p>
 * Source width.
 * </p>
 * @param int $height <p>
 * Source height.
 * </p>
 * @return resource an image resource identifier on success, false on errors.
 * @since 4.0.7
 * @since 5.0
 */
function gd_create_from_gd2_part ($filename, $srcX, $srcY, $width, $height)
{
    return imagecreatefromgd2part($filename, $srcX, $srcY, $width, $height);
}

/**
 * Create a new image from GD file or URL
 * @link http://php.net/manual/en/function.imagecreatefromgd.php
 * @param string $filename <p>
 * Path to the GD file.
 * </p>
 * @return resource an image resource identifier on success, false on errors.
 * @since 4.0.7
 * @since 5.0
 */
function gd_create_from_gd ($filename)
{
    return imagecreatefromgd($filename);
}

/**
 * Create a new image from file or URL
 * @link http://php.net/manual/en/function.imagecreatefromgif.php
 * @param string $filename <p>
 * Path to the GIF image.
 * </p>
 * @return resource an image resource identifier on success, false on errors.
 * @since 4.0
 * @since 5.0
 */
function gd_create_from_gif ($filename)
{
    return imagecreatefromgif($filename);
}

/**
 * Create a new image from file or URL
 * @link http://php.net/manual/en/function.imagecreatefromjpeg.php
 * @param string $filename <p>
 * Path to the JPEG image.
 * </p>
 * @return resource an image resource identifier on success, false on errors.
 * @since 4.0
 * @since 5.0
 */
function gd_create_from_jpeg ($filename)
{
    return imagecreatefromjpeg($filename);
}

/**
 * Create a new image from file or URL
 * @link http://php.net/manual/en/function.imagecreatefrompng.php
 * @param string $filename <p>
 * Path to the PNG image.
 * </p>
 * @return resource an image resource identifier on success, false on errors.
 * @since 4.0
 * @since 5.0
 */
function gd_create_from_png ($filename)
{
    return imagecreatefrompng($filename);
}

/**
 * Create a new image from the image stream in the string
 * @link http://php.net/manual/en/function.imagecreatefromstring.php
 * @param string $image <p>
 * A string containing the image data.
 * </p>
 * @return resource An image resource will be returned on success. <b>FALSE</b> is returned if
 * the image type is unsupported, the data is not in a recognised format,
 * or the image is corrupt and cannot be loaded.
 * @since 4.0.4
 * @since 5.0
 */
function gd_create_from_string ($image)
{
    return imagecreatefromstring($image);
}

/**
 * Create a new image from file or URL
 * @link http://php.net/manual/en/function.imagecreatefromwbmp.php
 * @param string $filename <p>
 * Path to the WBMP image.
 * </p>
 * @return resource an image resource identifier on success, false on errors.
 * @since 4.0.1
 * @since 5.0
 */
function gd_create_from_wbmp ($filename)
{
    return imagecreatefromwbmp($filename);
}

/**
 * Create a new image from file or URL
 * @link http://php.net/manual/en/function.imagecreatefromxbm.php
 * @param string $filename <p>
 * Path to the XBM image.
 * </p>
 * @return resource an image resource identifier on success, false on errors.
 * @since 4.0.1
 * @since 5.0
 */
function gd_create_from_xbm ($filename)
{
    return imagecreatefromxbm($filename);
}

/**
 * Create a new image from file or URL
 * @link http://php.net/manual/en/function.imagecreatefromxpm.php
 * @param string $filename <p>
 * Path to the XPM image.
 * </p>
 * @return resource an image resource identifier on success, false on errors.
 * @since 4.0.1
 * @since 5.0
 */
function gd_create_from_xpm ($filename)
{
    return imagecreatefromxpm($filename);
}

/**
 * Create a new true color image
 * @link http://php.net/manual/en/function.imagecreatetruecolor.php
 * @param int $width <p>
 * Image width.
 * </p>
 * @param int $height <p>
 * Image height.
 * </p>
 * @return resource an image resource identifier on success, false on errors.
 * @since 4.0.6
 * @since 5.0
 */
function gd_create_true_color ($width, $height)
{
    return imagecreatetruecolor($width, $height);
}

/**
 * Crop an image using the given coordinates and size, x, y, width and height
 * @link http://www.php.net/manual/en/function.imagecrop.php
 * @param resource $image <p>
 * An image resource, returned by one of the image creation functions, such as {@link http://www.php.net/manual/en/function.imagecreatetruecolor.php imagecreatetruecolor()}.
 * </p>
 * @param array $rect <p>Array with keys "x", "y", "width" and "height".</p>
 * @return resource|bool Return cropped image resource on success or FALSE on failure.
 * @since 5.5.0
 */
function gd_crop ($image, $rect)
{
    return imagecrop($image, $rect);
}

/**
 * Crop an image automatically using one of the available modes
 * @link http://www.php.net/manual/en/function.imagecropauto.php
 * @param resource $image <p>
 * An image resource, returned by one of the image creation functions, such as {@link http://www.php.net/manual/en/function.imagecreatetruecolor.php imagecreatetruecolor()}.
 * </p>
 * @param int $mode [optional] <p>
 * One of <b>IMG_CROP_*</b> constants.
 * </p>
 * @param float $threshold [optional] <p>
 * Used <b>IMG_CROP_THRESHOLD</b> mode.
 * </p>
 * @param int $color [optional]
 * <p>
 * Used in <b>IMG_CROP_THRESHOLD</b> mode.
 * </p>
 * @return resource|bool Return cropped image resource on success or <b>FALSE</b> on failure.
 * @since 5.5.0
 */
function gd_crop_auto ($image, $mode = -1, $threshold = .5, $color = -1)
{
    return imagecropauto($image, $mode, $threshold, $color);
}

/**
 * Draw a dashed line
 * @link http://php.net/manual/en/function.imagedashedline.php
 * @param resource $image 
 * @param int $x1 <p>
 * Upper left x coordinate.
 * </p>
 * @param int $y1 <p>
 * Upper left y coordinate 0, 0 is the top left corner of the image.
 * </p>
 * @param int $x2 <p>
 * Bottom right x coordinate.
 * </p>
 * @param int $y2 <p>
 * Bottom right y coordinate.
 * </p>
 * @param int $color <p>
 * The fill color. A color identifier created with 
 * imagecolorallocate.
 * </p>
 * @return bool Always returns true
 * @since 4.0
 * @since 5.0
 */
function gd_dashed_line ($image, $x1, $y1, $x2, $y2, $color)
{
    return imagedashedline($image, $x1, $y1, $x2, $y2, $color);
}

/**
 * Destroy an image
 * @link http://php.net/manual/en/function.imagedestroy.php
 * @param resource $image 
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function gd_destroy ($image)
{
    return imagedestroy($image);
}

/**
 * Draw an ellipse
 * @link http://php.net/manual/en/function.imageellipse.php
 * @param resource $image 
 * @param int $cx <p>
 * x-coordinate of the center.
 * </p>
 * @param int $cy <p>
 * y-coordinate of the center.
 * </p>
 * @param int $width <p>
 * The ellipse width.
 * </p>
 * @param int $height <p>
 * The ellipse height.
 * </p>
 * @param int $color <p>
 * The color of the ellipse. A color identifier created with
 * <b>imagecolorallocate</b>.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 * @since 4.0.6
 * @since 5.0
 */
function gd_ellipse ($image, $cx, $cy, $width, $height, $color)
{
    return imageellipse($image, $cx, $cy, $width, $height, $color);
}

/**
 * Flood fill
 * @link http://php.net/manual/en/function.imagefill.php
 * @param resource $image 
 * @param int $x <p>
 * x-coordinate of start point.
 * </p>
 * @param int $y <p>
 * y-coordinate of start point.
 * </p>
 * @param int $color <p>
 * The fill color. A color identifier created with 
 * imagecolorallocate.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function gd_fill ($image, $x, $y, $color)
{
    return imagefill($image, $x, $y, $color);
}

/**
 * Draw a partial arc and fill it
 * @link http://php.net/manual/en/function.imagefilledarc.php
 * @param resource $image 
 * @param int $cx <p>
 * x-coordinate of the center.
 * </p>
 * @param int $cy <p>
 * y-coordinate of the center.
 * </p>
 * @param int $width <p>
 * The arc width.
 * </p>
 * @param int $height <p>
 * The arc height.
 * </p>
 * @param int $start <p>
 * The arc start angle, in degrees.
 * </p>
 * @param int $end <p>
 * The arc end angle, in degrees.
 * 0&deg; is located at the three-o'clock position, and the arc is drawn
 * clockwise.
 * </p>
 * @param int $color <p>
 * A color identifier created with 
 * imagecolorallocate.
 * </p>
 * @param int $style <p>
 * A bitwise OR of the following possibilities:
 * IMG_ARC_PIE
 * @return bool true on success or false on failure.
 * @since 4.0.6
 * @since 5.0
 */
function gd_filled_arc ($image, $cx, $cy, $width, $height, $start, $end, $color, $style)
{
    return imagefilledarc($image, $cx, $cy, $width, $height, $start, $end, $color, $style);
}

/**
 * Draw a filled ellipse
 * @link http://php.net/manual/en/function.imagefilledellipse.php
 * @param resource $image 
 * @param int $cx <p>
 * x-coordinate of the center.
 * </p>
 * @param int $cy <p>
 * y-coordinate of the center.
 * </p>
 * @param int $width <p>
 * The ellipse width.
 * </p>
 * @param int $height <p>
 * The ellipse height.
 * </p>
 * @param int $color <p>
 * The fill color. A color identifier created with 
 * imagecolorallocate.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0.6
 * @since 5.0
 */
function gd_filled_ellipse ($image, $cx, $cy, $width, $height, $color)
{
    return imagefilledellipse($image, $cx, $cy, $width, $height, $color);
}

/**
 * Draw a filled polygon
 * @link http://php.net/manual/en/function.imagefilledpolygon.php
 * @param resource $image 
 * @param array $points <p>
 * An array containing the x and y
 * coordinates of the polygons vertices consecutively.
 * </p>
 * @param int $num_points <p>
 * Total number of vertices, which must be at least 3.
 * </p>
 * @param int $color <p>
 * A color identifier created with 
 * imagecolorallocate.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function gd_filled_polygon ($image, array $points, $num_points, $color)
{
    return imagefilledpolygon($image, $points, $num_points, $color);
}

/**
 * Draw a filled rectangle
 * @link http://php.net/manual/en/function.imagefilledrectangle.php
 * @param resource $image 
 * @param int $x1 <p>
 * x-coordinate for point 1.
 * </p>
 * @param int $y1 <p>
 * y-coordinate for point 1.
 * </p>
 * @param int $x2 <p>
 * x-coordinate for point 2.
 * </p>
 * @param int $y2 <p>
 * y-coordinate for point 2.
 * </p>
 * @param int $color <p>
 * The fill color. A color identifier created with 
 * imagecolorallocate.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function gd_filled_rectangle ($image, $x1, $y1, $x2, $y2, $color)
{
    return imagefilledrectangle($image, $x1, $y1, $x2, $y2, $color);
}

/**
 * Flood fill to specific color
 * @link http://php.net/manual/en/function.imagefilltoborder.php
 * @param resource $image 
 * @param int $x <p>
 * x-coordinate of start.
 * </p>
 * @param int $y <p>
 * y-coordinate of start.
 * </p>
 * @param int $border <p>
 * The border color. A color identifier created with 
 * imagecolorallocate.
 * </p>
 * @param int $color <p>
 * The fill color. A color identifier created with 
 * imagecolorallocate.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function gd_fill_to_border ($image, $x, $y, $border, $color)
{
    return imagefilltoborder($image, $x, $y, $border, $color);
}

/**
 * Applies a filter to an image
 * @link http://php.net/manual/en/function.imagefilter.php
 * @param resource $image 
 * @param int $filtertype <p>
 * filtertype can be one of the following:
 * IMG_FILTER_NEGATE: Reverses all colors of
 * the image.
 * @param int $arg1 [optional] <p>
 * IMG_FILTER_BRIGHTNESS: Brightness level.
 * @param int $arg2 [optional] <p>
 * IMG_FILTER_COLORIZE: Value of green component.
 * @param int $arg3 [optional] <p>
 * IMG_FILTER_COLORIZE: Value of blue component.
 * @param int $arg4 [optional] <p>
 * IMG_FILTER_COLORIZE: Alpha channel, A value 
 * between 0 and 127. 0 indicates completely opaque while 127 indicates 
 * completely transparent.
 * @return bool true on success or false on failure.
 */
function gd_filter ($image, $filtertype, $arg1 = null, $arg2 = null, $arg3 = null, $arg4 = null)
{
    return imagefilter($image, $filtertype, $arg1, $arg2, $arg3, $arg4);
}

/**
 * Flips an image using a given mode
 * @link http://www.php.net/manual/en/function.imageflip.php
 * @param resource $image <p>
 * An image resource, returned by one of the image creation functions, such as {@link http://www.php.net/manual/en/function.imagecreatetruecolor.php imagecreatetruecolor()}.
 * </p>
 * @param int $mode <p>
 * Flip mode, this can be one of the <b>IMG_FLIP_*</b> constants:
 * </p>
 * <table>
 * <thead>
 * <tr>
 * <th>Constant</th>
 * <th>Meaning</th>
 * </tr>
 * </thead>
 * <tr>
 * <td><b>IMG_FLIP_HORIZONTAL</b></td>
 * <td>
 * Flips the image horizontally.
 * </td>
 * </tr>
 * <tr>
 * <td><b>IMG_FLIP_VERTICAL</b></td>
 * <td>
 * Flips the image vertically.
 * </td>
 * </tr>
 * <tr>
 * <td><b>IMG_FLIP_BOTH</b></td>
 * <td>
 * Flips the image both horizontally and vertically.
 * </td>
 * </tr>
 * </tbody>
 * </table>
 * @return bool Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
 * @since 5.5.0
 */
function gd_flip ($image, $mode)
{
    return imageflip($image, $mode);
}

/**
 * Get font height
 * @link http://php.net/manual/en/function.imagefontheight.php
 * @param int $font 
 * @return int the height of the pixel.
 * @since 4.0
 * @since 5.0
 */
function gd_font_height ($font)
{
    return imagefontheight($font);
}

/**
 * Get font width
 * @link http://php.net/manual/en/function.imagefontwidth.php
 * @param int $font 
 * @return int the width of the pixel
 * @since 4.0
 * @since 5.0
 */
function gd_font_width ($font)
{
    return imagefontwidth($font);
}

/**
 * Give the bounding box of a text using fonts via freetype2
 * @link http://php.net/manual/en/function.imageftbbox.php
 * @param float $size <p>
 * The font size. Depending on your version of GD, this should be
 * specified as the pixel size (GD1) or point size (GD2).
 * </p>
 * @param float $angle <p>
 * Angle in degrees in which text will be 
 * measured.
 * </p>
 * @param string $fontfile <p>
 * The name of the TrueType font file (can be a URL). Depending on
 * which version of the GD library that PHP is using, it may attempt to
 * search for files that do not begin with a leading '/' by appending
 * '.ttf' to the filename and searching along a library-defined font path.
 * </p>
 * @param string $text <p>
 * The string to be measured.
 * </p>
 * @param array $extrainfo [optional] <p>
 * <table>
 * Possible array indexes for extrainfo
 * <tr valign="top">
 * <td>Key</td>
 * <td>Type</td>
 * <td>Meaning</td>
 * </tr>
 * <tr valign="top">
 * <td>linespacing</td>
 * <td>float</td>
 * <td>Defines drawing linespacing</td>
 * </tr>
 * </table>
 * </p>
 * @return array imageftbbox returns an array with 8
 * elements representing four points making the bounding box of the
 * text:
 * <tr valign="top">
 * <td>0</td>
 * <td>lower left corner, X position</td>
 * </tr>
 * <tr valign="top">
 * <td>1</td>
 * <td>lower left corner, Y position</td>
 * </tr>
 * <tr valign="top">
 * <td>2</td>
 * <td>lower right corner, X position</td>
 * </tr>
 * <tr valign="top">
 * <td>3</td>
 * <td>lower right corner, Y position</td>
 * </tr>
 * <tr valign="top">
 * <td>4</td>
 * <td>upper right corner, X position</td>
 * </tr>
 * <tr valign="top">
 * <td>5</td>
 * <td>upper right corner, Y position</td>
 * </tr>
 * <tr valign="top">
 * <td>6</td>
 * <td>upper left corner, X position</td>
 * </tr>
 * <tr valign="top">
 * <td>7</td>
 * <td>upper left corner, Y position</td>
 * </tr>
 * </p>
 * <p>
 * The points are relative to the text regardless of the
 * angle, so "upper left" means in the top left-hand 
 * corner seeing the text horizontally.
 * @since 4.0.7
 * @since 5.0
 */
function gd_ft_bbox ($size, $angle, $fontfile, $text, $extrainfo = null )
{
    return imageftbbox($size, $angle, $fontfile, $text, $extrainfo);
}

/**
 * Write text to the image using fonts using FreeType 2
 * @link http://php.net/manual/en/function.imagefttext.php
 * @param resource $image 
 * @param float $size <p>
 * The font size to use in points.
 * </p>
 * @param float $angle <p> 
 * The angle in degrees, with 0 degrees being left-to-right reading text.
 * Higher values represent a counter-clockwise rotation. For example, a 
 * value of 90 would result in bottom-to-top reading text.
 * </p>
 * @param int $x <p>
 * The coordinates given by x and
 * y will define the basepoint of the first
 * character (roughly the lower-left corner of the character). This
 * is different from the imagestring, where
 * x and y define the
 * upper-left corner of the first character. For example, "top left"
 * is 0, 0.
 * </p>
 * @param int $y <p>
 * The y-ordinate. This sets the position of the fonts baseline, not the
 * very bottom of the character.
 * </p>
 * @param int $color <p>
 * The index of the desired color for the text, see 
 * imagecolorexact.
 * </p>
 * @param string $fontfile <p>
 * The path to the TrueType font you wish to use.
 * </p>
 * <p>
 * Depending on which version of the GD library PHP is using, when
 * fontfile does not begin with a leading
 * / then .ttf will be appended
 * to the filename and the library will attempt to search for that
 * filename along a library-defined font path.
 * </p>
 * <p>
 * When using versions of the GD library lower than 2.0.18, a space character,
 * rather than a semicolon, was used as the 'path separator' for different font files.
 * Unintentional use of this feature will result in the warning message:
 * Warning: Could not find/open font. For these affected versions, the
 * only solution is moving the font to a path which does not contain spaces.
 * </p>
 * <p>
 * In many cases where a font resides in the same directory as the script using it
 * the following trick will alleviate any include problems.
 * ]]>
 * </p>
 * @param string $text <p>
 * Text to be inserted into image. 
 * </p>
 * @param array $extrainfo [optional] <p>
 * <table>
 * Possible array indexes for extrainfo
 * <tr valign="top">
 * <td>Key</td>
 * <td>Type</td>
 * <td>Meaning</td>
 * </tr>
 * <tr valign="top">
 * <td>linespacing</td>
 * <td>float</td>
 * <td>Defines drawing linespacing</td>
 * </tr>
 * </table>
 * </p>
 * @return array This function returns an array defining the four points of the box, starting in the lower left and moving counter-clockwise:
 * <tr valign="top">
 * <td>0</td>
 * <td>lower left x-coordinate</td>
 * </tr>
 * <tr valign="top">
 * <td>1</td>
 * <td>lower left y-coordinate</td>
 * </tr>
 * <tr valign="top">
 * <td>2</td>
 * <td>lower right x-coordinate</td>
 * </tr>
 * <tr valign="top">
 * <td>3</td>
 * <td>lower right y-coordinate</td>
 * </tr>
 * <tr valign="top">
 * <td>4</td>
 * <td>upper right x-coordinate</td>
 * </tr>
 * <tr valign="top">
 * <td>5</td>
 * <td>upper right y-coordinate</td>
 * </tr>
 * <tr valign="top">
 * <td>6</td>
 * <td>upper left x-coordinate</td>
 * </tr>
 * <tr valign="top">
 * <td>7</td>
 * <td>upper left y-coordinate</td>
 * </tr>
 * @since 4.0.7
 * @since 5.0
 */
function gd_ft_text ($image, $size, $angle, $x, $y, $color, $fontfile, $text, $extrainfo = null )
{
    return imagefttext($image, $size, $angle, $x, $y, $color, $fontfile, $text, $extrainfo);
}

/**
 * Apply a gamma correction to a GD image
 * @link http://php.net/manual/en/function.imagegammacorrect.php
 * @param resource $image 
 * @param float $inputgamma <p>
 * The input gamma.
 * </p>
 * @param float $outputgamma <p>
 * The output gamma.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function gd_gamma_correct ($image, $inputgamma, $outputgamma)
{
    return imagegammacorrect($image, $inputgamma, $outputgamma);
}

/**
 * Output GD2 image to browser or file
 * @link http://php.net/manual/en/function.imagegd2.php
 * @param resource $image 
 * @param string $filename [optional] <p>
 * The path to save the file to. If not set or &null;, the raw image stream
 * will be outputted directly.
 * </p>
 * @param int $chunk_size [optional] <p>
 * Chunk size.
 * </p>
 * @param int $type [optional] <p>
 * Either IMG_GD2_RAW or 
 * IMG_GD2_COMPRESSED. Default is 
 * IMG_GD2_RAW.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0.7
 * @since 5.0
 */
function gd_raw2 ($image, $filename = null, $chunk_size = null, $type = null)
{
    return imagegd2($image, $filename, $chunk_size, $type);
}

/**
 * Output GD image to browser or file
 * @link http://php.net/manual/en/function.imagegd.php
 * @param resource $image 
 * @param string $filename [optional] <p>
 * The path to save the file to. If not set or &null;, the raw image stream
 * will be outputted directly.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0.7
 * @since 5.0
 */
function gd_raw ($image, $filename = null)
{
    return imagegd($image, $filename);
}

/**
 * Output image to browser or file
 * @link http://php.net/manual/en/function.imagegif.php
 * @param resource $image 
 * @param string $filename [optional] <p>
 * The path to save the file to. If not set or &null;, the raw image stream
 * will be outputted directly.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function gd_gif ($image, $filename = null)
{
    return imagegif($image, $filename);
}

/**
 * Enable or disable interlace
 * @link http://php.net/manual/en/function.imageinterlace.php
 * @param resource $image 
 * @param int $interlace [optional] <p>
 * If non-zero, the image will be interlaced, else the interlace bit is
 * turned off.
 * </p>
 * @return int 1 if the interlace bit is set for the image, 0 otherwise.
 * @since 4.0
 * @since 5.0
 */
function gd_interlace ($image, $interlace = null)
{
    return imageinterlace($image, $interlace);
}

/**
 * Finds whether an image is a truecolor image
 * @link http://php.net/manual/en/function.imageistruecolor.php
 * @param resource $image 
 * @return bool true if the image is truecolor, false
 * otherwise.
 * @since 4.3.2
 * @since 5.0
 */
function gd_is_true_color ($image)
{
    return imageistruecolor($image);
}

/**
 * Output image to browser or file
 * @link http://php.net/manual/en/function.imagejpeg.php
 * @param resource $image 
 * @param string $filename [optional] <p>
 * The path to save the file to. If not set or &null;, the raw image stream
 * will be outputted directly.
 * </p>
 * <p>
 * To skip this argument in order to provide the 
 * quality parameter, use &null;.
 * </p>
 * @param int $quality [optional] <p>
 * quality is optional, and ranges from 0 (worst
 * quality, smaller file) to 100 (best quality, biggest file). The 
 * default is the default IJG quality value (about 75).
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function gd_jpeg ($image, $filename = null, $quality = null)
{
    return imagejpeg($image, $filename, $quality);
}

/**
 * Set the alpha blending flag to use the bundled libgd layering effects
 * @link http://php.net/manual/en/function.imagelayereffect.php
 * @param resource $image 
 * @param int $effect <p>
 * One of the following constants:
 * IMG_EFFECT_REPLACE
 * Use pixel replacement (equivalent of passing true to
 * imagealphablending)
 * @return bool true on success or false on failure.
 * @since 4.3.0
 * @since 5.0
 */
function gd_layer_effect ($image, $effect)
{
    return imagelayereffect($image, $effect);
}

/**
 * Draw a line
 * @link http://php.net/manual/en/function.imageline.php
 * @param resource $image 
 * @param int $x1 <p>
 * x-coordinate for first point.
 * </p>
 * @param int $y1 <p>
 * y-coordinate for first point.
 * </p>
 * @param int $x2 <p>
 * x-coordinate for second point.
 * </p>
 * @param int $y2 <p>
 * y-coordinate for second point.
 * </p>
 * @param int $color <p>
 * The line color. A color identifier created with 
 * imagecolorallocate.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function gd_line ($image, $x1, $y1, $x2, $y2, $color)
{
    return imageline($image, $x1, $y1, $x2, $y2, $color);
}

/**
 * Load a new font
 * @link http://php.net/manual/en/function.imageloadfont.php
 * @param string $file <p>
 * The font file format is currently binary and architecture
 * dependent. This means you should generate the font files on the
 * same type of CPU as the machine you are running PHP on.
 * </p>
 * <p>
 * <table>
 * Font file format
 * <tr valign="top">
 * <td>byte position</td>
 * <td>C data type</td>
 * <td>description</td>
 * </tr>
 * <tr valign="top">
 * <td>byte 0-3</td>
 * <td>int</td>
 * <td>number of characters in the font</td>
 * </tr>
 * <tr valign="top">
 * <td>byte 4-7</td>
 * <td>int</td>
 * <td>
 * value of first character in the font (often 32 for space)
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>byte 8-11</td>
 * <td>int</td>
 * <td>pixel width of each character</td>
 * </tr>
 * <tr valign="top">
 * <td>byte 12-15</td>
 * <td>int</td>
 * <td>pixel height of each character</td>
 * </tr>
 * <tr valign="top">
 * <td>byte 16-</td>
 * <td>char</td>
 * <td>
 * array with character data, one byte per pixel in each
 * character, for a total of (nchars*width*height) bytes.
 * </td>
 * </tr>
 * </table>
 * </p>
 * @return int The font identifier which is always bigger than 5 to avoid conflicts with
 * built-in fonts or false on errors.
 * @since 4.0
 * @since 5.0
 */
function gd_load_font ($file)
{
    return imageloadfont($file);
}

/**
 * Copy the palette from one image to another
 * @link http://php.net/manual/en/function.imagepalettecopy.php
 * @param resource $destination <p>
 * The destination image resource.
 * </p>
 * @param resource $source <p>
 * The source image resource.
 * </p>
 * @return void No value is returned.
 * @since 4.0.1
 * @since 5.0
 */
function gd_palette_copy ($destination, $source)
{
    return imagepalettecopy($destination, $source);
}

/**
 * Converts a palette based image to true color
 * @link http://www.php.net/manual/en/function.imagepalettetotruecolor.php
 * @param resource $image <p>
 * An image resource, returnd by one of the image creation functions, such as {@link http://www.php.net/manual/en/function.imagecreatetruecolor.php imagecreatetruecolor()}.
 * </p>
 * @return bool Returns <b>TRUE</b> if the convertion was complete, or if the source image already is a true color image, otherwise <b>FALSE</b> is returned.
 * @since 5.5.0
 */
function gd_palette_to_true_color ($image)
{
    return imagepalettetotruecolor($image);
}

/**
 * Output a PNG image to either the browser or a file
 * @link http://php.net/manual/en/function.imagepng.php
 * @param resource $image 
 * @param string $filename [optional] <p>
 * The path to save the file to. If not set or &null;, the raw image stream
 * will be outputted directly.
 * </p>
 * <p>
 * &null; is invalid if the quality and
 * filters arguments are not used.
 * </p>
 * @param int $quality [optional] <p>
 * Compression level: from 0 (no compression) to 9.
 * </p>
 * @param int $filters [optional] <p>
 * Allows reducing the PNG file size. It is a bitmask field which may be
 * set to any combination of the PNG_FILTER_XXX 
 * constants. PNG_NO_FILTER or 
 * PNG_ALL_FILTERS may also be used to respectively
 * disable or activate all filters.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function gd_png ($image, $filename = null, $quality = null, $filters = null)
{
    return imagepng($image, $filename, $quality, $filters);
}

/**
 * Draws a polygon
 * @link http://php.net/manual/en/function.imagepolygon.php
 * @param resource $image 
 * @param array $points <p>
 * An array containing the polygon's vertices, e.g.:
 * <tr valign="top">
 * <td>points[0]</td>
 * <td>= x0</td>
 * </tr>
 * <tr valign="top">
 * <td>points[1]</td>
 * <td>= y0</td>
 * </tr>
 * <tr valign="top">
 * <td>points[2]</td>
 * <td>= x1</td>
 * </tr>
 * <tr valign="top">
 * <td>points[3]</td>
 * <td>= y1</td>
 * </tr>
 * </p>
 * @param int $num_points <p>
 * Total number of points (vertices).
 * </p>
 * @param int $color <p>
 * A color identifier created with 
 * imagecolorallocate.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function gd_polygon ($image, array $points, $num_points, $color)
{
    return imagepolygon($image, $points, $num_points, $color);
}

/**
 * Give the bounding box of a text rectangle using PostScript Type1 fonts
 * @link http://php.net/manual/en/function.imagepsbbox.php
 * @param string $text <p>
 * The text to be written.
 * </p>
 * @param resource $font 
 * @param int $size <p>
 * size is expressed in pixels.
 * </p>
 * @return array an array containing the following elements:
 * <tr valign="top">
 * <td>0</td>
 * <td>left x-coordinate</td>
 * </tr>
 * <tr valign="top">
 * <td>1</td>
 * <td>upper y-coordinate</td>
 * </tr>
 * <tr valign="top">
 * <td>2</td>
 * <td>right x-coordinate</td>
 * </tr>
 * <tr valign="top">
 * <td>3</td>
 * <td>lower y-coordinate</td>
 * </tr>
 * @since 4.0
 * @since 5.0
 */
function gd_ps_bbox ($text, $font, $size)
{
    return imagepsbbox($text, $font, $size);
}

/**
 * Change the character encoding vector of a font
 * @link http://php.net/manual/en/function.imagepsencodefont.php
 * @param resource $font_index <p>
 * A font resource, returned by imagepsloadfont.
 * </p>
 * @param string $encodingfile <p>
 * The exact format of this file is described in T1libs documentation. 
 * T1lib comes with two ready-to-use files, 
 * IsoLatin1.enc and 
 * IsoLatin2.enc.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function gd_ps_encode_font ($font_index, $encodingfile)
{
    return imagepsencodefont($font_index, $encodingfile);
}

/**
 * Extend or condense a font
 * @link http://php.net/manual/en/function.imagepsextendfont.php
 * @param resource $font_index <p>
 * A font resource, returned by imagepsloadfont.
 * </p>
 * @param float $extend <p>
 * Extension value, must be greater than 0.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function gd_ps_extend_font ($font_index, $extend)
{
    return imagepsextendfont($font_index, $extend);
}

/**
 * Free memory used by a PostScript Type 1 font
 * @link http://php.net/manual/en/function.imagepsfreefont.php
 * @param resource $font_index <p>
 * A font resource, returned by imagepsloadfont.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function gd_ps_free_font ($font_index)
{
    return imagepsfreefont($font_index);
}

/**
 * Load a PostScript Type 1 font from file
 * @link http://php.net/manual/en/function.imagepsloadfont.php
 * @param string $filename <p>
 * Path to the Postscript font file.
 * </p>
 * @return resource In the case everything went right, a valid font index will be returned and
 * can be used for further purposes. Otherwise the function returns false.
 * @since 4.0
 * @since 5.0
 */
function gd_ps_load_font ($filename)
{
    return imagepsloadfont($filename);
}

/**
 * Slant a font
 * @link http://php.net/manual/en/function.imagepsslantfont.php
 * @param resource $font_index <p>
 * A font resource, returned by imagepsloadfont.
 * </p>
 * @param float $slant <p>
 * Slant level.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function gd_ps_slant_font ($font_index, $slant)
{
    return imagepsslantfont($font_index, $slant);
}

/**
 * Draws a text over an image using PostScript Type1 fonts
 * @link http://php.net/manual/en/function.imagepstext.php
 * @param resource $image 
 * @param string $text <p>
 * The text to be written.
 * </p>
 * @param resource $font_index <p>
 * A font resource, returned by imagepsloadfont.
 * </p>
 * @param int $size <p>
 * size is expressed in pixels.
 * </p>
 * @param int $foreground <p>
 * The color in which the text will be painted.
 * </p>
 * @param int $background <p>
 * The color to which the text will try to fade in with antialiasing.
 * No pixels with the color background are 
 * actually painted, so the background image does not need to be of solid
 * color.
 * </p>
 * @param int $x <p>
 * x-coordinate for the lower-left corner of the first character.
 * </p>
 * @param int $y <p>
 * y-coordinate for the lower-left corner of the first character.
 * </p>
 * @param int $space [optional] <p>
 * Allows you to change the default value of a space in a font. This
 * amount is added to the normal value and can also be negative.
 * Expressed in character space units, where 1 unit is 1/1000th of an 
 * em-square.
 * </p>
 * @param int $tightness [optional] <p>
 * tightness allows you to control the amount
 * of white space between characters. This amount is added to the
 * normal character width and can also be negative.
 * Expressed in character space units, where 1 unit is 1/1000th of an 
 * em-square.
 * </p>
 * @param float $angle [optional] <p>
 * angle is in degrees.
 * </p>
 * @param int $antialias_steps [optional] <p>
 * Allows you to control the number of colours used for antialiasing 
 * text. Allowed values are 4 and 16. The higher value is recommended
 * for text sizes lower than 20, where the effect in text quality is
 * quite visible. With bigger sizes, use 4. It's less computationally
 * intensive.
 * </p>
 * @return array This function returns an array containing the following elements:
 * <tr valign="top">
 * <td>0</td>
 * <td>lower left x-coordinate</td>
 * </tr>
 * <tr valign="top">
 * <td>1</td>
 * <td>lower left y-coordinate</td>
 * </tr>
 * <tr valign="top">
 * <td>2</td>
 * <td>upper right x-coordinate</td>
 * </tr>
 * <tr valign="top">
 * <td>3</td>
 * <td>upper right y-coordinate</td>
 * </tr>
 * @since 4.0
 * @since 5.0
 */
function gd_ps_text ($image, $text, $font_index, $size, $foreground, $background, $x, $y, $space = null, $tightness = null, $angle = null, $antialias_steps = null)
{
    return imagepstext($image, $text, $font_index, $size, $foreground, $background, $x, $y, $space, $tightness, $angle, $antialias_steps);
}

/**
 * Draw a rectangle
 * @link http://php.net/manual/en/function.imagerectangle.php
 * @param resource $image 
 * @param int $x1 <p>
 * Upper left x coordinate.
 * </p>
 * @param int $y1 <p>
 * Upper left y coordinate
 * 0, 0 is the top left corner of the image.
 * </p>
 * @param int $x2 <p>
 * Bottom right x coordinate.
 * </p>
 * @param int $y2 <p>
 * Bottom right y coordinate.
 * </p>
 * @param int $color <p>
 * A color identifier created with 
 * imagecolorallocate.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function gd_rectangle ($image, $x1, $y1, $x2, $y2, $color)
{
    return imagerectangle($image, $x1, $y1, $x2, $y2, $color);
}

/**
 * Rotate an image with a given angle
 * @link http://php.net/manual/en/function.imagerotate.php
 * @param resource $image 
 * @param float $angle <p>
 * Rotation angle, in degrees.
 * </p>
 * @param int $bgd_color <p>
 * Specifies the color of the uncovered zone after the rotation
 * </p>
 * @param int $ignore_transparent [optional] <p>
 * If set and non-zero, transparent colors are ignored (otherwise kept).
 * </p>
 * @return resource 
 * @since 4.3.0
 * @since 5.0
 */
function gd_rotate ($image, $angle, $bgd_color, $ignore_transparent = null)
{
    return imagerotate($image, $angle, $bgd_color, $ignore_transparent);
}

/**
 * Set the flag to save full alpha channel information (as opposed to single-color transparency) when saving PNG images
 * @link http://php.net/manual/en/function.imagesavealpha.php
 * @param resource $image 
 * @param bool $saveflag <p>
 * Whether to save the alpha channel or not. Default to false. 
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.3.2
 * @since 5.0
 */
function gd_save_alpha ($image, $saveflag)
{
    return imagesavealpha($image, $saveflag);
}

/**
 * Set the brush image for line drawing
 * @link http://php.net/manual/en/function.imagesetbrush.php
 * @param resource $image 
 * @param resource $brush <p>
 * An image resource.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0.6
 * @since 5.0
 */
function gd_set_brush ($image, $brush)
{
    return imagesetbrush($image, $brush);
}

/**
 * Set the interpolation method
 * @link http://www.php.net/manual/en/function.imagesetinterpolation.php
 * @param resource $image <p>
 * An image resource, returned by one of the image creation functions, such as {@link http://www.php.net/manual/en/function.imagecreatetruecolor.php imagecreatetruecolor()}.
 * </p>
 * @param int $method <p>
 * The interpolation method, which can be one of the following:
 * <ul>
 * <li>
 * IMG_BELL: Bell filter.
 * </li>
 * <li>
 * IMG_BESSEL: Bessel filter.
 * </li>
 * <li>
 * IMG_BICUBIC: Bicubic interpolation.
 * </li>
 * <li>
 * IMG_BICUBIC_FIXED: Fixed point implementation of the bicubic interpolation.
 * </li>
 * <li>
 * IMG_BILINEAR_FIXED: Fixed point implementation of the  bilinear interpolation (<em>default (also on image creation)</em>).
 * </li>
 * <li>
 * IMG_BLACKMAN: Blackman window function.
 * </li>
 * <li>
 * IMG_BOX: Box blur filter.
 * </li>
 * <li>
 * IMG_BSPLINE: Spline interpolation.
 * </li>
 * <li>
 * IMG_CATMULLROM: Cubbic Hermite spline interpolation.
 * </li>
 * <li>
 * IMG_GAUSSIAN: Gaussian function.
 * </li>
 * <li>
 * IMG_GENERALIZED_CUBIC: Generalized cubic spline fractal interpolation.
 * </li>
 * <li>
 * IMG_HERMITE: Hermite interpolation.
 * </li>
 * <li>
 * IMG_HAMMING: Hamming filter.
 * </li>
 * <li>
 * IMG_HANNING: Hanning filter.
 * </li>
 * <li>
 * IMG_MITCHELL: Mitchell filter.
 * </li>
 * <li>
 * IMG_POWER: Power interpolation.
 * </li>
 * <li>
 * IMG_QUADRATIC: Inverse quadratic interpolation.
 * </li>
 * <li>
 * IMG_SINC: Sinc function.
 * </li>
 * <li>
 * IMG_NEAREST_NEIGHBOUR: Nearest neighbour interpolation.
 * </li>
 * <li>
 * IMG_WEIGHTED4: Weighting filter.
 * </li>
 * <li>
 * IMG_TRIANGLE: Triangle interpolation.
 * </li>
 * </ul>
 * </p>
 * @return bool Returns TRUE on success or FALSE on failure.
 * @since 5.5.0
 */
function gd_set_interpolation ($image, $method = IMG_BILINEAR_FIXED)
{
    return imagesetinterpolation($image, $method);
}

/**
 * Set a single pixel
 * @link http://php.net/manual/en/function.imagesetpixel.php
 * @param resource $image 
 * @param int $x <p>
 * x-coordinate.
 * </p>
 * @param int $y <p>
 * y-coordinate.
 * </p>
 * @param int $color <p>
 * A color identifier created with 
 * imagecolorallocate.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function gd_set_pixel ($image, $x, $y, $color)
{
    return imagesetpixel($image, $x, $y, $color);
}

/**
 * Set the style for line drawing
 * @link http://php.net/manual/en/function.imagesetstyle.php
 * @param resource $image 
 * @param array $style <p>
 * An array of pixel colors. You can use the 
 * IMG_COLOR_TRANSPARENT constant to add a 
 * transparent pixel.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0.6
 * @since 5.0
 */
function gd_set_style ($image, array $style)
{
    return imagesetstyle($image, $style);
}

/**
 * Set the thickness for line drawing
 * @link http://php.net/manual/en/function.imagesetthickness.php
 * @param resource $image 
 * @param int $thickness <p>
 * Thickness, in pixels.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0.6
 * @since 5.0
 */
function gd_set_thickness ($image, $thickness)
{
    return imagesetthickness($image, $thickness);
}

/**
 * Set the tile image for filling
 * @link http://php.net/manual/en/function.imagesettile.php
 * @param resource $image 
 * @param resource $tile <p>
 * The image resource to be used as a tile.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0.6
 * @since 5.0
 */
function gd_set_tile ($image, $tile)
{
    return imagesettile($image, $tile);
}

/**
 * Draw a string horizontally
 * @link http://php.net/manual/en/function.imagestring.php
 * @param resource $image 
 * @param int $font 
 * @param int $x <p>
 * x-coordinate of the upper left corner.
 * </p>
 * @param int $y <p>
 * y-coordinate of the upper left corner.
 * </p>
 * @param string $string <p>
 * The string to be written.
 * </p>
 * @param int $color <p>
 * A color identifier created with 
 * imagecolorallocate.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function gd_string ($image, $font, $x, $y, $string, $color)
{
    return imagestring($image, $font, $x, $y, $string, $color);
}

/**
 * Draw a string vertically
 * @link http://php.net/manual/en/function.imagestringup.php
 * @param resource $image 
 * @param int $font 
 * @param int $x <p>
 * x-coordinate of the upper left corner.
 * </p>
 * @param int $y <p>
 * y-coordinate of the upper left corner.
 * </p>
 * @param string $string <p>
 * The string to be written.
 * </p>
 * @param int $color <p>
 * A color identifier created with 
 * imagecolorallocate.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function gd_string_up ($image, $font, $x, $y, $string, $color)
{
    return imagestringup($image, $font, $x, $y, $string, $color);
}

/**
 * Get image width
 * @link http://php.net/manual/en/function.imagesx.php
 * @param resource $image 
 * @return int Return the width of the image or false on 
 * errors.
 * @since 4.0
 * @since 5.0
 */
function gd_width ($image)
{
    return imagesx($image);
}

/**
 * Get image height
 * @link http://php.net/manual/en/function.imagesy.php
 * @param resource $image 
 * @return int Return the height of the image or false on 
 * errors.
 * @since 4.0
 * @since 5.0
 */
function gd_height ($image)
{
    return imagesy($image);
}

/**
 * Convert a true color image to a palette image
 * @link http://php.net/manual/en/function.imagetruecolortopalette.php
 * @param resource $image 
 * @param bool $dither <p>
 * Indicates if the image should be dithered - if it is true then
 * dithering will be used which will result in a more speckled image but
 * with better color approximation.
 * </p>
 * @param int $ncolors <p>
 * Sets the maximum number of colors that should be retained in the palette.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0.6
 * @since 5.0
 */
function gd_true_color_to_palette ($image, $dither, $ncolors)
{
    return imagetruecolortopalette($image, $dither, $ncolors);
}

/**
 * Give the bounding box of a text using TrueType fonts
 * @link http://php.net/manual/en/function.imagettfbbox.php
 * @param float $size <p>
 * The font size. Depending on your version of GD, this should be
 * specified as the pixel size (GD1) or point size (GD2).
 * </p>
 * @param float $angle <p>
 * Angle in degrees in which text will be measured.
 * </p>
 * @param string $fontfile <p>
 * The name of the TrueType font file (can be a URL). Depending on
 * which version of the GD library that PHP is using, it may attempt to
 * search for files that do not begin with a leading '/' by appending
 * '.ttf' to the filename and searching along a library-defined font path.
 * </p>
 * @param string $text <p>
 * The string to be measured.
 * </p>
 * @return array imagettfbbox returns an array with 8
 * elements representing four points making the bounding box of the
 * text on success and false on error.
 * <tr valign="top">
 * <td>key</td>
 * <td>contents</td>
 * </tr>
 * <tr valign="top">
 * <td>0</td>
 * <td>lower left corner, X position</td>
 * </tr>
 * <tr valign="top">
 * <td>1</td>
 * <td>lower left corner, Y position</td>
 * </tr>
 * <tr valign="top">
 * <td>2</td>
 * <td>lower right corner, X position</td>
 * </tr>
 * <tr valign="top">
 * <td>3</td>
 * <td>lower right corner, Y position</td>
 * </tr>
 * <tr valign="top">
 * <td>4</td>
 * <td>upper right corner, X position</td>
 * </tr>
 * <tr valign="top">
 * <td>5</td>
 * <td>upper right corner, Y position</td>
 * </tr>
 * <tr valign="top">
 * <td>6</td>
 * <td>upper left corner, X position</td>
 * </tr>
 * <tr valign="top">
 * <td>7</td>
 * <td>upper left corner, Y position</td>
 * </tr>
 * </p>
 * <p>
 * The points are relative to the text regardless of the
 * angle, so "upper left" means in the top left-hand 
 * corner seeing the text horizontally.
 * @since 4.0
 * @since 5.0
 */
function gd_ttf_bbox ($size, $angle, $fontfile, $text)
{
    return imagettfbbox($size, $angle, $fontfile, $text);
}

/**
 * Write text to the image using TrueType fonts
 * @link http://php.net/manual/en/function.imagettftext.php
 * @param resource $image 
 * @param float $size <p>
 * The font size. Depending on your version of GD, this should be
 * specified as the pixel size (GD1) or point size (GD2).
 * </p>
 * @param float $angle <p>
 * The angle in degrees, with 0 degrees being left-to-right reading text.
 * Higher values represent a counter-clockwise rotation. For example, a 
 * value of 90 would result in bottom-to-top reading text.
 * </p>
 * @param int $x <p>
 * The coordinates given by x and
 * y will define the basepoint of the first
 * character (roughly the lower-left corner of the character). This
 * is different from the imagestring, where
 * x and y define the
 * upper-left corner of the first character. For example, "top left"
 * is 0, 0.
 * </p>
 * @param int $y <p>
 * The y-ordinate. This sets the position of the fonts baseline, not the
 * very bottom of the character.
 * </p>
 * @param int $color <p>
 * The color index. Using the negative of a color index has the effect of
 * turning off antialiasing. See imagecolorallocate.
 * </p>
 * @param string $fontfile <p>
 * The path to the TrueType font you wish to use.
 * </p>
 * <p>
 * Depending on which version of the GD library PHP is using, when
 * fontfile does not begin with a leading
 * / then .ttf will be appended
 * to the filename and the library will attempt to search for that
 * filename along a library-defined font path.
 * </p>
 * <p>
 * When using versions of the GD library lower than 2.0.18, a space character,
 * rather than a semicolon, was used as the 'path separator' for different font files.
 * Unintentional use of this feature will result in the warning message:
 * Warning: Could not find/open font. For these affected versions, the
 * only solution is moving the font to a path which does not contain spaces.
 * </p>
 * <p>
 * In many cases where a font resides in the same directory as the script using it
 * the following trick will alleviate any include problems.
 * ]]>
 * </p>
 * @param string $text <p>
 * The text string in UTF-8 encoding.
 * </p>
 * <p>
 * May include decimal numeric character references (of the form:
 * &amp;#8364;) to access characters in a font beyond position 127.
 * The hexadecimal format (like &amp;#xA9;) is supported.
 * Strings in UTF-8 encoding can be passed directly.
 * </p>
 * <p>
 * Named entities, such as &amp;copy;, are not supported. Consider using 
 * html_entity_decode
 * to decode these named entities into UTF-8 strings (html_entity_decode()
 * supports this as of PHP 5.0.0).
 * </p>
 * <p>
 * If a character is used in the string which is not supported by the
 * font, a hollow rectangle will replace the character.
 * </p>
 * @return array an array with 8 elements representing four points making the
 * bounding box of the text. The order of the points is lower left, lower 
 * right, upper right, upper left. The points are relative to the text
 * regardless of the angle, so "upper left" means in the top left-hand 
 * corner when you see the text horizontally.
 * Returns false on error.
 * @since 4.0
 * @since 5.0
 */
function gd_ttf_text ($image, $size, $angle, $x, $y, $color, $fontfile, $text)
{
    return imagettftext($image, $size, $angle, $x, $y, $color, $fontfile, $text);
}

/**
 * Return the image types supported by this PHP build
 * @link http://php.net/manual/en/function.imagetypes.php
 * @return int a bit-field corresponding to the image formats supported by the
 * version of GD linked into PHP. The following bits are returned, 
 * IMG_GIF | IMG_JPG |
 * IMG_PNG | IMG_WBMP | 
 * IMG_XPM.
 * @since 4.0.2
 * @since 5.0
 */
function gd_types ()
{
    return imagetypes();
}

/**
 * Output image to browser or file
 * @link http://php.net/manual/en/function.imagewbmp.php
 * @param resource $image 
 * @param string $filename [optional] <p>
 * The path to save the file to. If not set or &null;, the raw image stream
 * will be outputted directly.
 * </p>
 * @param int $foreground [optional] <p>
 * You can set the foreground color with this parameter by setting an
 * identifier obtained from imagecolorallocate.
 * The default foreground color is black.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0.1
 * @since 5.0
 */
function gd_wbmp ($image, $filename = null, $foreground = null)
{
    return imagewbmp($image, $filename, $foreground);
}

/**
 * Output a WebP image to browser or file
 * @link http://php.net/manual/en/function.imagewebp.php
 * @param resource $image 
 * @param string $to [optional] <p>
 * The path to save the file to. If not set or &null;, the raw image stream
 * will be outputted directly.
 * </p>
 * @param int $quality [optional] <p>
 * quality ranges from 0 (worst quality, smaller file) to 100 (best quality, biggest file).
 * </p>
 * @return bool true on success or false on failure.
 * @since 5.4
 */
function gd_webp ($image, $to = null, $quality = 80)
{
    return imagewebp($image, $to, $quality);
}

/**
 * Output XBM image to browser or file
 * @link http://php.net/manual/en/function.imagexbm.php
 * @param resource $image 
 * @param string $filename <p>
 * The path to save the file to. If not set or &null;, the raw image stream
 * will be outputted directly.
 * </p>
 * @param int $foreground [optional] <p>
 * You can set the foreground color with this parameter by setting an
 * identifier obtained from imagecolorallocate.
 * The default foreground color is black.
 * </p>
 * @return bool true on success or false on failure.
 */
function gd_xbm ($image, $filename, $foreground = null)
{
    return imagexbm($image, $filename, $foreground);
}

/**
 * Embeds binary IPTC data into a JPEG image
 * @link http://php.net/manual/en/function.iptcembed.php
 * @param string $iptcdata <p>
 * The data to be written.
 * </p>
 * @param string $jpeg_file_name <p>
 * Path to the JPEG image.
 * </p>
 * @param int $spool [optional] <p>
 * Spool flag. If the spool flag is over 2 then the JPEG will be 
 * returned as a string.
 * </p>
 * @return mixed If success and spool flag is lower than 2 then the JPEG will not be 
 * returned as a string, false on errors.
 * @since 4.0
 * @since 5.0
 */
function gd_iptc_embed ($iptcdata, $jpeg_file_name, $spool = null)
{
    return iptcembed($iptcdata, $jpeg_file_name, $spool);
}

/**
 * Parse a binary IPTC block into single tags.
 * @link http://php.net/manual/en/function.iptcparse.php
 * @param string $iptcblock <p>
 * A binary IPTC block.
 * </p>
 * @return array an array using the tagmarker as an index and the value as the
 * value. It returns false on error or if no IPTC data was found.
 * @since 4.0
 * @since 5.0
 */
function gd_iptc_parse ($iptcblock)
{
    return iptcparse($iptcblock);
}

/**
 * Convert JPEG image file to WBMP image file
 * @link http://php.net/manual/en/function.jpeg2wbmp.php
 * @param string $jpegname <p>
 * Path to JPEG file.
 * </p>
 * @param string $wbmpname <p>
 * Path to destination WBMP file.
 * </p>
 * @param int $dest_height <p>
 * Destination image height.
 * </p>
 * @param int $dest_width <p>
 * Destination image width.
 * </p>
 * @param int $threshold <p>
 * Threshold value, between 0 and 8 (inclusive).
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0.5
 * @since 5.0
 */
function gd_jpeg2wbmp ($jpegname, $wbmpname, $dest_height, $dest_width, $threshold)
{
    return jpeg2wbmp($jpegname, $wbmpname, $dest_height, $dest_width, $threshold);
}

/**
 * Convert PNG image file to WBMP image file
 * @link http://php.net/manual/en/function.png2wbmp.php
 * @param string $pngname <p>
 * Path to PNG file.
 * </p>
 * @param string $wbmpname <p>
 * Path to destination WBMP file.
 * </p>
 * @param int $dest_height <p>
 * Destination image height.
 * </p>
 * @param int $dest_width <p>
 * Destination image width.
 * </p>
 * @param int $threshold <p>
 * Threshold value, between 0 and 8 (inclusive).
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0.5
 * @since 5.0
 */
function gd_png2wbmp ($pngname, $wbmpname, $dest_height, $dest_width, $threshold)
{
    return png2wbmp($pngname, $wbmpname, $dest_height, $dest_width, $threshold);
}

/**
 * Determine the type of an image
 * @link http://php.net/manual/en/function.exif-imagetype.php
 * @param string $filename The image being checked.
 * @return int When a correct signature is found, the appropriate constant value will be
 * returned otherwise the return value is <b>FALSE</b>. The return value is the
 * same value that <b>getimagesize</b> returns in index 2 but
 * <b>exif_imagetype</b> is much faster.
 * </p>
 * <p>
 * <b>exif_imagetype</b> will emit an <b>E_NOTICE</b>
 * and return <b>FALSE</b> if it is unable to read enough bytes from the file to
 * determine the image type.
 * @since 4.3.0
 * @since 5.0
 */
function exif_image_type ($filename)
{
    return exif_imagetype($filename);
}

/**
 * Get the header name for an index
 * @link http://php.net/manual/en/function.exif-tagname.php
 * @param int $index <p>
 * The Tag ID for which a Tag Name will be looked up.
 * </p>
 * @return string the header name, or <b>FALSE</b> if <i>index</i> is
 * not a defined EXIF tag id.
 * @since 4.2.0
 * @since 5.0
 */
function exif_tag_name ($index)
{
    return exif_tagname($index);
}

/**
 * Decode string in MIME header field
 * @link http://php.net/manual/en/function.mb-decode-mimeheader.php
 * @param string $str <p>
 * The string being decoded.
 * </p>
 * @return string The decoded string in internal character encoding.
 * @since 4.0.6
 * @since 5.0
 */
function mb_decode_mime_header ($str)
{
    return mb_decode_mimeheader($str);
}

/**
 * Decode HTML numeric string reference to character
 * @link http://php.net/manual/en/function.mb-decode-numericentity.php
 * @param string $str <p>
 * The string being decoded.
 * </p>
 * @param int[] $convmap <p>
 * convmap is an array that specifies
 * the code area to convert.
 * </p>
 * @param string $encoding &mbstring.encoding.parameter;
 * @return string The converted string.
 * @since 4.0.6
 * @since 5.0
 */
function mb_decode_numeric_entity ($str, array $convmap, $encoding = null)
{
    return mb_decode_numericentity($str, $convmap, $encoding);
}

/**
 * Encode string for MIME header
 * @link http://php.net/manual/en/function.mb-encode-mimeheader.php
 * @param string $str <p>
 * The string being encoded.
 * </p>
 * @param string $charset [optional] <p>
 * charset specifies the name of the character set
 * in which str is represented in. The default value
 * is determined by the current NLS setting (mbstring.language).
 * mb_internal_encoding should be set to same encoding.
 * </p>
 * @param string $transfer_encoding [optional] <p>
 * transfer_encoding specifies the scheme of MIME
 * encoding. It should be either "B" (Base64) or
 * "Q" (Quoted-Printable). Falls back to
 * "B" if not given.
 * </p>
 * @param string $linefeed [optional] <p>
 * linefeed specifies the EOL (end-of-line) marker
 * with which mb_encode_mimeheader performs
 * line-folding (a RFC term,
 * the act of breaking a line longer than a certain length into multiple
 * lines. The length is currently hard-coded to 74 characters).
 * Falls back to "\r\n" (CRLF) if not given.
 * </p>
 * @param int $indent [optional] <p>
 * Indentation of the first line (number of characters in the header
 * before str).
 * </p>
 * @return string A converted version of the string represented in ASCII.
 * @since 4.0.6
 * @since 5.0
 */
function mb_encode_mime_header ($str, $charset = null, $transfer_encoding = null, $linefeed = null, $indent = null)
{
    return mb_encode_mimeheader($str, $charset, $transfer_encoding, $linefeed, $indent);
}

/**
 * Encode character to HTML numeric string reference
 * @link http://php.net/manual/en/function.mb-encode-numericentity.php
 * @param string $str <p>
 * The string being encoded.
 * </p>
 * @param int[] $convmap <p>
 * convmap is array specifies code area to
 * convert.
 * </p>
 * @param string $encoding &mbstring.encoding.parameter;
 * @param bool $is_hex [optional]
 * @return string The converted string.
 * @since 4.0.6
 * @since 5.0
 */
function mb_encode_numeric_entity ($str, array $convmap, $encoding = null, $is_hex = false)
{
    return mb_encode_numericentity($str, $convmap, $encoding, $is_hex);
}

/**
 * Send encoded mail
 * @link http://php.net/manual/en/function.mb-send-mail.php
 * @param string $to <p>
 * The mail addresses being sent to. Multiple
 * recipients may be specified by putting a comma between each
 * address in to. 
 * This parameter is not automatically encoded.
 * </p>
 * @param string $subject <p>
 * The subject of the mail.
 * </p>
 * @param string $message <p>
 * The message of the mail.
 * </p>
 * @param string $additional_headers [optional] <p>
 * additional_headers is inserted at
 * the end of the header. This is typically used to add extra
 * headers. Multiple extra headers are separated with a
 * newline ("\n").
 * </p>
 * @param string $additional_parameter [optional] <p>
 * additional_parameter is a MTA command line
 * parameter. It is useful when setting the correct Return-Path
 * header when using sendmail.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0.6
 * @since 5.0
 */
function mb_mail ($to, $subject, $message, $additional_headers = null, $additional_parameter = null)
{
    return mb_send_mail($to, $subject, $message, $additional_headers, $additional_parameter);
}

/**
 * Queries the remote side of the given socket which may either result in host/port or in a Unix filesystem path, dependent on its type
 * @link http://php.net/manual/en/function.socket-getpeername.php
 * @param resource $socket <p>
 * A valid socket resource created with <b>socket_create</b>
 * or <b>socket_accept</b>.
 * </p>
 * @param string $address <p>
 * If the given socket is of type <b>AF_INET</b> or
 * <b>AF_INET6</b>, <b>socket_getpeername</b>
 * will return the peers (remote) IP address in
 * appropriate notation (e.g. 127.0.0.1 or
 * fe80::1) in the <i>address</i>
 * parameter and, if the optional <i>port</i> parameter is
 * present, also the associated port.
 * </p>
 * <p>
 * If the given socket is of type <b>AF_UNIX</b>,
 * <b>socket_getpeername</b> will return the Unix filesystem
 * path (e.g. /var/run/daemon.sock) in the
 * <i>address</i> parameter.
 * </p>
 * @param int $port [optional] <p>
 * If given, this will hold the port associated to
 * <i>address</i>.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure. <b>socket_getpeername</b> may also return
 * <b>FALSE</b> if the socket type is not any of <b>AF_INET</b>,
 * <b>AF_INET6</b>, or <b>AF_UNIX</b>, in which
 * case the last socket error code is not updated.
 * @since 4.1.0
 * @since 5.0
 */
function socket_get_peer_name ($socket, &$address, &$port = null)
{
    return socket_getpeername($socket, $address, $port);
}

/**
 * Queries the local side of the given socket which may either result in host/port or in a Unix filesystem path, dependent on its type
 * @link http://php.net/manual/en/function.socket-getsockname.php
 * @param resource $socket <p>
 * A valid socket resource created with <b>socket_create</b>
 * or <b>socket_accept</b>.
 * </p>
 * @param string $addr <p>
 * If the given socket is of type <b>AF_INET</b>
 * or <b>AF_INET6</b>, <b>socket_getsockname</b>
 * will return the local IP address in appropriate notation (e.g.
 * 127.0.0.1 or fe80::1) in the
 * <i>address</i> parameter and, if the optional
 * <i>port</i> parameter is present, also the associated port.
 * </p>
 * <p>
 * If the given socket is of type <b>AF_UNIX</b>,
 * <b>socket_getsockname</b> will return the Unix filesystem
 * path (e.g. /var/run/daemon.sock) in the
 * <i>address</i> parameter.
 * </p>
 * @param int $port [optional] <p>
 * If provided, this will hold the associated port.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure. <b>socket_getsockname</b> may also return
 * <b>FALSE</b> if the socket type is not any of <b>AF_INET</b>,
 * <b>AF_INET6</b>, or <b>AF_UNIX</b>, in which
 * case the last socket error code is not updated.
 * @since 4.1.0
 * @since 5.0
 */
function socket_get_sock_name ($socket, &$addr, &$port = null)
{
    return socket_getsockname($socket, $addr, $port);
}

/**
 * Receives data from a socket whether or not it is connection-oriented
 * @link http://php.net/manual/en/function.socket-recvfrom.php
 * @param resource $socket <p>
 * The <i>socket</i> must be a socket resource previously
 * created by socket_create().
 * </p>
 * @param string $buf <p>
 * The data received will be fetched to the variable specified with
 * <i>buf</i>.
 * </p>
 * @param int $len <p>
 * Up to <i>len</i> bytes will be fetched from remote host.
 * </p>
 * @param int $flags <p>
 * The value of <i>flags</i> can be any combination of
 * the following flags, joined with the binary OR (|)
 * operator.
 * </p>
 * <table>
 * Possible values for <i>flags</i>
 * <tr valign="top">
 * <td>Flag</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_OOB</b></td>
 * <td>
 * Process out-of-band data.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_PEEK</b></td>
 * <td>
 * Receive data from the beginning of the receive queue without
 * removing it from the queue.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_WAITALL</b></td>
 * <td>
 * Block until at least <i>len</i> are received.
 * However, if a signal is caught or the remote host disconnects, the
 * function may return less data.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_DONTWAIT</b></td>
 * <td>
 * With this flag set, the function returns even if it would normally
 * have blocked.
 * </td>
 * </tr>
 * </table>
 * @param string $name <p>
 * If the socket is of the type <b>AF_UNIX</b> type,
 * <i>name</i> is the path to the file. Else, for
 * unconnected sockets, <i>name</i> is the IP address of,
 * the remote host, or <b>NULL</b> if the socket is connection-oriented.
 * </p>
 * @param int $port [optional] <p>
 * This argument only applies to <b>AF_INET</b> and
 * <b>AF_INET6</b> sockets, and specifies the remote port
 * from which the data is received. If the socket is connection-oriented,
 * <i>port</i> will be <b>NULL</b>.
 * </p>
 * @return int <b>socket_recvfrom</b> returns the number of bytes received,
 * or <b>FALSE</b> if there was an error. The actual error code can be retrieved by
 * calling <b>socket_last_error</b>. This error code may be
 * passed to <b>socket_strerror</b> to get a textual explanation
 * of the error.
 * @since 4.1.0
 * @since 5.0
 */
function socket_recv_from ($socket, &$buf, $len, $flags, &$name, &$port = null)
{
    return socket_recvfrom($socket, $buf, $len, $flags, $name, $port);
}

/**
 * Read a message
 * @link http://www.php.net/manual/en/function.socket-recvmsg.php
 * @param resource $socket
 * @param string $message
 * @param int $flags [optional]
 * @return int
 * @since 5.5.0
 */
function socket_recv_msg ($socket , $message, $flags)
{
    return socket_recvmsg($socket, $message, $flags);
}

/**
 * (PHP 5 &gt;=5.5.0)<br/>
 * Send a message
 * @link http://www.php.net/manual/en/function.socket-sendmsg.php
 * @param resource $socket
 * @param array $message
 * @param int $flags
 * @return int
 * @since 5.5.0
 */
function socket_send_msg ($socket, array $message, $flags )
{
    return socket_sendmsg($socket, $message, $flags);
}

/**
 * Sends a message to a socket, whether it is connected or not
 * @link http://php.net/manual/en/function.socket-sendto.php
 * @param resource $socket <p>
 * A valid socket resource created using <b>socket_create</b>.
 * </p>
 * @param string $buf <p>
 * The sent data will be taken from buffer <i>buf</i>.
 * </p>
 * @param int $len <p>
 * <i>len</i> bytes from <i>buf</i> will be
 * sent.
 * </p>
 * @param int $flags <p>
 * The value of <i>flags</i> can be any combination of
 * the following flags, joined with the binary OR (|)
 * operator.
 * <table>
 * Possible values for <i>flags</i>
 * <tr valign="top">
 * <td><b>MSG_OOB</b></td>
 * <td>
 * Send OOB (out-of-band) data.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_EOR</b></td>
 * <td>
 * Indicate a record mark. The sent data completes the record.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_EOF</b></td>
 * <td>
 * Close the sender side of the socket and include an appropriate
 * notification of this at the end of the sent data. The sent data
 * completes the transaction.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_DONTROUTE</b></td>
 * <td>
 * Bypass routing, use direct interface.
 * </td>
 * </tr>
 * </table>
 * </p>
 * @param string $addr <p>
 * IP address of the remote host.
 * </p>
 * @param int $port [optional] <p>
 * <i>port</i> is the remote port number at which the data
 * will be sent.
 * </p>
 * @return int <b>socket_sendto</b> returns the number of bytes sent to the
 * remote host, or <b>FALSE</b> if an error occurred.
 * @since 4.1.0
 * @since 5.0
 */
function socket_send_to ($socket, $buf, $len, $flags, $addr, $port = 0)
{
    return socket_sendto($socket, $buf, $len, $flags, $addr, $port);
}

/**
 * Return a string describing a socket error
 * @link http://php.net/manual/en/function.socket-strerror.php
 * @param int $errno <p>
 * A valid socket error number, likely produced by
 * <b>socket_last_error</b>.
 * </p>
 * @return string the error message associated with the <i>errno</i>
 * parameter.
 * @since 4.1.0
 * @since 5.0
 */
function socket_errstr ($errno)
{
    return socket_strerror($errno);
}

/**
 * Fetches all HTTP headers from the current request.
 * This function is an alias for apache_request_headers(). Please read the apache_request_headers() documentation for more information on how this function works.
 * @link http://php.net/manual/en/function.getallheaders.php
 * @return array|false An associative array of all the HTTP headers in the current request, or <b>FALSE</b> on failure.
 * @since 4.0
 * @since 5.0
 */
function sapi_request_headers ()
{
    return getallheaders();
}

/**
 * Perform an Apache sub-request
 * virtual() is an Apache-specific function which is similar to <!--#include virtual...--> in mod_include. It performs an Apache sub-request. It is useful for including CGI scripts or .shtml files, or anything else that you would parse through Apache. Note that for a CGI script, the script must generate valid CGI headers. At the minimum that means it must generate a Content-Type header.
 * To run the sub-request, all buffers are terminated and flushed to the browser, pending headers are sent too.
 * This function is supported when PHP is installed as an Apache module or by the NSAPI server module in Netscape/iPlanet/SunONE webservers.
 * @link hhttp://php.net/manual/en/function.virtual.php
 * @param string $filename <p>
 * The file that the virtual command will be performed on.
 * </p>
 * @return bool Performs the virtual command on success, or returns FALSE on failure.
 * @since 4.0
 * @since 5.0
 */
function apache_virtual ( $filename )
{
    return virtual($filename);
}

/**
 * Get an Apache subprocess_env variable
 * Retrieve an Apache environment variable specified by $variable.
 * This function requires Apache 2 otherwise it's undefined.
 * @link http://php.net/manual/en/function.apache-getenv.php
 * @param string $variable <p>
 * The Apache environment variable.
 * </p>
 * @param bool $walk_to_top <p>
 * Whether to get the top-level variable available to all Apache layers.
 * </p>
 * @return string|false The value of the Apache environment variable on success, or <b>FALSE</b> on failure.
 * @since 4.3.0
 * @since 5.0
 */
function apache_get_env ( $variable, $walk_to_top = false )
{
    return apache_getenv($variable, $walk_to_top);
}

/**
 * Sets the value of the Apache environment variable specified by variable.
 * Note: When setting an Apache environment variable, the corresponding $_SERVER variable is not changed.
 * @link http://php.net/manual/en/function.apache-setenv.php
 * @param string $variable <p>
 * The environment variable that's being set.
 * </p>
 * @param string $value <p>
 * The new variable value.
 * </p>
 * @param bool $walk_to_top <p>
 * Whether to set the top-level variable available to all Apache layers.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 * @since 4.2.0
 * @since 5.0
 */
function apache_set_env ( $variable, $value, $walk_to_top = false )
{
    return apache_setenv($variable, $value, $walk_to_top);
}

/**
 * Get date/time information
 * @link http://php.net/manual/en/function.getdate.php
 * @param int $timestamp [optional] 
 * @return array an associative array of information related to
 * the timestamp. Elements from the returned 
 * associative array are as follows:
 * </p>
 * <p>
 * <table>
 * Key elements of the returned associative array
 * <tr valign="top">
 * <td>Key</td>
 * <td>Description</td>
 * <td>Example returned values</td>
 * </tr>
 * <tr valign="top">
 * <td>"seconds"</td>
 * <td>Numeric representation of seconds</td>
 * <td>0 to 59</td>
 * </tr>
 * <tr valign="top">
 * <td>"minutes"</td>
 * <td>Numeric representation of minutes</td>
 * <td>0 to 59</td>
 * </tr>
 * <tr valign="top">
 * <td>"hours"</td>
 * <td>Numeric representation of hours</td>
 * <td>0 to 23</td>
 * </tr>
 * <tr valign="top">
 * <td>"mday"</td>
 * <td>Numeric representation of the day of the month</td>
 * <td>1 to 31</td>
 * </tr>
 * <tr valign="top">
 * <td>"wday"</td>
 * <td>Numeric representation of the day of the week</td>
 * <td>0 (for Sunday) through 6 (for Saturday)</td>
 * </tr>
 * <tr valign="top">
 * <td>"mon"</td>
 * <td>Numeric representation of a month</td>
 * <td>1 through 12</td>
 * </tr>
 * <tr valign="top">
 * <td>"year"</td>
 * <td>A full numeric representation of a year, 4 digits</td>
 * <td>Examples: 1999 or 2003</td>
 * </tr>
 * <tr valign="top">
 * <td>"yday"</td>
 * <td>Numeric representation of the day of the year</td>
 * <td>0 through 365</td>
 * </tr>
 * <tr valign="top">
 * <td>"weekday"</td>
 * <td>A full textual representation of the day of the week</td>
 * <td>Sunday through Saturday</td>
 * </tr>
 * <tr valign="top">
 * <td>"month"</td>
 * <td>A full textual representation of a month, such as January or March</td>
 * <td>January through December</td>
 * </tr>
 * <tr valign="top">
 * <td>0</td>
 * <td>
 * Seconds since the Unix Epoch, similar to the values returned by
 * time and used by date.
 * </td>
 * <td>
 * System Dependent, typically -2147483648 through
 * 2147483647.
 * </td>
 * </tr>
 * </table>
 * @since 4.0
 * @since 5.0
 */
function date_get ($timestamp = null)
{
    return getdate($timestamp);
}

/**
 * Validate a Gregorian date
 * @link http://php.net/manual/en/function.checkdate.php
 * @param int $month <p>
 * The month is between 1 and 12 inclusive.
 * </p>
 * @param int $day <p>
 * The day is within the allowed number of days for the given 
 * month. Leap years 
 * are taken into consideration.
 * </p>
 * @param int $year <p>
 * The year is between 1 and 32767 inclusive.
 * </p>
 * @return bool true if the date given is valid; otherwise returns false.
 * @since 4.0
 * @since 5.0
 */
function date_check ($month, $day, $year)
{
    return checkdate($month, $day, $year);
}

/**
 * Format a local time/date as integer
 * @link http://php.net/manual/en/function.idate.php
 * @param string $format <p>
 * <table>
 * The following characters are recognized in the
 * format parameter string
 * <tr valign="top">
 * <td>format character</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>B</td>
 * <td>Swatch Beat/Internet Time</td>
 * </tr>
 * <tr valign="top">
 * <td>d</td>
 * <td>Day of the month</td>
 * </tr>
 * <tr valign="top">
 * <td>h</td>
 * <td>Hour (12 hour format)</td>
 * </tr>
 * <tr valign="top">
 * <td>H</td>
 * <td>Hour (24 hour format)</td>
 * </tr>
 * <tr valign="top">
 * <td>i</td>
 * <td>Minutes</td>
 * </tr>
 * <tr valign="top">
 * <td>I (uppercase i)</td>
 * <td>returns 1 if DST is activated,
 * 0 otherwise</td>
 * </tr>
 * <tr valign="top">
 * <td>L (uppercase l)</td>
 * <td>returns 1 for leap year,
 * 0 otherwise</td>
 * </tr>
 * <tr valign="top">
 * <td>m</td>
 * <td>Month number</td>
 * </tr>
 * <tr valign="top">
 * <td>s</td>
 * <td>Seconds</td>
 * </tr>
 * <tr valign="top">
 * <td>t</td>
 * <td>Days in current month</td>
 * </tr>
 * <tr valign="top">
 * <td>U</td>
 * <td>Seconds since the Unix Epoch - January 1 1970 00:00:00 UTC -
 * this is the same as time</td>
 * </tr>
 * <tr valign="top">
 * <td>w</td>
 * <td>Day of the week (0 on Sunday)</td>
 * </tr>
 * <tr valign="top">
 * <td>W</td>
 * <td>ISO-8601 week number of year, weeks starting on
 * Monday</td>
 * </tr>
 * <tr valign="top">
 * <td>y</td>
 * <td>Year (1 or 2 digits - check note below)</td>
 * </tr>
 * <tr valign="top">
 * <td>Y</td>
 * <td>Year (4 digits)</td>
 * </tr>
 * <tr valign="top">
 * <td>z</td>
 * <td>Day of the year</td>
 * </tr>
 * <tr valign="top">
 * <td>Z</td>
 * <td>Timezone offset in seconds</td>
 * </tr>
 * </table>
 * </p>
 * @param int $timestamp [optional] 
 * @return int an integer.
 * </p>
 * <p>
 * As idate always returns an integer and
 * as they can't start with a "0", idate may return
 * fewer digits than you would expect. See the example below.
 * @since 5.0
 */
function time_part ($format, $timestamp = null)
{
    return idate($format, $timestamp);
}

/**
 * Get Unix timestamp for a date
 * @link http://php.net/manual/en/function.mktime.php
 * @param int $hour [optional] <p>
 * The number of the hour.
 * </p>
 * @param int $minute [optional] <p>
 * The number of the minute.
 * </p>
 * @param int $second [optional] <p>
 * The number of seconds past the minute.
 * </p>
 * @param int $month [optional] <p>
 * The number of the month.
 * </p>
 * @param int $day [optional] <p>
 * The number of the day.
 * </p>
 * @param int $year [optional] <p>
 * The number of the year, may be a two or four digit value,
 * with values between 0-69 mapping to 2000-2069 and 70-100 to
 * 1970-2000. On systems where time_t is a 32bit signed integer, as
 * most common today, the valid range for year 
 * is somewhere between 1901 and 2038. However, before PHP 5.1.0 this
 * range was limited from 1970 to 2038 on some systems (e.g. Windows).
 * </p>
 * @param int $is_dst [optional] <p>
 * Deprecated since 5.3.0 - use Use the new timezone handling functions instead.<p>
 * This parameter can be set to 1 if the time is during daylight savings time (DST), 
 * 0 if it is not, or -1 (the default) if it is unknown whether the time is within 
 * daylight savings time or not. If it's unknown, PHP tries to figure it out itself.
 * This can cause unexpected (but not incorrect) results.
 * Some times are invalid if DST is enabled on the system PHP is running on or 
 * is_dst is set to 1. If DST is enabled in e.g. 2:00, all times 
 * between 2:00 and 3:00 are invalid and mktime returns an undefined 
 * (usually negative) value. 
 * Some systems (e.g. Solaris 8) enable DST at midnight so time 0:30 of the day when DST 
 * is enabled is evaluated as 23:30 of the previous day.
 * </p>
 * <p>
 * As of PHP 5.1.0, this parameter became deprecated. As a result, the
 * new timezone handling features should be used instead.
 * </p>
 * <p>
 * This parameter has been removed in PHP 7.0.0.
 * </p>
 * @return int|false mktime returns the Unix timestamp of the arguments
 * given.
 * If the arguments are invalid, the function returns false (before PHP 5.1
 * it returned -1).
 * @since 4.0
 * @since 5.0
 */
function time_make ($hour = null, $minute = null, $second = null, $month = null, $day = null, $year = null, $is_dst = -1)
{
    return mktime($hour, $minute, $second, $month, $day, $year, $is_dst);
}

/**
 * Format a local time/date according to locale settings
 * The following characters are recognized in the
 * format parameter string
 * <table>
 * <tr valign="top">
 * <td>format</td>
 * <td>Description</td>
 * <td>Example returned values</td>
 * </tr>
 * <th valign="top" colspan="3" bgcolor="silver">
 * Day</th>
 * </tr>
 * <tr valign="top">
 * <td>%a</td>
 * <td>An abbreviated textual representation of the day</td>
 * <td>Sun through Sat</td>
 * </tr>
 * <tr valign="top">
 * <td>%A</td>
 * <td>A full textual representation of the day</td>
 * <td>Sunday through Saturday</td>
 * </tr>
 * <tr valign="top">
 * <td>%d</td>
 * <td>Two-digit day of the month (with leading zeros)</td>
 * <td>01 to 31</td>
 * </tr>
 * <tr valign="top">
 * <td>%e</td>
 * <td>Day of the month, with a space preceding single digits</td>
 * <td> 1 to 31</td>
 * </tr>
 * <tr valign="top">
 * <td>%j</td>
 * <td>Day of the year, 3 digits with leading zeros</td>
 * <td>001 to 366</td>
 * </tr>
 * <tr valign="top">
 * <td>%u</td>
 * <td>ISO-8601 numeric representation of the day of the week</td>
 * <td>1 (for Monday) though 7 (for Sunday)</td>
 * </tr>
 * <tr valign="top">
 * <td>%w</td>
 * <td>Numeric representation of the day of the week</td>
 * <td>0 (for Sunday) through 6 (for Saturday)</td>
 * </tr>
 * <tr valign="top">
 * <th colspan="3" bgcolor="silver">Week</th>
 * </tr>
 * <tr valign="top">
 * <td>%U</td>
 * <td>Week number of the given year, starting with the first
 * Sunday as the first week</td>
 * <td>13 (for the 13th full week of the year)</td>
 * </tr>
 * <tr valign="top">
 * <td>%V</td>
 * <td>ISO-8601:1988 week number of the given year, starting with
 * the first week of the year with at least 4 weekdays, with Monday
 * being the start of the week</td>
 * <td>01 through 53 (where 53
 * accounts for an overlapping week)</td>
 * </tr>
 * <tr valign="top">
 * <td>%W</td>
 * <td>A numeric representation of the week of the year, starting
 * with the first Monday as the first week</td>
 * <td>46 (for the 46th week of the year beginning
 * with a Monday)</td>
 * </tr>
 * <tr valign="top">
 * <th colspan="3" bgcolor="silver">Month</th>
 * </tr>
 * <tr valign="top">
 * <td>%b</td>
 * <td>Abbreviated month name, based on the locale</td>
 * <td>Jan through Dec</td>
 * </tr>
 * <tr valign="top">
 * <td>%B</td>
 * <td>Full month name, based on the locale</td>
 * <td>January through December</td>
 * </tr>
 * <tr valign="top">
 * <td>%h</td>
 * <td>Abbreviated month name, based on the locale (an alias of %b)</td>
 * <td>Jan through Dec</td>
 * </tr>
 * <tr valign="top">
 * <td>%m</td>
 * <td>Two digit representation of the month</td>
 * <td>01 (for January) through 12 (for December)</td>
 * </tr>
 * <tr valign="top">
 * <th colspan="3" bgcolor="silver">Year</th>
 * </tr>
 * <tr valign="top">
 * <td>%C</td>
 * <td>Two digit representation of the century (year divided by 100, truncated to an integer)</td>
 * <td>19 for the 20th Century</td>
 * </tr>
 * <tr valign="top">
 * <td>%g</td>
 * <td>Two digit representation of the year going by ISO-8601:1988 standards (see %V)</td>
 * <td>Example: 09 for the week of January 6, 2009</td>
 * </tr>
 * <tr valign="top">
 * <td>%G</td>
 * <td>The full four-digit version of %g</td>
 * <td>Example: 2008 for the week of January 3, 2009</td>
 * </tr>
 * <tr valign="top">
 * <td>%y</td>
 * <td>Two digit representation of the year</td>
 * <td>Example: 09 for 2009, 79 for 1979</td>
 * </tr>
 * <tr valign="top">
 * <td>%Y</td>
 * <td>Four digit representation for the year</td>
 * <td>Example: 2038</td>
 * </tr>
 * <tr valign="top">
 * <th colspan="3" bgcolor="silver">Time</th>
 * </tr>
 * <tr valign="top">
 * <td>%H</td>
 * <td>Two digit representation of the hour in 24-hour format</td>
 * <td>00 through 23</td>
 * </tr>
 * <tr valign="top">
 * <td>%I</td>
 * <td>Two digit representation of the hour in 12-hour format</td>
 * <td>01 through 12</td>
 * </tr>
 * <tr valign="top">
 * <td>%l (lower-case 'L')</td>
 * <td>Hour in 12-hour format, with a space preceeding single digits</td>
 * <td> 1 through 12</td>
 * </tr>
 * <tr valign="top">
 * <td>%M</td>
 * <td>Two digit representation of the minute</td>
 * <td>00 through 59</td>
 * </tr>
 * <tr valign="top">
 * <td>%p</td>
 * <td>UPPER-CASE 'AM' or 'PM' based on the given time</td>
 * <td>Example: AM for 00:31, PM for 22:23</td>
 * </tr>
 * <tr valign="top">
 * <td>%P</td>
 * <td>lower-case 'am' or 'pm' based on the given time</td>
 * <td>Example: am for 00:31, pm for 22:23</td>
 * </tr>
 * <tr valign="top">
 * <td>%r</td>
 * <td>Same as "%I:%M:%S %p"</td>
 * <td>Example: 09:34:17 PM for 21:34:17</td>
 * </tr>
 * <tr valign="top">
 * <td>%R</td>
 * <td>Same as "%H:%M"</td>
 * <td>Example: 00:35 for 12:35 AM, 16:44 for 4:44 PM</td>
 * </tr>
 * <tr valign="top">
 * <td>%S</td>
 * <td>Two digit representation of the second</td>
 * <td>00 through 59</td>
 * </tr>
 * <tr valign="top">
 * <td>%T</td>
 * <td>Same as "%H:%M:%S"</td>
 * <td>Example: 21:34:17 for 09:34:17 PM</td>
 * </tr>
 * <tr valign="top">
 * <td>%X</td>
 * <td>Preferred time representation based on locale, without the date</td>
 * <td>Example: 03:59:16 or 15:59:16</td>
 * </tr>
 * <tr valign="top">
 * <td>%z</td>
 * <td>Either the time zone offset from UTC or the abbreviation (depends
 * on operating system)</td>
 * <td>Example: -0500 or EST for Eastern Time</td>
 * </tr>
 * <tr valign="top">
 * <td>%Z</td>
 * <td>The time zone offset/abbreviation option NOT given by %z (depends
 * on operating system)</td>
 * <td>Example: -0500 or EST for Eastern Time</td>
 * </tr>
 * <tr valign="top">
 * <th colspan="3" bgcolor="silver">Time and Date Stamps</th>
 * </tr>
 * <tr valign="top">
 * <td>%c</td>
 * <td>Preferred date and time stamp based on local</td>
 * <td>Example: Tue Feb 5 00:45:10 2009 for
 * February 4, 2009 at 12:45:10 AM</td>
 * </tr>
 * <tr valign="top">
 * <td>%D</td>
 * <td>Same as "%m/%d/%y"</td>
 * <td>Example: 02/05/09 for February 5, 2009</td>
 * </tr>
 * <tr valign="top">
 * <td>%F</td>
 * <td>Same as "%Y-%m-%d" (commonly used in database datestamps)</td>
 * <td>Example: 2009-02-05 for February 5, 2009</td>
 * </tr>
 * <tr valign="top">
 * <td>%s</td>
 * <td>Unix Epoch Time timestamp (same as the time
 * function)</td>
 * <td>Example: 305815200 for September 10, 1979 08:40:00 AM</td>
 * </tr>
 * <tr valign="top">
 * <td>%x</td>
 * <td>Preferred date representation based on locale, without the time</td>
 * <td>Example: 02/05/09 for February 5, 2009</td>
 * </tr>
 * <tr valign="top">
 * <th colspan="3" bgcolor="silver">Miscellaneous</th>
 * </tr>
 * <tr valign="top">
 * <td>%n</td>
 * <td>A newline character ("\n")</td>
 * <td>---</td>
 * </tr>
 * <tr valign="top">
 * <td>%t</td>
 * <td>A Tab character ("\t")</td>
 * <td>---</td>
 * </tr>
 * <tr valign="top">
 * <td>%%</td>
 * <td>A literal percentage character ("%")</td>
 * <td>---</td>
 * </tr>
 * </table>
 * </p>
 * <p>
 * Maximum length of this parameter is 1023 characters.
 * </p>
 * Contrary to ISO-9899:1999, Sun Solaris starts with Sunday as 1.
 * As a result, %u may not function as described in this manual.
 * @link http://php.net/manual/en/function.strftime.php
 * @param string $format <p>
 * @param int $timestamp [optional] defaults to the value of time()
 * Unix timestamp that defaults to the current local time if a timestamp is not given..
 * @return string a string formatted according format
 * using the given timestamp or the current
 * local time if no timestamp is given. Month and weekday names and
 * other language-dependent strings respect the current locale set
 * with setlocale.
 * @since 4.0
 * @since 5.0
 */
function time_format ($format, $timestamp)
{
    return strftime($format, $timestamp);
}

/**
 * Format a GMT/UTC date/time
 * @link http://php.net/manual/en/function.gmdate.php
 * @param string $format <p>
 * The format of the outputted date string. See the formatting
 * options for the date function.
 * </p>
 * @param int $timestamp [optional] 
 * @return string|false a formatted date string. If a non-numeric value is used for 
 * timestamp, false is returned and an 
 * E_WARNING level error is emitted.
 * @since 4.0
 * @since 5.0
 */
function time_utc ($format, $timestamp = null)
{
    return gmdate($format, $timestamp);
}

/**
 * Get Unix timestamp for a GMT date
 * @link http://php.net/manual/en/function.gmmktime.php
 * @param int $hour [optional] <p>
 * The hour
 * </p>
 * @param int $minute [optional] <p>
 * The minute
 * </p>
 * @param int $second [optional] <p>
 * The second
 * </p>
 * @param int $month [optional] <p>
 * The month
 * </p>
 * @param int $day [optional] <p>
 * The day
 * </p>
 * @param int $year [optional] <p>
 * The year
 * </p>
 * @param int $is_dst [optional] <p>
 * Parameters always represent a GMT date so is_dst
 * doesn't influence the result.
 * </p>
 * @return int a integer Unix timestamp.
 * @since 4.0
 * @since 5.0
 */
function time_utc_make ($hour = null, $minute = null, $second = null, $month = null, $day = null, $year = null, $is_dst = null)
{
    return gmmktime($hour, $minute, $second, $month, $day, $year, $is_dst);
}

/**
 * Format a GMT/UTC time/date according to locale settings
 * @link http://php.net/manual/en/function.gmstrftime.php
 * @param string $format <p>
 * See description in strftime.
 * </p>
 * @param int $timestamp [optional] 
 * @return string a string formatted according to the given format string
 * using the given timestamp or the current
 * local time if no timestamp is given. Month and weekday names and
 * other language dependent strings respect the current locale set
 * with setlocale.
 * @since 4.0
 * @since 5.0
 */
function time_utc_format ($format, $timestamp = null)
{
    return gmstrftime($format, $timestamp);
}

/**
 * Get current time
 * @link http://php.net/manual/en/function.gettimeofday.php
 * @param bool $return_float [optional] <p>
 * When set to true, a float instead of an array is returned.
 * </p>
 * @return mixed By default an array is returned. If return_float
 * is set, then a float is returned.
 * </p>
 * <p>
 * Array keys:
 * "sec" - seconds since the Unix Epoch
 * "usec" - microseconds
 * "minuteswest" - minutes west of Greenwich
 * "dsttime" - type of dst correction
 * @since 4.0
 * @since 5.0
 */
function time_get ($return_float = null)
{
    return gettimeofday($return_float);
}

/**
 * Get the local time
 * @link http://php.net/manual/en/function.localtime.php
 * @param int $timestamp [optional] 
 * @param bool $is_associative [optional] <p>
 * If set to false or not supplied then the array is returned as a regular, 
 * numerically indexed array. If the argument is set to true then
 * localtime returns an associative array containing
 * all the different elements of the structure returned by the C
 * function call to localtime. The names of the different keys of
 * the associative array are as follows:
 * </p>
 * <p>
 * "tm_sec" - seconds
 * @return array 
 * @since 4.0
 * @since 5.0
 */
function time_local ($timestamp = null, $is_associative = null)
{
    return localtime($timestamp, $is_associative);
}

/**
 * Return current Unix timestamp with microseconds
 * @link http://php.net/manual/en/function.microtime.php
 * @param bool $get_as_float [optional] <p>
 * When called without the optional argument, this function returns the string
 * "msec sec" where sec is the current time measured in the number of
 * seconds since the Unix Epoch (0:00:00 January 1, 1970 GMT), and
 * msec is the microseconds part.
 * Both portions of the string are returned in units of seconds.
 * </p>
 * <p>
 * If the optional get_as_float is set to
 * true then a float (in seconds) is returned.
 * </p>
 * @return mixed 
 * @since 4.0
 * @since 5.0
 */
function time_micro ($get_as_float = null)
{
    return microtime($get_as_float);
}

/**
 * Parse a time/date generated with <function>strftime</function>
 * @link http://php.net/manual/en/function.strptime.php
 * @param string $date <p>
 * The string to parse (e.g. returned from strftime)
 * </p>
 * @param string $format <p>
 * The format used in date (e.g. the same as
 * used in strftime).
 * </p>
 * <p>
 * For more information about the format options, read the
 * strftime page.
 * </p>
 * @return array|bool an array or false on failure.
 * </p>
 * <p>
 * <table>
 * The following parameters are returned in the array
 * <tr valign="top">
 * <td>parameters</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>"tm_sec"</td>
 * <td>Seconds after the minute (0-61)</td>
 * </tr>
 * <tr valign="top">
 * <td>"tm_min"</td>
 * <td>Minutes after the hour (0-59)</td>
 * </tr>
 * <tr valign="top">
 * <td>"tm_hour"</td>
 * <td>Hour since midnight (0-23)</td>
 * </tr>
 * <tr valign="top">
 * <td>"tm_mday"</td>
 * <td>Day of the month (1-31)</td>
 * </tr>
 * <tr valign="top">
 * <td>"tm_mon"</td>
 * <td>Months since January (0-11)</td>
 * </tr>
 * <tr valign="top">
 * <td>"tm_year"</td>
 * <td>Years since 1900</td>
 * </tr>
 * <tr valign="top">
 * <td>"tm_wday"</td>
 * <td>Days since Sunday (0-6)</td>
 * </tr>
 * <tr valign="top">
 * <td>"tm_yday"</td>
 * <td>Days since January 1 (0-365)</td>
 * </tr>
 * <tr valign="top">
 * <td>"unparsed"</td>
 * <td>the date part which was not
 * recognized using the specified format</td>
 * </tr>
 * </table>
 * @since 5.1.0
 */
function time_parse ($date, $format)
{
    return strptime($date, $format);
}

/**
 * Parse about any English textual datetime description into a Unix timestamp
 * @link http://php.net/manual/en/function.strtotime.php
 * @param string $time <p>
 * The string to parse. Before PHP 5.0.0, microseconds weren't allowed in
 * the time, since PHP 5.0.0 they are allowed but ignored.
 * </p>
 * @param int $now [optional] <p>
 * The timestamp which is used as a base for the calculation of relative
 * dates.
 * </p>
 * @return int|false a timestamp on success, false otherwise. Previous to PHP 5.1.0,
 * this function would return -1 on failure.
 * @since 4.0
 * @since 5.0
 */
function time_from_string ($time, $now = null)
{
    return strtotime($time, $now);
}

/**
 * Renames a file or directory
 * @link http://php.net/manual/en/function.rename.php
 * @param string $oldname <p>
 * </p>
 * <p>
 * The old name. The wrapper used in oldname
 * must match the wrapper used in
 * newname.
 * </p>
 * @param string $newname <p>
 * The new name.
 * </p>
 * @param resource $context [optional] &note.context-support;
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function dir_rename ($oldname, $newname, $context = null)
{
    return rename($oldname, $newname, $context);
}

/**
 * Removes directory
 * @link http://php.net/manual/en/function.rmdir.php
 * @param string $dirname <p>
 * Path to the directory.
 * </p>
 * @param resource $context [optional] &note.context-support;
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function dir_delete ($dirname, $context = null)
{
    return rmdir($dirname, $context);
}

/**
 * Attempts to create the directory specified by pathname.
 * @link http://php.net/manual/en/function.mkdir.php
 * @param string $pathname <p>
 * The directory path.
 * </p>
 * @param int $mode [optional] <p>
 * The mode is 0777 by default, which means the widest possible
 * access. For more information on modes, read the details
 * on the chmod page.
 * </p>
 * <p>
 * mode is ignored on Windows.
 * </p>
 * <p>
 * Note that you probably want to specify the mode as an octal number,
 * which means it should have a leading zero. The mode is also modified
 * by the current umask, which you can change using
 * umask().
 * </p>
 * @param bool $recursive [optional] <p>
 * Allows the creation of nested directories specified in the pathname. Default to false.
 * </p>
 * @param resource $context [optional] &note.context-support;
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function dir_create ($pathname, $mode = 0777, $recursive = false, $context = null)
{
    return mkdir($pathname, $mode, $recursive, $context);
}

/**
 * Changes file mode
 * @link http://php.net/manual/en/function.chmod.php
 * @param string $filename <p>
 * Path to the file.
 * </p>
 * @param int $mode <p>
 * Note that mode is not automatically
 * assumed to be an octal value, so strings (such as "g+w") will
 * not work properly. To ensure the expected operation,
 * you need to prefix mode with a zero (0):
 * </p>
 * <p>
 * ]]>
 * </p>
 * <p>
 * The mode parameter consists of three octal
 * number components specifying access restrictions for the owner,
 * the user group in which the owner is in, and to everybody else in
 * this order. One component can be computed by adding up the needed
 * permissions for that target user base. Number 1 means that you
 * grant execute rights, number 2 means that you make the file
 * writeable, number 4 means that you make the file readable. Add
 * up these numbers to specify needed rights. You can also read more
 * about modes on Unix systems with 'man 1 chmod'
 * and 'man 2 chmod'.
 * </p>
 * <p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function dir_chmod ($filename, $mode)
{
    return chmod($filename, $mode);
}

/**
 * Returns directory name component of path
 * @link http://php.net/manual/en/function.dirname.php
 * @param string $path <p>
 * A path.
 * </p>
 * <p>
 * On Windows, both slash (/) and backslash
 * (\) are used as directory separator character. In
 * other environments, it is the forward slash (/).
 * </p>
 * @param int $levels <p>
 * The number of parent directories to go up.
 * This must be an integer greater than 0.
 * </p>
 * @return string the name of the directory. If there are no slashes in
 * path, a dot ('.') is returned,
 * indicating the current directory. Otherwise, the returned string is
 * path with any trailing
 * /component removed.
 * @since 4.0
 * @since 5.0
 */
function dir_name ($path, $levels = 1)
{
    return dirname($path, $levels);
}

/**
 * Find pathnames matching a pattern
 * @link http://php.net/manual/en/function.glob.php
 * @param string $pattern <p>
 * The pattern. No tilde expansion or parameter substitution is done.
 * </p>
 * @param int $flags [optional] <p>
 * Valid flags:
 * GLOB_MARK - Adds a slash to each directory returned
 * GLOB_NOSORT - Return files as they appear in the directory (no sorting). When this flag is not used, the pathnames are sorted alphabetically
 * GLOB_NOCHECK - Return the search pattern if no files matching it were found
 * GLOB_NOESCAPE - Backslashes do not quote metacharacters
 * GLOB_BRACE - Expands {a,b,c} to match 'a', 'b', or 'c'
 * GLOB_ONLYDIR - Return only directory entries which match the pattern
 * GLOB_ERR - Stop on read errors (like unreadable directories), by default errors are ignored.
 * @return array an array containing the matched files/directories, an empty array
 * if no file matched or false on error.
 * </p>
 * <p>
 * On some systems it is impossible to distinguish between empty match and an
 * error.
 * @since 4.3.0
 * @since 5.0
 */
function dir_glob ($pattern, $flags = null)
{
    return glob($pattern, $flags);
}

/**
 * Change the root directory
 * @link http://php.net/manual/en/function.chroot.php
 * @param string $directory <p>
 * The new directory
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0.5
 * @since 5.0
 */
function dir_chroot ($directory)
{
    return chroot($directory);
}

/**
 * Open directory handle
 * @link http://php.net/manual/en/function.opendir.php
 * @param string $path <p>
 * The directory path that is to be opened
 * </p>
 * @param resource $context [optional] <p>
 * For a description of the context parameter, 
 * refer to the streams section of
 * the manual.
 * </p>
 * @return resource|bool a directory handle resource on success, or
 * false on failure.
 * </p> 
 * <p>
 * If path is not a valid directory or the
 * directory can not be opened due to permission restrictions or
 * filesystem errors, opendir returns false and
 * generates a PHP error of level 
 * E_WARNING. You can suppress the error output of
 * opendir by prepending
 * '@' to the
 * front of the function name.
 * @since 4.0
 * @since 5.0
 */
function dir_open ($path, $context = null)
{
    return opendir($path, $context);
}

/**
 * Close directory handle
 * @link http://php.net/manual/en/function.closedir.php
 * @param resource $dir_handle [optional] <p>
 * The directory handle resource previously opened
 * with opendir. If the directory handle is 
 * not specified, the last link opened by opendir 
 * is assumed.
 * </p>
 * @return void 
 * @since 4.0
 * @since 5.0
 */
function dir_close ($dir_handle = null)
{
    return closedir($dir_handle);
}

/**
 * List files and directories inside the specified path
 * @link http://php.net/manual/en/function.scandir.php
 * @param string $directory <p>
 * The directory that will be scanned.
 * </p>
 * @param int $sorting_order [optional] <p>
 * By default, the sorted order is alphabetical in ascending order. If
 * the optional sorting_order is set to non-zero,
 * then the sort order is alphabetical in descending order.
 * </p>
 * @param resource $context [optional] <p>
 * For a description of the context parameter, 
 * refer to the streams section of
 * the manual.
 * </p>
 * @return array an array of filenames on success, or false on 
 * failure. If directory is not a directory, then 
 * boolean false is returned, and an error of level 
 * E_WARNING is generated.
 * @since 5.0
 */
function dir_scan ($directory, $sorting_order = null, $context = null)
{
    return scandir($directory, $sorting_order, $context);
}

/**
 * Returns an array of all defined functions
 * @link http://php.net/manual/en/function.get-defined-functions.php
 * @param bool $exclude_disabled [optional] Whether disabled functions should be excluded from the return value.
 * @return array an multidimensional array containing a list of all defined
 * functions, both built-in (internal) and user-defined. The internal
 * functions will be accessible via $arr["internal"], and
 * the user defined ones using $arr["user"] (see example
 * below).
 * @since 4.0.4
 * @since 5.0
 */
function function_declared ($exclude_disabled = FALSE)
{
    return get_defined_functions($exclude_disabled);
}

/**
 * Create an anonymous (lambda-style) function
 * @link http://php.net/manual/en/function.create-function.php
 * @param string $args <p>
 * The function arguments.
 * </p>
 * @param string $code <p>
 * The function code.
 * </p>
 * @return string a unique function name as a string, or false on error.
 * @since 4.0.1
 * @since 5.0
 * @deprecated 7.2
 */
function function_create ($args, $code)
{
    return create_function($args, $code);
}

/**
 * Return an item from the argument list
 * @link http://php.net/manual/en/function.func-get-arg.php
 * @param int $arg_num <p>
 * The argument offset. Function arguments are counted starting from
 * zero.
 * </p>
 * @return mixed the specified argument, or false on error.
 * @since 4.0
 * @since 5.0
 */
function function_arg ($arg_num)
{
    return func_get_arg($arg_num);
}

/**
 * Returns an array comprising a function's argument list
 * @link http://php.net/manual/en/function.func-get-args.php
 * @return array an array in which each element is a copy of the corresponding
 * member of the current user-defined function's argument list.
 * @since 4.0
 * @since 5.0
 */
function function_args ()
{
    return func_get_args();
}

/**
 * Returns the number of arguments passed to the function
 * @link http://php.net/manual/en/function.func-num-args.php
 * @return int the number of arguments passed into the current user-defined
 * function.
 * @since 4.0
 * @since 5.0
 */
function function_num_args ()
{
    return func_num_args();
}

/**
 * Call a user function given by the first parameter
 * @link http://php.net/manual/en/function.call-user-func.php
 * @param callback $function <p>
 * The function to be called. Class methods may also be invoked
 * statically using this function by passing
 * array($classname, $methodname) to this parameter.
 * Additionally class methods of an object instance may be called by passing
 * array($objectinstance, $methodname) to this parameter.
 * </p>
 * @param mixed $parameter [optional] <p>
 * Zero or more parameters to be passed to the function.
 * </p>
 * <p>
 * Note that the parameters for call_user_func are
 * not passed by reference.
 * call_user_func example and references
 * ]]>
 * &example.outputs;
 * </p>
 * @return mixed the function result, or false on error.
 * @since 4.0
 * @since 5.0
 */
function function_call_user ($function, ...$parameter)
{
    return call_user_func($function, $parameter);
}

/**
 * Call a user function given with an array of parameters
 * @link http://php.net/manual/en/function.call-user-func-array.php
 * @param callback $function <p>
 * The function to be called.
 * </p>
 * @param array $param_arr <p>
 * The parameters to be passed to the function, as an indexed array.
 * </p>
 * @return mixed the function result, or false on error.
 * @since 4.0.4
 * @since 5.0
 */
function function_call_user_array ($function, array $param_arr)
{
    return call_user_func_array($function, $param_arr);
}

/**
 * Register a function for execution on shutdown
 * @link http://php.net/manual/en/function.register-shutdown-function.php
 * @param callback $function <p>
 * The shutdown function to register.
 * </p>
 * <p>
 * The shutdown functions are called as the part of the request so that 
 * it's possible to send the output from them. There is currently no way
 * to process the data with output buffering functions in the shutdown
 * function.
 * </p>
 * <p>
 * Shutdown functions are called after closing all opened output buffers
 * thus, for example, its output will not be compressed if zlib.output_compression is
 * enabled.
 * </p>
 * @param mixed $parameter [optional] <p>
 * It is possible to pass parameters to the shutdown function by passing
 * additional parameters.
 * </p>
 * @param mixed $_ [optional] 
 * @return void 
 * @since 4.0
 * @since 5.0
 */
function function_shutdown_register ($function, $parameter = null, ...$_)
{
    return register_shutdown_function($function, $parameter, ...$_);
}

/**
 * Register a function for execution on each tick
 * @link http://php.net/manual/en/function.register-tick-function.php
 * @param callback $function <p>
 * The function name as a string, or an array consisting of an object and
 * a method.
 * </p>
 * @param mixed $arg [optional] <p>
 * </p>
 * @param mixed $_ [optional] 
 * @return bool true on success or false on failure.
 * @since 4.0.3
 * @since 5.0
 */
function function_tick_register ($function, $arg = null, ...$_)
{
    return register_tick_function($function, $arg, ...$_);
}

/**
 * De-register a function for execution on each tick
 * @link http://php.net/manual/en/function.unregister-tick-function.php
 * @param callable $function <p>
 * The function name as a string, or an array consisting of an object and
 * a method.
 * </p>
 * @return void 
 * @since 4.0.3
 * @since 5.0
 */
function function_tick_unregister ($function)
{
    return unregister_tick_function($function);
}

/**
 * Call a static method and pass the arguments as array
 * @link http://php.net/manual/en/function.forward-static-call-array.php
 * @param callback $function <p>
 * The function or method to be called. This parameter may be an &array;,
 * with the name of the class, and the method, or a &string;, with a function
 * name.
 * </p>
 * @param array $parameters [optional] 
 * @return mixed the function result, or false on error.
 * @since 5.3.0
 */
function function_static_call_array ($function, array $parameters = null)
{
    return forward_static_call_array($function, $parameters);
}

/**
 * Call a static method
 * @link http://php.net/manual/en/function.forward-static-call.php
 * @param callback $function <p>
 * The function or method to be called. This parameter may be an array,
 * with the name of the class, and the method, or a string, with a function
 * name.
 * </p>
 * @param mixed $parameter [optional] <p>
 * Zero or more parameters to be passed to the function.
 * </p>
 * @param mixed $_ [optional] 
 * @return mixed the function result, or false on error.
 * @since 5.3.0
 */
function function_static_call ($function, $parameter = null, ...$_)
{
    return forward_static_call($function, $parameter, ...$_);
}

/**
 * Execute an external program and display raw output
 * @link http://php.net/manual/en/function.passthru.php
 * @param string $command <p>
 * The command that will be executed.
 * </p>
 * @param int $return_var [optional] <p>
 * If the return_var argument is present, the 
 * return status of the Unix command will be placed here.
 * </p>
 * @return void 
 * @since 4.0
 * @since 5.0
 */
function exec_passthru ($command, &$return_var = null)
{
    return passthru($command, $return_var);
}

/**
 * Execute command via shell and return the complete output as a string
 * @link http://php.net/manual/en/function.shell-exec.php
 * @param string $cmd <p>
 * The command that will be executed.
 * </p>
 * @return string The output from the executed command.
 * @since 4.0
 * @since 5.0
 */
function exec_shell ($cmd)
{
    return shell_exec($cmd);
}

/**
 * Execute an external program and display the output
 * @link http://php.net/manual/en/function.system.php
 * @param string $command <p>
 * The command that will be executed.
 * </p>
 * @param int $return_var [optional] <p>
 * If the return_var argument is present, then the
 * return status of the executed command will be written to this
 * variable.
 * </p>
 * @return string|bool the last line of the command output on success, and false
 * on failure.
 * @since 4.0
 * @since 5.0
 */
function exec_system ($command, &$return_var = null)
{
    return system($command, $return_var);
}

/**
 * Escape a string to be used as a shell argument
 * @link http://php.net/manual/en/function.escapeshellarg.php
 * @param string $arg <p>
 * The argument that will be escaped.
 * </p>
 * @return string The escaped string.
 * @since 4.0.3
 * @since 5.0
 */
function exec_escape_arg ($arg)
{
    return escapeshellarg($arg);
}

/**
 * Escape shell metacharacters
 * @link http://php.net/manual/en/function.escapeshellcmd.php
 * @param string $command <p>
 * The command that will be escaped.
 * </p>
 * @return string The escaped string.
 * @since 4.0
 * @since 5.0
 */
function exec_escape_cmd ($command)
{
    return escapeshellcmd($command);
}

/**
 * Convert all applicable characters to HTML entities
 * @link http://php.net/manual/en/function.htmlentities.php
 * @param string $string <p>
 * The input string.
 * </p>
 * @param int $quote_style [optional] <p>
 * Like htmlspecialchars, the optional second
 * quote_style parameter lets you define what will
 * be done with 'single' and "double" quotes. It takes on one of three
 * constants with the default being ENT_COMPAT:
 * <table>
 * Available quote_style constants
 * <tr valign="top">
 * <td>Constant Name</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_COMPAT</td>
 * <td>Will convert double-quotes and leave single-quotes alone.</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_QUOTES</td>
 * <td>Will convert both double and single quotes.</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_NOQUOTES</td>
 * <td>Will leave both double and single quotes unconverted.</td>
 * </tr>
 * </table>
 * </p>
 * @param string $charset [optional] <p>
 * Like htmlspecialchars, it takes an optional
 * third argument charset which defines character
 * set used in conversion.
 * Presently, the ISO-8859-1 character set is used as the default.
 * </p>
 * &reference.strings.charsets;
 * @param bool $double_encode [optional] <p>
 * When double_encode is turned off PHP will not
 * encode existing html entities. The default is to convert everything.
 * </p>
 * @return string the encoded string.
 * @since 4.0
 * @since 5.0
 */
function html_entities ($string, $quote_style = null, $charset = null, $double_encode = true)
{
    return htmlentities($string, $quote_style, $charset, $double_encode);
}

/**
 * Convert special characters to HTML entities
 * @link http://php.net/manual/en/function.htmlspecialchars.php
 * @param string $string <p>
 * The {@link http://www.php.net/manual/en/language.types.string.php string} being converted.
 * </p>
 * @param int $flags [optional] <p>
 * A bitmask of one or more of the following flags, which specify how to handle quotes,
 * invalid code unit sequences and the used document type. The default is
 * <em><b>ENT_COMPAT | ENT_HTML401</b></em>.
 * </p><table>
 * <caption><b>Available <em>flags</em> constants</b></caption>
 * <thead>
 * <tr>
 * <th>Constant Name</th>
 * <th>Description</th>
 * </tr>
 *
 * </thead>
 *
 * <tbody>
 * <tr>
 * <td><b>ENT_COMPAT</b></td>
 * <td>Will convert double-quotes and leave single-quotes alone.</td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_QUOTES</b></td>
 * <td>Will convert both double and single quotes.</td>
 *</tr>
 *
 * <tr>
 * <td><b>ENT_NOQUOTES</b></td>
 * <td>Will leave both double and single quotes unconverted.</td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_IGNORE</b></td>
 * <td>
 * Silently discard invalid code unit sequences instead of returning
 * an empty string. Using this flag is discouraged as it
 * {@link http://unicode.org/reports/tr36/#Deletion_of_Noncharacters »&nbsp;may have security implications}.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_SUBSTITUTE</b></td>
 * <td>
 * Replace invalid code unit sequences with a Unicode Replacement Character
 * U+FFFD (UTF-8) or &amp;#FFFD; (otherwise) instead of returning an empty string.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_DISALLOWED</b></td>
 * <td>
 * Replace invalid code points for the given document type with a
 * Unicode Replacement Character U+FFFD (UTF-8) or &amp;#FFFD;
 * (otherwise) instead of leaving them as is. This may be useful, for
 * instance, to ensure the well-formedness of XML documents with
 * embedded external content.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_HTML401</b></td>
 * <td>
 * Handle code as HTML 4.01.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_XML1</b></td>
 * <td>
 * Handle code as XML 1.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_XHTML</b></td>
 * <td>
 * Handle code as XHTML.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_HTML5</b></td>
 * <td>
 * Handle code as HTML 5.
 * </td>
 * </tr>
 *
 * </tbody>
 *
 * </table>
 * @param string $encoding [optional] <p>
 * Defines encoding used in conversion.
 * If omitted, the default value for this argument is ISO-8859-1 in
 * versions of PHP prior to 5.4.0, and UTF-8 from PHP 5.4.0 onwards.
 * </p>
 * <p>
 * For the purposes of this function, the encodings
 * <em>ISO-8859-1</em>, <em>ISO-8859-15</em>,
 * <em>UTF-8</em>, <em>cp866</em>,
 * <em>cp1251</em>, <em>cp1252</em>, and
 * <em>KOI8-R</em> are effectively equivalent, provided the
 * <em><b>string</b></em> itself is valid for the encoding, as
 * the characters affected by  <b>htmlspecialchars()</b> occupy
 * the same positions in all of these encodings.
 * </p>
 * @param bool $double_encode [optional] <p>
 * When <em><b>double_encode</b></em> is turned off PHP will not
 * encode existing html entities, the default is to convert everything.
 * </p>
 * @return string The converted string.
 * @since 4.0
 * @since 5.0
 */
function html_escape ($string, $flags = ENT_COMPAT | ENT_HTML401, $encoding = 'UTF-8', $double_encode = true)
{
    return htmlspecialchars($string, $flags, $encoding, $double_encode);
}

/**
 * Convert special HTML entities back to characters
 * @link http://php.net/manual/en/function.htmlspecialchars-decode.php
 * @param string $string <p>
 * The string to decode
 * </p>
 * @param int $quote_style [optional] <p>
 * The quote style. One of the following constants:
 * <table>
 * quote_style constants
 * <tr valign="top">
 * <td>Constant Name</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_COMPAT</td>
 * <td>Will convert double-quotes and leave single-quotes alone
 * (default)</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_QUOTES</td>
 * <td>Will convert both double and single quotes</td>
 * </tr>
 * <tr valign="top">
 * <td>ENT_NOQUOTES</td>
 * <td>Will leave both double and single quotes unconverted</td>
 * </tr>
 * </table>
 * </p>
 * @return string the decoded string.
 * @since 5.1.0
 */
function html_escape_decode ($string, $quote_style = null)
{
    return htmlspecialchars_decode($string, $quote_style);
}

/**
 * Inserts HTML line breaks before all newlines in a string
 * @link http://php.net/manual/en/function.nl2br.php
 * @param string $string <p>
 * The input string.
 * </p>
 * @param bool $is_xhtml [optional] <p>
 * Whenever to use XHTML compatible line breaks or not.
 * </p>
 * @return string the altered string.
 * @since 4.0
 * @since 5.0
 */
function html_nl2br ($string, $is_xhtml = null)
{
    return nl2br($string, $is_xhtml);
}

/**
 * Strip HTML and PHP tags from a string
 * @link http://php.net/manual/en/function.strip-tags.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @param string $allowable_tags [optional] <p>
 * You can use the optional second parameter to specify tags which should
 * not be stripped.
 * </p>
 * <p>
 * HTML comments and PHP tags are also stripped. This is hardcoded and
 * can not be changed with allowable_tags.
 * </p>
 * @return string the stripped string.
 * @since 4.0
 * @since 5.0
 */
function html_strip_tags ($str, $allowable_tags = null)
{
    return strip_tags($str, $allowable_tags);
}

/**
 * Returns the translation table used by <function>htmlspecialchars</function> and <function>htmlentities</function>
 * @link http://php.net/manual/en/function.get-html-translation-table.php
 * @param int $table [optional] <p>
 * There are two new constants (HTML_ENTITIES,
 * HTML_SPECIALCHARS) that allow you to specify the
 * table you want.
 * </p>
 * @param int $quote_style [optional] <p>
 * Like the htmlspecialchars and
 * htmlentities functions you can optionally specify
 * the quote_style you are working with.
 * See the description
 * of these modes in htmlspecialchars.
 * </p>
 * @param string $encoding <dd>
 *
 * <p>
 * Encoding to use.
 * If omitted, the default value for this argument is ISO-8859-1 in
 * versions of PHP prior to 5.4.0, and UTF-8 from PHP 5.4.0 onwards.
 * </p>
 *
 *
 * <p>
 * The following character sets are supported:
 * </p><table class="doctable table">
 * <caption><strong>Supported charsets</strong></caption>
 *
 * <thead>
 * <tr>
 * <th>Charset</th>
 * <th>Aliases</th>
 * <th>Description</th>
 * </tr>
 *
 * </thead>
 *
 * <tbody class="tbody">
 * <tr>
 * <td>ISO-8859-1</td>
 * <td>ISO8859-1</td>
 * <td>
 * Western European, Latin-1.
 * </td>
 * </tr>
 *
 * <tr>
 * <td>ISO-8859-5</td>
 * <td>ISO8859-5</td>
 * <td>
 * Little used cyrillic charset (Latin/Cyrillic).
 * </td>
 * </tr>
 *
 * <tr>
 * <td>ISO-8859-15</td>
 * <td>ISO8859-15</td>
 * <td>
 * Western European, Latin-9. Adds the Euro sign, French and Finnish
 * letters missing in Latin-1 (ISO-8859-1).
 * </td>
 * </tr>
 *
 * <tr>
 * <td>UTF-8</td>
 * <td class="empty">&nbsp;</td>
 * <td>
 * ASCII compatible multi-byte 8-bit Unicode.
 * </td>
 * </tr>
 *
 * <tr>
 * <td>cp866</td>
 * <td>ibm866, 866</td>
 * <td>
 * DOS-specific Cyrillic charset.
 * </td>
 * </tr>
 *
 * <tr>
 * <td>cp1251</td>
 * <td>Windows-1251, win-1251, 1251</td>
 * <td>
 * Windows-specific Cyrillic charset.
 * </td>
 * </tr>
 *
 * <tr>
 * <td>cp1252</td>
 * <td>Windows-1252, 1252</td>
 * <td>
 * Windows specific charset for Western European.
 * </td>
 * </tr>
 *
 * <tr>
 * <td>KOI8-R</td>
 * <td>koi8-ru, koi8r</td>
 * <td>
 * Russian.
 * </td>
 * </tr>
 *
 * <tr>
 * <td>BIG5</td>
 * <td>950</td>
 * <td>
 * Traditional Chinese, mainly used in Taiwan.
 * </td>
 * </tr>
 *
 * <tr>
 * <td>GB2312</td>
 * <td>936</td>
 * <td>
 * Simplified Chinese, national standard character set.
 * </td>
 * </tr>
 *
 * <tr>
 * <td>BIG5-HKSCS</td>
 * <td class="empty">&nbsp;</td>
 * <td>
 * Big5 with Hong Kong extensions, Traditional Chinese.
 * </td>
 * </tr>
 *
 * <tr>
 * <td>Shift_JIS</td>
 * <td>SJIS, SJIS-win, cp932, 932</td>
 * <td>
 * Japanese
 * </td>
 * </tr>
 *
 * <tr>
 * <td>EUC-JP</td>
 * <td>EUCJP, eucJP-win</td>
 * <td>
 * Japanese
 * </td>
 * </tr>
 *
 * <tr>
 * <td>MacRoman</td>
 * <td class="empty">&nbsp;</td>
 * <td>
 * Charset that was used by Mac OS.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><em>''</em></td>
 * <td class="empty">&nbsp;</td>
 * <td>
 * An empty string activates detection from script encoding (Zend multibyte),
 * {@link http://php.net/manual/en/ini.core.php#ini.default-charset default_charset} and current
 * locale {@link http://php.net/manual/en/function.nl-langinfo.php nl_langinfo()} and
 * {@link http://php.net/manual/en/function.setlocale.php setlocale()}), in this order. Not recommended.
 * </td>
 * </tr>
 *
 * </tbody>
 *
 * </table>
 *
 * <blockquote><p><strong>Note</strong>:
 *
 * Any other character sets are not recognized. The default encoding will be
 * used instead and a warning will be emitted.
 *
 * </p></blockquote>
 * @return array the translation table as an array.
 * @since 4.0
 * @since 5.0
 */
function html_translation_table ($table = null, $quote_style = null, string $encoding = "UTF-8")
{
    return get_html_translation_table($table, $quote_style, $encoding);
}

/**
 * Get numeric formatting information
 * @link http://php.net/manual/en/function.localeconv.php
 * @return array localeconv returns data based upon the current locale
 * as set by setlocale. The associative array that is
 * returned contains the following fields:
 * <tr valign="top">
 * <td>Array element</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>decimal_point</td>
 * <td>Decimal point character</td>
 * </tr>
 * <tr valign="top">
 * <td>thousands_sep</td>
 * <td>Thousands separator</td>
 * </tr>
 * <tr valign="top">
 * <td>grouping</td>
 * <td>Array containing numeric groupings</td>
 * </tr>
 * <tr valign="top">
 * <td>int_curr_symbol</td>
 * <td>International currency symbol (i.e. USD)</td>
 * </tr>
 * <tr valign="top">
 * <td>currency_symbol</td>
 * <td>Local currency symbol (i.e. $)</td>
 * </tr>
 * <tr valign="top">
 * <td>mon_decimal_point</td>
 * <td>Monetary decimal point character</td>
 * </tr>
 * <tr valign="top">
 * <td>mon_thousands_sep</td>
 * <td>Monetary thousands separator</td>
 * </tr>
 * <tr valign="top">
 * <td>mon_grouping</td>
 * <td>Array containing monetary groupings</td>
 * </tr>
 * <tr valign="top">
 * <td>positive_sign</td>
 * <td>Sign for positive values</td>
 * </tr>
 * <tr valign="top">
 * <td>negative_sign</td>
 * <td>Sign for negative values</td>
 * </tr>
 * <tr valign="top">
 * <td>int_frac_digits</td>
 * <td>International fractional digits</td>
 * </tr>
 * <tr valign="top">
 * <td>frac_digits</td>
 * <td>Local fractional digits</td>
 * </tr>
 * <tr valign="top">
 * <td>p_cs_precedes</td>
 * <td>
 * true if currency_symbol precedes a positive value, false
 * if it succeeds one
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>p_sep_by_space</td>
 * <td>
 * true if a space separates currency_symbol from a positive
 * value, false otherwise
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>n_cs_precedes</td>
 * <td>
 * true if currency_symbol precedes a negative value, false
 * if it succeeds one
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>n_sep_by_space</td>
 * <td>
 * true if a space separates currency_symbol from a negative
 * value, false otherwise
 * </td>
 * </tr>
 * <td>p_sign_posn</td>
 * <td>
 * 0 - Parentheses surround the quantity and currency_symbol
 * 1 - The sign string precedes the quantity and currency_symbol
 * 2 - The sign string succeeds the quantity and currency_symbol
 * 3 - The sign string immediately precedes the currency_symbol
 * 4 - The sign string immediately succeeds the currency_symbol
 * </td>
 * </tr>
 * <td>n_sign_posn</td>
 * <td>
 * 0 - Parentheses surround the quantity and currency_symbol
 * 1 - The sign string precedes the quantity and currency_symbol
 * 2 - The sign string succeeds the quantity and currency_symbol
 * 3 - The sign string immediately precedes the currency_symbol
 * 4 - The sign string immediately succeeds the currency_symbol
 * </td>
 * </tr>
 * </p>
 * <p>
 * The p_sign_posn, and n_sign_posn contain a string
 * of formatting options. Each number representing one of the above listed conditions.
 * </p>
 * <p>
 * The grouping fields contain arrays that define the way numbers should be
 * grouped. For example, the monetary grouping field for the nl_NL locale (in
 * UTF-8 mode with the euro sign), would contain a 2 item array with the
 * values 3 and 3. The higher the index in the array, the farther left the
 * grouping is. If an array element is equal to CHAR_MAX,
 * no further grouping is done. If an array element is equal to 0, the previous
 * element should be used.
 * @since 4.0.5
 * @since 5.0
 */
function locale_conv ()
{
    return localeconv();
}

/**
 * Set locale information
 * @link http://php.net/manual/en/function.setlocale.php
 * @param int $category <p>
 * <p>
 * <em>category</em> is a named constant specifying the
 * category of the functions affected by the locale setting:
 * </p><ul>
 * <li>
 * <b>LC_ALL</b> for all of the below
 * </li>
 * <li>
 * <b>LC_COLLATE</b> for string comparison, see
 * {@see strcoll()}
 * </li>
 * <li>
 * <b>LC_CTYPE</b> for character classification and conversion, for
 * example {@see strtoupper()}
 * </li>
 * <li>
 * <b>LC_MONETARY</b> for {@see localeconv()}
 * </li>
 * <li>
 * <b>LC_NUMERIC</b> for decimal separator (See also
 * {@see localeconv()})
 * </li>
 *<li>
 * <b>LC_TIME</b> for date and time formatting with
 * {@see strftime()}
 *
 * </li>
 * <li>
 * <b>LC_MESSAGES</B> for system responses (available if PHP was compiled with
 * <em>libintl</em>)
 *
 * </li>
 * </ul>
 * @param string|array $locale <p>
 * If locale is &null; or the empty string
 * "", the locale names will be set from the
 * values of environment variables with the same names as the above
 * categories, or from "LANG".
 * </p>
 * <p>
 * If locale is "0",
 * the locale setting is not affected, only the current setting is returned.
 * </p>
 * <p>
 * If locale is an array or followed by additional
 * parameters then each array element or parameter is tried to be set as
 * new locale until success. This is useful if a locale is known under
 * different names on different systems or for providing a fallback
 * for a possibly not available locale.
 * </p>
 * @param string $_ [optional] 
 * @return string the new current locale, or false if the locale functionality is
 * not implemented on your platform, the specified locale does not exist or
 * the category name is invalid.
 * </p>
 * <p>
 * An invalid category name also causes a warning message. Category/locale
 * names can be found in RFC 1766
 * and ISO 639.
 * Different systems have different naming schemes for locales.
 * </p>
 * <p>
 * The return value of setlocale depends
 * on the system that PHP is running. It returns exactly
 * what the system setlocale function returns.
 * @since 4.0
 * @since 5.0
 */
function locale_set ($category, $locale, ...$_)
{
    return setlocale($category, $locale, ...$_);
}

/**
 * Query language and locale information
 * @link http://php.net/manual/en/function.nl-langinfo.php
 * @param int $item <p>
 * item may be an integer value of the element or the
 * constant name of the element. The following is a list of constant names
 * for item that may be used and their description.
 * Some of these constants may not be defined or hold no value for certain
 * locales.
 * <table>
 * nl_langinfo Constants
 * <tr valign="top">
 * <td>Constant</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * LC_TIME Category Constants</td>
 * </tr>
 * <tr valign="top">
 * <td>ABDAY_(1-7)</td>
 * <td>Abbreviated name of n-th day of the week.</td>
 * </tr>
 * <tr valign="top">
 * <td>DAY_(1-7)</td>
 * <td>Name of the n-th day of the week (DAY_1 = Sunday).</td>
 * </tr>
 * <tr valign="top">
 * <td>ABMON_(1-12)</td>
 * <td>Abbreviated name of the n-th month of the year.</td>
 * </tr>
 * <tr valign="top">
 * <td>MON_(1-12)</td>
 * <td>Name of the n-th month of the year.</td>
 * </tr>
 * <tr valign="top">
 * <td>AM_STR</td>
 * <td>String for Ante meridian.</td>
 * </tr>
 * <tr valign="top">
 * <td>PM_STR</td>
 * <td>String for Post meridian.</td>
 * </tr>
 * <tr valign="top">
 * <td>D_T_FMT</td>
 * <td>String that can be used as the format string for strftime to represent time and date.</td>
 * </tr>
 * <tr valign="top">
 * <td>D_FMT</td>
 * <td>String that can be used as the format string for strftime to represent date.</td>
 * </tr>
 * <tr valign="top">
 * <td>T_FMT</td>
 * <td>String that can be used as the format string for strftime to represent time.</td>
 * </tr>
 * <tr valign="top">
 * <td>T_FMT_AMPM</td>
 * <td>String that can be used as the format string for strftime to represent time in 12-hour format with ante/post meridian.</td>
 * </tr>
 * <tr valign="top">
 * <td>ERA</td>
 * <td>Alternate era.</td>
 * </tr>
 * <tr valign="top">
 * <td>ERA_YEAR</td>
 * <td>Year in alternate era format.</td>
 * </tr>
 * <tr valign="top">
 * <td>ERA_D_T_FMT</td>
 * <td>Date and time in alternate era format (string can be used in strftime).</td>
 * </tr>
 * <tr valign="top">
 * <td>ERA_D_FMT</td>
 * <td>Date in alternate era format (string can be used in strftime).</td>
 * </tr>
 * <tr valign="top">
 * <td>ERA_T_FMT</td>
 * <td>Time in alternate era format (string can be used in strftime).</td>
 * </tr>
 * <tr valign="top">
 * LC_MONETARY Category Constants</td>
 * </tr>
 * <tr valign="top">
 * <td>INT_CURR_SYMBOL</td>
 * <td>International currency symbol.</td>
 * </tr>
 * <tr valign="top">
 * <td>CURRENCY_SYMBOL</td>
 * <td>Local currency symbol.</td>
 * </tr>
 * <tr valign="top">
 * <td>CRNCYSTR</td>
 * <td>Same value as CURRENCY_SYMBOL.</td>
 * </tr>
 * <tr valign="top">
 * <td>MON_DECIMAL_POINT</td>
 * <td>Decimal point character.</td>
 * </tr>
 * <tr valign="top">
 * <td>MON_THOUSANDS_SEP</td>
 * <td>Thousands separator (groups of three digits).</td>
 * </tr>
 * <tr valign="top">
 * <td>MON_GROUPING</td>
 * <td>Like "grouping" element.</td>
 * </tr>
 * <tr valign="top">
 * <td>POSITIVE_SIGN</td>
 * <td>Sign for positive values.</td>
 * </tr>
 * <tr valign="top">
 * <td>NEGATIVE_SIGN</td>
 * <td>Sign for negative values.</td>
 * </tr>
 * <tr valign="top">
 * <td>INT_FRAC_DIGITS</td>
 * <td>International fractional digits.</td>
 * </tr>
 * <tr valign="top">
 * <td>FRAC_DIGITS</td>
 * <td>Local fractional digits.</td>
 * </tr>
 * <tr valign="top">
 * <td>P_CS_PRECEDES</td>
 * <td>Returns 1 if CURRENCY_SYMBOL precedes a positive value.</td>
 * </tr>
 * <tr valign="top">
 * <td>P_SEP_BY_SPACE</td>
 * <td>Returns 1 if a space separates CURRENCY_SYMBOL from a positive value.</td>
 * </tr>
 * <tr valign="top">
 * <td>N_CS_PRECEDES</td>
 * <td>Returns 1 if CURRENCY_SYMBOL precedes a negative value.</td>
 * </tr>
 * <tr valign="top">
 * <td>N_SEP_BY_SPACE</td>
 * <td>Returns 1 if a space separates CURRENCY_SYMBOL from a negative value.</td>
 * </tr>
 * <tr valign="top">
 * <td>P_SIGN_POSN</td>
 * Returns 0 if parentheses surround the quantity and CURRENCY_SYMBOL.
 * @return string the element as a string, or false if item
 * is not valid.
 * @since 4.1.0
 * @since 5.0
 */
function locale_info ($item)
{
    return nl_langinfo($item);
}

/**
 * Quote string with slashes in a C style
 * @link http://php.net/manual/en/function.addcslashes.php
 * @param string $str <p>
 * The string to be escaped.
 * </p>
 * @param string $charlist <p>
 * A list of characters to be escaped. If
 * charlist contains characters
 * \n, \r etc., they are
 * converted in C-like style, while other non-alphanumeric characters
 * with ASCII codes lower than 32 and higher than 126 converted to
 * octal representation.
 * </p>
 * <p>
 * When you define a sequence of characters in the charlist argument
 * make sure that you know what characters come between the
 * characters that you set as the start and end of the range.
 * ]]>
 * Also, if the first character in a range has a higher ASCII value
 * than the second character in the range, no range will be
 * constructed. Only the start, end and period characters will be
 * escaped. Use the ord function to find the
 * ASCII value for a character.
 * ]]>
 * </p>
 * <p>
 * Be careful if you choose to escape characters 0, a, b, f, n, r,
 * t and v. They will be converted to \0, \a, \b, \f, \n, \r, \t
 * and \v.
 * In PHP \0 (NULL), \r (carriage return), \n (newline), \f (form feed),
 * \v (vertical tab) and \t (tab) are predefined escape sequences, 
 * while in C all of these are predefined escape sequences.
 * </p>
 * @return string the escaped string.
 * @since 4.0
 * @since 5.0
 */
function str_cslashes ($str, $charlist)
{
    return addcslashes($str, $charlist);
}

/**
 * Un-quote string quoted with <function>addcslashes</function>
 * @link http://php.net/manual/en/function.stripcslashes.php
 * @param string $str <p>
 * The string to be unescaped.
 * </p>
 * @return string the unescaped string.
 * @since 4.0
 * @since 5.0
 */
function str_cslashes_strip ($str)
{
    return stripcslashes($str);
}

/**
 * Quote string with slashes
 * @link http://php.net/manual/en/function.addslashes.php
 * @param string $str <p>
 * The string to be escaped.
 * </p>
 * @return string the escaped string.
 * @since 4.0
 * @since 5.0
 */
function str_slashes ($str)
{
    return addslashes($str);
}

/**
 * Un-quotes a quoted string
 * @link http://php.net/manual/en/function.stripslashes.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @return string a string with backslashes stripped off.
 * (\' becomes ' and so on.)
 * Double backslashes (\\) are made into a single
 * backslash (\).
 * @since 4.0
 * @since 5.0
 */
function str_slashes_strip ($str)
{
    return stripslashes($str);
}

/**
 * &Alias; <function>rtrim</function>
 * @see rtrim()
 * @link http://php.net/manual/en/function.chop.php
 * @param string $str The input string.
 * @param string $character_mask [optional]
 * @return string the modified string.
 * @since 4.0
 * @since 5.0
 */
function str_chop ($str, $character_mask)
{
    return chop($str, $character_mask);
}

/**
 * Return information about characters used in a string
 * @link http://php.net/manual/en/function.count-chars.php
 * @param string $string <p>
 * The examined string.
 * </p>
 * @param int $mode [optional] <p>
 * See return values.
 * </p>
 * @return mixed Depending on mode
 * count_chars returns one of the following:
 * 0 - an array with the byte-value as key and the frequency of
 * every byte as value.
 * 1 - same as 0 but only byte-values with a frequency greater
 * than zero are listed.
 * 2 - same as 0 but only byte-values with a frequency equal to
 * zero are listed.
 * 3 - a string containing all unique characters is returned.
 * 4 - a string containing all not used characters is returned.
 * @since 4.0
 * @since 5.0
 */
function str_count_chars ($string, $mode = null)
{
    return count_chars($string, $mode);
}

/**
 * Split a string into smaller chunks
 * @link http://php.net/manual/en/function.chunk-split.php
 * @param string $body <p>
 * The string to be chunked.
 * </p>
 * @param int $chunklen [optional] <p>
 * The chunk length.
 * </p>
 * @param string $end [optional] <p>
 * The line ending sequence.
 * </p>
 * @return string the chunked string.
 * @since 4.0
 * @since 5.0
 */
function str_chunk_split ($body, $chunklen = null, $end = null)
{
    return chunk_split($body, $chunklen, $end);
}

/**
 * Split a string by string
 * @link http://php.net/manual/en/function.explode.php
 * @param string $delimiter <p>
 * The boundary string.
 * </p>
 * @param string $string <p>
 * The input string.
 * </p>
 * @param int $limit [optional] <p>
 * If limit is set and positive, the returned array will contain
 * a maximum of limit elements with the last
 * element containing the rest of string.
 * </p>
 * <p>
 * If the limit parameter is negative, all components
 * except the last -limit are returned.
 * </p>
 * <p>
 * If the limit parameter is zero, then this is treated as 1.
 * </p>
 * @return array If delimiter is an empty string (""),
 * explode will return false.
 * If delimiter contains a value that is not
 * contained in string and a negative
 * limit is used, then an empty array will be
 * returned. For any other limit, an array containing
 * string will be returned.
 * @since 4.0
 * @since 5.0
 */
function str_explode ($delimiter, $string, $limit = null)
{
    return explode($delimiter, $string, $limit);
}

/**
 * Join array elements with a string
 * @link http://php.net/manual/en/function.implode.php
 * @param string $glue [optional]<p>
 * Defaults to an empty string. This is not the preferred usage of
 * implode as glue would be
 * the second parameter and thus, the bad prototype would be used.
 * </p>
 * @param array $pieces <p>
 * The array of strings to implode.
 * </p>
 * @return string a string containing a string representation of all the array
 * elements in the same order, with the glue string between each element.
 * @since 4.0
 * @since 5.0
 */
function str_implode ($glue = "", array $pieces)
{
    return implode($glue, $pieces);
}

/**
 * Formats a number as a currency string
 * @link http://php.net/manual/en/function.money-format.php
 * @param string $format <p>
 * The format specification consists of the following sequence:
 * <p>a % character</p>
 * @param float $number <p>
 * The number to be formatted.
 * </p>
 * @return string the formatted string. Characters before and after the formatting
 * string will be returned unchanged.
 * Non-numeric number causes returning &null; and
 * emitting E_WARNING.
 * @since 4.3.0
 * @since 5.0
 */
function str_money_format ($format, $number)
{
    return money_format($format, $number);
}

/**
 * Format a number with grouped thousands
 * @link http://php.net/manual/en/function.number-format.php
 * @param float $number <p>
 * The number being formatted.
 * </p>
 * @param int $decimals [optional] <p>
 * Sets the number of decimal points.
 * </p>
 * @param string $dec_point [optional]
 * @param string $thousands_sep [optional]
 * @return string A formatted version of number.
 * @since 4.0
 * @since 5.0
 */
function str_number_format ($number , $decimals = 0 , $dec_point = '.' , $thousands_sep = ',' )
{
    return number_format($number, $decimals, $dec_point, $thousands_sep);
}

/**
 * Calculate Levenshtein distance between two strings
 * @link http://php.net/manual/en/function.levenshtein.php
 * Note: In its simplest form the function will take only the two strings
 * as parameter and will calculate just the number of insert, replace and
 * delete operations needed to transform str1 into str2.
 * Note: A second variant will take three additional parameters that define
 * the cost of insert, replace and delete operations. This is more general
 * and adaptive than variant one, but not as efficient.
 * @param string $str1 <p>
 * One of the strings being evaluated for Levenshtein distance.
 * </p>
 * @param string $str2 <p>
 * One of the strings being evaluated for Levenshtein distance.
 * </p>
 * @param int $cost_ins [optional] <p>
 * Defines the cost of insertion.
 * </p>
 * @param int $cost_rep [optional] <p>
 * Defines the cost of replacement.
 * </p>
 * @param int $cost_del [optional] <p>
 * Defines the cost of deletion.
 * </p>
 * @return int This function returns the Levenshtein-Distance between the
 * two argument strings or -1, if one of the argument strings
 * is longer than the limit of 255 characters.
 * @since 4.0.1
 * @since 5.0
 */
function str_levenshtein ($str1, $str2, $cost_ins = null, $cost_rep = null, $cost_del = null)
{
    return levenshtein($str1, $str2, $cost_ins, $cost_rep, $cost_del);
}

/**
 * Calculate the metaphone key of a string
 * @link http://php.net/manual/en/function.metaphone.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @param int $phonemes [optional] <p>
 * This parameter restricts the returned metaphone key to phonemes characters in length.
 * The default value of 0 means no restriction.
 * </p>
 * @return string|bool the metaphone key as a string, or FALSE on failure
 * @since 4.0
 * @since 5.0
 */
function str_metaphone ($str, $phonemes = 0)
{
    return metaphone($str, $phonemes);
}

/**
 * Parses the string into variables
 * @link http://php.net/manual/en/function.parse-str.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @param array $arr [optional] <p>
 * If the second parameter arr is present,
 * variables are stored in this variable as array elements instead.
 * </p>
 * @return void 
 * @since 4.0
 * @since 5.0
 */
function str_parse ($str, array &$arr = null)
{
    return parse_str($str, $arr);
}

/**
 * Quote meta characters
 * @link http://php.net/manual/en/function.quotemeta.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @return string the string with meta characters quoted.
 * @since 4.0
 * @since 5.0
 */
function str_quote_meta ($str)
{
    return quotemeta($str);
}

/**
 * Calculate the similarity between two strings
 * @link http://php.net/manual/en/function.similar-text.php
 * @param string $first <p>
 * The first string.
 * </p>
 * @param string $second <p>
 * The second string.
 * </p>
 * @param float $percent [optional] <p>
 * By passing a reference as third argument,
 * similar_text will calculate the similarity in
 * percent for you. 
 * </p>
 * @return int the number of matching chars in both strings.
 * @since 4.0
 * @since 5.0
 */
function str_similar_text ($first, $second, &$percent = null)
{
    return similar_text($first, $second, $percent);
}

/**
 * Calculate the soundex key of a string
 * @link http://php.net/manual/en/function.soundex.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @return string the soundex key as a string.
 * @since 4.0
 * @since 5.0
 */
function str_soundex ($str)
{
    return soundex($str);
}

/**
 * Parses input from a string according to a format
 * @link http://php.net/manual/en/function.sscanf.php
 * @param string $str <p>
 * The input string being parsed.
 * </p>
 * @param string $format <p>
 * The interpreted format for str, which is
 * described in the documentation for sprintf with
 * following differences:
 * Function is not locale-aware.
 * F, g, G and
 * b are not supported.
 * D stands for decimal number.
 * i stands for integer with base detection.
 * n stands for number of characters processed so far.
 * </p>
 * @param mixed $_ [optional] 
 * @return mixed If only
 * two parameters were passed to this function, the values parsed
 * will be returned as an array. Otherwise, if optional parameters are passed,
 * the function will return the number of assigned values. The optional
 * parameters must be passed by reference.
 * @since 4.0.1
 * @since 5.0
 */
function str_sscanf ($str, $format, &...$_)
{
    return sscanf($str, $format, ...$_);
}

/**
 * Strip whitespace (or other characters) from the end of a string.
 * Without the second parameter, rtrim() will strip these characters:
 * <ul>
 * <li>" " (ASCII 32 (0x20)), an ordinary space.
 * <li>"\t" (ASCII 9 (0x09)), a tab.
 * <li>"\n" (ASCII 10 (0x0A)), a new line (line feed).
 * <li>"\r" (ASCII 13 (0x0D)), a carriage return.
 * <li>"\0" (ASCII 0 (0x00)), the NUL-byte.
 * <li>"\x0B" (ASCII 11 (0x0B)), a vertical tab.
 * </ul>
 * @link http://php.net/manual/en/function.rtrim.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @param string $charlist [optional] <p>
 * You can also specify the characters you want to strip, by means
 * of the charlist parameter.
 * Simply list all characters that you want to be stripped. With
 * .. you can specify a range of characters.
 * </p>
 * @return string the modified string.
 * @since 4.0
 * @since 5.0
 */
function str_rtrim ($str, $charlist = " \t\n\r\0\x0B")
{
    return rtrim($str, $charlist);
}

/**
 * Strip whitespace (or other characters) from the beginning and end of a string
 * @link http://php.net/manual/en/function.trim.php
 * @param string $str <p>
 * The string that will be trimmed.
 * </p>
 * @param string $charlist [optional] <p>
 * Optionally, the stripped characters can also be specified using
 * the charlist parameter.
 * Simply list all characters that you want to be stripped. With
 * .. you can specify a range of characters.
 * </p>
 * @return string The trimmed string.
 * @since 4.0
 * @since 5.0
 */
function str_trim ($str, $charlist = " \t\n\r\0\x0B")
{
    return trim($str, $charlist);
}

/**
 * Strip whitespace (or other characters) from the beginning of a string
 * @link http://php.net/manual/en/function.ltrim.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @param string $charlist [optional] <p>
 * You can also specify the characters you want to strip, by means of the
 * charlist parameter.
 * Simply list all characters that you want to be stripped. With
 * .. you can specify a range of characters.
 * </p>
 * @return string This function returns a string with whitespace stripped from the
 * beginning of str.
 * Without the second parameter,
 * ltrim will strip these characters:
 * " " (ASCII 32
 * (0x20)), an ordinary space.
 * "\t" (ASCII 9
 * (0x09)), a tab.
 * "\n" (ASCII 10
 * (0x0A)), a new line (line feed).
 * "\r" (ASCII 13
 * (0x0D)), a carriage return.
 * "\0" (ASCII 0
 * (0x00)), the NUL-byte.
 * "\x0B" (ASCII 11
 * (0x0B)), a vertical tab.
 * @since 4.0
 * @since 5.0
 */
function str_ltrim ($str, $charlist = " \t\n\r\0\x0B")
{
    return ltrim($str, $charlist);
}

/**
 * Make a string's first character lowercase
 * @link http://php.net/manual/en/function.lcfirst.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @return string the resulting string.
 * @since 5.3.0
 */
function str_lc_first ($str)
{
    return lcfirst($str);
}

/**
 * Make a string's first character uppercase
 * @link http://php.net/manual/en/function.ucfirst.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @return string the resulting string.
 * @since 4.0
 * @since 5.0
 */
function str_uc_first ($str)
{
    return ucfirst($str);
}

/**
 * Uppercase the first character of each word in a string
 * @link http://php.net/manual/en/function.ucwords.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @param string $delimiters [optional] <p>
 * @return string the modified string.
 * @since 4.0
 * @since 5.0
 */
function str_uc_words ($str, $delimiters = " \t\r\n\f\v")
{
    return ucwords($str, $delimiters);
}

/**
 * Wraps a string to a given number of characters
 * @link http://php.net/manual/en/function.wordwrap.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @param int $width [optional] <p>
 * The column width.
 * </p>
 * @param string $break [optional] <p>
 * The line is broken using the optional
 * break parameter.
 * </p>
 * @param bool $cut [optional] <p>
 * If the cut is set to true, the string is
 * always wrapped at or before the specified width. So if you have
 * a word that is larger than the given width, it is broken apart.
 * (See second example).
 * </p>
 * @return string the given string wrapped at the specified column.
 * @since 4.0.2
 * @since 5.0
 */
function str_word_wrap ($str, $width = 75, $break = "\n", $cut = false)
{
    return wordwrap($str, $width, $break, $cut);
}

/**
 * Binary safe string comparison
 * @link http://php.net/manual/en/function.strcmp.php
 * @param string $str1 <p>
 * The first string.
 * </p>
 * @param string $str2 <p>
 * The second string.
 * </p>
 * @return int &lt; 0 if <i>str1</i> is less than
 * <i>str2</i>; &gt; 0 if <i>str1</i>
 * is greater than <i>str2</i>, and 0 if they are
 * equal.
 * @since 4.0
 * @since 5.0
 */
function str_cmp ($str1, $str2)
{
    return strcmp($str1, $str2);
}

/**
 * Binary safe string comparison of the first n characters
 * @link http://php.net/manual/en/function.strncmp.php
 * @param string $str1 <p>
 * The first string.
 * </p>
 * @param string $str2 <p>
 * The second string.
 * </p>
 * @param int $len <p>
 * Number of characters to use in the comparison.
 * </p>
 * @return int &lt; 0 if <i>str1</i> is less than
 * <i>str2</i>; &gt; 0 if <i>str1</i>
 * is greater than <i>str2</i>, and 0 if they are
 * equal.
 * @since 4.0
 * @since 5.0
 */
function str_ncmp ($str1, $str2, $len)
{
    return strncmp($str1, $str2, $len);
}

/**
 * Binary safe case-insensitive string comparison
 * @link http://php.net/manual/en/function.strcasecmp.php
 * @param string $str1 <p>
 * The first string
 * </p>
 * @param string $str2 <p>
 * The second string
 * </p>
 * @return int &lt; 0 if <i>str1</i> is less than
 * <i>str2</i>; &gt; 0 if <i>str1</i>
 * is greater than <i>str2</i>, and 0 if they are
 * equal.
 * @since 4.0
 * @since 5.0
 */
function str_case_cmp ($str1, $str2)
{
    return strcasecmp($str1, $str2);
}

/**
 * Binary safe case-insensitive string comparison of the first n characters
 * @link http://php.net/manual/en/function.strncasecmp.php
 * @param string $str1 <p>
 * The first string.
 * </p>
 * @param string $str2 <p>
 * The second string.
 * </p>
 * @param int $len <p>
 * The length of strings to be used in the comparison.
 * </p>
 * @return int &lt; 0 if <i>str1</i> is less than
 * <i>str2</i>; &gt; 0 if <i>str1</i> is
 * greater than <i>str2</i>, and 0 if they are equal.
 * @since 4.0.4
 * @since 5.0
 */
function str_ncase_cmp ($str1, $str2, $len)
{
    return strncasecmp($str1, $str2, $len);
}

/**
 * String comparisons using a "natural order" algorithm
 * @link http://php.net/manual/en/function.strnatcmp.php
 * @param string $str1 <p>
 * The first string.
 * </p>
 * @param string $str2 <p>
 * The second string.
 * </p>
 * @return int Similar to other string comparison functions, this one returns &lt; 0 if
 * str1 is less than str2; &gt;
 * 0 if str1 is greater than
 * str2, and 0 if they are equal.
 * @since 4.0
 * @since 5.0
 */
function str_nat_cmp ($str1, $str2)
{
    return strnatcmp($str1, $str2);
}

/**
 * Case insensitive string comparisons using a "natural order" algorithm
 * @link http://php.net/manual/en/function.strnatcasecmp.php
 * @param string $str1 <p>
 * The first string.
 * </p>
 * @param string $str2 <p>
 * The second string.
 * </p>
 * @return int Similar to other string comparison functions, this one returns &lt; 0 if
 * str1 is less than str2 &gt;
 * 0 if str1 is greater than
 * str2, and 0 if they are equal.
 * @since 4.0
 * @since 5.0
 */
function str_nat_case_cmp ($str1, $str2)
{
    return strnatcasecmp($str1, $str2);
}

/**
 * Make a string lowercase
 * @link http://php.net/manual/en/function.strtolower.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @return string the lowercased string.
 * @since 4.0
 * @since 5.0
 */
function str_to_lower ($str)
{
    return strtolower($str);
}

/**
 * Make a string uppercase
 * @link http://php.net/manual/en/function.strtoupper.php
 * @param string $string <p>
 * The input string.
 * </p>
 * @return string the uppercased string.
 * @since 4.0
 * @since 5.0
 */
function str_to_upper ($string)
{
    return strtoupper($string);
}

/**
 * Parse a CSV string into an array
 * @link http://php.net/manual/en/function.str-getcsv.php
 * @param string $input <p>
 * The string to parse.
 * </p>
 * @param string $delimiter [optional] <p>
 * Set the field delimiter (one character only).
 * </p>
 * @param string $enclosure [optional] <p>
 * Set the field enclosure character (one character only).
 * </p>
 * @param string $escape [optional] <p>
 * Set the escape character (one character only). 
 * Defaults as a backslash (\)
 * </p>
 * @return array an indexed array containing the fields read.
 * @since 5.3.0
 */
function str_get_csv ($input, $delimiter = ",", $enclosure = '"', $escape = "\\")
{
    return str_getcsv($input, $delimiter, $enclosure, $escape);
}

/**
 * &Alias; <function>strstr</function>
 * @link http://php.net/manual/en/function.strchr.php
 * Note: This function is case-sensitive. For case-insensitive searches, use stristr().
 * Note: If you only want to determine if a particular needle occurs within haystack,
 * use the faster and less memory intensive function strpos() instead.
 * @since 4.0
 * @since 5.0
 *
 * @param string $haystack The input string.
 * @param mixed $needle If needle is not a string, it is converted to an integer and applied as the ordinal value of a character.
 * @param bool $part [optional] If TRUE, strstr() returns the part of the haystack before the first occurrence of the needle (excluding the needle).
 * @return string Returns the portion of string, or FALSE if needle is not found.
 */
function str_chr ($haystack, $needle, $part)
{
    return strchr($haystack, $needle, $part);
}

/**
 * Locale based string comparison
 * @link http://php.net/manual/en/function.strcoll.php
 * @param string $str1 <p>
 * The first string.
 * </p>
 * @param string $str2 <p>
 * The second string.
 * </p>
 * @return int &lt; 0 if str1 is less than
 * str2; &gt; 0 if
 * str1 is greater than
 * str2, and 0 if they are equal.
 * @since 4.0.5
 * @since 5.0
 */
function str_coll ($str1, $str2)
{
    return strcoll($str1, $str2);
}

/**
 * Find length of initial segment not matching mask
 * @link http://php.net/manual/en/function.strcspn.php
 * @param string $str1 <p>
 * The first string.
 * </p>
 * @param string $str2 <p>
 * The second string.
 * </p>
 * @param int $start [optional] <p>
 * The start position of the string to examine.
 * </p>
 * @param int $length [optional] <p>
 * The length of the string to examine.
 * </p>
 * @return int the length of the segment as an integer.
 * @since 4.0
 * @since 5.0
 */
function str_cspn ($str1, $str2, $start = null, $length = null)
{
    return strcspn($str1, $str2, $start, $length);
}

/**
 * Find position of first occurrence of a case-insensitive string
 * @link http://php.net/manual/en/function.stripos.php
 * @param string $haystack <p>
 * The string to search in
 * </p>
 * @param string $needle <p>
 * Note that the needle may be a string of one or
 * more characters.
 * </p>
 * <p>
 * If needle is not a string, it is converted to
 * an integer and applied as the ordinal value of a character.
 * </p>
 * @param int $offset [optional] <p>
 * The optional offset parameter allows you
 * to specify which character in haystack to
 * start searching. The position returned is still relative to the
 * beginning of haystack.
 * </p>
 * @return int If needle is not found,
 * stripos will return boolean false.
 * @since 5.0
 */
function str_ipos ($haystack, $needle, $offset = null)
{
    return stripos($haystack, $needle, $offset);
}

/**
 * Case-insensitive <function>strstr</function>
 * @link http://php.net/manual/en/function.stristr.php
 * @param string $haystack <p>
 * The string to search in
 * </p>
 * @param mixed $needle <p>
 * If needle is not a string, it is converted to
 * an integer and applied as the ordinal value of a character.
 * </p>
 * @param bool $before_needle [optional] <p>
 * If true, stristr
 * returns the part of the haystack before the
 * first occurrence of the needle.
 * </p>
 * @return string the matched substring. If needle is not
 * found, returns false.
 * @since 4.0
 * @since 5.0
 */
function str_istr ($haystack, $needle, $before_needle = null)
{
    return stristr($haystack, $needle, $before_needle);
}

/**
 * Get string length
 * @link http://php.net/manual/en/function.strlen.php
 * @param string $string <p>
 * The string being measured for length.
 * </p>
 * @return int The length of the <i>string</i> on success,
 * and 0 if the <i>string</i> is empty.
 * @since 4.0
 * @since 5.0
 */
function str_len ($string)
{
    return strlen($string);
}

/**
 * Search a string for any of a set of characters
 * @link http://php.net/manual/en/function.strpbrk.php
 * @param string $haystack <p>
 * The string where char_list is looked for.
 * </p>
 * @param string $char_list <p>
 * This parameter is case sensitive.
 * </p>
 * @return string a string starting from the character found, or false if it is
 * not found.
 * @since 5.0
 */
function str_pbrk ($haystack, $char_list)
{
    return strpbrk($haystack, $char_list);
}

/**
 * Find the position of the first occurrence of a substring in a string
 * @link http://php.net/manual/en/function.strpos.php
 * @param string $haystack <p>
 * The string to search in
 * </p>
 * @param mixed $needle <p>
 * If <b>needle</b> is not a string, it is converted
 * to an integer and applied as the ordinal value of a character.
 * </p>
 * @param int $offset [optional] <p>
 * If specified, search will start this number of characters counted from
 * the beginning of the string. Unlike {@see strrpos()} and {@see strripos()}, the offset cannot be negative.
 * </p>
 * @return int|boolean <p>
 * Returns the position where the needle exists relative to the beginnning of
 * the <b>haystack</b> string (independent of search direction
 * or offset).
 * Also note that string positions start at 0, and not 1.
 * </p>
 * <p>
 * Returns <b>FALSE</b> if the needle was not found.
 * </p>
 * @since 4.0
 * @since 5.0
 */
function str_pos ($haystack, $needle, $offset = 0)
{
    return strpos($haystack, $needle, $offset);
}

/**
 * Find the last occurrence of a character in a string
 * @link http://php.net/manual/en/function.strrchr.php
 * @param string $haystack <p>
 * The string to search in
 * </p>
 * @param mixed $needle <p>
 * If <b>needle</b> contains more than one character,
 * only the first is used. This behavior is different from that of {@see strstr()}.
 * </p>
 * <p>
 * If <b>needle</b> is not a string, it is converted to
 * an integer and applied as the ordinal value of a character.
 * </p>
 * @return string <p>
 * This function returns the portion of string, or <b>FALSE</b> if
 * <b>needle</b> is not found.
 * </p>
 * @since 4.0
 * @since 5.0
 */
function str_rchr ($haystack, $needle)
{
    return strrchr($haystack, $needle);
}

/**
 * Reverse a string
 * @link http://php.net/manual/en/function.strrev.php
 * @param string $string <p>
 * The string to be reversed.
 * </p>
 * @return string the reversed string.
 * @since 4.0
 * @since 5.0
 */
function str_rev ($string)
{
    return strrev($string);
}

/**
 * Find position of last occurrence of a case-insensitive string in a string
 * @link http://php.net/manual/en/function.strripos.php
 * @param string $haystack <p>
 * The string to search in
 * </p>
 * @param string $needle <p>
 * Note that the needle may be a string of one or
 * more characters.
 * </p>
 * @param int $offset [optional] <p>
 * The offset parameter may be specified to begin
 * searching an arbitrary number of characters into the string.
 * </p>
 * <p>
 * Negative offset values will start the search at
 * offset characters from the
 * start of the string.
 * </p>
 * @return int the numerical position of the last occurrence of
 * needle. Also note that string positions start at 0,
 * and not 1.
 * </p>
 * <p>
 * If needle is not found, false is returned.
 * @since 5.0
 */
function str_ripos ($haystack, $needle, $offset = null)
{
    return strripos($haystack, $needle, $offset);
}

/**
 * Find the position of the last occurrence of a substring in a string
 * @link http://php.net/manual/en/function.strrpos.php
 * @param string $haystack <p>
 * The string to search in.
 * </p>
 * @param string $needle <p>
 * If <b>needle</b> is not a string, it is converted to an integer and applied as the ordinal value of a character.
 * </p>
 * @param int $offset [optional] <p>
 * If specified, search will start this number of characters counted from the beginning of the string. If the value is negative, search will instead start from that many characters from the end of the string, searching backwards.
 * </p>
 * @return int|boolean <p>
 * Returns the position where the needle exists relative to the beginning of
 * the <b>haystack</b> string (independent of search direction
 * or offset).
 * Also note that string positions start at 0, and not 1.
 * </p>
 * <p>
 * Returns <b>FALSE</b> if the needle was not found.
 * </p>
 * @since 4.0
 * @since 5.0
 */
function str_rpos ($haystack, $needle, $offset = 0)
{
    return strrpos($haystack, $needle, $offset);
}

/**
 * Find first occurrence of a string
 * @link http://php.net/manual/en/function.strstr.php
 * @param string $haystack <p>
 * The input string.
 * </p>
 * @param mixed $needle <p>
 * If needle is not a string, it is converted to
 * an integer and applied as the ordinal value of a character.
 * </p>
 * @param bool $before_needle [optional] <p>
 * If true, strstr returns
 * the part of the haystack before the first
 * occurrence of the needle.
 * </p>
 * @return string the portion of string, or false if needle
 * is not found.
 * @since 4.0
 * @since 5.0
 */
function str_str ($haystack, $needle, $before_needle = null)
{
    return strstr($haystack, $needle, $before_needle);
}

/**
 * Tokenize string
 * Note that only the first call to strtok uses the string argument.
 * Every subsequent call to strtok only needs the token to use, as it keeps track of where it is in the current string.
 * To start over, or to tokenize a new string you simply call strtok with the string argument again to initialize it.
 * Note that you may put multiple tokens in the token parameter.
 * The string will be tokenized when any one of the characters in the argument are found.
 * @link http://php.net/manual/en/function.strtok.php
 * @param string $str [optional] <p>
 * The string being split up into smaller strings (tokens).
 * </p>
 * @param string $token <p>
 * The delimiter used when splitting up str.
 * </p>
 * @return string A string token.
 * @since 4.0
 * @since 5.0
 */
function str_tok ($str = null, $token)
{
    return strtok($str, $token);
}

/**
 * @param string $str The string being translated.
 * @param array $replace_pairs The replace_pairs parameter may be used as a substitute for to and from in which case it's an array in the form array('from' => 'to', ...).
 * @return string A copy of str, translating all occurrences of each character in from to the corresponding character in to.
 */
function str_tr ($str, array $replace_pairs)
{
    return strtr($str, $replace_pairs);
}

/**
 * Get part of string
 * @link http://php.net/manual/en/function.mb-strcut.php
 * @param string $str <p>
 * The string being cut.
 * </p>
 * @param int $start <p>
 * The position that begins the cut.
 * </p>
 * @param int $length [optional] <p>
 * The string being decoded.
 * </p>
 * @param string $encoding [optional] &mbstring.encoding.parameter;
 * @return string mb_strcut returns the portion of
 * str specified by the
 * start and
 * length parameters.
 * @since 4.0.6
 * @since 5.0
 */
function mb_str_cut ($str, $start, $length = null, $encoding = null)
{
    return mb_strcut($str, $start, $length, $encoding);
}

/**
 * Get truncated string with specified width
 * @link http://php.net/manual/en/function.mb-strimwidth.php
 * @param string $str <p>
 * The string being decoded.
 * </p>
 * @param int $start <p>
 * The start position offset. Number of
 * characters from the beginning of string. (First character is 0)
 * </p>
 * @param int $width <p>
 * The width of the desired trim.
 * </p>
 * @param string $trimmarker [optional] <p>
 * A string that is added to the end of string 
 * when string is truncated.
 * </p>
 * @param string $encoding [optional] &mbstring.encoding.parameter;
 * @return string The truncated string. If trimmarker is set,
 * trimmarker is appended to the return value.
 * @since 4.0.6
 * @since 5.0
 */
function mb_str_trim_width ($str, $start, $width, $trimmarker = null, $encoding = null)
{
    return mb_strimwidth($str, $start, $width, $trimmarker, $encoding);
}

/**
 * Finds position of first occurrence of a string within another, case insensitive
 * @link http://php.net/manual/en/function.mb-stripos.php
 * @param string $haystack <p>
 * The string from which to get the position of the first occurrence
 * of needle
 * </p>
 * @param string $needle <p>
 * The string to find in haystack
 * </p>
 * @param int $offset [optional] <p>
 * The position in haystack
 * to start searching
 * </p>
 * @param string $encoding [optional] <p>
 * Character encoding name to use.
 * If it is omitted, internal character encoding is used.
 * </p>
 * @return int|false Return the numeric position of the first occurrence of
 * needle in the haystack
 * string, or false if needle is not found.
 * @since 5.2.0
 */
function mb_str_ipos ($haystack, $needle, $offset = 0, $encoding = null)
{
    return mb_stripos($haystack, $needle, $offset, $encoding);
}

/**
 * Finds first occurrence of a string within another, case insensitive
 * @link http://php.net/manual/en/function.mb-stristr.php
 * @param string $haystack <p>
 * The string from which to get the first occurrence
 * of needle
 * </p>
 * @param string $needle <p>
 * The string to find in haystack
 * </p>
 * @param bool $part [optional] <p>
 * Determines which portion of haystack
 * this function returns. 
 * If set to true, it returns all of haystack
 * from the beginning to the first occurrence of needle.
 * If set to false, it returns all of haystack
 * from the first occurrence of needle to the end,
 * </p>
 * @param string $encoding [optional] <p>
 * Character encoding name to use.
 * If it is omitted, internal character encoding is used.
 * </p>
 * @return string|false the portion of haystack,
 * or false if needle is not found.
 * @since 5.2.0
 */
function mb_str_istr ($haystack, $needle, $part = null, $encoding = null)
{
    return mb_stristr($haystack, $needle, $part, $encoding);
}

/**
 * Get string length
 * @link http://php.net/manual/en/function.mb-strlen.php
 * @param string $str <p>
 * The string being checked for length.
 * </p>
 * @param string $encoding [optional] &mbstring.encoding.parameter;
 * @return int the number of characters in
 * string str having character encoding
 * encoding. A multi-byte character is
 * counted as 1.
 * @since 4.0.6
 * @since 5.0
 */
function mb_str_len ($str, $encoding = null)
{
    return mb_strlen($str, $encoding);
}

/**
 * Find position of first occurrence of string in a string
 * @link http://php.net/manual/en/function.mb-strpos.php
 * @param string $haystack <p>
 * The string being checked.
 * </p>
 * @param string $needle <p>
 * The position counted from the beginning of haystack.
 * </p>
 * @param int $offset [optional] <p>
 * The search offset. If it is not specified, 0 is used.
 * </p>
 * @param string $encoding [optional] &mbstring.encoding.parameter;
 * @return int|false the numeric position of
 * the first occurrence of needle in the
 * haystack string. If
 * needle is not found, it returns false.
 * @since 4.0.6
 * @since 5.0
 */
function mb_str_pos ($haystack, $needle, $offset = 0, $encoding = null)
{
    return mb_strpos($haystack, $needle, $offset, $encoding);
}

/**
 * Finds the last occurrence of a character in a string within another
 * @link http://php.net/manual/en/function.mb-strrchr.php
 * @param string $haystack <p>
 * The string from which to get the last occurrence
 * of needle
 * </p>
 * @param string $needle <p>
 * The string to find in haystack
 * </p>
 * @param bool $part [optional] <p>
 * Determines which portion of haystack
 * this function returns. 
 * If set to true, it returns all of haystack
 * from the beginning to the last occurrence of needle.
 * If set to false, it returns all of haystack
 * from the last occurrence of needle to the end,
 * </p>
 * @param string $encoding [optional] <p>
 * Character encoding name to use.
 * If it is omitted, internal character encoding is used.
 * </p>
 * @return string|false the portion of haystack.
 * or false if needle is not found.
 * @since 5.2.0
 */
function mb_str_rchr ($haystack, $needle, $part = null, $encoding = null)
{
    return mb_strrchr($haystack, $needle, $part, $encoding);
}

/**
 * Finds the last occurrence of a character in a string within another, case insensitive
 * @link http://php.net/manual/en/function.mb-strrichr.php
 * @param string $haystack <p>
 * The string from which to get the last occurrence
 * of needle
 * </p>
 * @param string $needle <p>
 * The string to find in haystack
 * </p>
 * @param bool $part [optional] <p>
 * Determines which portion of haystack
 * this function returns. 
 * If set to true, it returns all of haystack
 * from the beginning to the last occurrence of needle.
 * If set to false, it returns all of haystack
 * from the last occurrence of needle to the end,
 * </p>
 * @param string $encoding [optional] <p>
 * Character encoding name to use.
 * If it is omitted, internal character encoding is used.
 * </p>
 * @return string|false the portion of haystack.
 * or false if needle is not found.
 * @since 5.2.0
 */
function mb_str_richr ($haystack, $needle, $part = null, $encoding = null)
{
    return mb_strrichr($haystack, $needle, $part, $encoding);
}

/**
 * Finds position of last occurrence of a string within another, case insensitive
 * @link http://php.net/manual/en/function.mb-strripos.php
 * @param string $haystack <p>
 * The string from which to get the position of the last occurrence
 * of needle
 * </p>
 * @param string $needle <p>
 * The string to find in haystack
 * </p>
 * @param int $offset [optional] <p>
 * The position in haystack
 * to start searching
 * </p>
 * @param string $encoding [optional] <p>
 * Character encoding name to use.
 * If it is omitted, internal character encoding is used.
 * </p>
 * @return int|false Return the numeric position of
 * the last occurrence of needle in the
 * haystack string, or false
 * if needle is not found.
 * @since 5.2.0
 */
function mb_str_ripos ($haystack, $needle, $offset = 0, $encoding = null)
{
    return mb_strripos($haystack, $needle, $offset, $encoding);
}

/**
 * Find position of last occurrence of a string in a string
 * @link http://php.net/manual/en/function.mb-strrpos.php
 * @param string $haystack <p>
 * The string being checked, for the last occurrence
 * of needle
 * </p>
 * @param string $needle <p>
 * The string to find in haystack.
 * </p>
 * @param int $offset [optional] May be specified to begin searching an arbitrary number of characters into
 * the string. Negative values will stop searching at an arbitrary point
 * prior to the end of the string.
 * @param string $encoding [optional] &mbstring.encoding.parameter;
 * @return int|false the numeric position of
 * the last occurrence of needle in the
 * haystack string. If
 * needle is not found, it returns false.
 * @since 4.0.6
 * @since 5.0
 */
function mb_str_rpos ($haystack, $needle, $offset = 0, $encoding = null)
{
    return mb_strrpos($haystack, $needle, $offset, $encoding);
}

/**
 * Finds first occurrence of a string within another
 * @link http://php.net/manual/en/function.mb-strstr.php
 * @param string $haystack <p>
 * The string from which to get the first occurrence
 * of needle
 * </p>
 * @param string $needle <p>
 * The string to find in haystack
 * </p>
 * @param bool $part [optional] <p>
 * Determines which portion of haystack
 * this function returns. 
 * If set to true, it returns all of haystack
 * from the beginning to the first occurrence of needle.
 * If set to false, it returns all of haystack
 * from the first occurrence of needle to the end,
 * </p>
 * @param string $encoding [optional] <p>
 * Character encoding name to use.
 * If it is omitted, internal character encoding is used.
 * </p>
 * @return string|false the portion of haystack,
 * or false if needle is not found.
 * @since 5.2.0
 */
function mb_str_str ($haystack, $needle, $part = null, $encoding = null)
{
    return mb_strstr($haystack, $needle, $part, $encoding);
}

/**
 * Make a string lowercase
 * @link http://php.net/manual/en/function.mb-strtolower.php
 * @param string $str <p>
 * The string being lowercased.
 * </p>
 * @param string $encoding [optional] &mbstring.encoding.parameter;
 * @return string str with all alphabetic characters converted to lowercase.
 * @since 4.3.0
 * @since 5.0
 */
function mb_str_to_lower ($str, $encoding = null)
{
    return mb_strtolower($str, $encoding);
}

/**
 * Make a string uppercase
 * @link http://php.net/manual/en/function.mb-strtoupper.php
 * @param string $str <p>
 * The string being uppercased.
 * </p>
 * @param string $encoding [optional] &mbstring.encoding.parameter;
 * @return string str with all alphabetic characters converted to uppercase.
 * @since 4.3.0
 * @since 5.0
 */
function mb_str_to_upper ($str, $encoding = null)
{
    return mb_strtoupper($str, $encoding);
}

/**
 * Return width of string
 * @link http://php.net/manual/en/function.mb-strwidth.php
 * @param string $str <p>
 * The string being decoded.
 * </p>
 * @param string $encoding [optional] &mbstring.encoding.parameter;
 * @return int The width of string str.
 * @since 4.0.6
 * @since 5.0
 */
function mb_str_width ($str, $encoding = null)
{
    return mb_strwidth($str, $encoding);
}

/**
 * Returns the character count of string
 * @link http://php.net/manual/en/function.iconv-strlen.php
 * @param string $str <p>
 * The string.
 * </p>
 * @param string $charset [optional] <p>
 * If <i>charset</i> parameter is omitted,
 * <i>str</i> is assumed to be encoded in
 * iconv.internal_encoding.
 * </p>
 * @return int the character count of <i>str</i>, as an integer.
 * @since 5.0
 */
function iconv_str_len ($str, $charset = null)
{
    return iconv_strlen($str, $charset);
}

/**
 * Finds position of first occurrence of a needle within a haystack
 * @link http://php.net/manual/en/function.iconv-strpos.php
 * @param string $haystack <p>
 * The entire string.
 * </p>
 * @param string $needle <p>
 * The searched substring.
 * </p>
 * @param int $offset [optional] <p>
 * The optional <i>offset</i> parameter specifies
 * the position from which the search should be performed.
 * </p>
 * @param string $charset [optional] <p>
 * If <i>charset</i> parameter is omitted,
 * <i>string</i> are assumed to be encoded in
 * iconv.internal_encoding.
 * </p>
 * @return int the numeric position of the first occurrence of
 * <i>needle</i> in <i>haystack</i>.
 * </p>
 * <p>
 * If <i>needle</i> is not found,
 * <b>iconv_strpos</b> will return <b>FALSE</b>.
 * @since 5.0
 */
function iconv_str_pos ($haystack, $needle, $offset = 0, $charset = null)
{
    return iconv_strpos($haystack, $needle, $offset, $charset);
}

/**
 * Finds the last occurrence of a needle within a haystack
 * @link http://php.net/manual/en/function.iconv-strrpos.php
 * @param string $haystack <p>
 * The entire string.
 * </p>
 * @param string $needle <p>
 * The searched substring.
 * </p>
 * @param string $charset [optional] <p>
 * If <i>charset</i> parameter is omitted,
 * <i>string</i> are assumed to be encoded in
 * iconv.internal_encoding.
 * </p>
 * @return int the numeric position of the last occurrence of
 * <i>needle</i> in <i>haystack</i>.
 * </p>
 * <p>
 * If <i>needle</i> is not found,
 * <b>iconv_strrpos</b> will return <b>FALSE</b>.
 * @since 5.0
 */
function iconv_str_rpos ($haystack, $needle, $charset = null)
{
    return iconv_strrpos($haystack, $needle, $charset);
}

/**
 * Sort an array
 * @link http://php.net/manual/en/function.sort.php
 * @param array $array <p>
 * The input array.
 * </p>
 * @param int $sort_flags [optional] <p>
 * The optional second parameter sort_flags
 * may be used to modify the sorting behavior using these values:
 * </p>
 * <p>
 * Sorting type flags:
 * SORT_REGULAR - compare items normally
 * (don't change types)
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function array_sort (array &$array, $sort_flags = null)
{
    return sort($array, $sort_flags);
}

/**
 * Sort an array in reverse order
 * @link http://php.net/manual/en/function.rsort.php
 * @param array $array <p>
 * The input array.
 * </p>
 * @param int $sort_flags [optional] <p>
 * You may modify the behavior of the sort using the optional
 * parameter sort_flags, for details see
 * sort.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function array_sort_reverse (array &$array, $sort_flags = null)
{
    return rsort($array, $sort_flags);
}

/**
 * Sort an array by values using a user-defined comparison function
 * @link http://php.net/manual/en/function.usort.php
 * @param array $array <p>
 * The input array.
 * </p>
 * @param callback $cmp_function <p>
 * The comparison function must return an integer less than, equal to, or
 * greater than zero if the first argument is considered to be
 * respectively less than, equal to, or greater than the second.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function array_usort (array &$array, $cmp_function)
{
    return usort($array, $cmp_function);
}

/**
 * Sort an array and maintain index association
 * @link http://php.net/manual/en/function.asort.php
 * @param array $array <p>
 * The input array.
 * </p>
 * @param int $sort_flags [optional] <p>
 * You may modify the behavior of the sort using the optional
 * parameter sort_flags, for details
 * see sort.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function array_sort_assoc (array &$array, $sort_flags = null)
{
    return asort($array, $sort_flags);
}

/**
 * Sort an array in reverse order and maintain index association
 * @link http://php.net/manual/en/function.arsort.php
 * @param array $array <p>
 * The input array.
 * </p>
 * @param int $sort_flags [optional] <p>
 * You may modify the behavior of the sort using the optional parameter
 * sort_flags, for details see
 * sort.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function array_sort_assoc_reverse (array &$array, $sort_flags = null)
{
    return arsort($array, $sort_flags);
}

/**
 * Sort an array with a user-defined comparison function and maintain index association
 * @link http://php.net/manual/en/function.uasort.php
 * @param array $array <p>
 * The input array.
 * </p>
 * @param callback $cmp_function <p>
 * See usort and uksort for
 * examples of user-defined comparison functions.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function array_sort_uassoc (array &$array, $cmp_function)
{
    return uasort($array, $cmp_function);
}

/**
 * Sort an array by key
 * @link http://php.net/manual/en/function.ksort.php
 * @param array $array <p>
 * The input array.
 * </p>
 * @param int $sort_flags [optional] <p>
 * You may modify the behavior of the sort using the optional
 * parameter sort_flags, for details
 * see sort.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function array_sort_key (array &$array, $sort_flags = null)
{
    return ksort($array, $sort_flags);
}

/**
 * Sort an array by key in reverse order
 * @link http://php.net/manual/en/function.krsort.php
 * @param array $array <p>
 * The input array.
 * </p>
 * @param int $sort_flags [optional] <p>
 * You may modify the behavior of the sort using the optional parameter
 * sort_flags, for details see
 * sort.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function array_sort_key_reverse (array &$array, $sort_flags = null)
{
    return krsort($array, $sort_flags);
}

/**
 * Sort an array by keys using a user-defined comparison function
 * @link http://php.net/manual/en/function.uksort.php
 * @param array $array <p>
 * The input array.
 * </p>
 * @param callback $cmp_function <p>
 * The callback comparison function.
 * </p>
 * <p>
 * Function cmp_function should accept two
 * parameters which will be filled by pairs of array keys.
 * The comparison function must return an integer less than, equal
 * to, or greater than zero if the first argument is considered to
 * be respectively less than, equal to, or greater than the
 * second.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function array_sort_ukey (array &$array, $cmp_function)
{
    return uksort($array, $cmp_function);
}

/**
 * Sort an array using a "natural order" algorithm
 * @link http://php.net/manual/en/function.natsort.php
 * @param array $array <p>
 * The input array.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function array_sort_natural (array &$array)
{
    return natsort($array);
}

/**
 * Sort an array using a case insensitive "natural order" algorithm
 * @link http://php.net/manual/en/function.natcasesort.php
 * @param array $array <p>
 * The input array.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function array_sort_natural_case (array &$array)
{
    return natcasesort($array);
}

/**
 * Checks if a value exists in an array
 * @link http://php.net/manual/en/function.in-array.php
 * @param mixed $needle <p>
 * The searched value.
 * </p>
 * <p>
 * If needle is a string, the comparison is done
 * in a case-sensitive manner.
 * </p>
 * @param array $haystack <p>
 * The array.
 * </p>
 * @param bool $strict [optional] <p>
 * If the third parameter strict is set to true
 * then the in_array function will also check the
 * types of the
 * needle in the haystack.
 * </p>
 * @return bool true if needle is found in the array,
 * false otherwise.
 * @since 4.0
 * @since 5.0
 */
function array_in ($needle, array $haystack, $strict = false)
{
    return in_array($needle, $haystack, $strict);
}

/**
 * Create an array containing a range of elements
 * @link http://php.net/manual/en/function.range.php
 * @param mixed $start <p>
 * First value of the sequence.
 * </p>
 * @param mixed $end <p>
 * The sequence is ended upon reaching the end value.
 * </p>
 * @param int|float $step [optional] <p>
 * If a step value is given, it will be used as the
 * increment between elements in the sequence. step
 * should be given as a positive number. If not specified,
 * step will default to 1.
 * </p>
 * @return array an array of elements from start to
 * end, inclusive.
 * @since 4.0
 * @since 5.0
 */
function array_range ($start, $end, $step = 1)
{
    return range($start, $end, $step);
}

/**
 * Shuffle an array
 * @link http://php.net/manual/en/function.shuffle.php
 * @param array $array <p>
 * The array.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function array_shuffle (array &$array)
{
    return shuffle($array);
}

/**
 * Gets information about a link
 * @link http://php.net/manual/en/function.linkinfo.php
 * @param string $path <p>
 * Path to the link.
 * </p>
 * @return int linkinfo returns the st_dev field
 * of the Unix C stat structure returned by the lstat
 * system call. Returns 0 or false in case of error.
 * @since 4.0
 * @since 5.0
 */
function link_info ($path)
{
    return linkinfo($path);
}

/**
 * Gives information about a file or symbolic link
 * @link http://php.net/manual/en/function.lstat.php
 * @param string $filename <p>
 * Path to a file or a symbolic link.
 * </p>
 * @return array See the manual page for stat for information on
 * the structure of the array that lstat returns.
 * This function is identical to the stat function
 * except that if the filename parameter is a symbolic
 * link, the status of the symbolic link is returned, not the status of the
 * file pointed to by the symbolic link.
 * @since 4.0
 * @since 5.0
 */
function link_stat ($filename)
{
    return lstat($filename);
}

/**
 * Changes user ownership of symlink
 * @link http://php.net/manual/en/function.lchown.php
 * @param string $filename <p>
 * Path to the file.
 * </p>
 * @param mixed $user <p>
 * User name or number.
 * </p>
 * @return bool true on success or false on failure.
 * @since 5.1.2
 */
function link_chown ($filename, $user)
{
    return lchown($filename, $user);
}

/**
 * Changes group ownership of symlink
 * @link http://php.net/manual/en/function.lchgrp.php
 * @param string $filename <p>
 * Path to the symlink.
 * </p>
 * @param mixed $group <p>
 * The group specified by name or number.
 * </p>
 * @return bool true on success or false on failure.
 * @since 5.1.2
 */
function link_chgrp ($filename, $group)
{
    return lchgrp($filename, $group);
}

/**
 * Returns the target of a symbolic link
 * @link http://php.net/manual/en/function.readlink.php
 * @param string $path <p>
 * The symbolic link path.
 * </p>
 * @return string the contents of the symbolic link path or false on error.
 * @since 4.0
 * @since 5.0
 */
function link_read ($path)
{
    return readlink($path);
}

/**
 * Creates a symbolic link
 * @link http://php.net/manual/en/function.symlink.php
 * @param string $target <p>
 * Target of the link.
 * </p>
 * @param string $link <p>
 * The link name.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function link_symbolic ($target, $link)
{
    return symlink($target, $link);
}

/**
 * Returns filename component of path
 * @link http://php.net/manual/en/function.basename.php
 * @param string $path <p>
 * A path.
 * </p>
 * <p>
 * On Windows, both slash (/) and backslash
 * (\) are used as directory separator character. In
 * other environments, it is the forward slash (/).
 * </p>
 * @param string $suffix [optional] <p>
 * If the filename ends in suffix this will also
 * be cut off.
 * </p>
 * @return string the base name of the given path.
 * @since 4.0
 * @since 5.0
 */
function path_base_name ($path, $suffix = null)
{
    return basename($path, $suffix);
}

/**
 * Returns information about a file path
 * @link http://php.net/manual/en/function.pathinfo.php
 * @param string $path <p>
 * The path being checked.
 * </p>
 * @param int $options [optional] <p>
 * You can specify which elements are returned with optional parameter
 * options. It composes from
 * PATHINFO_DIRNAME,
 * PATHINFO_BASENAME,
 * PATHINFO_EXTENSION and
 * PATHINFO_FILENAME. It
 * defaults to return all elements.
 * </p>
 * @return mixed The following associative array elements are returned:
 * dirname, basename,
 * extension (if any), and filename.
 * </p>
 * <p>
 * If options is used, this function will return a 
 * string if not all elements are requested.
 * @since 4.0.3
 * @since 5.0
 */
function path_info ($path, $options = null)
{
    return pathinfo($path, $options);
}

/**
 * Outputs a file
 * @link http://php.net/manual/en/function.readfile.php
 * @param string $filename <p>
 * The filename being read.
 * </p>
 * @param bool $use_include_path [optional] <p>
 * You can use the optional second parameter and set it to true, if
 * you want to search for the file in the include_path, too.
 * </p>
 * @param resource $context [optional] <p>
 * A context stream resource.
 * </p>
 * @return false|int the number of bytes read from the file. If an error
 * occurs, false is returned and unless the function was called as
 * @readfile, an error message is printed.
 * @since 4.0
 * @since 5.0
 */
function file_read ($filename, $use_include_path = null, $context = null)
{
    return readfile($filename, $use_include_path, $context);
}

/**
 * Closes process file pointer
 * @link http://php.net/manual/en/function.pclose.php
 * @param resource $handle <p>
 * The file pointer must be valid, and must have been returned by a
 * successful call to popen.
 * </p>
 * @return int the termination status of the process that was run. In case of an error then -1 is returned.
 * </p>
 * <p>
 * If PHP has been compiled with <tt>--enable-sigchild</tt>, the return value of this function is undefined.
 * @since 4.0
 * @since 5.0
 */
function pipe_close ($handle)
{
    return pclose($handle);
}

/**
 * Opens process file pointer
 * @link http://php.net/manual/en/function.popen.php
 * @param string $command <p>
 * The command
 * </p>
 * @param string $mode <p>
 * The mode
 * </p>
 * @return bool|resource a file pointer identical to that returned by
 * fopen, except that it is unidirectional (may
 * only be used for reading or writing) and must be closed with
 * pclose. This pointer may be used with
 * fgets, fgetss, and
 * fwrite.
 * </p>
 * <p>
 * If an error occurs, returns false.
 * @since 4.0
 * @since 5.0
 */
function pipe_open ($command, $mode)
{
    return popen($command, $mode);
}

/**
 * Gets last access time of file
 * @link http://php.net/manual/en/function.fileatime.php
 * @param string $filename <p>
 * Path to the file.
 * </p>
 * @return int|bool the time the file was last accessed, or false on failure.
 * The time is returned as a Unix timestamp.
 * @since 4.0
 * @since 5.0
 */
function file_atime ($filename)
{
    return fileatime($filename);
}

/**
 * Gets inode change time of file
 * @link http://php.net/manual/en/function.filectime.php
 * @param string $filename <p>
 * Path to the file.
 * </p>
 * @return int|bool the time the file was last changed, or false on failure.
 * The time is returned as a Unix timestamp.
 * @since 4.0
 * @since 5.0
 */
function file_ctime ($filename)
{
    return filectime($filename);
}

/**
 * Gets file group
 * @link http://php.net/manual/en/function.filegroup.php
 * @param string $filename <p>
 * Path to the file.
 * </p>
 * @return int|bool the group ID of the file, or false in case
 * of an error. The group ID is returned in numerical format, use
 * posix_getgrgid to resolve it to a group name.
 * Upon failure, false is returned.
 * @since 4.0
 * @since 5.0
 */
function file_group ($filename)
{
    return filegroup($filename);
}

/**
 * Gets file inode
 * @link http://php.net/manual/en/function.fileinode.php
 * @param string $filename <p>
 * Path to the file.
 * </p>
 * @return int|bool the inode number of the file, or false on failure.
 * @since 4.0
 * @since 5.0
 */
function file_inode ($filename)
{
    return fileinode($filename);
}

/**
 * Gets file modification time
 * @link http://php.net/manual/en/function.filemtime.php
 * @param string $filename <p>
 * Path to the file.
 * </p>
 * @return int|bool the time the file was last modified, or false on failure.
 * The time is returned as a Unix timestamp, which is
 * suitable for the date function.
 * @since 4.0
 * @since 5.0
 */
function file_mtime ($filename)
{
    return filemtime($filename);
}

/**
 * Gets file owner
 * @link http://php.net/manual/en/function.fileowner.php
 * @param string $filename <p>
 * Path to the file.
 * </p>
 * @return int|bool the user ID of the owner of the file, or false on failure.
 * The user ID is returned in numerical format, use
 * posix_getpwuid to resolve it to a username.
 * @since 4.0
 * @since 5.0
 */
function file_owner ($filename)
{
    return fileowner($filename);
}

/**
 * Gets file permissions
 * @link http://php.net/manual/en/function.fileperms.php
 * @param string $filename <p>
 * Path to the file.
 * </p>
 * @return int|bool the permissions on the file, or false on failure.
 * @since 4.0
 * @since 5.0
 */
function file_perms ($filename)
{
    return fileperms($filename);
}

/**
 * Gets file size
 * @link http://php.net/manual/en/function.filesize.php
 * @param string $filename <p>
 * Path to the file.
 * </p>
 * @return int the size of the file in bytes, or false (and generates an error
 * of level E_WARNING) in case of an error.
 * @since 4.0
 * @since 5.0
 */
function file_size ($filename)
{
    return filesize($filename);
}

/**
 * Gets file type
 * @link http://php.net/manual/en/function.filetype.php
 * @param string $filename <p>
 * Path to the file.
 * </p>
 * @return string the type of the file. Possible values are fifo, char,
 * dir, block, link, file, socket and unknown.
 * </p>
 * <p>
 * Returns false if an error occurs. filetype will also
 * produce an E_NOTICE message if the stat call fails
 * or if the file type is unknown.
 * @since 4.0
 * @since 5.0
 */
function file_type ($filename)
{
    return filetype($filename);
}

/**
 * Match filename against a pattern
 * @link http://php.net/manual/en/function.fnmatch.php
 * @param string $pattern <p>
 * The shell wildcard pattern.
 * </p>
 * @param string $string <p>
 * The tested string. This function is especially useful for filenames,
 * but may also be used on regular strings.
 * </p>
 * <p>
 * The average user may be used to shell patterns or at least in their
 * simplest form to '?' and '*'
 * wildcards so using fnmatch instead of
 * preg_match for
 * frontend search expression input may be way more convenient for
 * non-programming users.
 * </p>
 * @param int $flags [optional] <p>
 * The value of flags can be any combination of 
 * the following flags, joined with the
 * binary OR (|) operator.
 * <table>
 * A list of possible flags for fnmatch
 * <tr valign="top">
 * <td>Flag</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>FNM_NOESCAPE</td>
 * <td>
 * Disable backslash escaping.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>FNM_PATHNAME</td>
 * <td>
 * Slash in string only matches slash in the given pattern.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>FNM_PERIOD</td>
 * <td>
 * Leading period in string must be exactly matched by period in the given pattern.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>FNM_CASEFOLD</td>
 * <td>
 * Caseless match. Part of the GNU extension.
 * </td>
 * </tr>
 * </table>
 * </p>
 * @return bool true if there is a match, false otherwise.
 * @since 4.3.0
 * @since 5.0
 */
function file_name_match ($pattern, $string, $flags = null)
{
    return fnmatch($pattern, $string, $flags);
}

/**
 * Create file with unique file name
 * @link http://php.net/manual/en/function.tempnam.php
 * @param string $dir <p>
 * The directory where the temporary filename will be created.
 * </p>
 * @param string $prefix <p>
 * The prefix of the generated temporary filename.
 * </p>
 * Windows use only the first three characters of prefix.
 * @return bool|string the new temporary filename, or false on
 * failure.
 * @since 4.0
 * @since 5.0
 */
function file_temp_name ($dir, $prefix)
{
    return tempnam($dir, $prefix);
}

/**
 * Copies file
 * @link http://php.net/manual/en/function.copy.php
 * @param string $source <p>
 * Path to the source file.
 * </p>
 * @param string $dest <p>
 * The destination path. If dest is a URL, the
 * copy operation may fail if the wrapper does not support overwriting of
 * existing files.
 * </p>
 * <p>
 * If the destination file already exists, it will be overwritten.
 * </p>
 * @param resource $context [optional] <p>
 * A valid context resource created with 
 * stream_context_create.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function file_copy ($source, $dest, $context = null)
{
    return copy($source, $dest, $context);
}

/**
 * Gives information about a file
 * @link http://php.net/manual/en/function.stat.php
 * @param string $filename <p>
 * Path to the file.
 * </p>
 * @return array <table>
 * stat and fstat result
 * format
 * <tr valign="top">
 * <td>Numeric</td>
 * <td>Associative (since PHP 4.0.6)</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>0</td>
 * <td>dev</td>
 * <td>device number</td>
 * </tr>
 * <tr valign="top">
 * <td>1</td>
 * <td>ino</td>
 * <td>inode number *</td>
 * </tr>
 * <tr valign="top">
 * <td>2</td>
 * <td>mode</td>
 * <td>inode protection mode</td>
 * </tr>
 * <tr valign="top">
 * <td>3</td>
 * <td>nlink</td>
 * <td>number of links</td>
 * </tr>
 * <tr valign="top">
 * <td>4</td>
 * <td>uid</td>
 * <td>userid of owner *</td>
 * </tr>
 * <tr valign="top">
 * <td>5</td>
 * <td>gid</td>
 * <td>groupid of owner *</td>
 * </tr>
 * <tr valign="top">
 * <td>6</td>
 * <td>rdev</td>
 * <td>device type, if inode device</td>
 * </tr>
 * <tr valign="top">
 * <td>7</td>
 * <td>size</td>
 * <td>size in bytes</td>
 * </tr>
 * <tr valign="top">
 * <td>8</td>
 * <td>atime</td>
 * <td>time of last access (Unix timestamp)</td>
 * </tr>
 * <tr valign="top">
 * <td>9</td>
 * <td>mtime</td>
 * <td>time of last modification (Unix timestamp)</td>
 * </tr>
 * <tr valign="top">
 * <td>10</td>
 * <td>ctime</td>
 * <td>time of last inode change (Unix timestamp)</td>
 * </tr>
 * <tr valign="top">
 * <td>11</td>
 * <td>blksize</td>
 * <td>blocksize of filesystem IO **</td>
 * </tr>
 * <tr valign="top">
 * <td>12</td>
 * <td>blocks</td>
 * <td>number of 512-byte blocks allocated **</td>
 * </tr>
 * </table>
 * * On Windows this will always be 0.
 * </p>
 * <p>
 * ** Only valid on systems supporting the st_blksize type - other
 * systems (e.g. Windows) return -1.
 * </p>
 * <p>
 * In case of error, stat returns false.
 * @since 4.0
 * @since 5.0
 */
function file_stat ($filename)
{
    return stat($filename);
}

/**
 * Clears file status cache
 * @link http://php.net/manual/en/function.clearstatcache.php
 * @param bool $clear_realpath_cache [optional] <p>
 * Whenever to clear realpath cache or not.
 * </p>
 * @param string $filename [optional] <p>
 * Clear realpath cache on a specific filename, only used if 
 * clear_realpath_cache is true.
 * </p>
 * @return void 
 * @since 4.0
 * @since 5.0
 */
function file_stat_clear_cache ($clear_realpath_cache = null, $filename = null)
{
    return clearstatcache($clear_realpath_cache, $filename);
}

/**
 * Deletes a file
 * @link http://php.net/manual/en/function.unlink.php
 * @param string $filename <p>
 * Path to the file.
 * </p>
 * @param resource $context [optional] &note.context-support;
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function file_delete ($filename, $context = null)
{
    return unlink($filename, $context);
}

/**
 * Renames a file or directory
 * @link http://php.net/manual/en/function.rename.php
 * @param string $oldname <p>
 * </p>
 * <p>
 * The old name. The wrapper used in oldname
 * must match the wrapper used in
 * newname.
 * </p>
 * @param string $newname <p>
 * The new name.
 * </p>
 * @param resource $context [optional] &note.context-support;
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function file_rename ($oldname, $newname, $context = null)
{
    return rename($oldname, $newname, $context);
}

/**
 * Gets line from file pointer and parse for CSV fields
 * @link http://php.net/manual/en/function.fgetcsv.php
 * @param resource $handle <p>
 * A valid file pointer to a file successfully opened by
 * fopen, popen, or
 * fsockopen.
 * </p>
 * @param int $length [optional] <p>
 * Must be greater than the longest line (in characters) to be found in
 * the CSV file (allowing for trailing line-end characters). It became
 * optional in PHP 5. Omitting this parameter (or setting it to 0 in PHP
 * 5.0.4 and later) the maximum line length is not limited, which is
 * slightly slower.
 * </p>
 * @param string $delimiter [optional] <p>
 * Set the field delimiter (one character only).
 * </p>
 * @param string $enclosure [optional] <p>
 * Set the field enclosure character (one character only).
 * </p>
 * @param string $escape [optional] <p>
 * Set the escape character (one character only). Defaults as a backslash.
 * </p>
 * @return array|null|false an indexed array containing the fields read.
 * </p>
 * <p>
 * A blank line in a CSV file will be returned as an array
 * comprising a single null field, and will not be treated
 * as an error.
 * </p>
 * &note.line-endings;
 * <p>
 * fgetcsv returns &null; if an invalid
 * handle is supplied or false on other errors,
 * including end of file.
 * @since 4.0
 * @since 5.0
 */
function fget_csv ($handle, $length = 0, $delimiter = ',', $enclosure = '"', $escape = '\\')
{
    return fgetcsv($handle, $length, $delimiter, $enclosure, $escape);
}

/**
 * Format line as CSV and write to file pointer
 * @link http://php.net/manual/en/function.fputcsv.php
 * @param resource $handle The file pointer must be valid, and must point to a file successfully opened by fopen() or fsockopen() (and not yet closed by fclose()).
 * @param array $fields <p>
 * An array of values.
 * </p>
 * @param string $delimiter [optional] <p>
 * The optional delimiter parameter sets the field
 * delimiter (one character only).
 * </p>
 * @param string $enclosure [optional] <p>
 * The optional enclosure parameter sets the field
 * enclosure (one character only).
 * </p>
 * @param string $escape_char The optional escape_char parameter sets the escape character (one character only).
 * @return int|bool the length of the written string or false on failure.
 * @since 5.1.0
 */
function fput_csv ($handle, array $fields, $delimiter = ",", $enclosure = '"', $escape_char = "\\")
{
    return fputcsv($handle, $fields, $delimiter, $enclosure, $escape_char);
}

/**
 * Rewind the position of a file pointer
 * @link http://php.net/manual/en/function.rewind.php
 * @param resource $handle <p>
 * The file pointer must be valid, and must point to a file
 * successfully opened by fopen.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function frewind ($handle)
{
    return rewind($handle);
}

/**
 * Creates a temporary file
 * @link http://php.net/manual/en/function.tmpfile.php
 * @return resource|bool a file handle, similar to the one returned by
 * fopen, for the new file or false on failure.
 * @since 4.0
 * @since 5.0
 */
function ftemp ()
{
    return tmpfile();
}

/**
 * Delay execution
 * @link http://php.net/manual/en/function.sleep.php
 * @param int $seconds <p>
 * Halt time in seconds.
 * </p>
 * @return int zero on success, or false on errors. If the call was interrupted
 * by a signal, sleep returns the number of seconds left
 * to sleep.
 * @since 4.0
 * @since 5.0
 */
function time_sleep ($seconds)
{
    return sleep($seconds);
}

/**
 * Delay for a number of seconds and nanoseconds
 * @link http://php.net/manual/en/function.time-nanosleep.php
 * @param int $seconds <p>
 * Must be a positive integer.
 * </p>
 * @param int $nanoseconds <p>
 * Must be a positive integer less than 1 billion.
 * </p>
 * @return bool|array true on success or false on failure.
 * </p>
 * <p>
 * If the delay was interrupted by a signal, an associative array will be
 * returned with the components:
 * seconds - number of seconds remaining in
 * the delay
 * nanoseconds - number of nanoseconds
 * remaining in the delay
 * @since 5.0
 */
function time_nano_sleep ($seconds, $nanoseconds)
{
    return time_nanosleep($seconds, $nanoseconds);
}

/**
 * Delay execution in microseconds
 * @link http://php.net/manual/en/function.usleep.php
 * @param int $micro_seconds <p>
 * Halt time in micro seconds. A micro second is one millionth of a
 * second.
 * </p>
 * @return void 
 * @since 4.0
 * @since 5.0
 */
function time_micro_sleep ($micro_seconds)
{
    return usleep($micro_seconds);
}

/**
 * Generate a unique ID
 * @link http://php.net/manual/en/function.uniqid.php
 * @param string $prefix [optional] <p>
 * Can be useful, for instance, if you generate identifiers
 * simultaneously on several hosts that might happen to generate the
 * identifier at the same microsecond.
 * </p>
 * <p>
 * With an empty prefix, the returned string will
 * be 13 characters long. If more_entropy is
 * true, it will be 23 characters.
 * </p>
 * @param bool $more_entropy [optional] <p>
 * If set to true, uniqid will add additional
 * entropy (using the combined linear congruential generator) at the end
 * of the return value, which should make the results more unique.
 * </p>
 * @return string the unique identifier, as a string.
 * @since 4.0
 * @since 5.0
 */
function time_unique_id ($prefix = "", $more_entropy = false)
{
    return uniqid($prefix, $more_entropy);
}

/**
 * Gets system load average
 * @link http://php.net/manual/en/function.sys-getloadavg.php
 * @return array an array with three samples (last 1, 5 and 15
 * minutes).
 * @since 5.1.3
 */
function sys_get_load_avg ()
{
    return sys_getloadavg();
}

/**
 * Return source with stripped comments and whitespace
 * @link http://php.net/manual/en/function.php-strip-whitespace.php
 * @param string $filename <p>
 * Path to the PHP file.
 * </p>
 * @return string The stripped source code will be returned on success, or an empty string
 * on failure.
 * </p>
 * <p>
 * This function works as described as of PHP 5.0.1. Before this it would
 * only return an empty string. For more information on this bug and its
 * prior behavior, see bug report
 * #29606.
 * @since 5.0
 */
function php_strip_white_space ($filename)
{
    return php_strip_whitespace($filename);
}

/**
 * Decodes URL-encoded string
 * @link http://php.net/manual/en/function.urldecode.php
 * @param string $str <p>
 * The string to be decoded.
 * </p>
 * @return string the decoded string.
 * @since 4.0
 * @since 5.0
 */
function url_decode ($str)
{
    return urldecode($str);
}

/**
 * URL-encodes string
 * @link http://php.net/manual/en/function.urlencode.php
 * @param string $str <p>
 * The string to be encoded.
 * </p>
 * @return string a string in which all non-alphanumeric characters except
 * -_. have been replaced with a percent
 * (%) sign followed by two hex digits and spaces encoded
 * as plus (+) signs. It is encoded the same way that the
 * posted data from a WWW form is encoded, that is the same way as in
 * application/x-www-form-urlencoded media type. This
 * differs from the RFC 1738 encoding (see
 * rawurlencode) in that for historical reasons, spaces
 * are encoded as plus (+) signs.
 * @since 4.0
 * @since 5.0
 */
function url_encode ($str)
{
    return urlencode($str);
}

/**
 * Decode URL-encoded strings
 * @link http://php.net/manual/en/function.rawurldecode.php
 * @param string $str <p>
 * The URL to be decoded.
 * </p>
 * @return string the decoded URL, as a string.
 * @since 4.0
 * @since 5.0
 */
function url_raw_decode ($str)
{
    return rawurldecode($str);
}

/**
 * URL-encode according to RFC 1738
 * @link http://php.net/manual/en/function.rawurlencode.php
 * @param string $str <p>
 * The URL to be encoded.
 * </p>
 * @return string a string in which all non-alphanumeric characters except
 * -_. have been replaced with a percent
 * (%) sign followed by two hex digits. This is the
 * encoding described in RFC 1738 for
 * protecting literal characters from being interpreted as special URL
 * delimiters, and for protecting URLs from being mangled by transmission
 * media with character conversions (like some email systems).
 * @since 4.0
 * @since 5.0
 */
function url_raw_encode ($str)
{
    return rawurlencode($str);
}

/**
 * Parse a URL and return its components
 * @link http://php.net/manual/en/function.parse-url.php
 * @param string $url <p>
 * The URL to parse. Invalid characters are replaced by
 * _.
 * </p>
 * @param int $component [optional] <p>
 * Specify one of PHP_URL_SCHEME,
 * PHP_URL_HOST, PHP_URL_PORT,
 * PHP_URL_USER, PHP_URL_PASS,
 * PHP_URL_PATH, PHP_URL_QUERY
 * or PHP_URL_FRAGMENT to retrieve just a specific
 * URL component as a string.
 * </p>
 * @return mixed On seriously malformed URLs, parse_url() may return FALSE.
 * If the component parameter is omitted, an associative array is returned.
 * At least one element will be present within the array. Potential keys within this array are:
 * scheme - e.g. http
 * host 
 * port
 * user
 * pass
 * path
 * query - after the question mark ?
 * fragment - after the hashmark #
 * </p>
 * <p>
 * If the component parameter is specified a
 * string is returned instead of an array.
 * @since 4.0
 * @since 5.0
 */
function url_parse ($url, $component = -1)
{
    return parse_url($url, $component);
}

/**
 * Extracts all meta tag content attributes from a file and returns an array
 * @link http://php.net/manual/en/function.get-meta-tags.php
 * @param string $filename <p>
 * The path to the HTML file, as a string. This can be a local file or an
 * URL.
 * </p>
 * <p>
 * What get_meta_tags parses
 * ]]>
 * (pay attention to line endings - PHP uses a native function to
 * parse the input, so a Mac file won't work on Unix).
 * </p>
 * @param bool $use_include_path [optional] <p>
 * Setting use_include_path to true will result
 * in PHP trying to open the file along the standard include path as per
 * the include_path directive.
 * This is used for local files, not URLs.
 * </p>
 * @return array an array with all the parsed meta tags.
 * </p>
 * <p>
 * The value of the name property becomes the key, the value of the content
 * property becomes the value of the returned array, so you can easily use
 * standard array functions to traverse it or access single values. 
 * Special characters in the value of the name property are substituted with
 * '_', the rest is converted to lower case. If two meta tags have the same
 * name, only the last one is returned.
 * @since 4.0
 * @since 5.0
 */
function url_meta_tags ($filename, $use_include_path = null)
{
    return get_meta_tags($filename, $use_include_path);
}

/**
 * Fetches all the headers sent by the server in response to a HTTP request
 * @link http://php.net/manual/en/function.get-headers.php
 * @param string $url <p>
 * The target URL.
 * </p>
 * @param int $format [optional] <p>
 * If the optional format parameter is set to non-zero,
 * get_headers parses the response and sets the
 * array's keys.
 * </p>
 * @param resource $context [optional]
 * @return array an indexed or associative array with the headers, or false on
 * failure.
 * @since 5.0
 */
function url_headers ($url, $format = null, $context)
{
    return get_headers($url, $format, $context);
}

/**
 * Prints out the credits for PHP
 * @link http://php.net/manual/en/function.phpcredits.php
 * @param int $flag [optional] <p>
 * To generate a custom credits page, you may want to use the
 * flag parameter.
 * </p>
 * <p>
 * <table>
 * Pre-defined phpcredits flags
 * <tr valign="top">
 * <td>name</td>
 * <td>description</td>
 * </tr>
 * <tr valign="top">
 * <td>CREDITS_ALL</td>
 * <td>
 * All the credits, equivalent to using: CREDITS_DOCS +
 * CREDITS_GENERAL + CREDITS_GROUP +
 * CREDITS_MODULES + CREDITS_FULLPAGE.
 * It generates a complete stand-alone HTML page with the appropriate tags.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>CREDITS_DOCS</td>
 * <td>The credits for the documentation team</td>
 * </tr>
 * <tr valign="top">
 * <td>CREDITS_FULLPAGE</td>
 * <td>
 * Usually used in combination with the other flags. Indicates
 * that a complete stand-alone HTML page needs to be
 * printed including the information indicated by the other
 * flags.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>CREDITS_GENERAL</td>
 * <td>
 * General credits: Language design and concept, PHP 4.0
 * authors and SAPI module.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>CREDITS_GROUP</td>
 * <td>A list of the core developers</td>
 * </tr>
 * <tr valign="top">
 * <td>CREDITS_MODULES</td>
 * <td>
 * A list of the extension modules for PHP, and their authors
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>CREDITS_SAPI</td>
 * <td>
 * A list of the server API modules for PHP, and their authors
 * </td>
 * </tr>
 * </table>
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function php_credits ($flag = null)
{
    return phpcredits($flag);
}

/**
 * Outputs lots of PHP information
 * @link http://php.net/manual/en/function.phpinfo.php
 * @param int $what [optional] <p>
 * The output may be customized by passing one or more of the
 * following constants bitwise values summed
 * together in the optional what parameter.
 * One can also combine the respective constants or bitwise values
 * together with the or operator.
 * </p>
 * <p>
 * <table>
 * phpinfo options
 * <tr valign="top">
 * <td>Name (constant)</td>
 * <td>Value</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_GENERAL</td>
 * <td>1</td>
 * <td>
 * The configuration line, &php.ini; location, build date, Web
 * Server, System and more.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_CREDITS</td>
 * <td>2</td>
 * <td>
 * PHP Credits. See also phpcredits.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_CONFIGURATION</td>
 * <td>4</td>
 * <td>
 * Current Local and Master values for PHP directives. See
 * also ini_get.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_MODULES</td>
 * <td>8</td>
 * <td>
 * Loaded modules and their respective settings. See also
 * get_loaded_extensions.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_ENVIRONMENT</td>
 * <td>16</td>
 * <td>
 * Environment Variable information that's also available in
 * $_ENV.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_VARIABLES</td>
 * <td>32</td>
 * <td>
 * Shows all 
 * predefined variables from EGPCS (Environment, GET,
 * POST, Cookie, Server).
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_LICENSE</td>
 * <td>64</td>
 * <td>
 * PHP License information. See also the license FAQ.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_ALL</td>
 * <td>-1</td>
 * <td>
 * Shows all of the above.
 * </td>
 * </tr>
 * </table>
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function php_info ($what = null)
{
    return phpinfo($what);
}

/**
 * Gets the current PHP version
 * @link http://php.net/manual/en/function.phpversion.php
 * @param string $extension [optional] <p>
 * An optional extension name.
 * </p>
 * @return string If the optional extension parameter is
 * specified, phpversion returns the version of that
 * extension, or false if there is no version information associated or
 * the extension isn't enabled.
 * @since 4.0
 * @since 5.0
 */
function php_version ($extension = null)
{
    return phpversion($extension);
}

/**
 * Gets options from the command line argument list
 * @link http://php.net/manual/en/function.getopt.php
 * @param string $options Each character in this string will be used as option characters and
 * matched against options passed to the script starting with a single
 * hyphen (-).
 * For example, an option string "x" recognizes an
 * option -x.
 * Only a-z, A-Z and 0-9 are allowed.
 * @param array $longopts [optional] An array of options. Each element in this array will be used as option
 * strings and matched against options passed to the script starting with
 * two hyphens (--).
 * For example, an longopts element "opt" recognizes an
 * option --opt.
 * Prior to PHP5.3.0 this parameter was only available on few systems
 * @param int $optind If the optind parameter is present, then the index where argument parsing stopped will be written to this variable.
 * @return array This function will return an array of option / argument pairs or false on
 * failure.
 * @since 4.3.0
 * @since 5.0
 */
function get_opt ($options, array $longopts = null, &$optind = null)
{
    return getopt($options, $longopts, $optind);
}

/**
 * Gets the value of an environment variable
 * @link http://php.net/manual/en/function.getenv.php
 * @param string $varname [optional] <p>
 * The variable name.
 * </p>
 * @param bool $local_only [optional] <p>
 * Set to true to only return local environment variables (set by the operating system or putenv).
 * </p>
 * @return string|array|false the value of the environment variable
 * varname or an associative array with all environment variables if no variable name
 * is provided, or false on an error.
 * @since 4.0
 * @since 5.5.38 The local_only parameter has been added.
 * @since 5.6.24 The local_only parameter has been added.
 * @since 7.0.9 The local_only parameter has been added.
 * @since 7.1 The varname parameter was made optional.
 */
function get_env ($varname = null, $local_only = false)
{
    return getenv($varname, $local_only);
}

/**
 * Sets the value of an environment variable
 * @link http://php.net/manual/en/function.putenv.php
 * @param string $setting <p>
 * The setting, like "FOO=BAR"
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function put_env ($setting)
{
    return putenv($setting);
}

/**
 * Gets time of last page modification
 * @link http://php.net/manual/en/function.getlastmod.php
 * @return int the time of the last modification of the current
 * page. The value returned is a Unix timestamp, suitable for
 * feeding to date. Returns false on error.
 * @since 4.0
 * @since 5.0
 */
function get_last_mod ()
{
    return getlastmod();
}

/**
 * Get PHP script owner's GID
 * @link http://php.net/manual/en/function.getmygid.php
 * @return int the group ID of the current script, or false on error.
 * @since 4.1.0
 * @since 5.0
 */
function get_my_gid ()
{
    return getmygid();
}

/**
 * Gets the inode of the current script
 * @link http://php.net/manual/en/function.getmyinode.php
 * @return int the current script's inode as an integer, or false on error.
 * @since 4.0
 * @since 5.0
 */
function get_my_inode ()
{
    return getmyinode();
}

/**
 * Gets PHP's process ID
 * @link http://php.net/manual/en/function.getmypid.php
 * @return int the current PHP process ID, or false on error.
 * @since 4.0
 * @since 5.0
 */
function get_my_pid ()
{
    return getmypid();
}

/**
 * Gets PHP script owner's UID
 * @link http://php.net/manual/en/function.getmyuid.php
 * @return int the user ID of the current script, or false on error.
 * @since 4.0
 * @since 5.0
 */
function get_my_uid ()
{
    return getmyuid();
}

/**
 * Gets the current resource usages
 * @link http://php.net/manual/en/function.getrusage.php
 * @param int $who [optional] <p>
 * If who is 1, getrusage will be called with
 * RUSAGE_CHILDREN.
 * </p>
 * @return array an associative array containing the data returned from the system
 * call. All entries are accessible by using their documented field names.
 * @since 4.0
 * @since 5.0
 */
function get_rusage ($who = null)
{
    return getrusage($who);
}

/**
 * (PHP 4.2.0, PHP 5)<br/>
 * Alias of floatval()
 * Get float value of a variable
 * &Alias; <function>floatval</function>
 * @link http://php.net/manual/en/function.doubleval.php
 * @param mixed $var May be any scalar type. should not be used on objects, as doing so will emit an E_NOTICE level error and return 1.
 * @return float value of the given variable. Empty arrays return 0, non-empty arrays return 1.
 */
function double_val ($var)
{
    return doubleval($var);
}

/**
 * Get float value of a variable
 * @link http://php.net/manual/en/function.floatval.php
 * @param mixed $var May be any scalar type. should not be used on objects, as doing so will emit an E_NOTICE level error and return 1.
 * @return float value of the given variable. Empty arrays return 0, non-empty arrays return 1.
 * @since 4.2.0
 * @since 5.0
 */
function float_val ($var)
{
    return floatval($var);
}

/**
 * Get the integer value of a variable
 * @link http://php.net/manual/en/function.intval.php
 * @param mixed $var <p>
 * The scalar value being converted to an integer
 * </p>
 * @param int $base [optional] <p>
 * The base for the conversion
 * </p>
 * @return int The integer value of var on success, or 0 on
 * failure. Empty arrays and objects return 0, non-empty arrays and
 * objects return 1.
 * </p>
 * <p>
 * The maximum value depends on the system. 32 bit systems have a 
 * maximum signed integer range of -2147483648 to 2147483647. So for example 
 * on such a system, intval('1000000000000') will return 
 * 2147483647. The maximum signed integer value for 64 bit systems is 
 * 9223372036854775807.
 * </p>
 * <p>
 * Strings will most likely return 0 although this depends on the 
 * leftmost characters of the string. The common rules of 
 * integer casting 
 * apply.
 * @since 4.0
 * @since 5.0
 */
function int_val ($var, $base = null)
{
    return intval($var, $base);
}

/**
 * Get string value of a variable
 * @link http://php.net/manual/en/function.strval.php
 * @param mixed $var <p>
 * The variable that is being converted to a string.
 * </p>
 * <p>
 * $var may be any scalar type or an object that implements the __toString() method. 
 * You cannot use strval() on arrays or objects that do not implement the __toString() method.
 * </p>
 * @return string The string value of var.
 * @since 4.0
 * @since 5.0
 */
function str_val ($var)
{
    return strval($var);
}

/**
 * Get the type of a variable
 * @link http://php.net/manual/en/function.gettype.php
 * @param mixed $var <p>
 * The variable being type checked.
 * </p>
 * @return string Possibles values for the returned string are:
 * "boolean"
 * "integer"
 * "double" (for historical reasons "double" is
 * returned in case of a float, and not simply
 * "float")
 * "string"
 * "array"
 * "object"
 * "resource"
 * "NULL"
 * "unknown type"
 * @since 4.0
 * @since 5.0
 */
function type_get ($var)
{
    return gettype($var);
}

/**
 * Set the type of a variable
 * @link http://php.net/manual/en/function.settype.php
 * @param mixed $var <p>
 * The variable being converted.
 * </p>
 * @param string $type <p>
 * Possibles values of <b>type</b> are:
 * </p><ul>
 * <li>
 * "boolean" (or, since PHP 4.2.0, "bool")
 * </li>
 * <li>
 * "integer" (or, since PHP 4.2.0, "int")
 * </li>
 * <li>
 * "float" (only possible since PHP 4.2.0, for older versions use the
 * deprecated variant "double")
 * </li>
 * <li>
 * "string"
 * </li>
 * <li>
 * "array"
 * </li>
 * <li>
 * "object"
 * </li>
 * <li>
 * "null" (since PHP 4.2.0)
 * </li>
 * </ul>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function type_set (&$var, $type)
{
    return settype($var, $type);
}

/**
 * Returns the resource type
 * @link http://php.net/manual/en/function.get-resource-type.php
 * @param resource $handle <p>
 * The evaluated resource handle.
 * </p>
 * @return string If the given <i>handle</i> is a resource, this function
 * will return a string representing its type. If the type is not identified
 * by this function, the return value will be the string 
 * Unknown.
 * </p>
 * <p>
 * This function will return false and generate an error if 
 * <i>handle</i> is not a resource.
 * @since 4.0.2
 * @since 5.0
 */
function type_resource ($handle)
{
    return get_resource_type($handle);
}

/**
 * Returns an array of all defined variables
 * @link http://php.net/manual/en/function.get-defined-vars.php
 * @return array A multidimensional array with all the variables.
 * @since 4.0.4
 * @since 5.0
 */
function php_defined_vars ()
{
    return get_defined_vars();
}

/**
 * the "Late Static Binding" class name
 * @link http://php.net/manual/en/function.get-called-class.php
 * @return string the class name. Returns false if called from outside a class.
 * @since 5.3.0
 */
function class_called ()
{
    return get_called_class();
}

/**
 * Gets the class methods' names
 * @link http://php.net/manual/en/function.get-class-methods.php
 * @param mixed $class_name <p>
 * The class name or an object instance
 * </p>
 * @return array an array of method names defined for the class specified by
 * <i>class_name</i>. In case of an error, it returns null.
 * @since 4.0
 * @since 5.0
 */
function class_methods ($class_name)
{
    return get_class_methods($class_name);
}

/**
 * Get the default properties of the class
 * @link http://php.net/manual/en/function.get-class-vars.php
 * @param string $class_name <p>
 * The class name
 * </p>
 * @return array an associative array of declared properties visible from the
 * current scope, with their default value.
 * The resulting array elements are in the form of 
 * varname => value.
 * @since 4.0
 * @since 5.0
 */
function class_vars ($class_name)
{
    return get_class_vars($class_name);
}

/**
 * Returns the name of the class of an object
 * @link http://php.net/manual/en/function.get-class.php
 * @param object $object [optional] <p>
 * The tested object. This parameter may be omitted when inside a class.
 * </p>
 * @return string the name of the class of which <i>object</i> is an
 * instance. Returns false if <i>object</i> is not an
 * object.
 * </p>
 * <p>
 * If <i>object</i> is omitted when inside a class, the
 * name of that class is returned.
 * @since 4.0
 * @since 5.0
 */
function class_get ($object = null)
{
    return get_class($object);
}

/**
 * Retrieves the parent class name for object or class
 * @link http://php.net/manual/en/function.get-parent-class.php
 * @param mixed $object [optional] <p>
 * The tested object or class name
 * </p>
 * @return string the name of the parent class of the class of which
 * <i>object</i> is an instance or the name.
 * </p>
 * <p>
 * If the object does not have a parent false will be returned.
 * </p>
 * <p>
 * If called without parameter outside object, this function returns false.
 * @since 4.0
 * @since 5.0
 */
function class_parent ($object = null)
{
    return get_parent_class($object);
}

/**
 * Gets the properties of the given object
 * @link http://php.net/manual/en/function.get-object-vars.php
 * @param object $object <p>
 * An object instance.
 * </p>
 * @return array an associative array of defined object accessible non-static properties 
 * for the specified <i>object</i> in scope. If a property have
 * not been assigned a value, it will be returned with a null value.
 * @since 4.0
 * @since 5.0
 */
function class_object_vars ($object)
{
    return get_object_vars($object);
}

/**
 * Returns an array with the name of the defined classes
 * @link http://php.net/manual/en/function.get-declared-classes.php
 * @return array an array of the names of the declared classes in the current
 * script.
 * </p>
 * <p>
 * Note that depending on what extensions you have compiled or
 * loaded into PHP, additional classes could be present. This means that
 * you will not be able to define your own classes using these
 * names. There is a list of predefined classes in the Predefined Classes section of
 * the appendices.
 * @since 4.0
 * @since 5.0
 */
function class_declared ()
{
    return get_declared_classes();
}

/**
 * Returns an array of all declared interfaces
 * @link http://php.net/manual/en/function.get-declared-interfaces.php
 * @return array an array of the names of the declared interfaces in the current
 * script.
 * @since 5.0
 */
function interface_declared ()
{
    return get_declared_interfaces();
}

/**
 * Find out whether an extension is loaded
 * @link http://php.net/manual/en/function.extension-loaded.php
 * @param string $name <p>
 * The extension name.
 * </p>
 * <p>
 * You can see the names of various extensions by using
 * <b>phpinfo</b> or if you're using the
 * CGI or CLI version of
 * PHP you can use the -m switch to
 * list all available extensions:
 * <pre>
 * $ php -m
 * [PHP Modules]
 * xml
 * tokenizer
 * standard
 * sockets
 * session
 * posix
 * pcre
 * overload
 * mysql
 * mbstring
 * ctype
 * [Zend Modules]
 * </pre>
 * </p>
 * @return bool true if the extension identified by <i>name</i>
 * is loaded, false otherwise.
 * @since 4.0
 * @since 5.0
 */
function php_extension_loaded ($name)
{
    return extension_loaded($name);
}

/**
 * Returns an array with the names of all modules compiled and loaded
 * @link http://php.net/manual/en/function.get-loaded-extensions.php
 * @param bool $zend_extensions [optional] <p>
 * Only return Zend extensions, if not then regular extensions, like
 * mysqli are listed. Defaults to false (return regular extensions).
 * </p>
 * @return array an indexed array of all the modules names.
 * @since 4.0
 * @since 5.0
 */
function php_extension_loaded_all ($zend_extensions = false)
{
    return get_loaded_extensions($zend_extensions);
}

/**
 * Returns an array with the names of the functions of a module
 * @link http://php.net/manual/en/function.get-extension-funcs.php
 * @param string $module_name <p>
 * The module name.
 * </p>
 * <p>
 * This parameter must be in lowercase.
 * </p>
 * @return array an array with all the functions, or false if 
 * <i>module_name</i> is not a valid extension.
 * @since 4.0
 * @since 5.0
 */
function php_extension_functions ($module_name)
{
    return get_extension_funcs($module_name);
}

/**
 * @deprecated 5.3.0 since 5.3.0
 * Loads a PHP extension at runtime
 * @link http://php.net/manual/en/function.dl.php
 * @param string $library <p>
 * This parameter is only the filename of the
 * extension to load which also depends on your platform. For example,
 * the sockets extension (if compiled
 * as a shared module, not the default!) would be called
 * sockets.so on Unix platforms whereas it is called
 * php_sockets.dll on the Windows platform.
 * </p>
 * <p>
 * The directory where the extension is loaded from depends on your
 * platform:
 * </p>
 * <p>
 * Windows - If not explicitly set in the <i>php.ini</i>, the extension is
 * loaded from C:\php4\extensions\ (PHP 4) or
 * C:\php5\ (PHP 5) by default.
 * </p>
 * <p>
 * Unix - If not explicitly set in the <i>php.ini</i>, the default extension
 * directory depends on
 * whether PHP has been built with --enable-debug
 * or not
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure. If the functionality of loading modules is not available
 * or has been disabled (either by setting
 * enable_dl off or by enabling safe mode
 * in <i>php.ini</i>) an <b>E_ERROR</b> is emitted
 * and execution is stopped. If <b>dl</b> fails because the
 * specified library couldn't be loaded, in addition to <b>FALSE</b> an
 * <b>E_WARNING</b> message is emitted.
 * @since 4.0
 * @since 5.0
 */
function php_dl ($library)
{
    return dl($library);
}

/**
 * Gets the value of a PHP configuration option
 * @link http://php.net/manual/en/function.get-cfg-var.php
 * @param string $option <p>
 * The configuration option name.
 * </p>
 * @return string the current value of the PHP configuration variable specified by
 * option, or false if an error occurs.
 * @since 4.0
 * @since 5.0
 */
function php_cfg_var ($option)
{
    return get_cfg_var($option);
}

/**
 * Gets the name of the owner of the current PHP script
 * @link http://php.net/manual/en/function.get-current-user.php
 * @return string the username as a string.
 * @since 4.0
 * @since 5.0
 */
function php_current_user ()
{
    return get_current_user();
}

/**
 * Returns an associative array with the names of all the constants and their values
 * @link http://php.net/manual/en/function.get-defined-constants.php
 * @param bool $categorize [optional] <p>
 * Causing this function to return a multi-dimensional
 * array with categories in the keys of the first dimension and constants
 * and their values in the second dimension.
 * <code>
 * define("MY_CONSTANT", 1);
 * print_r(get_defined_constants(true));
 * </code>
 * The above example will output something similar to:
 * <pre>
 * Array
 * (
 * [Core] => Array
 * (
 * [E_ERROR] => 1
 * [E_WARNING] => 2
 * [E_PARSE] => 4
 * [E_NOTICE] => 8
 * [E_CORE_ERROR] => 16
 * [E_CORE_WARNING] => 32
 * [E_COMPILE_ERROR] => 64
 * [E_COMPILE_WARNING] => 128
 * [E_USER_ERROR] => 256
 * [E_USER_WARNING] => 512
 * [E_USER_NOTICE] => 1024
 * [E_ALL] => 2047
 * [TRUE] => 1
 * )
 * [pcre] => Array
 * (
 * [PREG_PATTERN_ORDER] => 1
 * [PREG_SET_ORDER] => 2
 * [PREG_OFFSET_CAPTURE] => 256
 * [PREG_SPLIT_NO_EMPTY] => 1
 * [PREG_SPLIT_DELIM_CAPTURE] => 2
 * [PREG_SPLIT_OFFSET_CAPTURE] => 4
 * [PREG_GREP_INVERT] => 1
 * )
 * [user] => Array
 * (
 * [MY_CONSTANT] => 1
 * )
 * )
 * </pre>
 * </p>
 * @return array 
 * @since 4.1.0
 * @since 5.0
 */
function php_defined_constants ($categorize = false)
{
    return get_defined_constants($categorize);
}

/**
 * Gets the current include_path configuration option
 * @link http://php.net/manual/en/function.get-include-path.php
 * @return string the path, as a string.
 * @since 4.3.0
 * @since 5.0
 */
function php_include_path_get ()
{
    return get_include_path();
}

/**
 * Sets the include_path configuration option
 * @link http://php.net/manual/en/function.set-include-path.php
 * @param string $new_include_path <p>
 * The new value for the include_path
 * </p>
 * @return string|bool the old include_path on
 * success or false on failure.
 * @since 4.3.0
 * @since 5.0
 */
function php_include_path_set ($new_include_path)
{
    return set_include_path($new_include_path);
}

/**
 * Restores the value of the include_path configuration option
 * @link http://php.net/manual/en/function.restore-include-path.php
 * @return void 
 * @since 4.3.0
 * @since 5.0
 */
function php_include_path_restore ()
{
    return restore_include_path();
}

/**
 * Returns an array with the names of included or required files
 * @link http://php.net/manual/en/function.get-included-files.php
 * @return string[] an array of the names of all files.
 * </p>
 * <p>
 * The script originally called is considered an "included file," so it will
 * be listed together with the files referenced by 
 * <b>include</b> and family.
 * </p>
 * <p>
 * Files that are included or required multiple times only show up once in
 * the returned array.
 * @since 4.0
 * @since 5.0
 */
function php_included_files ()
{
    return get_included_files();
}

/**
 * Alias of <b>get_included_files</b>
 * @link http://php.net/manual/en/function.get-required-files.php
 * @return string[]
 * @since 4.0
 * @since 5.0
 */
function php_required_files ()
{
    return get_required_files();
}

/**
 * Limits the maximum execution time
 * @link http://php.net/manual/en/function.set-time-limit.php
 * @param int $seconds <p>
 * The maximum execution time, in seconds. If set to zero, no time limit
 * is imposed.
 * </p>
 * @return bool Returns TRUE on success, or FALSE on failure. 
 * @since 4.0
 * @since 5.0
 */
function php_time_limit ($seconds)
{
    return set_time_limit($seconds);
}

